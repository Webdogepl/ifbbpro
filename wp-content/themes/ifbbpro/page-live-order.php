<?php

/**
 * Template Name: Live zamówienie
 */


get_header();


get_template_part('template-parts/top-template');

?>

<?php WC()->cart->empty_cart();  ?>



<main>



    <?php if (is_page('6355')) { ?>

        <section class="page-container live-order live-order-en-pl">

            <h2>Live Streaming - Pay-per-view</h2>


            <p>Zapraszamy do obejrzenia bezpośredniej relacji wideo z zawodów wchodzących w skład Festiwalu Sportów Sylwetkowych federacji NPC Worldwide & IFBB Professional League odbywających się w Polsce w bieżącym roku. </p>

            <p>Relacja na żywo z zawodów (live streaming) będzie odbywała się w systemie Pay-Per-View w wysokiej jakości obrazu i dźwięku.

                Relację rozpoczynamy każdego dnia zawodów od godziny 10:00 aż do ich zakończenia.

                Pełny harmonogram zawodów znajduje się na naszej stronie w zakładce: <a href="/harmonogram-zawodow-schedule" target="_blank">HARMONOGRAM ZAWODÓW</a>
            </p>


            <img src="/wp-content/themes/ifbbpro/img/relacja-live/baner-sceniczny.png" width="100%" alt="banner-sceniczny">

            <section class="sponsorsBar">

                <h3 class="sponsorsBar__title">Relacja jest możliwa dzięki naszym sponsorom</h3>


                <figure class="sponsorsBar__wrapper">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/mcer.png' ?>" alt="Mcer">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/Xtreme.png' ?>" alt="xtreme fitness gyms">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/Panatta.png' ?>" alt="panatta">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/FA.png' ?>" alt="FA">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/Sklepzawodnika.png' ?>" alt="Sklep zawodnika">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/BadIron.png' ?>" alt="Bad Iron">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/biowellpolska.png' ?>" alt="Biowell">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/fiwe-color2.png' ?>" alt="Fiwe">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/13.png' ?>" alt="PRO TAN">
                </figure>

            </section>

            <div class="buttonsContainer">

                <a href="/harmonogram-zawodow-schedule/">
                    <button class="btn btn--navy">Harmonogram i miejsce zawodów</button>
                </a>
                <a href="/live-stream-page/">
                    <button class="btn btn--blue">Oglądaj relację live</button>
                </a>

            </div>


            <div class="live-product">

                <?php WC()->cart->empty_cart();  ?>


                <?php echo do_shortcode('[products columns="4" orderby="menu_order" order="desc" category="relacja-en-pl"]'); ?>

            </div>

            <div class="buttonsContainer">
                <a href="/cart">
                    <button class="btn">Przejdź do koszyka</button>
                </a>
            </div>



            <div class="live-product retransmission">

                <h2 class="retransmission-title">Zobacz nagrania z poprzednich edycji Festiwalu:</h2>

                <?php echo do_shortcode('[products columns="4" orderby="menu_order" order="desc" category="retransmisja-en-pl"]'); ?>

                <div class="buttonsContainer">
                    <a href="/cart">
                        <button class="btn">Przejdź do koszyka</button>
                    </a>
                </div>

            </div>


            <div class="requirements">

                <h2>Regulamin</h2>

                <h3>Wymagania techniczne</h3>

                <p>Do odtwarzania materiałów wymagane jest stałe połączenie z internetem o przepustowości minimum 2Mbps. Zalecana przepustowość aby móc oglądać transmisję w wysokiej jakości obrazu i dźwięku to 10Mbps+.</p>

                <h3>Komputery stacjonarne</h3>

                <ul>
                    <li>Zalecane jest powstrzymanie się od korzystania z innych aplikacji podczas odtwarzania treści cyfrowych (transmisji).</li>
                    <li>System operacyjny: zaktualizowany do najnowszej wersji Windows 10 lub macOS 10.</li>
                    <li>Minimalne wymagania sprzętowe: procesor min. 1,6GHz, pamięć RAM min. 2GB.</li>
                    <li>Przeglądarka: najnowsza wersja Chrome / Safari / Edge (chromium) / Firefox / Opera</li>
                    <li>Minimalne parametry przeglądarki internetowej: włączona obsługa plików “cookies”, włączona obsługa Java Script, Video HTML5.</li>
                </ul>

                <h3>Urządzenia mobilne</h3>

                <ul>
                    <li>Powstrzymanie się od korzystania z innych aplikacji podczas odtwarzania treści cyfrowych (transmisji).</li>
                    <li>System operacyjny: Android 9+ lub iOS 13+.</li>
                    <li>Przeglądarka: najnowsza wersja Chrome / Safari / Edge (chromium) / Instagram / Facebook.</li>
                </ul>

                <h3>Urządzenia smart tv</h3>

                <p>Obecnie nie jest gwarantowany bezproblemowy odbiór na urządzeniach Smart TV.</p>

            </div>

            <div class="rules">

                <h3>Regulamin zakupu dostępu i zasady korzystania z transmisji live:</h3>

                <ol>
                    <li>Wybierz zawody, z których chcesz oglądać transmisję. Dostęp do niej jest możliwy przez dwa dni w godzinach, w których odbywają się zawody.</li>
                    <li>Opłać transmisję z wybranych mistrzostw poprzez płatności Przelewy24 lub PayPal. </li>
                    <li>Po zaksięgowaniu Twojej płatności w naszym systemie sprzedaży możesz przejść pod <a href="/live-stream-page">TEN LINK</a> aby oglądać relację. Dostaniesz również potwierdzenie zakupu z linkiem na maila podanego w zamówieniu.</li>
                    <li>Jeśli po 30 minutach nie widzisz w swojej skrzynce odbiorczej wiadomości mailowej z potwierdzeniem zakupu oraz dostępem do transmisji, to sprawdź w pierwszej kolejności w swojej skrzynce odbiorczej foldery: spam, kosz, oferty. Jeśli nadal nie widzisz wiadomości z dostępem, to poinformuj nas o tym pisząc na adres relacja@ifbbpro.pl </li>
                    <li>Rozpoczęcie zawodów zaplanowane jest każdego dnia na godzinę 10: 00.</li>
                    <li>Harmonogram zawodów znajduje się na naszej stronie w zakładce: <a href="/harmonogram-zawodow-schedule">HARMONOGRAM ZAWODÓW</a></li>
                    <li>Logowanie do serwera z transmisją live (login to Twój adres mailowy) jest możliwe wielokrotnie ale tylko z jednego urządzenia (komputera lub smartfona), z którego logujesz się po raz pierwszy do serwera z relacją z zawodów. Próba logowania się z innego urządzenia (w tym próba skorzystania z tego samego linku na innym urządzeniu), powoduje automatyczne i trwałe zablokowanie loginu (Twojego adresu mailowego) oraz linku dostępu do serwera. W takiej sytuacji ponowne zalogowanie się do serwera z relacją będzie już niemożliwe z żadnego urządzenia, gdyż link dostępu i login będą nieaktywne. </li>
                    <li>Dostęp do transmisji live, który otrzymasz po zakupie, są własnością intelektualną osób realizujących relację multimedialną (transmitowane obrazy i dźwięk) ze sceny zawodów na zlecenie organizatora wydarzenia. Możesz z niej korzystać wyłącznie na własne potrzeby (oglądanie współzawodnictwa sportowego w formie transmisji on-line z zawodów). Bez pisemnej zgody organizatora nie możesz udostępniać i retransmitować płatnie oraz bezpłatnie otrzymanej transmisji w żadnej formie osobom trzecim. Nie możesz również zgodnie z prawem w żaden sposób dysponować wizerunkiem (udostępniać, kopiować, rozpowszechniać) startujących zawodników i innych osób przebywających na scenie lub obsługujących wydarzenie, które będą przedstawiane na udostępnionych Ci materiałach. Osoba nie stosująca się do tych wymogów może być pociągnięta do odpowiedzialności przewidzianej prawem.</li>
                    <li><b>Ewentualne problemy z dostępem do transmisji prosimy zgłaszać wysyłając wiadomość na adres relacja@ifbbpro.pl w trakcie jej trwania. Wiadomość proszę zatytułować: "Relacja live +《 imię i nazwisko》+ login/e-mail + numer zamówienia".</b></li>
                    <li><b>Reklamacje dotyczące transmisji live zgłaszane po jej zakończeniu, nie będą uwzględniane i nie mogą być podstawą ubiegania się o zwrot wniesionej opłaty.</b></li>
                </ol>

                <p>Regulamin zatwierdził 1 lutego 2021r.<br>
                    Robert Piotrkowicz</p>

                <ul>
                    <li>Oficjalny Przedstawiciel i Promotor Federacji NPC Worldwide i IFBB Professional League w Polsce</li>
                    <li>IFBB Professional League Champion</li>
                    <li>Prezes Polskiej Ligi Sportów Sylwetkowych NPC Polska</li>
                    <li>Phone/WhatsApp:+48 602 650 291</li>
                    <li>Office mail: office@ifbbpro.pl</li>
                </ul>



            </div>


        </section>


    <?php } else { ?>

        <section class="page-container live-order">

            <h2>Live Streaming - Pay-per-view</h2>


            <p>We invite you to watch the video from the competitions that are part of the International Festival of Bodybuilding and Fitness of the NPC Worldwide & IFBB Professional League federation taking place in Poland this year.</p>

            <p>Live coverage of the competition will take place in the Pay-Per-View system in high image and sound quality.

                We start the coverage every day of the competition from 10:00 am until its end.

                The full schedule of the competition is available on our website in the tab: <a href="/schedule" target="_blank">SCHEDULE AND VENUE</a>
            </p>


            <img src="/wp-content/themes/ifbbpro/img/relacja-live/baner-sceniczny.png" width="100%" alt="banner-sceniczny">

            <section class="sponsorsBar">

                <h3 class="sponsorsBar__title">Live stream is possible thanks to our sponsors</h3>


                <figure class="sponsorsBar__wrapper">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/mcer.png' ?>" alt="Mcer">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/Xtreme.png' ?>" alt="xtreme fitness gyms">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/Panatta.png' ?>" alt="panatta">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/FA.png' ?>" alt="FA">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/relacja-live/Sklepzawodnika.png' ?>" alt="Sklep zawodnika">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/BadIron.png' ?>" alt="Bad Iron">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/biowellpolska.png' ?>" alt="Biowell">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/fiwe-color2.png' ?>" alt="Fiwe">
                    <img class="sponsorsBar__img" src="<?php echo get_template_directory_uri() . '/img/partnerzy/13.png' ?>" alt="PRO TAN">
                </figure>

            </section>


            <div class="buttonsContainer">

                <a href="/schedule/">
                    <button class="btn btn--navy">Schedule and venue</button>
                </a>

                <a href="/live-stream-page-en">
                    <button class="btn btn--blue">Watch live stream</button>
                </a>

            </div>


            <div class="live-product">

                <?php WC()->cart->empty_cart(); ?>


                <?php echo do_shortcode('[products columns="4" orderby="menu_order" order="desc" category="Relacja-en"]'); ?>

                <div class="buttonsContainer">
                    <a href="/cart">
                        <button class="btn">Go to cart</button>
                    </a>
                </div>
            </div>



            <div class="live-product retransmission">

                <h2 class="retransmission-title">See records from former editions of Festival:</h2>

                <?php echo do_shortcode('[products columns="4" orderby="menu_order" order="desc" category="retransmisja-en"]'); ?>

                <div class="buttonsContainer">
                    <a href="/cart">
                        <button class="btn">Go to cart</button>
                    </a>
                </div>

            </div>

            <div class="requirements">

                <h2>Regulations</h2>

                <h3>Technical requirements</h3>

                <p>A permanent connection to the Internet with a minimum bandwidth of 2Mbps is required to play the materials. The recommended bandwidth to be able to watch the transmission in high quality picture and sound is 10Mbps +.</p>

                <h3>Desktop computers</h3>

                <ul>
                    <li>It is recommended that you refrain from using other applications while playing digital content (broadcasts).</li>
                    <li>Operating System: Updated to the latest version of Windows 10 or macOS 10.</li>
                    <li>Minimum hardware requirements: processor min. 1.6GHz, RAM memory min. 2GB.</li>
                    <li>Browser: the latest version of Chrome / Safari / Edge (chromium) / Firefox / Opera</li>
                    <li>Minimal parameters of the web browser: cookies enabled, Java Script, Video HTML5 enabled.</li>
                </ul>

                <h3>Mobile devices</h3>

                <ul>
                    <li>Refrain from using other applications when playing digital content (broadcasts).</li>
                    <li>Operating system: Android 9+ or iOS 13+.</li>
                    <li>Browser: Chrome / Safari / Edge (chromium) / Instagram / Facebook latest version.</li>
                </ul>

                <h3>Smart tv devices</h3>

                <p>Currently, trouble-free reception on Smart TV devices is not guaranteed.</p>

            </div>

            <div class="rules">

                <h3>Regulations for the purchase of access and rules for using live broadcasts:</h3>

                <ol>
                    <li>Select the event you want to watch the broadcast from. Access to it is possible for two days during the competition hours.</li>
                    <li>Pay for the broadcast of selected championships via Przelewy24 or PayPal.</li>
                    <li>After your payment is credited to our sales system, you will be able to watch Live Stream at <a href="/live-stream-page-en">THIS LINK</a>. You will also receive order confirmation with link on email adress.</li>
                    <li>If after 30 minutes you cannot see the e-mail with the purchase confirmation and access to the transmission in your inbox, first check the folders in your inbox: spam, trash, offers. If you still do not see the message with access, please let us know by writing to the address relacja@ifbbpro.pl </li>
                    <li>The competition is scheduled to start each day at 10:00.</li>
                    <li>The competition schedule can be found on our website in the tab: <a href="/schedule/">SCHEDULE AND VENUE</a></li>
                    <li>Logging in to the server with live transmission (login is your e-mail address) is possible many times, but only from one device (computer or smartphone) from which you log in for the first time to the server with the competition report. An attempt to log in from another device (including an attempt to use the same link on a different device) causes an automatic and permanent blocking of the login (your e-mail address) and the link to access the server. In such a situation, it will be impossible to log in to the server with the relationship again from any device, because the access link and login will be inactive.</li>
                    <li>The access to live broadcasts, which you will receive after purchase, is the intellectual property of people implementing the multimedia report (transmitted images and sound) from the competition stage at the request of the event organizer. You can use it only for your own needs (watching sports competitions in the form of online broadcasts of the competition). Without the written consent of the organizer, you may not share and retransmit the received broadcast in any form, free of charge, in any form. You may also not legally use the image (share, copy, distribute) of the competing competitors and other people present on the stage or serving the event, which will be presented on the materials provided to you. A person who does not comply with these requirements may be held liable under the law.</li>
                    <li>Any problems with access to the transmission should be reported by sending a message to the address relacja@ifbbpro.pl during its duration. Please name the message: "Live coverage + 《name and surname》 + login / e-mail + order number".</li>
                    <li>Complaints regarding the live broadcast submitted after its end will not be considered and cannot be the basis for applying for a refund of the fee paid.</li>
                </ol>

                <p>The regulations were approved on February 1, 2021 by<br>
                    Robert Piotrkowicz</p>

                <ul>
                    <li>▪︎IFBB Professional League Champion</li>
                    <li> ▪︎Official Representative and Promoter of the NPC Worldwide & IFBB Professional League in Poland </li>
                    <li> ▪︎President of the NPC Sports League Polska </li>
                    <li> ▪︎Phone/WhatsApp: +48 602 650 291</li>
                    <li> ▪︎Office mail: office@ifbbpro.pl</li>
                </ul>



            </div>


        </section>

    <?php } ?>

</main>


<?php get_template_part('template-parts/bottom-template');
?>