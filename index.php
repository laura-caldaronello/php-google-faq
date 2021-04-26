<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
</head>
<body>
    
    <!--    struttura del dato:
                $data = [
                    [
                        LIVELLO 1
                        'question' => 'testo della domanda'
                        'answer' => [
                            LIVELLO 2
                            'p' => [
                                LIVELLO 3
                                'text' => 'testo del paragrafo',
                                'links' => [
                                    LIVELLO 4
                                    'what' => 'porzione di testo in blu',
                                    'where' => 'dove porta (#)',
                                    'icon' => 'icona'
                                ]
                            ],
                            'list' => [
                                'p' => [
                                    'text' => 'testo del punto della lista'
                                ],
                                'list' => [
                                    'p' => [
                                        LIVELLO 5
                                        'text' => 'testo del punto della lista annidata'
                                    ]
                                ]
                            ],
                            'section' => [
                                'title' => 'titolo del paragrafo più complesso',
                                'p' => [
                                    'text' => 'testo del paragrafo'
                                ]
                            ]
                        ]
                    ]
                ] -->

    <!-- dato -->
    <?php
        $data = [
            [
                'question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
                'answer' => [
                    'p1' => [
                        'text' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.',
                        'links' => [
                            [
                                'what' => 'decisione della Corte di giustizia dell\'Unione europea',
                                'where' => '#'
                            ]
                        ]
                    ],
                    'p2' => [
                        'text' => 'Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.'
                    ],
                    'p3' => [
                        'text' => 'Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.',
                        'links' => [
                            [
                                'what' => 'modulo web',
                                'where' => '#'
                            ]
                        ]
                    ],
                    'p4' => [
                        'text' => 'Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.'
                    ],
                    'p5' => [
                        'text' => 'Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.'
                    ]
                ]
            ],
            [
                'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
                'answer' => [
                    'p1' => [
                        'text' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.'
                    ],
                    'p2' => [
                        'text' => 'Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.'
                    ],
                    'p3' => [
                        'text' => 'Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.',
                        'links' => [
                            [
                                'what' => 'Centro Google per la sicurezza online',
                                'where' => '#'
                            ]
                        ]
                    ],
                    'p4' => [
                        'text' => 'Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.',
                        'links' => [
                            [
                                'what' => 'Scopri',
                                'where' => '#'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'question' => 'Perché il mio account è associato a un paese?',
                'answer' => [
                    'p1' => [
                        'text' => 'Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:'
                    ],
                    'l1' => [
                        'p1' => [
                            'text' => 'La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:'
                        ],
                        'l1' => [
                            'p1' => [
                                'text' => 'Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell\'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.'
                            ],
                            'p2' => [
                                'text' => 'Google LLC, con sede negli Stati Uniti, per il resto del mondo.'
                            ]
                        ],
                        'p2' => [
                            'text' => 'La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.'
                        ]
                    ],
                    'p2' => [
                        'text' => 'Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.'
                    ],
                    's1' => [
                        'title' => 'Stabilire il paese associato al tuo account',
                        'p1' => [
                            'text' => 'Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell\'ultimo anno.'
                        ],
                        'p2' => [
                            'text' => 'I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l\'associazione del paese.'
                        ],
                        'p3' => [
                            'text' => 'Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l\'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato.',
                            'links' => [
                                [
                                    'what' => 'Contattaci',
                                    'where' => '#',
                                    'icon' => ''
                                ]
                            ]    
                        ]
                    ]
                ]
            ],
            [
                'question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
                'answer' => [
                    'p1' => [
                        'text' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.',
                        'links' => [
                            [
                                'what' => 'contattare il webmaster',
                                'where' => '#'
                            ],
                            [
                                'what' => 'fai clic qui',
                                'where' => '#'
                            ],
                            [
                                'what' => 'visitare la nostra pagina di assistenza per avere ulteriori informazioni',
                                'where' => '#'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'question' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
                'answer' => [
                    'p1' => [
                        'text' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\' esatte parole chiave che hanno determinato il clic su un annuncio.',
                        'links' => [
                            [
                                'what' => 'URL referrer',
                                'where' => '#'
                            ],
                            [
                                'what' => 'qui',
                                'where' => '#'
                            ]
                        ]
                    ]
                ]
            ]
        ];
    ?>
    <!-- /dato -->
    
    <header>
        <div id="header-top">
            <div>
                <img src="img/Google_2015_logo-512.png">
                <h2>Privacy e Termini</h2>
            </div>
            <div>
                <div>
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </div>
                <div>L</div>
            </div>
        </div>
        <nav>
            <ul>
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di servizio</li>
                <li>Tecnologie</li>
                <li>Domande frequenti</li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- testo vero e proprio -->
        <?php
            foreach ($data as $level1key => $level1value) {
        ?>
        <h2> <?php echo $level1value['question']; ?> </h2>
        <?php
                foreach ($level1value['answer'] as $level2key => $level2value) {
                    if (substr($level2key,0,1) == 'p' && ctype_digit(substr($level2key,1,1))) { /* paragrafo: cioè se la prima lettera è p e subito dopo c'è un numero, quindi ho qualcosa del tipo p1, p2,... */
        ?>
        <p> <?php echo $level2value['text']; ?> </p>
        <?php                
                    }
                    elseif (substr($level2key,0,1) == 'l' && ctype_digit(substr($level2key,1,1))) { /* lista */
                        echo '<ol>';
                        foreach ($level2value as $level3key => $level3value) {
                            echo '<li>';
                            if (substr($level2key,0,1) == 'p' && ctype_digit(substr($level2key,1,1))) { /* paragrafo */
                                echo $level3value['text'];
                            }
                            elseif (substr($level2key,0,1) == 'l' && ctype_digit(substr($level2key,1,1))) { /* lista */
                                echo '<ol>';
                                foreach ($level3value as $level4key => $level4value) {
                                    echo '<li>';
                                    echo $level4value['text']; /* e mi fermo a questo livello con l'annidamento delle liste */
                                    echo '</li>';
                                };
                                echo '</ol>';
                            }; /* non ci sono altre possibilità */
                            echo '</li>';
                        };
                        echo '</ol>';
                    }
                    elseif (substr($level2key,0,1) == 's' && ctype_digit(substr($level2key,1,1))) { /* section */
                        foreach ($level2value as $level3key => $level3value) {
                            if ($level3key == 'title') {
        ?>
        <h3> <?php echo $level3value; ?> </h3>
        <?php                                      
                            }
                            elseif (substr($level3key,0,1) == 'p' && ctype_digit(substr($level3key,1,1))) {
        ?>
        <p> <?php echo $level3value['text']; ?> </p>
        <?php                                      
                            }; /* non ci sono altre possibilità */
                        };
                    }; /* non ci sono altre possibilità */
                };
            };
        ?>
        <!-- /testo vero e proprio -->
    </main>

</body>
</html>