<?php
return [
    'Find Chia - FAQ' => 'Find Chia - FAQ',
    'Frequently Asked Questions' => 'Foire Aux Questions',
    'Windows' => '',
    'MacOS: Intel' => '',
    'Apple Silicon' => '',
    'Ubuntu/Debian' => '',
    'Ubuntu/Debian ARM' => '',
    'CentOS/Redhat' => '',
    'How to start farming with FindChia Pool?' => 'Comment commencer l\'agriculture avec Find Chia Pool?',
    'Follow along with our guide over here:' => 'FSuivez notre guide ici:',
    'Join the FindChia Pool.' =>'Rejoignez la FindChia Pool.',
    'What is the pool\'s capacity?' =>'Quelle est la capacité de la hashpool?',
    'The pool is currently in the replotting process. According to our estimates within a month we will reach the volume of 1 PTB.' =>'Le pool est actuellement dans le processus de production de rapports. Selon nos estimations dans un mois, nous atteindrons le volume de 1 PTB.',
    'What is the difference between the old version of Pools and the new ones?'=>'Quelle est la différence entre l\'ancienne version des Pools et les nouvelles?',
    'The pool used to collect solo miners, then it would await for one of them to mine a block so it could take this block and divide it equally. 1 user having 1000 plots can steadily mine blocks and the remaining 1000 users having 1 plot may take some parts of his revenue, because for the network they remain in solo with 1 plot on their hands. Which brings us to the likelihood of finding a block to be somewhere around zero. In the newest version, it doesn\'t matter how many plots someone might have. The network sees the entire volume as a whole and even a miner with 1 plot can help the Pool to find the block faster. As a result, the new protocol allows us to view 1 miner with 1000 plots and 1000 miners with 1 as 2000 plots.'=>'La  pool utilisée pour recueillir des mineurs en solo, alors il attendrait pour l\'un d\'entre eux d\'exploiter un bloc afin qu\'il puisse prendre ce bloc et le diviser également. 1 utilisateur ayant 1000 parcelles peut régulièrement exploiter des blocs et les 1000 utilisateurs restants ayant 1 parcelle peuvent prendre une partie de ses revenus, car pour le réseau, ils restent en solo avec 1 parcelle sur leurs mains. Ce qui nous amène à la probabilité de trouver un bloc quelque part autour de zéro. Dans la dernière version, peu importe le nombre de parcelles que quelqu\'un pourrait avoir. Le réseau voit tout le volume dans son ensemble et même un mineur avec 1 parcelle peut aider la pool à trouver le bloc plus rapidement. En conséquence, le nouveau protocole nous permet de voir 1 mineur avec 1000 parcelles et 1000 mineurs avec 1 comme 2000 parcelles.',
    'What is the NFT contract that I\'m making with the Pool? What do points stand for? And how does it all flow together?'=>'Quel est le contrat NFT que je fais avec la Pool? Que signifient les points? Et comment tout cela coule-t-il ensemble?',
    'After creating the plot NFT and connecting to the Pool you\'ll see the NFT contract with the following figures:'=>'Après avoir créé l\'intrigue NFT et la connexion au pool, vous verrez le contrat NFT avec les chiffres suivants:',
    'Scarlet Spider'=>'Scarlet Spider',
    '– est un nom de contrat unique généré à partir de l\'ID du lanceur.',
    'Pool'=>'Pool',
    '- the address of the pool.'=>'-l\'adresse de la pool.',
    'Status'=>'Status',
    '– the current status of the contract.'=>'– l\'état actuel du contrat.',
    '– the number of plots created with the address of this contract that are visible in the farm and pool.'=>'- le nombre de parcelles créées avec l\'adresse de ce contrat qui sont visibles dans la ferme et la pool.',
    '– is the difficulty of finding points, the difficulty level is set by the pool automatically according to the number of plots.'=>'- est la difficulté de trouver des points, le niveau de difficulté est défini automatiquement par le pool en fonction du nombre de parcelles.',
    '– the number of points enrolled by the pool from the last payout date.'=>'- le nombre de points inscrits par le pool à partir de la dernière date de paiement.',
    '– the total number of points found since the start of the program.'=>'- le nombre total de points trouvés depuis le début du programme.',
    '– points found in the last 24 hours but not earlier than since the start of the program.'=>'- points trouvés dans les dernières 24 heures mais pas plus tôt que depuis le début du programme.',
    '– the percentage of found in 24 hours. This indicator should be above 97 % if the farm has no technical problems.'=>'- le pourcentage de trouvé en 24 heures. Cet indicateur devrait être supérieur à 97% si l\'exploitation n\'a aucun problème technique.',
    '– a unique NFT identifier that links your plots to pool payouts.'=>'- un identifiant NFT unique qui relie vos parcelles aux paiements de pool.',
    'And now let\'s try to figure out how it all works. The farmer creates a contract with a
                                unique Id. After that, he chooses a convenient option for himself - to stay in solo
                                (self pool) or join the pool using the NFT protocol, and if necessary, switch back to another
                                pool. As soon as new plots are created for the contract, the pool begins to participate
                                in the search for proof of space (proof) in the mainnet. On this step everything remains
                                the same as before the release of version 1.2.0. But in the scenario when the contract
                                "works" with the pool has been certain changes. The pool does not have the ability to
                                get direct access to the farmer\'s plots, and in order to understand whether the farmer\'s
                                plots are in the network, the pool gets the proof of space (proof) just like the
                                mainnet'=>'Et maintenant, essayons de comprendre comment tout cela fonctionne. L\'agriculteur crée un contrat avec un identifiant unique. Après cela, il choisit une option pratique pour lui - même: rester en solo (self pool) ou rejoindre le pool en utilisant le protocole NFT et, si nécessaire, revenir à un autre pool. Dès que de nouvelles parcelles sont créées pour le contrat, le pool commence à participer à la recherche de preuve d\'espace (preuve) dans le réseau principal. Sur cette étape, tout reste le même qu\'avant la sortie de la version 1.2.0. Mais dans le scénario où le contrat "fonctionne" avec le pool a été certains changements. Le pool n\'a pas la possibilité d\'avoir un accès direct aux parcelles de l\'agriculteur, et afin de comprendre si les parcelles de l\'agriculteur sont dans le réseau, le pool obtient la preuve d\'espace (preuve) tout comme le réseau principal',
    'Unlike the mainnet, a point is given for a proof found in the farmer\'s plots
                                instead of XCH. In fact, points are a unit of measure of capacity and activity of the farm, in proportion to which the reward is distributed on the pool.'=>'Contrairement au réseau principal, un point est donné pour une preuve trouvée dans les parcelles de l\'agriculteur au lieu de XCH. En fait, les points sont une unité de mesure de la capacité et de l\'activité de la ferme, en proportion de laquelle la récompense est répartie sur le pool.',
    'Each k32 plot can receive an average of 10 points per day. Accordingly, with a complexity of 1 the pool will recieve +-10 proofs within 24 hours. The number of points will grow until 1 of the pool participants finds a block, as soon as this happens, this participant will receive a reward of 0.25 XCH, the pool will distribute the remaining 1.75 XCH among all participants according to the rating and the points of all participants will be dropped down. If you do not go too deep into the technical details of the protocol, then this is done for a fair distribution of the reward, where points measure the contribution of each pool participant to finding a block and those who have technical problems or simply turn off the farm will earn less through out that time.'=>'Chaque parcelle k32 peut recevoir en moyenne 10 points par jour. En conséquence, avec une complexité de 1, le pool recevra + -10 preuves dans les 24 heures. Le nombre de points augmentera jusqu\'à ce qu\'un des participants du pool trouve un bloc, dès que cela se produira, ce participant recevra une récompense de 0,25 XCH, le pool distribuera les 1,75 XCH restants entre tous les participants en fonction de la note et les points de tous les participants seront retirés. Si vous n\'entrez pas trop dans les détails techniques du protocole, cela est fait pour une répartition équitable de la récompense, où les points mesurent la contribution de chaque participant au pool à la recherche d\'un bloc et ceux qui ont des problèmes techniques ou simplement éteignent la ferme gagneront moins pendant ce temps.',
    'How do I replott?'=>'Comment faire replott?',
    'We got your back, you can read about the process in our article about'=>'Nous avons votre dos, vous pouvez lire sur le processus dans notre article sur',
    'replotting.'=>'replotting.',
    'How to install the replotting software?'=>'Comment installer le replotting logiciel?',
    'Don\'t worry, we broke that down for you'=>'Ne vous inquiétez pas, nous avons cassé cela pour vous',
    'right here.'=>'juste ici.',
    'Got some other questions?'=>'Vous avez d\'autres questions?',
    'If you can not find an answer to your question in our FAQ,'=>'Si vous ne trouvez pas de réponse à votre question dans notre FAQ,',
    'feel free to reach out to us directly on our socials.'=>'n\'hésitez pas à nous contacter directement sur nos réseaux sociaux.',
    'I would like to switch the pool. What kind of difficulties I might encounter and how to overcome them?'=>'Je voudrais changer la haspool. Quels types de difficultés je pourrais rencontrer et comment les surmonter?',
    'In'=>'Dans',
    'this'=>'cette',
    'step-by-step guide we covered everything you need to know in case you would want to make changes to an existing NFT contract.'=>'guide étape par étape, nous avons couvert tout ce que vous devez savoir au cas où vous voudriez apporter des modifications à un contrat NFT existant.',
];
