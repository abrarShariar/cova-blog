---
title: 'Deep Dive: Five Whys for COVA'
published: true
visible: true
---

As we talk to various communities of developers, investors, and enthusiasts around the world, we often find these questions about COVA. We believe that understanding the answers to these questions will take our community members a bit closer to understanding why we exist, our grand vision, and the value we are trying to provide in the form of trusted computing network and usage policy enforcing software that runs on this network.

**Why Blockchain? Why not centralized?**
In this world we live in our trust system is rather centralized. We need to trust big cloud computing companies or central data storage systems with our valuable data. It can be outright dangerous to trust central entities with such information (think of your DNA sequences or bank account credentials). The beauty of our system is the propagation of trust. Covalent is the party which signs every single enclave and software pieces. However, you don’t need to trust us or depend on us to join the network. The network is going to be permissionless and anyone can join by putting some collateral in a smart contract with the set of routing nodes and verifying their trust-worthiness through a remote attestation process. The more compute nodes we have the more robust and trustable the whole network becomes. 
The main reason against centralization is that a verifiable trusted environment is useless if the same party which signs your software is also providing the computation nodes. As that will enable the central party to easily look into the valuable data (which is the centralized model the current cloud platforms use).

**Why do you need a token? Why not just Ethereum (ETH)? Do you really need your own blockchain?**
First of all, well, we are using ETH and we also have our own blockchain. We believe in practicality and not reinventing the wheel. We are using ETH blockchain for all financial transactions. Our token and smart contracts are on ETH blockchain. The main reasons are the existing community and security of a mature blockchain. On the other hand, we are using our own blockchain to let the dApp developers to store metadata and secret bits. The main reason for that the cost and latency of storing such data on ETH blockchain is highly impractical for our use cases. 
There are various other general reasons for having our own tokens:

1. **Incentive structures**: Yes, we could just give out ETH, but that does not equate to incentivizing early adaptation. Once we have thousands of compute nodes in our network, it is easy for newcomers to join and trust the network. However, the initial risk takers must be compensated adequately.

1. **Market economy:** COVA will become units for measuring trusted-ness and computing power of systems. For market pricing of computation power, we cannot depend on ETH or any other coins that does not have its value tied to the value of our trusted network.

**Why TEE and not X (FHE/MPC)?**

We know that blockchain community is full of theory-loving people, but everytime someone tells us they will be able to create a practical system based on fully homomorphic encryption (FHE) or multi party computation (MPC), they lose all their credibility. Yes, in theory FHE and MPC are the perfect solution we dream of, but right now, and probably even in next 5 years, those solutions are not practical at all. The most cutting edge FHE systems are million times slower compared to traditional ones. Similarly MPCs are orders of magnitude slower. At Covalent, we have already implemented remotely attestable TEE and all the system calls necessary to run arbitrary python programs. In addition, we are using MPC based threshold encryption for doing only the most security critical parts — the data encryption-key storage and retrieval. Anyone can write a fancy whitepapers, but if they want to build a practical system based completely on FHE/MPC, we wish them good luck and will only take them seriously once they can prove the practicality with a working PoC.

**Why do you need to exist when we have this other company working on TEE?**

We are aware there are various blockchain companies working on TEE. We have seen glorification of TEEs as the silver bullet and on the other hand, we have seen people being incredibly skeptical (and even accusing us of running scams even after having a working PoC!). At Covalent, we are somewhere in between — we took a cautious and yet hopeful approach. 
First of all, it is important to understand that we are not a TEE company, we are a data policy platform. As a result, we are providing end to end solution for distributed trusted computation and not just a tool. It would be good to elaborate our thoughts:

1. **Intel SGX TEE is an Intel technology:** While quite challenging to work with at the end of the day, SGX TEE is a technology created and distributed by Intel. We are a company who are aggregating the TEEs in a network and then putting our innovation in the form of software and usage policy to enable trusted computing.

1. **Policy enforcement is a big part of COVA:** Our policy enforcing language Centrifuge, is a big part of our value proposition. This is independent of the TEE technology and helps us provide guarantee of data usage policy enforcement.

1. **Threshold cryptosystems for secure key storage and retrieval:** In the wake of various attacks and hacks targeting TEE technologies, we had to design a system robust enough so that there is no single point of failure. So for the most sensitive part of our system — encryption key storage and retrieval, we are using a multi party computation technique known as threshold encryption (Shamir’s secret sharing scheme to be more precise).

**You just use X, Y, Z technology and put them together. Why is it hard?**

Again, when someone tells us that we JUST use Intel SGX, it becomes obvious to us that they have never written a single line of code that runs on SGX. It’s not just that Intel SGX is an incredibly complex piece of technology (with millions of lines of undocumented code provided by Intel), it is extremely limiting (often by cautious design). SGX Kernel is literally a separate one from the linux kernel and as a result, even performing a simple system call that is not implemented already is rather hard. And there lies the challenge of porting a general piece of software to run on SGX.
At covalent, we have forked Graphene-SGX a guest library OS that has implemented various system calls in SGX, hence enabling us to port a modified version of python to run on SGX. In addition, we have changed the OS to add sealing and remote attestation capabilities and finally made it compatible with docker technology.
Doing all these is a mammoth undertaking and it is rather hard for us to explain the complexity of the whole system to someone who has not gone through the trouble of writing software in intel SGX platform.
