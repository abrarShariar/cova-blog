---
title: 'COVA | Bi-Weekly Updates Vol.3'
published: true
visible: true
---

Welcome to the 3rd Bi-weekly Updates of COVA. In this bi-weekly update, we will recap what we’ve done starting from Oct 15th to Oct 29th. Overall we have a few business engagements in the pipeline, but we have been mostly busy developing. In any case, let’s dive right in :)

## **Technical**

Overall: the major update on our side is that we are getting close to releasing our public testnet. We have finished implementing for most of the TEE, Network layer, and blockchain part and running various integration and load tests.

**TEE**

* We have a **major update:** we have been able to run the full python scientific computing stack (numpy, scipy, sklearn, pandas) in our SGX enabled compute nodes

* We want to thank Professor [Don Porter](https://cs.unc.edu/~porter/) (Graphene) and [Dmitrii Kuvaiskii ](https://dimakuv.github.io/)(Intel Labs) for their helP

**COVA Network**

* We have finished implementing our routing and compute node gossip network protocol

* Currently, COVA network protocol can assure any compute node can join in a permissionless fashion and the network is stable even after several routing node failures

* We finished the python library for data user and data owner and currently working on the javascript library (for easy node.js/electron based dApp building)

**Centrifuge/Smart Policy**

* Rewrote 2 basic smart policy implementations in a more composable format, and introduced FunctionHashList, a smart policy primitive in CovaVM that checks allowed function hashes

**Blockchain**

* We finished deploying our smart contract on our Ganache based ETH testnet

* We deployed covalent metadata storage using a tendermint based blockchain

* Finished integration for interfacing with the network layer and TEE running in Graphene

[Volume 2 update](https://medium.com/@covatoken/bi-weekly-updates-vol-2-ab30b8270eb5)

[Volume 1 update](https://medium.com/@covatoken/weekly-updates-vol-1-5cd928814d22)
