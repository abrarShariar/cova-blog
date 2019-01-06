---
title: 'Deep Dive: Covalent Technology Overview'
published: true
visible: true
---

[Covalent](http://covalent.ai/) offers a new protocol in the decentralized [web 3.0](https://medium.com/@matteozago/why-the-web-3-0-matters-and-you-should-know-about-it-a5851d63c949) protocol suite. We are building it leveraging recent advancements in bytecode runtime monitoring, verifiable secret sharing, trusted execution environment (TEE), and game theory based market incentives that achieve a [Pareto optimal](https://en.wikipedia.org/wiki/Pareto_efficiency) state for the network.

Covalent protocol (COVA) is implemented with 7 layers. In this article, we will provide a brief explanation for each of these 7 layers:

1. Data Owner: dApp and data storage

1. Data catalog blockchain

1. A pool of routing nodes and compute nodes

1. Threshold encrypted secret storage on routing nodes

1. Smart Policy Enforcer: Centrifuge and CovaVM running on TEE nodes

1. Market Economy: Payments and incentives

1. Data User Interface

## **Layer 1: Data Owner: dApp and Data Storage**

While a COVA user can easily build their own dApp, for the testnet we built an [electronjs](https://electronjs.org/) based multi-platform decentralized application (dApp). This enables the data owners to process, encode, and encrypt the data offline in the security of their own personal computers. During the process stage, a sensitive dataset is scaled with a vector ***v***. The reason for this is to provide added security in the highly improbable case that a TEE node is compromised. Then the data is encoded into[ Covalent Smart Data](https://github.com/covalent-hq/wiki/wiki) format with data owner specified permission policies (e.g. cannot read the data before next Sunday) and then encrypted with nacl crypto library.

Upon finishing the processing, encoding, and encryption steps, this dApp breaks the encryption key ***K*** and other sensitive secrets, such as vector ***v***, into ***N ***(in our design, ***N*** = 100) pieces:

![](https://cdn-images-1.medium.com/max/2000/0*KKaDCK9-SwCSjJyN)

Here we use a [threshold encryption](https://en.wikipedia.org/wiki/Threshold_cryptosystem) algorithm inspired by a variant of [Shamir’s secret sharing scheme](https://en.wikipedia.org/wiki/Shamir%27s_Secret_Sharing) to generate these pieces of secrets. Then the dApp logs the metadata to our data catalog blockchain (layer 2) and sends 100 secret parts to 100 routing nodes through encrypted channels. Data owner can also create a smart contract with data user through this interface (or in a later stage Data user can find the dataset from the catalog and create a smart contract with data owner).

In future articles, we will address the various details of the aforementioned scheme including multi-party secret sharing scheme, structure-preserving scaling with vector ***v*** and so on.

For our testnet data storage, we are not providing any native data storage solution as there are many existing data storage providers ([ipfs](https://ipfs.io/), s3, Dropbox and so on). Instead, the data owner can upload the encrypted data to any storage solution of their choice and link the dataset in our dApp interface. This is secure as the only way to retrieve the actual dataset would require an adversary to have access to both the key ***K*** and the vector ***v***, which are secured via a threshold encryption scheme. As we will explain, in layer 4, without a consensus of the majority of all routing nodes, an adversary would not be able to retrieve the key even if they can compromise a large number of routing nodes.

## **Layer 2: Data Catalog Blockchain**

Data catalog blockchain is the decentralized ledger that holds the metadata of the datasets. Approved parties (generally, data owner or TEE) can update the ledger metadata; however, cannot delete the entry. We used tendermind and bigchaindb to implement this ledger in our testnet. Data owner can change the metadata (or the format) as per the spec of the data user platform. An example use case is a decentralized marketplace for medical datasets. As the metadata field is fully customizable, a marketplace dApp builder can design the required specs for the data owner to follow.

![](https://cdn-images-1.medium.com/max/3526/1*muCF1q3oZQR1CmtzdkmhNg.png)

## **Layer 3: A Pool of Routing Nodes and Compute Nodes**

Our TEE nodes are divided into two kinds:

1. **Routing nodes: **100 nodes per pool, highly available, higher security deposit with a higher reward. Mostly used for routing, verifying and transferring computation state if a compute node becomes unavailable.

1. **Compute nodes:** used primarily for computing with a small penalty for quitting mid computation. Can either be a TEE node or TEE controlled cloud [compute nodes](https://github.com/covalent-hq/wiki/wiki/Covalent-Secure-Server-(CS2)) (CS2).

The reason we have several pools of 100 routing nodes is to guarantee that we have high availability. As we will discuss in Layer 4, we need a majority consensus and availability to retrieve encryption key and secrets, we want to incentivize nodes to be highly available while keeping the number of redundant computation at minimal.

We have various incentives and penalties in place to minimize malicious behaviors and maximize network availability. For example, routing nodes can collectively vote to demote a routing node to a compute node if they don’t meet our availability criterion (99%+ uptime). Some other measures are discussed in layer 6.

On a final note, both routing nodes and computes nodes are TEE nodes running [Intel SGX](https://software.intel.com/en-us/sgx) technology, with the only difference being routing nodes are community selected based on their availability and higher collateral deposit. Therefore the rest of the mechanism such as multi-party secret sharing, scaling, or incentive structures are put in place to deter the node hosts from compromising a TEE node in an unlikely case that some zero-day attack becomes evident.

## **Layer 4: Threshold Encrypted Secret Key Storage on Routing Nodes**

Instead of blindly trusting a TEE routing node completely with sensitive secrets (such as data encryption key), we use a verifiable multi-party secret sharing scheme. We use a variant of Shamir’s secret sharing scheme which can generate the secret when we have a majority of honest routing nodes. Moreover, it can also [detect](https://zapdf.com/design-of-reliable-and-secure-devices-realizing-shamirx0027s.html) if a routing node is dishonest so that we can potentially ban the routing node. The mathematical idea behind this scheme is as follows:

1. The data owner generates a random polynomial with degree ***100m***, where ***m*** is the minimum fraction of honest routing nodes and the constant polynomial term is the secret (encryption key)

1. Then data owner evaluates the polynomial at 100 different points and sends those secret shares to the routing nodes

1. Now the routing nodes cannot recreate the key unless at least ***m*** of them gives their secret share. Moreover, in the case where at least ***m*** of them are honest, if any other node is dishonest we can detect the malicious user.

In our design, secret sharing is used for sharing both the encryption key and the scaling vector ***v***.

![](https://cdn-images-1.medium.com/max/3520/0*FynOYyGoS7rhzbKe.png)

## **Layer 5: Smart Policy Enforcers: Centrifuge and CovaVM Running on TEE Nodes**

This part is beyond the scope of the overview article. As a summary, given we need to run untrusted code from data user, we need to create a sandbox, [CovaVM](https://github.com/covalent-hq/wiki/wiki/Centrifuge-and-CovaVM) and enable a runtime monitoring system to make sure that the code is following [data usage policies](https://github.com/covalent-hq/wiki/wiki/Smart-Policy) set by the data owner. As a primitive step, we have already implemented and open-sourced [covalent secure models](https://github.com/covalent-hq/covalent-secure-models) which ensures that the data user can only run one of the 28 approved machine learning models available in python [sklearn](http://scikit-learn.org/) or [tensorflow](https://www.tensorflow.org/) libraries.

## **Layer 6: Market Economy: Payments and Incentives**

Market Economy is the abstract layer that helps us achieve our goal of creating a self-sustaining, decentralized network with minimal intervention from Covalent Foundation. To achieve this we need carefully crafted payments and incentives. We need payments for various steps, including computation reward for TEE computes nodes, routing reward for TEE routing nodes, and reward for data owners. In our testnet, Cova token is powered by Ethereum smart contract to maximize adaptation and ease of development.

While we have TEEs, which in theory are completely secure, in the advent of recent security vulnerabilities and attack vectors, such as [spectre](https://en.wikipedia.org/wiki/Spectre_(security_vulnerability)), [meltdown](https://en.wikipedia.org/wiki/Meltdown_(security_vulnerability)), and [foreshadowing](https://www.wired.com/story/foreshadow-intel-secure-enclave-vulnerability/), we have moved the retrieval of our most sensitive information to routing node consensus where our basic assumption is that the majority of the nodes are honest. Moreover, if any node is dishonest we can instantly detect that using the information found in a majority consensus. In such cases, the routing nodes would completely forfeit their large deposits and the particular CPU (identified by a unique cpuid) and the routing node owner would be banned from the network.

In the case of compute nodes, while it is very hard to compute the whole output without recomputing the whole computation several times, we have a verification stage that happens in both routing node and data user. For the sake of simplicity if we assume that the independent probability of an actor being malicious (by compromising TEE enclave) is ***ε***, then for ***k*** party verification, the probability of all of them being malicious is ***εᵏ**,* which is rather small because ***ε*** is small.

We would like to note that the recent sophisticated attacks that compromised the TEE enclaves, many security experts believe that the number of people able to run zero-day attack using those principles are very small. While we are always cautious about mitigating security issues as fast as possible, with various randomized verifiers in-place, the incentives for risking deposit (or legal actions) to get some scaled dataset or performing some incorrect computations to get small a computation reward is rather small.

## **Layer 7: Data User Interface**

Data usage interface is a simple interface which allows a data-user to run some custom code (allowed by the policy) upon initiating a smart contract with the data owner. The implementation detail of this part will be left to the protocol user or dApp builder. Currently, data users can write simple python code that will be verified by centrifuge and CovaVM.

After the code finishes running in the TEE, the TEE returns scaled computed values to the data user and the routing nodes provide up to 100 secret bits of vector v, which data user can combine using Shamir’s secret sharing scheme to generate vector ***v***. For most data analysis and aggregate computation purposes, data users can use the derived scaling vector to find an equivalent model trained on unscaled data. For example: if we are running any supervised machine learning model using the vector ***v*** to scale the training data is equivalent to scaling the test data and prediction with ***v*** before using the offline model.

## **Final Note**

While these 7 layers might look daunting to deal with, similar to any protocol such as HTTP or FTP, end users would only need to familiarize themselves with layer 1 or 7 (and potentially 2) of this [fat protocol](http://www.usv.com/blog/fat-protocols). In the upcoming, deep dive posts, we will explain individual layers along with various incentives set at each layer. On that note, while we have TEE nodes which we can trust in most cases, at Covalent we are relentlessly working to design market incentive structures and error correcting multi-party secret sharing and computing schemes to incentivize various parties to behave honestly.

In coming weeks, we will write more articles explaining each of the layers and their incentive structures in separate posts. Stay tuned.

* Follow COVA’s Official Telegram Group: [https://t.me/covalentofficial](https://t.me/covalentofficial)

* Follow COVA’s twitter: [https://twitter.com/@covatoken](https://twitter.com/@covatoken)

* Follow COVA’s Medium: [https://medium.com/@covatoken](https://medium.com/@covatoken)

* Learn more about COVA on our website: [https://covalent.ai](https://covalent.ai)

* Read COVA’s white paper: [https://github.com/covalent-hq/wiki/wiki](https://github.com/covalent-hq/wiki/wiki)
