<?php
return [
    'Find Chia - FAQ' => 'Find Chia - FAQ',
    'Frequently Asked Questions' => 'Häufig Gestellte Fragen',
    'Windows' => '',
    'MacOS: Intel' => '',
    'Apple Silicon' => '',
    'Ubuntu/Debian' => '',
    'Ubuntu/Debian ARM' => '',
    'CentOS/Redhat' => '',
    'How to start farming with FindChia Pool?' => 'Wie fange ich mit Find Chia Pool an zu farmen?',
    'Follow along with our guide over here:' => 'Folgen Sie zusammen mit unserem Führer hier:',
    'Join the FindChia Pool.' =>'Treten Sie dem FindChia Pool bei.',
    'What is the pool\'s capacity?' =>'Was ist die Kapazität des Pools?',
    'The pool is currently in the replotting process. According to our estimates within a month we will reach the volume of 1 PTB.' =>'Der Pool befindet sich derzeit im Berichtsprozess. Nach unseren Schätzungen werden wir innerhalb eines Monats das Volumen von 1 PTB erreichen.',
    'What is the difference between the old version of Pools and the new ones?'=>'Was ist der Unterschied zwischen der alten Version von Pools und der neuen?',
    'The pool used to collect solo miners, then it would await for one of them to mine a block so it could take this block and divide it equally. 1 user having 1000 plots can steadily mine blocks and the remaining 1000 users having 1 plot may take some parts of his revenue, because for the network they remain in solo with 1 plot on their hands. Which brings us to the likelihood of finding a block to be somewhere around zero. In the newest version, it doesn\'t matter how many plots someone might have. The network sees the entire volume as a whole and even a miner with 1 plot can help the Pool to find the block faster. As a result, the new protocol allows us to view 1 miner with 1000 plots and 1000 miners with 1 as 2000 plots.'=>'Der Pool verwendet, um Solo-Bergleute zu sammeln, dann würde es für einen von ihnen warten, um einen Block abzubauen, so dass es diesen Block nehmen und teilen Sie ihn gleichmäßig. 1 Benutzer mit 1000 Grundstücken kann Blöcke stetig abbauen, und die verbleibenden 1000 Benutzer mit 1 Grundstück können einige Teile seines Umsatzes einnehmen, da sie für das Netzwerk mit 1 Grundstück in Solo bleiben. Das bringt uns zu der Wahrscheinlichkeit, einen Block irgendwo um Null zu finden. In der neuesten Version spielt es keine Rolle, wie viele Grundstücke jemand haben könnte. Das Netzwerk sieht das gesamte Volumen als Ganzes und sogar ein Bergmann mit 1 Grundstück kann dem Pool helfen, den Block schneller zu finden. Infolgedessen können wir mit dem neuen Protokoll 1 Miner mit 1000 Plots und 1000 Miner mit 1 als 2000 Plots anzeigen.',
    'What is the NFT contract that I\'m making with the Pool? What do points stand for? And how does it all flow together?'=>'Was ist der NFT-Vertrag, den ich mit dem Pool mache? Wofür stehen Punkte? Und wie fließt alles zusammen?',
    'After creating the plot NFT and connecting to the Pool you\'ll see the NFT contract with the following figures:'=>'Nachdem Sie den Plot NFT erstellt und eine Verbindung zum Pool hergestellt haben, sehen Sie den NFT-Vertrag mit den folgenden Zahlen:',
    'Scarlet Spider'=>'Scarlet Spider',
    '– is a unique contract name generated from the Launcher Id.'=>' – ist ein eindeutiger Vertragsname, der aus der Launcher-ID generiert wird.',
    'Pool'=>'Pool',
    '- the address of the pool.'=>' – die Adresse des Pools.',
    'Status'=>'Status',
    '– the current status of the contract.'=>' – der aktuelle Status des Vertrages.',
    '– the number of plots created with the address of this contract that are visible in the farm and pool.'=>'– die Anzahl der Parzellen mit der Adresse dieses Vertrages erstellt, die in der Farm und Pool sichtbar sind.',
    '– is the difficulty of finding points, the difficulty level is set by the pool automatically according to the number of plots.'=>'– ist die Schwierigkeit, Punkte zu finden, wird der Schwierigkeitsgrad vom Pool automatisch entsprechend der Anzahl der Plots eingestellt.',
    '– the number of points enrolled by the pool from the last payout date.'=>'– die Anzahl der vom Pool ab dem letzten Auszahlungsdatum registrierten Punkte.',
    '– the total number of points found since the start of the program.'=>'– die Gesamtzahl der Punkte seit dem Start des Programms gefunden.',
    '– points found in the last 24 hours but not earlier than since the start of the program.'=>'- punkte in den letzten 24 Stunden gefunden, aber nicht früher als seit dem Start des Programms.',
    '– the percentage of found in 24 hours. This indicator should be above 97 % if the farm has no technical problems.'=>'– der Prozentsatz der in 24 Stunden gefunden. Dieser Indikator sollte über 97 % liegen, wenn der Betrieb keine technischen Probleme hat.',
    '– a unique NFT identifier that links your plots to pool payouts.'=>'– eine eindeutige NFT Kennung, die Ihre Plots mit Poolauszahlungen verknüpft.',
    'And now let\'s try to figure out how it all works. The farmer creates a contract with a
                                unique Id. After that, he chooses a convenient option for himself - to stay in solo
                                (self pool) or join the pool using the NFT protocol, and if necessary, switch back to another
                                pool. As soon as new plots are created for the contract, the pool begins to participate
                                in the search for proof of space (proof) in the mainnet. On this step everything remains
                                the same as before the release of version 1.2.0. But in the scenario when the contract
                                "works" with the pool has been certain changes. The pool does not have the ability to
                                get direct access to the farmer\'s plots, and in order to understand whether the farmer\'s
                                plots are in the network, the pool gets the proof of space (proof) just like the
                                mainnet'=>'Und jetzt versuchen wir herauszufinden, wie alles funktioniert. Der Landwirt erstellt einen Vertrag mit einer eindeutigen ID. Danach wählt er eine bequeme Option für sich selbst-in Solo (Self Pool) zu bleiben oder sich dem Pool über das NFT-Protokoll anzuschließen und gegebenenfalls zu einem anderen Pool zurückzukehren. Sobald neue Parzellen für den Vertrag erstellt werden, beginnt der Pool an der Suche nach Platznachweisen (Proof) im Mainnet teilzunehmen. In diesem Schritt bleibt alles wie vor der Veröffentlichung von Version 1.2.0. Aber in dem Szenario, wenn der Vertrag "funktioniert"mit dem Pool hat bestimmte Änderungen. Der Pool hat nicht die Möglichkeit, direkten Zugang zu den Parzellen des Landwirts zu erhalten, und um zu verstehen, ob sich die Parzellen des Landwirts im Netzwerk befinden, erhält der Pool genau wie das Hauptnetz den Platznachweis (Beweis)',
    'Unlike the mainnet, a point is given for a proof found in the farmer\'s plots
                                instead of XCH. In fact, points are a unit of measure of capacity and activity of the farm, in proportion to which the reward is distributed on the pool.'=>'Im Gegensatz zum Mainnet wird ein Punkt für einen Beweis in den Parzellen des Landwirts anstelle von XCH angegeben. Tatsächlich sind Punkte eine Maßeinheit für Kapazität und Aktivität der Farm, in deren Verhältnis die Belohnung auf den Pool verteilt wird.',
    'Each k32 plot can receive an average of 10 points per day. Accordingly, with a
                                complexity of 1 the pool will recieve +-10 proofs within 24 hours. The number of points will grow until 1 of the pool participants finds a block, as
                                soon as this happens, this participant will receive a reward of 0.25 XCH, the pool will
                                distribute the remaining 1.75 XCH among all participants according to the rating and the points of all participants will be dropped down. If you
                                do not go too deep into the technical details of the protocol, then this is done for a
                                fair distribution of the reward, where points measure the contribution of each pool
                                participant to finding a block and those who have technical problems or simply turn off
                                the farm will earn less through out that time.'=>'Jeder k32-Plot kann durchschnittlich 10 Punkte pro Tag erhalten. Dementsprechend erhält der Pool bei einer Komplexität von 1 innerhalb von 24 Stunden +-10 Proofs. Die Anzahl der Punkte wird wachsen, bis 1 der Poolteilnehmer einen Block findet, sobald dies geschieht, erhält dieser Teilnehmer eine Belohnung von 0,25 XCH, der Pool verteilt die restlichen 1,75 XCH unter allen Teilnehmern entsprechend der Bewertung und die Punkte aller Teilnehmer werden fallen gelassen. Wenn Sie nicht zu tief in die technischen Details des Protokolls einsteigen, geschieht dies für eine faire Verteilung der Belohnung, bei der Punkte den Beitrag jedes Poolteilnehmers zum Auffinden eines Blocks messen und diejenigen, die technische Probleme haben oder einfach die Farm ausschalten, während dieser Zeit weniger verdienen.',
    'How do I replott?'=>'Wie kann ich di replott zu machen?',
    'We got your back, you can read about the process in our article about'=>'Wir haben Ihren Rücken, Sie können über den Prozess in unserem Artikel über lesen',
    'replotting.'=>'replotting.',
    'How to install the replotting software?'=>'Wie installiere ich die replootting sowtware?',
    'Don\'t worry, we broke that down for you'=>'Keine sorge, wir brach, dass unten für sie',
    'right here.'=>'genau hier.',
    'Got some other questions?'=>'Hast du noch andere Fragen?',
    'If you can not find an answer to your question in our FAQ,'=>'Wenn Sie in unseren FAQ keine Antwort auf Ihre Frage finden,',
    'feel free to reach out to us directly on our socials.'=>'fühlen Sie sich frei, uns direkt über unsere Socials zu erreichen.',
    'I would like to switch the pool. What kind of difficulties I might encounter and how to overcome them?'=>'Ich möchte den Pool wechseln. Auf welche Schwierigkeiten könnte ich stoßen und wie kann ich sie überwinden?',
    'In'=>'In',
    'this'=>'das',
    'step-by-step guide we covered everything you need to know in case you would want to make changes to an existing NFT contract.'=>'schritt-für-Schritt-Anleitung haben wir alles abgedeckt, was Sie wissen müssen, falls Sie Änderungen an einem bestehenden NFT-Vertrag vornehmen möchten.',
];
