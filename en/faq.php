<?php
return [
    'Find Chia - FAQ' => 'Find Chia - FAQ',
    'Frequently Asked Questions' => 'Frequently Asked Questions',
    'Windows' => 'Windows',
    'MacOS: Intel' => 'MacOS: Intel',
    'Apple Silicon' => 'Apple Silicon',
    'Ubuntu/Debian' => 'Ubuntu/Debian',
    'Ubuntu/Debian ARM' => 'Ubuntu/Debian ARM',
    'CentOS/Redhat' => 'CentOS/Redhat',
    'How to start farming with FindChia Pool?' => 'How to start farming with FindChia Pool?',
    'Follow along with our guide over here:' => 'Follow along with our guide over here:',
    'Join the FindChia Pool.' =>'Join the FindChia Pool.',
    'What is the pool\'s capacity?' =>'What is the pool\'s capacity?',
    'The pool is currently in the replotting process. According to our estimates within a month we will reach the volume of 1 PTB.' =>'The pool is currently in the replotting process. According to our estimates within a month we will reach the volume of 1 PTB.',
    'What is the difference between the old version of Pools and the new ones?'=>'What is the difference between the old version of Pools and the new ones?',
    'The pool used to collect solo miners, then it would await for one of them to mine a block so it could take this block and divide it equally. 1 user having 1000 plots can steadily mine blocks and the remaining 1000 users having 1 plot may take some parts of his revenue, because for the network they remain in solo with 1 plot on their hands. Which brings us to the likelihood of finding a block to be somewhere around zero. In the newest version, it doesn\'t matter how many plots someone might have. The network sees the entire volume as a whole and even a miner with 1 plot can help the Pool to find the block faster. As a result, the new protocol allows us to view 1 miner with 1000 plots and 1000 miners with 1 as 2000 plots.'=>'The pool used to collect solo miners, then it would await for one of them to mine a block so it could take this block and divide it equally. 1 user having 1000 plots can steadily mine blocks and the remaining 1000 users having 1 plot may take some parts of his revenue, because for the network they remain in solo with 1 plot on their hands. Which brings us to the likelihood of finding a block to be somewhere around zero. In the newest version, it doesn\'t matter how many plots someone might have. The network sees the entire volume as a whole and even a miner with 1 plot can help the Pool to find the block faster. As a result, the new protocol allows us to view 1 miner with 1000 plots and 1000 miners with 1 as 2000 plots.',
    'What is the NFT contract that I\'m making with the Pool? What do points stand for? And how does it all flow together?'=>'What is the NFT contract that I\'m making with the Pool? What do points stand for? And how does it all flow together?',
    'After creating the plot NFT and connecting to the Pool you\'ll see the NFT contract with the following figures:'=>'After creating the plot NFT and connecting to the Pool you\'ll see the NFT contract with the following figures:',
    'Scarlet Spider'=>'Scarlet Spider',
'– is a unique contract name generated from the Launcher Id.'=>' – is a unique contract name generated from the Launcher Id.',
    'Pool'=>'Pool',
'- the address of the pool.'=>'- the address of the pool.',
'Status'=>'Status',
    '– the current status of the contract.'=>'– the current status of the contract.',
    '– the number of plots created with the address of this contract that are visible in the farm and pool.'=>'– the number of plots created with the address of this contract that are visible in the farm and pool.',
    '– is the difficulty of finding points, the difficulty level is set by the pool automatically according to the number of plots.'=>'– is the difficulty of finding points, the difficulty level is set by the pool automatically according to the number of plots.',
    '– the number of points enrolled by the pool from the last payout date.'=>'– the number of points enrolled by the pool from the last payout date.',
    '– the total number of points found since the start of the program.'=>'– the total number of points found since the start of the program.',
    '– points found in the last 24 hours but not earlier than since the start of the program.'=>'– points found in the last 24 hours but not earlier than since the start of the program.',
    '– the percentage of found in 24 hours. This indicator should be above 97 % if the farm has no technical problems.'=>'– the percentage of found in 24 hours. This indicator should be above 97 % if the farm has no technical problems.',
    '– a unique NFT identifier that links your plots to pool payouts.'=>'– a unique NFT identifier that links your plots to pool payouts.',
    'And now let\'s try to figure out how it all works. The farmer creates a contract with a
                                unique Id. After that, he chooses a convenient option for himself - to stay in solo
                                (self pool) or join the pool using the NFT protocol, and if necessary, switch back to another
                                pool. As soon as new plots are created for the contract, the pool begins to participate
                                in the search for proof of space (proof) in the mainnet. On this step everything remains
                                the same as before the release of version 1.2.0. But in the scenario when the contract
                                "works" with the pool has been certain changes. The pool does not have the ability to
                                get direct access to the farmer\'s plots, and in order to understand whether the farmer\'s
                                plots are in the network, the pool gets the proof of space (proof) just like the
                                mainnet'=>'And now let\'s try to figure out how it all works. The farmer creates a contract with a
                                unique Id. After that, he chooses a convenient option for himself - to stay in solo
                                (self pool) or join the pool using the NFT protocol, and if necessary, switch back to another
                                pool. As soon as new plots are created for the contract, the pool begins to participate
                                in the search for proof of space (proof) in the mainnet. On this step everything remains
                                the same as before the release of version 1.2.0. But in the scenario when the contract
                                "works" with the pool has been certain changes. The pool does not have the ability to
                                get direct access to the farmer\'s plots, and in order to understand whether the farmer\'s
                                plots are in the network, the pool gets the proof of space (proof) just like the
                                mainnet',
    'Unlike the mainnet, a point is given for a proof found in the farmer\'s plots
                                instead of XCH. In fact, points are a unit of measure of capacity and activity of the farm, in proportion to which the reward is distributed on the pool.'=>'Unlike the mainnet, a point is given for a proof found in the farmer\'s plots
                                instead of XCH. In fact, points are a unit of measure of capacity and activity of the farm, in proportion to which the reward is distributed on the pool.',
    'Each k32 plot can receive an average of 10 points per day. Accordingly, with a
                                complexity of 1 the pool will recieve +-10 proofs within 24 hours. The number of points will grow until 1 of the pool participants finds a block, as
                                soon as this happens, this participant will receive a reward of 0.25 XCH, the pool will
                                distribute the remaining 1.75 XCH among all participants according to the rating and the points of all participants will be dropped down. If you
                                do not go too deep into the technical details of the protocol, then this is done for a
                                fair distribution of the reward, where points measure the contribution of each pool
                                participant to finding a block and those who have technical problems or simply turn off
                                the farm will earn less through out that time.'=>'Each k32 plot can receive an average of 10 points per day. Accordingly, with a
                                complexity of 1 the pool will recieve +-10 proofs within 24 hours. The number of points will grow until 1 of the pool participants finds a block, as
                                soon as this happens, this participant will receive a reward of 0.25 XCH, the pool will
                                distribute the remaining 1.75 XCH among all participants according to the rating and the points of all participants will be dropped down. If you
                                do not go too deep into the technical details of the protocol, then this is done for a
                                fair distribution of the reward, where points measure the contribution of each pool
                                participant to finding a block and those who have technical problems or simply turn off
                                the farm will earn less through out that time.',
    'How do I replott?'=>'How do I replott?',
    'We got your back, you can read about the process in our article about'=>'We got your back, you can read about the process in our article about',
    'replotting.'=>'replotting.',
    'How to install the replotting software?'=>'How to install the replotting software?',
    'Don\'t worry, we broke that down for you'=>'Don\'t worry, we broke that down for you',
    'right here.'=>'right here.',
    'Got some other questions?'=>'Got some other questions?',
    'If you can not find an answer to your question in our FAQ,'=>'If you can not find an answer to your question in our FAQ,',
    'feel free to reach out to us directly on our socials.'=>'feel free to reach out to us directly on our socials.',
    'I would like to switch the pool. What kind of difficulties I might encounter and how to overcome them?'=>'I would like to switch the pool. What kind of difficulties I might encounter and how to overcome them?',
    'In'=>'In',
    'this'=>'this',
    'step-by-step guide we covered everything you need to know in case you would want to make changes to an existing NFT contract.'=>'step-by-step guide we covered everything you need to know in case you would want to make changes to an existing NFT contract.',
];