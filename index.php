<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il "Database" e la visualizzazione di queste domande e risposte con PHP. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Google FAQ</title>
        <!-- css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!-- font-awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        <header>
            <div class="header-top">
                <div class="logo-section">
                    <a href="#">
                        <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
                        <span>Privacy e termini</span>
                    </a>
                </div>

                <div class="users-buttons">
                    <a href="">
                        <img src="https://cdn.iconscout.com/icon/free/png-256/dots-nine-3604181-3003491.png" alt="">
                    </a>
                    <a href="">
                        <img src="https://ssl.gstatic.com/images/branding/product/1x/avatar_circle_blue_512dp.png" alt="">
                    </a>
                </div>
            </div>

            <nav>
                <?php 
                    $navLinks = [
                        "Introduzione",
                        "Norme sulla privacy",
                        "Termini di servizio",
                        "Tecnologie",
                        "Domande frequenti"
                    ]
                ?>
            
                <ul class="list-inline">
                    <?php foreach ($navLinks as $link) { ?>
                        <li>
                            <a href="#">
                                <?= $link ?>
                            </a>                    
                        </li>
                    <?php    
                    }
                    ?>
                </ul>

            </nav>

        </header>
        
        <main>
            <div class="container">
                <?php 
                $faqs = [

                    [
                        'question'=> "<h2>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h2>",
                        'answer' => "<p>La recente <a>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non pi?? rilevanti, o eccessivi.</p>
                        
                        <p>Da quando questa decisione ?? stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perch?? dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p>
                    
                        <p>Per presentare una richiesta di rimozione, compila questo <a>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodich?? valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perch?? abbiamo gi?? ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi ?? un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorit?? garante per la protezione dei dati personali nel tuo paese.</p>
                        
                        <p>Nei prossimi mesi lavoreremo a stretto contatto con le autorit?? per la protezione dei dati e con altre autorit?? per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>
                        
                        <p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.</p>"
                    ],
                    [
                        'question'=> "<h2>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2>",
                        'answer' => "<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi ?? imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>

                        <p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora pi?? efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Cos??, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>
                        
                        <p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a>Centro Google per la sicurezza online</a>.</p>
                        
                        <p><a>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>"
                    ],
                    [
                        'question'=> "<h2>Perch?? il mio account ?? associato a un paese?</h2>",
                        'answer' => "<p>Il tuo account ?? associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:</p>

                        <ol>
                            <li>
                                <p>La societ?? consociata Google che offre i servizi, tratta le tue informazioni ed ?? responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due societ?? seguenti:</p>
                                <ol>
                                    <li>
                                    Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
                                    </li>

                                    <li>
                                    Google LLC, con sede negli Stati Uniti, per il resto del mondo.
                                    </li>
                                </ol>
                            </li> 
                            
                            <li><p>La versione dei termini che regola il nostro rapporto, che pu?? variare in base alle leggi locali.</p>
                        </ol>
                        
                        <p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla societ?? consociata che li offre o dal paese a cui ?? associato il tuo account.</p>"
                    ],
                    [
                        'question'=> "<h3>Stabilire il paese associato al tuo account</h3>",
                        'answer' => "<p>Quando crei un nuovo Account Google, lo associamo a un paese in base a dove ?? stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso pi?? tempo nell'ultimo anno.</p>

                        <p>I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.</p>
                        
                        <p>Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato.</p>"
                    ],
                    [
                        'question'=> "<h2>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</h2>",
                        'answer' => "<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avr?? rilevato l'aggiornamento, le informazioni non verranno pi?? visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, ?? inoltre possibile <a>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.</p>"
                    ],
                    [
                        'question'=> "<h2>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</h2>",
                        'answer' => "<p>In alcuni casi s??. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento pu?? fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.</p>"
                    ]
                ];

                foreach ($faqs as $faq) { ?>
                    <section>
                    
                        <?= $faq["question"] ?>
                        <?= $faq["answer"] ?>

                    </section>
                    <?php
                }
                ?>
            </div>
        </main>
    </body>
</html>