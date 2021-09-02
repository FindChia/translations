<?php
return [
    'Find Chia - FAQ' => 'Find Chia - Preguntas frecuentes',
    'Frequently Asked Questions' => 'Preguntas frecuentes',
    'Windows' => 'Windows',
    'MacOS: Intel' => 'MacOS: Intel',
    'Apple Silicon' => 'Apple Silicon',
    'Ubuntu/Debian' => 'Ubuntu/Debian',
    'Ubuntu/Debian ARM' => 'Ubuntu/Debian ARM',
    'CentOS/Redhat' => 'CentOS/Redhat',
    'How to start farming with FindChia Pool?' => '¿Cómo comenzar a cultivar con Find Chia Pool?',
    'Follow along with our guide over here:' => 'Siga junto con nuestra guía por aquí:',
    'Join the FindChia Pool.' =>'Únete a la FindChia Pool.',
    'What is the pool\'s capacity?' =>'¿Cuál es la capacidad de hashpool?',
    'The pool is currently in the replotting process. According to our estimates within a month we will reach the volume of 1 PTB.' =>'Hashpool se encuentra actualmente en el proceso de presentación de informes. Según nuestras estimaciones dentro de un mes alcanzaremos el volumen de 1 PTB.',
    'What is the difference between the old version of Pools and the new ones?'=>'¿Cuál es la diferencia entre la versión antigua de las Hashpool y las nuevas?',
    'The pool used to collect solo miners, then it would await for one of them to mine a block so it could take this block and divide it equally. 1 user having 1000 plots can steadily mine blocks and the remaining 1000 users having 1 plot may take some parts of his revenue, because for the network they remain in solo with 1 plot on their hands. Which brings us to the likelihood of finding a block to be somewhere around zero. In the newest version, it doesn\'t matter how many plots someone might have. The network sees the entire volume as a whole and even a miner with 1 plot can help the Pool to find the block faster. As a result, the new protocol allows us to view 1 miner with 1000 plots and 1000 miners with 1 as 2000 plots.'=>'Hashpool solía recoger mineros en solitario, entonces esperaba a que uno de ellos minara un bloque para que pudiera tomar este bloque y dividirlo por igual. 1 usuario que tiene 1000 parcelas puede minar constantemente bloques y los 1000 usuarios restantes que tienen 1 parcela pueden tomar algunas partes de sus ingresos, porque para la red permanecen en solitario con 1 parcela en sus manos. Lo que nos lleva a la probabilidad de encontrar un bloque en algún lugar alrededor de cero. En la versión más reciente, no importa cuántas parcelas alguien podría tener. La red ve todo el volumen como un todo e incluso un minero con 1 parcela puede ayudar a hashpool para encontrar el bloque más rápido. Como resultado, el nuevo protocolo nos permite ver 1 minero con 1000 parcelas y 1000 mineros con 1 como 2000 parcelas.',
    'What is the NFT contract that I\'m making with the Pool? What do points stand for? And how does it all flow together?'=>'¿Cuál es el contrato NFT que estoy haciendo con hashpool? ¿Qué significan los puntos? ¿Y cómo fluye todo junto?',
    'After creating the plot NFT and connecting to the Pool you\'ll see the NFT contract with the following figures:'=>'Después de crear la parcela NFT y conectarse al hashpool, verá el contrato NFT con las siguientes figuras:',
    'Scarlet Spider'=>'Scarlet Spider',
    '– is a unique contract name generated from the Launcher Id.'=>'- es un nombre de contrato único generado a partir del Id del lanzador.',
    'Pool'=>'Pool',
    '- the address of the pool.'=>' - la dirección de la hashpool.',
    'Status'=>'Status',
    '– the current status of the contract.'=>' – el estado actual del contrato.',
    '– the number of plots created with the address of this contract that are visible in the farm and pool.'=>'- el número de plots creadas con la dirección de este contrato que son visibles en la finca hashpool.',
    '– is the difficulty of finding points, the difficulty level is set by the pool automatically according to the number of plots.'=>'- es la dificultad de encontrar puntos, el nivel de dificultad se establece por la piscina automáticamente de acuerdo con el número de plots.',
    '– the number of points enrolled by the pool from the last payout date.'=>'- el número de puntos inscritos por el grupo desde la última fecha de hashpool.',
    '– the total number of points found since the start of the program.'=>'- el número total de puntos encontrados desde el inicio del programa.',
    '– points found in the last 24 hours but not earlier than since the start of the program.'=>'- puntos encontrados en las últimas 24 horas pero no antes del inicio del programa.',
    '– the percentage of found in 24 hours. This indicator should be above 97 % if the farm has no technical problems.'=>'- el porcentaje de encontrados en 24 horas. Este indicador debería ser superior al 97% si la explotación no tiene problemas técnicos',
    '– a unique NFT identifier that links your plots to pool payouts.'=>'- un identificador NFT único que vincula sus parcelas a los pagos del hashpool.',
    'And now let\'s try to figure out how it all works. The farmer creates a contract with a
                                unique Id. After that, he chooses a convenient option for himself - to stay in solo
                                (self pool) or join the pool using the NFT protocol, and if necessary, switch back to another
                                pool. As soon as new plots are created for the contract, the pool begins to participate
                                in the search for proof of space (proof) in the mainnet. On this step everything remains
                                the same as before the release of version 1.2.0. But in the scenario when the contract
                                "works" with the pool has been certain changes. The pool does not have the ability to
                                get direct access to the farmer\'s plots, and in order to understand whether the farmer\'s
                                plots are in the network, the pool gets the proof of space (proof) just like the
                                mainnet'=>'Y ahora vamos a tratar de averiguar cómo funciona todo. El agricultor crea un contrato con una identificación única. Después de eso, elige una opción conveniente para sí mismo: permanecer en solitario (self pool) o unirse a la piscina utilizando el protocolo NFT, y si es necesario, volver a otra piscina. Tan pronto como se crean nuevas parcelas para el contrato, el grupo comienza a participar en la búsqueda de prueba de espacio (proof) en la red principal. En este paso todo sigue igual que antes del lanzamiento de la versión 1.2.0. Pero en el escenario cuando el contrato "funciona" con la piscina ha habido ciertos cambios. El pool no tiene la capacidad de obtener acceso directo a las parcelas del agricultor, y para entender si las parcelas del agricultor están en la red, el pool obtiene la prueba de espacio (proof) al igual que la red principal',
    'Unlike the mainnet, a point is given for a proof found in the farmer\'s plots
                                instead of XCH. In fact, points are a unit of measure of capacity and activity of the farm, in proportion to which the reward is distributed on the pool.'=>'A diferencia de la red principal, se da un punto para una prueba encontrada en las parcelas del agricultor en lugar de XCH. De hecho, los puntos son una unidad de medida de la capacidad y la actividad de la granja, en proporción a la cual la recompensa se distribuye en la piscina.',
    'Each k32 plot can receive an average of 10 points per day. Accordingly, with a
                                complexity of 1 the pool will recieve +-10 proofs within 24 hours. The number of points will grow until 1 of the pool participants finds a block, as
                                soon as this happens, this participant will receive a reward of 0.25 XCH, the pool will
                                distribute the remaining 1.75 XCH among all participants according to the rating and the points of all participants will be dropped down. If you
                                do not go too deep into the technical details of the protocol, then this is done for a
                                fair distribution of the reward, where points measure the contribution of each pool
                                participant to finding a block and those who have technical problems or simply turn off
                                the farm will earn less through out that time.'=>'Cada parcela k32 puede recibir un promedio de 10 puntos por día. En consecuencia, con una complejidad de 1, la piscina recibirá + -10 pruebas dentro de las 24 horas. El número de puntos crecerá hasta que 1 de los participantes del grupo encuentre un bloque, tan pronto como esto suceda, este participante recibirá una recompensa de 0.25 XCH, el grupo distribuirá los 1.75 XCH restantes entre todos los participantes de acuerdo con la calificación y los puntos de todos los participantes se eliminarán. Si no profundizas demasiado en los detalles técnicos del protocolo, entonces esto se hace para una distribución justa de la recompensa, donde los puntos miden la contribución de cada participante de la piscina para encontrar un bloque y aquellos que tienen problemas técnicos o simplemente apagan la granja ganarán menos durante ese tiempo.',
    'How do I replott?'=>'¿Cómo lo hago replott?',
    'We got your back, you can read about the process in our article about'=>'Te apoyamos, puedes leer sobre el proceso en nuestro artículo sobre',
    'replotting.'=>'replotting.',
    'How to install the replotting software?'=>'¿Cómo instalar el software de replotting?',
    'Don\'t worry, we broke that down for you'=>'No te preocupes, lo hemos desglosado por ti.',
    'right here.'=>'justo aquí.',
    'Got some other questions?'=>'¿Tienes otras preguntas?',
    'If you can not find an answer to your question in our FAQ,'=>'Si no puede encontrar una respuesta a su pregunta en nuestras FAQ',
    'feel free to reach out to us directly on our socials.'=>'siéntase libre de comunicarse con nosotros directamente en nuestras relaciones sociales.',
    'I would like to switch the pool. What kind of difficulties I might encounter and how to overcome them?'=>'Me gustaría cambiar la hashpool. ¿Qué tipo de dificultades puedo encontrar y cómo superarlas?',
    'In'=>'En',
    'this'=>'esta',
    'step-by-step guide we covered everything you need to know in case you would want to make changes to an existing NFT contract.'=>'en la guía paso a paso, cubrimos todo lo que necesita saber en caso de que desee realizar cambios en un contrato NFT existente.',
];