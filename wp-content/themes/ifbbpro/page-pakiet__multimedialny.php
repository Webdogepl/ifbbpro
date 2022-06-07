<?php

/**
 * Template Name: Pakiet multimedialny
 */


get_header();


get_template_part('template-parts/top-template'); ?>

<main>


    <?php
    //PL
    if (is_page('6793')) { ?>


        <div class="page-container multimedia-package-page multimedia-package-en-pl">

            <h1><?php wp_title('') ?></h1>

            <div class="multimedia-package">

                <?php add_filter('custom_menu_order', '__return_true'); ?>



                <?php WC()->cart->empty_cart();


                echo do_shortcode('[products columns="4" orderby="menu_order" order="desc" category="pakiety-en-pl"]'); ?>

            </div>

            <p class="cart-button"><a href="/cart">Przejdź do koszyka <i class="fas fa-angle-double-right"></i></a></p>


            <div class="multimedia-package__description">

                <h3>PAKIET MULTIMEDIALNY OBEJMUJE:</h3>

                <h4>• Relację wideo w wysokiej jakości w formacie MPG4 z całego Twojego występu na scenie z dwóch dni zawodów.
                    Relacja wideo zawiera:</h4>

                <ul>
                    <li>- wszystkie kategorie, w których startujesz</li>
                    <li>- prezentację indywidualną</li>
                    <li>- porównania w półfinałach i finałach</li>
                    <li>- program dowolny</li>
                    <li>- ceremonię nagradzania finalistów</li>
                </ul>

                <h4>• Pakiet zdjęć wysokiej jakości w formacie JPEG z całego Twojego występu na scenie z dwóch dni zawodów.
                    Pakiet zdjęć zawiera:</h4>

                <ul>

                    <li>- wszystkie kategorie, w których startujesz</li>
                    <li>- prezentację indywidualną</li>
                    <li>- zwroty i pozy obowiązkowe</li>
                    <li>- porównania w półfinałach i finałach</li>
                    <li>- ceremonię nagradzania finalistów</li>

                </ul>

                <h3>DOSTĘP DO SERWERA Z PAKIETEM MULTIMEDIALNYM</h3>

                <p>• Dostęp do serwera, na którym znajduje się Twoja relacja wideo oraz pakiet zdjęć ze sceny zawodów, otrzymasz w terminie maksymalnie 4 dni po zakończeniu zawodów na podany podczas rejestracji adres mailowy. Jeśli nie otrzymasz wiadomości z dostępem do naszego serwera w ciągu tego czasu, to w pierwszej kolejności sprawdź foldery spam i kosz Twojej poczty, a następnie poinformuj nas o tym, że nie otrzymałeś dostępu do zamówionego pakietu multimedialnego.</p>

                <p><b>Kontakt:</b><br>
                    WhatsApp: +48 602 650 291<br>
                    Mail: office@ifbbpro.pl
                </p>

                <p>• Aby pobrać zdjęcia oraz relację wideo (po otrzymaniu wiadomości z dostępem do naszego serwera) będziesz potrzebował komputera (ewentualnie smartfona) i odpowiedniej szybkości łącza internetowego lub WiFi.</p>

                <p>• Po uzyskaniu dostępu do serwera ze swoim pakietem multimedialnym będziesz miał 30 dni na pobranie i wykonanie kopii zapasowej zamówionych filmów i zdjęć na swoim urządzeniu.</p>

                <p>• Zdjęcia i filmy, które otrzymasz, są własnością intelektualną osób realizujących relację multimedialną ze sceny na zlecenie organizatora zawodów. Możesz je wykorzystywać dowolnie na własne potrzeby (strona internetowa, media i portale społecznościowe itp). Bez pisemnej zgody organizatora nie możesz udostępniać płatnie oraz bezpłatnie otrzymanych zdjęć i filmów osobom trzecim, gdyż nie możesz zgodnie z prawem dysponować wizerunkiem innych zawodników i osób obsługujących wydarzenie, które mogą znaleźć się na udostępnionych Ci materiałach. Osoba nie stosująca się do tych wymogów może być pociągnięta do odpowiedzialności prawnej.</p>


            </div>

            <p class="cart-button"><a href="/koszyk">Przejdź do koszyka <i class="fas fa-angle-double-right"></i></a></p>

        </div>

    <?php
        //ENG
    } else { ?>

        <div class="page-container multimedia-package-page">

            <h1><?php wp_title('') ?></h1>

            <div class="multimedia-package">

                <?php add_filter('custom_menu_order', '__return_true'); ?>

                <?php WC()->cart->empty_cart();


                echo do_shortcode('[products columns="4" orderby="menu_order" order="desc" category="pakiety-ang"]'); ?>

            </div>

            <p class="cart-button"><a href="/cart">Go to cart <i class="fas fa-angle-double-right"></i></a></p>


            <div class="multimedia-package__description">

                <h3>THE MULTIMEDIA PACKAGE INCLUDES:</h3>

                <h4>• High-quality video coverage in MPG4 format of your entire stage performance during the two days of competition.The video report includes:</h4>

                <ul>
                    <li>all categories in which you start</li>
                    <li>individual presentation</li>
                    <li>comparisons in the semi-finals and finals</li>
                    <li>free program</li>
                    <li>Finalists Award Ceremony</li>
                </ul>

                <h4>• A high-quality JPEG photo package of your entire stage performance from the two days of competition. The photo package includes:</h4>

                <ul>
                    <li>all categories in which you start</li>
                    <li>individual presentation</li>
                    <li>obligatory returns and poses</li>
                    <li>comparisons in the semi-finals and finals</li>
                    <li>Finalists Award Ceremony</li>
                </ul>

                <h3>ACCESS TO A SERVER WITH A MULTIMEDIA PACKAGE</h3>

                <p>• You will receive access to the server on which your video report is located and the package of photos from the competition stage within a maximum of 4 days after the end of the competition to the e-mail address provided during registration. If you do not receive the message with access to our server within this time, first check your spam folders and the trash bin of your mail, and then inform us that you have not received access to the ordered multimedia package.</p>

                <p><b>Contact:</b><br>
                    WhatsApp: +48 602 650 291<br>
                    Mail: office@ifbbpro.pl
                </p>

                <p>• To download photos and a video report (after receiving a message with access to our server) you will need a computer (or a smartphone) and an appropriate internet connection speed or WiFi.</p>

                <p>• After accessing the server with your media package, you will have 30 days to download and backup the ordered videos and photos to your device.</p>

                <p>• The photos and videos that you will receive are the intellectual property of the people involved in the multimedia coverage of the stage at the request of the competition organizer. You can use them freely for your own needs (website, media and social networks, etc.). Without the written consent of the organizer, you may not share the photos and videos received free of charge with third parties, because you may not legally have the image of other competitors and people serving the event, which may appear on the materials provided to you. A person who does not comply with these requirements may be held legally liable.</p>


            </div>

            <p class="cart-button"><a href="/cart">Go to cart <i class="fas fa-angle-double-right"></i></a></p>

        </div>



    <?php } ?>

</main>


<?php get_template_part('template-parts/bottom-template'); ?>


<?php get_footer(); ?>