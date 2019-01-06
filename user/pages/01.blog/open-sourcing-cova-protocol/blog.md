---
title: 'Open Sourcing COVA Protocol'
media_order: 0_wu5swj1Zj0pGIT-i.png
published: true
visible: true
---

As COVA is getting ready to release our public testnet: COVA-Nyx, [Covalent Foundation](http://covalent.ai) is happy to announce that we are making our protocol open sourced for developers under AGLP v3. We wanted to write this post to reflect on our overall development and technical thought process and how it has evolved over time. Hopefully, this will also serve as a decent guide to how one should navigate through our (mostly) open sourced code repositories on GitHub and contribute in the spirit of making verifiable computing, a new paradigm available to everyone.

**Github Link: [**https://github.com/covalent-hq](https://github.com/covalent-hq/)

## Overview of Documentations

When we are working with technologies as novel as verifiable computing, TEE, distributed trust, and scalable blockchain, everything moves fast. As a consequence of that even over a year timeframe, we ended up with three different technical documentation. While they are not contradictory (in fact, they show a very interesting temporal snapshot of how we have matured into designing a usable protocol), they have been somewhat confusing to the community at times regarding which one is the “real” documentation and state of the world that they should follow. Here is an overview of our 3 publicly available technical documentation:

* [Legacy Technical Whitepaper v1](https://docsend.com/view/dvvb75n): Covalent Foundation published this in May 2018. It outlines our PoC (MeData) and some very high-level thought process regarding how we envisioned various components would be. This was made primarily for the private investors and community members.

* [Covalent Private Testnet Wiki Documentation](https://github.com/covalent-hq/wiki/wiki): For Private testnet documentation

* [Covalent Public Testnet Documentation](http://docs.covalent.ai/): This is the most recent state of the world now (as of December 2018 and moving forward until our public mainnet release).

## Current Development

Currently, we have 37 Github repos (public and private) and about half of them are under active development. However, the most valuable (and release ready) public Github repos to Look for are:

1. [Cova-Core](https://github.com/covalent-hq/cova-core): Contains core COVA protocol (gossip network), CovaVM, Centrifuge, and dockerfiles to run routing and compute nodes

1. [Python-Library](https://github.com/covalent-hq/cova-python-driver): Application abstraction layer for Data Owners and Data Users to build their dApps

1. [Cova-Blockchain](https://github.com/covalent-hq/cova-blockchain): Persistence layer (currently implemented with go-ethereum fork and tendermint in TEE nodes)

1. [Cova-Enclave](https://github.com/covalent-hq/cova-enclave): Contains Makefile and bash recipes along with Dockerfiles to setup Graphene, SGX, and CovaClave to run Cova-Core securely

Pre-release and under active development:

1. [Js-Library](https://docs.covalent.ai/overview/git-repo/cova-js-driver): A JS port of the python library

1. [dApps](https://github.com/covalent-hq/data-owner-dapp-dev): Various example dApps made using COVA

Some older repos (primarily used for the private testnet and were released to private reviewers) we are making available too:

1. [Secure-Model](https://github.com/covalent-hq/covalent-secure-models): An initial example of COVA data control policy: enables data users to write machine learning scripts without violating data privacy

1. [Secure-Server](https://github.com/covalent-hq/covalent-secure-server): Spawn AWS servers from inside TEE nodes, keeping credentials secret to server owners

## Developers Unite!

To reach our dream of making COVA the protocol of choice for privacy-preserving computing and data utilization, we need help from the developer community around the world. In that spirit, we have open sourced all our repos on GitHub under AGPL v3. If you would like to contribute:

1. Please join our public [Gitter developer channel](https://gitter.im/covalent-hq/). You can get direct 1–1 help from the developers and community members there. (Lobby: General discussion, Cova-Core: Protocol related technical discussions)

1. If you have some interesting idea/bugfix to propose, please start an issue on that specific repo and submit a pull request for changes.

1. Follow our [social media channels](https://covalent.ai/#contact) to keep updated about upcoming hackathons, meetups, and developer bounty programs.
