---
title: 'COVA | Bi-Weekly Updates Vol.4'
media_order: 1_JcbSJQiQ40oCzF26qXa5_w.png
published: true
visible: true
---

Welcome to the 4th Bi-weekly Updates of COVA. In this bi-weekly update, we will recap what we’ve done starting from Oct 30th to Nov 15th. Also, we want to tell you guys COVA has been chosen to participate in the voting round of token listing on [@HuobiGroup](http://twitter.com/HuobiGroup) Platform. If you are an HT holder, you can vote for us here. [https://bit.ly/2Fu7Cc9](https://bit.ly/2Fu7Cc9)

## Technical

**TEE**

* Finished a layer similar to TLS that enables COVA network to integrate remote attestation

* Working on various workarounds for making some of the SGX incompatible python libraries to work with CovaVM

**COVA Network**

* Moving to in-memory database (pydblite) for all network computation

* Wrote a get/post request using SimpleHTTP library (due to SGX compatibility/simplicity) and migrated all the network calls away from Flask

**Centrifuge/Smart Policy**

* Finished implementing the filehash policy

* Finished writing a general framework for putting hooks inside the compiled bytecode

**Blockchain**

* Finished and deployed our ERC-20 compliant token on ganache (truffle) testnet

* Moved all previously node.js code for blockchain drivers to python to provide added security guarantees for our tendermint based blockchain by running everything from inside SGX

## Press

**COVA Welcomes Harvard Professors to Its Board of Directors**

COVA (Covalent.ai) announced two new members to the advisory board — Professor Stratos Idreos and Professor Elie Ofek, leading experts in distributed big data exploration systems and technology product strategies, respectively, at Harvard University. You can read the whole story on [Yahoo Finance](https://finance.yahoo.com/news/cova-welcomes-harvard-professors-board-054600772.html).

![](https://cdn-images-1.medium.com/max/4684/1*JcbSJQiQ40oCzF26qXa5_w.png)

## Marketing

**Huobi Voting**

COVA is excited to announce that we’ve been chosen to participate in the voting round of token listing on [@HuobiGroup](http://twitter.com/HuobiGroup) Platform. If you are an HT holder, you can vote for us here. [https://bit.ly/2Fu7Cc9](https://bit.ly/2Fu7Cc9) More info incoming. Stay tuned!

![](https://cdn-images-1.medium.com/max/2536/1*1fSzMHEB0xfuSllKN5y1aA.png)

[Volume 3 Updates](https://medium.com/@covatoken/cova-bi-weekly-updates-vol-3-7cb8aa298298)

[Volume 2 Update](https://medium.com/@covatoken/bi-weekly-updates-vol-2-ab30b8270eb5)

[Volume 1 Update](https://medium.com/@covatoken/weekly-updates-vol-1-5cd928814d22)
