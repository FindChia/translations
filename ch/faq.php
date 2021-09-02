<?php
return [
    'Find Chia - FAQ' => 'Find Chia - 常见问题',
    'Frequently Asked Questions' => '经常问的问题',
    'Windows' => '',
    'MacOS: Intel' => '',
    'Apple Silicon' => '',
    'Ubuntu/Debian' => '',
    'Ubuntu/Debian ARM' => '',
    'CentOS/Redhat' => '',
    'How to start farming with FindChia Pool?' => '如何使用 FindChia Pool 开始耕种？',
    'Follow along with our guide over here:' => '跟随我们的指南在这里：',
    'Join the FindChia Pool.' =>'加入 FindChia 池。',
    'What is the pool\'s capacity?' =>'游泳池的容量是多少？',
    'The pool is currently in the replotting process. According to our estimates within a month we will reach the volume of 1 PTB.' =>'该池目前处于重新绘制过程中。 根据我们的估计，我们将在一个月内达到 1 PTB 的数量。',
    'What is the difference between the old version of Pools and the new ones?'=>'旧版本的 Pools 和新版本有什么区别？',
    'The pool used to collect solo miners, then it would await for one of them to mine a block so it could take this block and divide it equally. 1 user having 1000 plots can steadily mine blocks and the remaining 1000 users having 1 plot may take some parts of his revenue, because for the network they remain in solo with 1 plot on their hands. Which brings us to the likelihood of finding a block to be somewhere around zero. In the newest version, it doesn\'t matter how many plots someone might have. The network sees the entire volume as a whole and even a miner with 1 plot can help the Pool to find the block faster. As a result, the new protocol allows us to view 1 miner with 1000 plots and 1000 miners with 1 as 2000 plots.'=>'该矿池用于收集单独的矿工，然后等待他们中的一个挖出一个区块，这样它就可以将这个区块平均分配。 拥有 1000 个地块的 1 个用户可以稳定地挖掘区块，而拥有 1 个地块的其余 1000 个用户可能会从他的收入中分走一部分，因为对于网络来说，他们手上只有 1 个地块。 这给我们带来了找到一个块在零附近的可能性。 在最新版本中，一个人可能有多少情节并不重要。 网络将整个交易量视为一个整体，即使有 1 个地块的矿工也可以帮助矿池更快地找到区块。 因此，新协议允许我们查看 1 个具有 1000 个地块的矿工和 1000 个具有 2000 个地块的矿工。',
    'What is the NFT contract that I\'m making with the Pool? What do points stand for? And how does it all flow together?'=>'我与矿池签订的 NFT 合同是什么？ 点数代表什么？ 它是如何一起流动的？',
    'After creating the plot NFT and connecting to the Pool you\'ll see the NFT contract with the following figures:'=>'创建绘图 NFT 并连接到矿池后，您将看到带有以下数字的 NFT 合约：',
    'Scarlet Spider'=>'Scarlet Spider',
    '– is a unique contract name generated from the Launcher Id.'=>' – 是从 Launcher Id 生成的唯一合约名称。',
    'Pool'=>'Pool',
    '- the address of the pool.'=>'- 池的地址。',
    'Status'=>'Status',
    '– the current status of the contract.'=>'– 合同的当前状态。',
    '– the number of plots created with the address of this contract that are visible in the farm and pool.'=>'– 使用此合约的地址创建的在农场和池中可见的地块数量。',
    '– is the difficulty of finding points, the difficulty level is set by the pool automatically according to the number of plots.'=>'– 是找点的难度，难度由矿池根据地块数量自动设置。',
    '– the number of points enrolled by the pool from the last payout date.'=>'– 从最后一次支付日期开始，池注册的积分数。',
    '– the total number of points found since the start of the program.'=>'– 自程序启动以来找到的总点数。',
    '– points found in the last 24 hours but not earlier than since the start of the program.'=>'– 在过去 24 小时内发现的点数，但不早于程序开始后。',
    '– the percentage of found in 24 hours. This indicator should be above 97 % if the farm has no technical problems.'=>'– 24 小时内找到的百分比。 如果农场没有技术问题，该指标应在 97% 以上。',
    '– a unique NFT identifier that links your plots to pool payouts.'=>'– 一个唯一的 NFT 标识符，将您的地块链接到池支出。',
    'And now let\'s try to figure out how it all works. The farmer creates a contract with a
                                unique Id. After that, he chooses a convenient option for himself - to stay in solo
                                (self pool) or join the pool using the NFT protocol, and if necessary, switch back to another
                                pool. As soon as new plots are created for the contract, the pool begins to participate
                                in the search for proof of space (proof) in the mainnet. On this step everything remains
                                the same as before the release of version 1.2.0. But in the scenario when the contract
                                "works" with the pool has been certain changes. The pool does not have the ability to
                                get direct access to the farmer\'s plots, and in order to understand whether the farmer\'s
                                plots are in the network, the pool gets the proof of space (proof) just like the
                                mainnet'=>'现在让我们试着弄清楚这一切是如何运作的。 农民创建一个具有唯一 ID 的合同。 之后，他为自己选择了一个方便的选项——留在单独（自池）或使用 NFT 协议加入池，如有必要，切换回另一个池。 一旦为合约创建了新的地块，矿池就开始参与在主网上寻找空间证明（证明）。 在这一步中，一切都与 1.2.0 版发布之前相同。 但在合约与矿池“工作”的情况下，发生了某些变化。 矿池不具备直接访问农民地块的能力，为了了解农民地块是否在网络中，矿池像主网一样获得空间证明（proof）',
    'Unlike the mainnet, a point is given for a proof found in the farmer\'s plots
                                instead of XCH. In fact, points are a unit of measure of capacity and activity of the farm, in proportion to which the reward is distributed on the pool.'=>'与主网不同，在农民的地块而不是 XCH 中找到的证明会给出一个点。 事实上，点数是衡量农场容量和活动的单位，与奖励在池中的分配成比例。',
    'Each k32 plot can receive an average of 10 points per day. Accordingly, with a
                                complexity of 1 the pool will recieve +-10 proofs within 24 hours. The number of points will grow until 1 of the pool participants finds a block, as
                                soon as this happens, this participant will receive a reward of 0.25 XCH, the pool will
                                distribute the remaining 1.75 XCH among all participants according to the rating and the points of all participants will be dropped down. If you
                                do not go too deep into the technical details of the protocol, then this is done for a
                                fair distribution of the reward, where points measure the contribution of each pool
                                participant to finding a block and those who have technical problems or simply turn off
                                the farm will earn less through out that time.'=>'每个 k32 地块平均每天可以获得 10 个点。 因此，如果复杂度为 1，矿池将在 24 小时内收到 +-10 个证明。 点数会一直增长，直到矿池中的 1 个参与者找到区块，一旦发生这种情况，该参与者将获得 0.25 XCH 的奖励，池将根据评分和积分将剩余的 1.75 XCH 分配给所有参与者 的所有参与者将被丢弃。 如果您不太深入了解协议的技术细节，那么这样做是为了公平分配奖励，其中点数衡量每个矿池参与者对找到一个区块的贡献以及那些有技术问题或干脆关闭 在那段时间里，农场的收入会减少。',
    'How do I replott?'=>'我怎么做 replott？',
    'We got your back, you can read about the process in our article about'=>'我们得到了您的支持，您可以在我们的文章中阅读有关该过程的信息',
    'replotting.'=>'replotting.',
    'How to install the replotting software?'=>'如何安装重绘软件？',
    'Don\'t worry, we broke that down for you'=>'别担心，我们为你分解了',
    'right here.'=>'就在这儿。',
    'Got some other questions?'=>'还有其他问题吗？',
    'If you can not find an answer to your question in our FAQ,'=>'如果您在我们的常见问题解答中找不到问题的答案,',
    'feel free to reach out to us directly on our socials.'=>'随时直接在我们的社交媒体上与我们联系',
    'I would like to switch the pool. What kind of difficulties I might encounter and how to overcome them?'=>'我想换游泳池。 我可能会遇到什么样的困难以及如何克服它们？',
    'In'=>'在',
    'this'=>'这',
    'step-by-step guide we covered everything you need to know in case you would want to make changes to an existing NFT contract.'=>'分步指南我们涵盖了您需要了解的所有内容，以防您想对现有的 NFT 合约进行更改。',
];
