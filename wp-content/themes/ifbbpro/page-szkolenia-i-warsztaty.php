<?php 

/*
*
*   Template Name: Szkolenia i Warsztaty
*/

get_header(); ?>


<main>

    <?php get_template_part('template-parts/top-template'); ?>

    <h2><?php wp_title('') ?></h2>

    <section class="page-container szkolenia">


        <p><?php pll_e('Prowadzimy szkolenia w formie warsztatów praktycznych z pozowania i prezentacji scenicznej połączone z wykładem teoretycznym dotyczącym przepisów i zasad sędziowania w federacji NPC IFBB Proffesional League. Warsztaty i wykłady są przeznaczone dla zawodniczek i zawodników początkujących oraz zaawansowanych. Szkolenia obejmują wszystkie konkurencje sylwetkowe (Division) rozgrywane w federacji NPC IFBB. Warsztaty są prowadzone przez trenerów Kadry Narodowej Ligi Sportowej NPC Polska, certyfikowanych międzynarodowych sędziów, doświadczonych trenerów oraz utytułowane zawodniczki i zawodników z wieloletnim stażem posiadającymi karty IFBB PRO League. <br>
Pierwsze szkolenia odbyły się 31 sierpnia w Szczytnie oraz 10 września w Tarnowie. Kolejne będzie miało miejsce w październiku w Poznaniu. Informacje o miejscach i terminach kolejnych szkoleń będą sukcesywnie umieszczane na tej stronie oraz w mediach społecznościowych Ligi Sportowej NPC Polska. ') ?></p>

        <p><?php pll_e('Wstępne zgłoszenia osób zainteresowanych szkoleniami proszę wysyłać na adres mailowy szkolenia@ifbbpro.pl<br>
W zgłoszeniu należy podać:') ?></p>

        <ol>
            <li><?php pll_e('Miejsce wybranego szkolenia z listy ogłoszonych szkoleń. </li><li>Imię i nazwisko, mail i telefon kontaktowy. </li><li>Konkurencję, w której będziesz startował/a i termin zawodów.</li><li>Staż treningowy, staż zawodniczy i wiek. ') ?></li>
        </ol>

        <p><?php pll_e('Osoba odpowiedzialna za organizację i prowadzenie szkoleń:') ?></p>


        <div class="contact-tymczak">
            <img src="/wp-content/themes/ifbbpro/img/kontakt/tymczak.png" alt="Norbert Tymczak">
            <div class="contact-tabs-desc">
                <h3>Norbert Tymczak</h3>
                <p><?php pll_e('Trener i Koordynator Kadry Narodowej <br> Ligi Sportowej NPC Polska') ?></p>

                <b><a href="https://wa.me/+48666086290" target="_blank">
                        <p class="contact-icon"> <i class="fab fa-whatsapp"></i>+48 666 086 290</p>
                    </a></b>
                <b><a href="mailto:norbert.fenix@gmail.com" target="_blank">
                        <p class="contact-icon"> <i class="fab fas fa-envelope"></i>norbert.fenix@gmail.com</p>
                    </a></b>

            </div>
        </div>


        <p><?php pll_e('Osoba odpowiedzialna za organizację i prowadzenie szkoleń:') ?></p>

        <div class="contact-piotrkowicz">
            <img src="/wp-content/themes/ifbbpro/img/kontakt/piotrkowicz.png" alt="Robert Piotrkowicz">
            <div class="contact-tabs-desc">
                <h3>Robert Piotrkowicz</h3>
                <p><?php pll_e('Oficjalny Przedstawiciel i Promotor <br/> Federacji NPC Worldwide i IFBB <br/> Professional League w Polsce <br/> Prezes i założyciel Ligi Sportowej NPC Polska') ?></p>

                <b><a href="https://wa.me/+48602650291" target="_blank">
                        <p class="contact-icon"> <i class="fab fa-whatsapp"></i> +48 602 650 291</p>
                    </a></b>
                <b><a href="mailto:office@ifbbpro.pl" target="_blank">
                        <p class="contact-icon"> <i class="fab fas fa-envelope"></i> office@ifbbpro.pl</p>
                    </a></b>
            </div>
        </div>
        <p><?php pll_e('Osoba odpowiedzialna za organizację i prowadzenie szkoleń:') ?></p>
        <div class="contact-gluchowski">
            <img src="/wp-content/themes/ifbbpro/img/kontakt/gluchowski.png" alt="Piotr Głuchowski">
            <div class="contact-tabs-desc">
                <h3>Piotr Głuchowski</h3>
                <p><?php pll_e('Trener Kadry Narodowej Mężczyzn <br/> Ligi Sportowej NPC Polska') ?></p>

                <b><a href="tel:698051141" target="_blank">
                        <p class="contact-icon"> <i class="fab fa-whatsapp"></i> +48 698 051 141</p>
                    </a></b>
                <b><a href="mailto:p.gluchowski@biogenix-bx.com" target="_blank">
                        <p class="contact-icon"> <i class="fab fas fa-envelope"></i> p.gluchowski@biogenix-bx.com</p>
                    </a></b>
            </div>
        </div>





        <p><a href="https://ifbbpro.com.pl/aktualnosci/" style="    display: inline-block;
    text-align: left;
    font-family: 'Oswald', sans-serif;
    font-weight: 500;
    color: white;
    font-size: 1.2em;
    vertical-align: middle;
    line-height: 1.4em;
    text-transform: uppercase;
    background: #031848;
    padding: 10px;
    cursor: pointer;
    -webkit-transform: skew(-10deg);
    -ms-transform: skew(-10deg);
    transform: skew(-10deg);"><?php pll_e('NAJNOWSZE SZKOLENIA');?></a></p>

    </section>

</main>


<?php get_footer(); ?>
