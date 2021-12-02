<?php
/**
 * Template Name: glosowanie
 *
*/
get_header(); 



global $wpdb;    


?>





<?php get_template_part('template-parts/top-template'); ?>

<main>

    <div id="slide_down" class="page-container">



        <div class="vote-sponsors">
            <h3><?php pll_e('FUNDATORAMI NAGRÓD DLA ZWYCIĘZCÓW SĄ FIRMY:')?></h3>


            <figure>
                <img src="<?php echo get_template_directory_uri() . '/img/logo/sklepzawodnika.png'?>" alt="sklep zawodnika">
                <figcaption><?php pll_e('ZŁOTY SPONSOR')?></figcaption>
            </figure>

            <figure>
                <img src="<?php echo get_template_directory_uri() . '/img/logo/22.png'?>" alt="FA">
                <figcaption><?php pll_e('ZŁOTY SPONSOR')?></figcaption>
            </figure>

            <figure>
                <img src="<?php echo get_template_directory_uri() . '/img/panatta.png'?>" alt="panatta">
                <figcaption><?php pll_e('PLATYNOWY SPONSOR')?></figcaption>
            </figure>

            <figure>
                <img src="<?php echo get_template_directory_uri() . '/img/logo/extreme-fitness-gyms.png'?>" alt="xtreme fitness gyms">
                <figcaption><?php pll_e('PARTNER STRATEGICZNY')?></figcaption>
            </figure>

        </div>




        <h1><?php pll_e('Głosowanie publiczności'); ?></h1>

        <section class="content">


            <style>
                .votes_partners {
                    margin: 0 auto 40px;
                    max-width: 800px;
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                }

                .votes {
                    max-width: 500px;
                    width: 90%;
                    margin: 0 auto;
                }

                .votes_err {
                    font-weight: bold;
                    color: red;
                    font-size: 14px;
                    margin: 10px auto;

                }

                .votes_ok {
                    font-weight: bold;
                    color: green;
                    font-size: 14px;
                    margin: 10px auto;
                }

                .votes h2 {
                    margin: 40px 0 20px;
                    font-size: 16px;
                }

                .votes_el {
                    margin: 20px 0;
                }

                .votes input[type=text],
                .votes input[type=email] {
                    padding: 3px 5px;
                }

                .votes input[type=submit] {
                    margin: 0 auto;
                }

                @media (min-width:300px) and (max-width:900px) {

                    .votes_el span,
                    .votes_el label {
                        display: block;
                    }

                    .page-container {
                        margin-top: 40px !important;
                    }


                    .votes_partners img {
                        max-width: 80%;
                        display: block;

                    }

                }

            </style>

            <form method="post" class="votes" action="">

                <?php
			
			$err=array();
			
			if($_POST['action']){
				
				
				
				





				if(!$_POST['nr_k'] && !$_POST['nr_m']){
					$err[]=pll__('Musisz podać zawodnika lub zawodniczkę');
				}
				
				if($_POST['nr_k']){
					
				
					$result = $wpdb->get_results( "SELECT * FROM `votes` WHERE `sex` LIKE 'k' AND `number` = ".intval($_POST['nr_k'])." AND `day` = ".intval($_POST['day_k'])."
					and (
					ip = '".$wpdb->esc_like($_SERVER['REMOTE_ADDR'])."' or email = '".$wpdb->esc_like($_POST['email'])."'
					)
					
					");
					
					if(!empty($result) || !empty($_COOKIES['mz_k_'.intval($_POST['day_k'])]) ){
						$err[]=pll__('Głosowałeś już na zawodniczkę z tego dnia');
					}
					
				}
				
				if($_POST['nr_m']){
					
				
					$result = $wpdb->get_results( "SELECT * FROM `votes` WHERE `sex` LIKE 'm' AND `number` = ".intval($_POST['nr_m'])." AND `day` = ".intval($_POST['day_m'])."
					and (
					ip = '".$wpdb->esc_like($_SERVER['REMOTE_ADDR'])."' or email = '".$wpdb->esc_like($_POST['email'])."'
					)
					
					");
					if(!empty($result) || !empty($_COOKIES['mz_m_'.intval($_POST['day_m'])]) ){
						$err[]=pll__('Głosowałeś już na zawodnika z tego dnia');
					}
					
				}
				
				
				
				
				

				if(!empty($err)){
					echo '<div class="votes_err">'.implode('<br>',$err).'</div>';
				}else{
					
					if($_POST['nr_k']){
						$wpdb->query( "INSERT INTO `votes` (`id`, `created_at`, `ip`, `email`, `sex`, `number`, `day`) 
						VALUES (NULL, '".date('Y-m-d H:i:s')."', '".$_SERVER['REMOTE_ADDR']."', '".$wpdb->esc_like($_POST['email'])."', 'k', '".intval($_POST['nr_k'])."', '".intval($_POST['day_k'])."');");
						
						setcookie('mz_k_'.intval($_POST['day_k']), '1', time()+3600*24*200);
					}
					
					if($_POST['nr_m']){
						$wpdb->query( "INSERT INTO `votes` (`id`, `created_at`, `ip`, `email`, `sex`, `number`, `day`) 
						VALUES (NULL, '".date('Y-m-d H:i:s')."', '".$_SERVER['REMOTE_ADDR']."', '".$wpdb->esc_like($_POST['email'])."', 'm', '".intval($_POST['nr_m'])."', '".intval($_POST['day_m'])."');");
						
						setcookie('mz_m_'.intval($_POST['day_m']), '1', time()+3600*24*200);
					}
					
					echo '<div class="votes_ok">'.pll__('Głos oddany!').'</div>';
					$_POST = array();
					
				}


			}
			
			
			
			
			
			
			
			
			?>


                <div class="votes_box">
                    <h2><?php pll_e('Zawodniczka publiczności'); ?></h2>


                    <div class="votes_el">
                        <span><?php pll_e('Numer zawodniczki'); ?>: </span>
                        <input type="text" name="nr_k" value="<?php echo htmlspecialchars($_POST['nr_k']); ?>">
                    </div>

                    <div class="votes_el">
                        <span><?php pll_e('Dzień zawodów'); ?>: </span>
                        <label><input type="radio" name="day_k" value="1" <?php if(empty($_POST['day_k']) || $_POST['day_k']==1){echo ' checked="checked" ';} ?>> <?php pll_e('pierwszy'); ?></label>
                        <label><input type="radio" name="day_k" value="2" <?php if($_POST['day_k']==2){echo ' checked="checked" ';} ?>> <?php pll_e('drugi'); ?></label>
                        <label><input type="radio" name="day_k" value="3" <?php if($_POST['day_k']==3){echo ' checked="checked" ';} ?>> <?php pll_e('trzeci'); ?></label>
                    </div>
                </div>




                <div class="votes_box">
                    <h2><?php pll_e('Zawodnik publiczności'); ?></h2>


                    <div class="votes_el">
                        <span><?php pll_e('Numer zawodnika'); ?>: </span>
                        <input type="text" name="nr_m" value="<?php echo htmlspecialchars($_POST['nr_m']); ?>">
                    </div>

                    <div class="votes_el">
                        <span><?php pll_e('Dzień zawodów'); ?>: </span>
                        <label><input type="radio" name="day_m" value="1" <?php if(empty($_POST['day_m']) || $_POST['day_k']==1){echo ' checked="checked" ';} ?>> <?php pll_e('pierwszy'); ?></label>
                        <label><input type="radio" name="day_m" value="2" <?php if($_POST['day_m']==2){echo ' checked="checked" ';} ?>> <?php pll_e('drugi'); ?></label>
                        <label><input type="radio" name="day_m" value="3" <?php if($_POST['day_m']==3){echo ' checked="checked" ';} ?>> <?php pll_e('trzeci'); ?></label>
                    </div>
                </div>


                <label>
                    <input type="checkbox" name="rules" required value="1" <?php if($_POST['rules']){echo ' checked="checked" ';} ?>> <?php pll_e('Zgadzam się na przetwarzanie moich danych osobowych w celu uczestnictwa w głosowaniu'); ?>
                </label>





                <div class="votes_el">
                    <span><?php pll_e('Twój adres e-mail'); ?>: </span>
                    <input type="email" name="email" required value="<?php echo htmlspecialchars($_POST['email']); ?>">
                </div>

                <div class="votes_el">

                    <script>
                        document.write('<input type="hidden" name="action" value="send">');

                    </script>
                    <input type="submit" id="vote-submit" name="sb" value="Głosuj">
                </div>

            </form>
            <?php
		
		
		?>




        </section>


        <h3><?php pll_e('PARTNERZY I SPONSORZY FEDERACJI NPC WORLDWIDE POLSKA ORAZ FESTIWALU NPC:')?></h3>

        <img class="scianka" src="<?php echo get_template_directory_uri() . '/img/scianka-relacja-live.png'?>" alt="sponsorzy">


    </div>

</main>

<?php get_template_part('template-parts/bottom-template') ?>
