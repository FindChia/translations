<?php
return [
    'Find Chia - FAQ' => 'Find Chia - FAQ',
    'Frequently Asked Questions' => 'Часто задаваемые вопросы',
    'Windows' => '',
    'MacOS: Intel' => '',
    'Apple Silicon' => '',
    'Ubuntu/Debian' => '',
    'Ubuntu/Debian ARM' => '',
    'CentOS/Redhat' => '',
    'How to start farming with FindChia Pool?'=> 'Как начать фармить с FindChia Pool?',
    'Follow along with our guide over here:'=>'Следуйте нашим инструкциям по подключению:',
    'Join the FindChia Pool.'=>'Присоедениться к пулу FindChia',
    'What is the pool\'s capacity?'=>'Какой объем пула?',
    'The pool is currently in the replotting process. According to our estimates within a month we will reach the volume of 1 PTB.'=>'Пул находится в процессе переплолтинга. По нашим оценкам, в течение месяца мы выйдем на объем 1 PTB.',
    'What is the difference between the old version of Pools and the new ones?' => 'Чем отличаются “старые” и “новые” пулы?',
    'The pool used to collect solo miners, then it would await for one of them to mine a block so it could take this block and divide it equally. 1 user having 1000 plots can steadily mine blocks and the remaining 1000 users having 1 plot may take some parts of his revenue, because for the network they remain in solo with 1 plot on their hands. Which brings us to the likelihood of finding a block to be somewhere around zero. In the newest version, it doesn\'t matter how many plots someone might have. The network sees the entire volume as a whole and even a miner with 1 plot can help the Pool to find the block faster. As a result, the new protocol allows us to view 1 miner with 1000 plots and 1000 miners with 1 as 2000 plots.'=>'В "старых" пулах,  пул собирает n майнеров соло, ждет когда кто-то из них поймает блок, берет этот блок и делит поровну. Получается, что 1 человек 1000 плотов стабильно ловит блоки, остальные 1000 по 1 плоту забирают часть его дохода, т.к. для сети они остаются в соло с 1 плотом и вероятность нахождения блока стремится к нулю.
В новых же пулах - не имеет значения сколько у кого участков т.к. сеть видит весь объем как единое целое и даже майнер с одним плотом помогает пулу быстрее найти блок. В итоге, на новом протоколе один с 1000 и 1000 по одному для сети = 2000 участков.',
    'What is the NFT contract that I\'m making with the Pool? What do points stand for? And how does it all flow together?'=> 'Что представляет из себя NFT контракт, который я заключаю с пулом? Что означают пойнты? И как это все работает вместе?',
    'After creating the plot NFT and connecting to the Pool you\'ll see the NFT contract with the following figures:'=>'После создания участка NFT и подключения к пулу можно увидеть NFT контракт, в котором есть разные значения:',
    'Scarlet Spider'=>'Scarlet Spider',
'– is a unique contract name generated from the Launcher Id.'=>' – это уникальное имя контракта сгенерированное из Launcher ID.',
    'Pool'=>'Pool',
'- the address of the pool.'=>'– адрес пула.',
    'Status'=>'Status',
    '– the current status of the contract.'=> ' – текущее состояние контракта.',
    '– the number of plots created with the address of this contract that are visible in the farm and pool.'=>'– количество участков созданных с адресом этого контракта которые видны в ферме и пулу соответственно.',
    '– is the difficulty of finding points, the difficulty level is set by the pool automatically according to the number of plots.'=>'– это сложность нахождения поинтов, уровень сложности задается пулом автоматически, в соответствии с количеством плотов.',
    '– the number of points enrolled by the pool from the last payout date.'=>'– количество начисленных пулом поинтов с момента последней выплаты.',
    '– the total number of points found since the start of the program.'=>'– общее количество найденных поинтов с момента запуска программы.',
    '– points found in the last 24 hours but not earlier than since the start of the program.'=>'– поинты найденные за последние 24 часа, но не ранее чем с момента запуска программы.',
    '– the percentage of found in 24 hours. This indicator should be above 97 % if the farm has no technical problems.'=>'– процент найденных поинтов за 24 часа, этот показатель на ферме, не имеющей технических проблем, должен быть выше 97%.',
    '– a unique NFT identifier that links your plots to pool payouts.'=>'– уникальный идентификатор NFT, связывающий ваши плоты с выплатами на пуле.',
    'And now let\'s try to figure out how it all works. The farmer creates a contract with a
                                unique Id. After that, he chooses a convenient option for himself - to stay in solo
                                (self pool) or join the pool using the NFT protocol, and if necessary, switch back to another
                                pool. As soon as new plots are created for the contract, the pool begins to participate
                                in the search for proof of space (proof) in the mainnet. On this step everything remains
                                the same as before the release of version 1.2.0. But in the scenario when the contract
                                "works" with the pool has been certain changes. The pool does not have the ability to
                                get direct access to the farmer\'s plots, and in order to understand whether the farmer\'s
                                plots are in the network, the pool gets the proof of space (proof) just like the
                                mainnet'=>'А теперь попробуем разобраться, как это все работает. Фермер создает контракт с уникальным ID. После чего выбирает удобный для себя вариант -  оставаться в соло (self) или присоединиться к пулу при помощи протокола NFT, а в случае необходимости снова переключиться на другой пул. Как только создан новый участок для контракта, он начинает участвовать в поиске доказательства пространства (proof) в mainnet,  здесь все осталось прежним, как и до выхода версии 1.2.0. А вот в случае, когда контракт «работает» с пулом произошли изменения. У пула нет возможности получить прямой доступ к участкам фермера и для того чтобы понять находятся ли участки фермера в сети, он так же как и mainnet получает доказательства пространства (proof).',

    'Unlike the mainnet, a point is given for a proof found in the farmer\'s plots
                                instead of XCH. In fact, points are a unit of measure of capacity and activity of the farm, in proportion to which the reward is distributed on the pool.'=>'Только в отличии от mainnet, за пруф найденный в участках фермера -  присваивается поинт вместо xch, фактически, поинты - это единица измерения объёма и активности фермы, в пропорциональном соответствии с которыми распределяется награда на пуле.',
    'Each k32 plot can receive an average of 10 points per day. Accordingly, with a
                                complexity of 1 the pool will recieve +-10 proofs within 24 hours. The number of points will grow until 1 of the pool participants finds a block, as
                                soon as this happens, this participant will receive a reward of 0.25 XCH, the pool will
                                distribute the remaining 1.75 XCH among all participants according to the rating and the points of all participants will be dropped down. If you
                                do not go too deep into the technical details of the protocol, then this is done for a
                                fair distribution of the reward, where points measure the contribution of each pool
                                participant to finding a block and those who have technical problems or simply turn off
                                the farm will earn less through out that time.'=>'В сутки каждый участок k32 может получить в среднем 10 поинтов. Соответственно, при сложности 1, пул получит от каждого участка +-10 пруфов в течении 24 часов. Количество поинтов будет расти до того момента пока 1 из участников пула не найдет блок, как только это произойдет этот участник получит вознаграждение в 0,25 XCH, а остальные 1,75 XCH пул распределит между всеми участниками в соответствии с рейтингом и поинты всех участников будут сброшены. Если сильно не углубляться в технические детали протокола, то сделано это для справедливого распределения награды, где поинты измеряют вклад каждого участника пула в нахождение блока и те у кого технические проблемы или просто выключена ферма, за это время заработают меньше поинтов.',

    'How do I replott?'=>'Как мне сделать переплот?',
    'We got your back, you can read about the process in our article about'=>'У нас все схвачено! Можете прочесть в нашей статье',
    'replotting.'=>'об этом.',
    'How to install the replotting software?'=>'Как мне установить ПО для переплота?',
    'Don\'t worry, we broke that down for you'=>'Не волнуйтесь, и на этот вопрос',
    'right here.'=>'у нас есть ответ.',
    'Got some other questions?'=>'Есть другие вопросы?',
    'If you can not find an answer to your question in our FAQ,'=>'Если вы не видите ответа на интересующий вас вопрос среди перечисленных,',
    'feel free to reach out to us directly on our socials.'=>'свяжитесь с нами в соцсетях. Мы будем рады помочь.',
    'I would like to switch the pool. What kind of difficulties I might encounter and how to overcome them?'=>'Я хочу поменять пул. С какими трудностями я могу столкнуться и как их преодолеть?',
    'In'=>'В',
    'this'=>'этом',
    'step-by-step guide we covered everything you need to know in case you would want to make changes to an existing NFT contract.'=>'пошаговом руководстве мы расказываем обо всем, что вам нужно знать, если вы захотите внести изменения в существующий контракт NFT.',
];