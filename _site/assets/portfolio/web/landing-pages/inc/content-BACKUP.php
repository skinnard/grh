<?php

$remaining = $goal - $current;
$fill = $current/$goal * 100;
$page_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$myurl= $_SERVER['HTTP_HOST'];
if ($myurl == 'offredegroupebell.ca' OR $myurl == 'www.offredegroupebell.ca') {
 $lang = 'fr';
 $togglelink = "http://bellgroupoffer.ca$_SERVER[REQUEST_URI]";    
}else{
 $lang = 'en';
 $togglelink = "http://offredegroupebell.ca$_SERVER[REQUEST_URI]";
}
?>
    <!DOCTYPE html>
    <!--[if lte IE 7 ]>    <html class="no-js ie7"> <![endif]-->
    <!--[if lte IE 8 ]>    <html class="no-js ie8 "> <![endif]-->
    <html>
    <!--<![endif]-->

    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />
        <?php if ($lang === 'fr') { ?>
        <title>Offre de groupe Bell</title>
        <?php } else { ?>
        <title>Bell Group Offer</title>
        <?php } ?>
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />

        <?php if ($FTTN != true && $current< $goal) { ?>

            <style type="text/css" media="screen">

                #main-wrapper {
                    position: relative;
                }

                #main-right {
                    position: absolute;
                    right: 0;
                    bottom: 0;
                }

            </style>

        <?php } ?>

    </head>

    

    <body<?php if ($current>= $goal) { ?> class="congrats"
        <?php } ?>>

        <?php 
            // INCLUDE TRACKING FILE BASED ON LANGUAGE
            if ($lang === 'fr') { 
                include_once("../analyticstracking-fr.php");
            } else {
                include_once("../analyticstracking.php");    
            }

        ?>
        <!-- HEADER - START -->
        <div class="wrapper header">
            <div class="container">
                <a href="http://www.bell.ca<?php if ($lang === 'fr') { ?>/Accueil<?php } ?>" target="_blank"><img src="../img/logo.png" alt="Bell" width="60" height="33"></a>

                <?php // TOGGLE FOR MANDARIN/EN PAGES
                 if($m_toggle == true) { ?>
                  <!-- <a href="http://bellgroupoffer.ca/lovecondos-m"><h4 class="toggle">中文</h4></a> -->
                <?php } ?>

                <?php // TOGGLE FOR FR/EN PAGES
                if ($toggle === true) {
                    if ($lang === 'fr') { ?>
                        <a href="<?php echo $togglelink;?>"><h4 class="toggle">English</h4></a>
                    <?php } else { ?>
                        <a href="<?php echo $togglelink;?>"><h4 class="toggle">Fran&ccedil;ais</h4></a>
                    <?php } // END LANG CONDITIONAL
                } // END TOGGLE CONDITIONAL ?>
            </div>
        </div>
        <!-- HEADER - END -->

        <!-- MAIN - START -->
        <div class="wrapper main">
            <div id="main-wrapper" class="container">
                <div id="main-left" class="left">
                    <div class="inner">
                        <?php if ($current < $goal) { ?>
                        <div>
                            <?php if ($lang === 'fr') { ?>
                            <h1>Plus on est de fous,<br />plus on&nbsp;rit.</h1>
                            <h2><span style="display: inline-block;">Au <?php echo $building_fr ?>,<br />l&rsquo;enthousiasme se fait d&eacute;j&agrave;&nbsp;sentir.</span></h2>
                            <?php } else { ?>
                            <h1>The more the&nbsp;merrier.</h1>
                            <h2>The excitement is rising at <span style="display: inline-block;"><?php echo $building ?>.</span></h2>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <?php if ($current >= $goal) { ?>
                        <div>
                            <?php if ($lang === 'fr') { ?>
                            <h1>F&eacute;licitations<br> <?php echo $building_fr ?>!</h1>
                            <?php } else { ?>
                            <h1>Congratulations<br> <?php echo $building ?>!</h1>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div id="main-left-box">
                        <div class="inner">
                            
                            <?php if ($current < $goal) { ?>


                            <div>
                                <?php if ($lang === 'fr') { // START LANG CONDITIONAL ?>

                                <?php if ($FTTN != true) { // START FTTH CONDITIONAL ?> 
                                <h2><?php echo $current ?> de vos voisins sont d&eacute;j&agrave;&nbsp;abonn&eacute;s.</h2>
                                <p>Il suffit de
                                    <?php echo $remaining ?> personnes de plus pour d&eacute;crocher cette offre de groupe exclusive et ainsi profiter des vitesses Internet les plus rapides offertes &ndash; jusqu&rsquo;&agrave; <span style="white-space:nowrap; line-height:1.2em;">1&nbsp;Gbit/s&sup1;</span> &ndash;,
                                    <?php if ($offer != "triple") { ?>
                                    <?php } ?> du meilleur service&nbsp;t&eacute;l&eacute;
                                    <?php if ($offer == "triple") { ?>et d&rsquo;un service de t&eacute;l&eacute;phonie&nbsp;fiable<?php } ?>.</p>

                                    <?php } // END FTTH CONDITIONAL ?>

                                    <div id="offer-left" class="left">

                                    <?php if ($FTTN != true) { // START FTTH CONDITIONAL ?>
                                        <?php if ($offer == "triple") {
                                            echo '<img src="../img/img-offer-triple-fr.png" alt="FibeMC" width="220">';
                                        } else {
                                            echo '<img src="../img/img-offer-new-tv.png" alt="FibeMC;" width="220">';
                                        } ?>
                                    <?php } else { // FTTH CONDITIONAL 
                                        echo '<img src="../img/img-offer-triple-FTTH-fr.png" alt="FibeMC" width="220">';
                                    } // END FTTH CONDITIONAL ?>

                                </div>

                            <?php } else { // LANG CONDITIONAL ?>

                                <?php if ($FTTN != true) { // START FTTH CONDITIONAL ?>    
                                    <h2><?php echo $current ?> of your neighbours have already signed&nbsp;up.</h2>
                                    <p>Only
                                        <?php echo $remaining ?> more are needed to unlock this exclusive group offer on the fastest Internet technology &ndash; with speeds of 1&nbsp;Gbps<sup>1</sup> &ndash;
                                        <?php if ($offer != "triple") { ?> and
                                        <?php } ?> the best TV&nbsp;service
                                        <?php if ($offer == "triple") { ?> and our reliable Home&nbsp;phone&nbsp;service<?php } ?>.</p>
                                <?php } // END FTTH CONDITIONAL ?>

                                    <div id="offer-left" class="left">

                                <?php if ($FTTN != true) { // START FTTH CONDITIONAL ?>
                                    <?php if ($offer == "triple") {
                                        echo '<img src="../img/img-offer-triple.png" alt="Fibe&trade;" width="220">';
                                    } else {
                                        echo '<img src="../img/img-offer-new-tv.png" alt="Fibe&trade;" width="220">';
                                    } ?>
                                <?php } else { // FTTH CONDITIONAL
                                    echo '<img src="../img/img-offer-triple-FTTH.png" alt="Fibe&trade;" width="220">';
                                 } // END FTTH CONDITIONAL ?>

                                </div>

                            <?php } // END LANG CONDITIONAL ?>
                                

                                <div id="offer-right" class="left">

                                <?php if ($FTTN != true) { //START FTTH CONDITIONAL ?>

                                    <?php if ($lang === 'fr') { // START LANG CONDITIONAL ?>
                                    <h3 style="font-size:19px;">&Eacute;conomisez
                                    <?php } else { ?>  
                                      <h3>Get $<?php } // END LANG CONDITIONAL  ?><?php if ($offer == "triple") {


                                        if ($lang === 'fr') {

                                            if ($package == "good") {
                                                      echo '106,95';
                                            } else {
                                                      echo '129,95';
                                            }

                                        } else {

                                          if ($package == "good") {
                                                      echo '106.95';
                                            } else {
                                                      echo '129.95';
                                            }  
                                        }

                                    } else {

                                        if ($lang === 'fr') {

                                            if ($package == "good") {
                                                      echo '106,95';
                                            } else {
                                                      echo '129,95';
                                            }

                                        } else {

                                           if ($package == "good") {
                                                      echo '106.95';
                                            } else {
                                                      echo '129.95';
                                            } 
                                        }
                                    } ?><?php if ($lang === 'fr') { echo ' $*'; } ?><?php
                                    if ($lang === 'fr') { // START LANG CONDITIONAL ?>
                                      sur le prix courant CHAQUE MOIS PENDANT 2&nbsp;ANS</h3>
                                    <span class="legal-2">Maintenant seulement&nbsp;:</span>
                                    <span class="from-fr">&Agrave;&nbsp;PARTIR&nbsp;DE</span>
                                    <span class="price-fr">99<sup>90&nbsp;$/MOIS<sup>2</sup></sup></span><?php } else { ?>* off the regular price EVERY MONTH FOR TWO&nbsp;YEARS</h3>
                                    <span class="legal-2">Right now, pay only:</span>
                                    <span class="price"><sup class="from">From </sup><sup>$</sup>99<sup>90/mo.<sup>2</sup></sup></span>
                                    <?php
                                      } // END LANG CONDITIONAL 
                                    ?>
                                        <p class="legal">
                                            <?php if ($lang === 'fr') { ?>Prix courant de
                                            <?php } else { ?> Current regular price of $<?php } ?><?php if ($offer == "triple") {

                                                if ($lang === 'fr') {

                                                    if ($package == "good") {
                                                              echo '203,85';
                                                    } else {
                                                              echo '229,85';
                                                    }

                                                } else {

                                                    if ($package == "good") {
                                                              echo '203.85';
                                                    } else {
                                                              echo '229.85';
                                                    }
                                                }

                                              } else {

                                                if ($lang === 'fr') {

                                                    if ($package == "good") {
                                                              echo '190,90';
                                                    } else {
                                                              echo '190,90';
                                                    }

                                                } else {

                                                   if ($package == "good") {
                                                              echo '190.90';
                                                    } else {
                                                              echo '190.90';
                                                    } 
                                                }

                                              }
                                            ?><?php if ($lang === 'fr') { echo '&nbsp;$'; } ?><?php if ($lang === 'fr') { ?>/mois. Sujet &agrave;&nbsp;modification.<?php } else { ?>/mo., subject to change.
                                        <br />No contract required.</p>
                                        <?php } ?>
                                        <?php if ($lang === 'fr') { ?>
                                        <p class="clear highlight left">&Eacute;conomies garanties de plus de
                                            <?php } else { ?>
                                            <p class="clear highlight left">Guaranteed savings of over $<?php } ?><?php

                                                    if ($offer == "triple") {

                                                        if ($lang === 'fr') {

                                                            if ($package == "good") {
                                                                echo '2&nbsp;500';
                                                            } else {
                                                                echo '3&nbsp;000';
                                                            }

                                                        } else {

                                                            if ($package == "good") {
                                                                echo '2,500';
                                                            } else {
                                                                echo '3,000';
                                                            }
                                                        }

                                                    } else {

                                                        if ($package == "good") {
                                                            echo '';
                                                        } else {
                                                            echo '';
                                                        }

                                                    } ?><?php if ($lang === 'fr') { ?>&nbsp;$ pendant les 24&nbsp;premiers&nbsp;mois.</p>
                                            <?php } else { ?> in your first 2&nbsp;years.</p>
                                        <?php } ?>
                                        <?php if ($lang === 'fr') { ?>
                                        <p class="legal clear">*S&rsquo;applique &agrave; des p&eacute;riodes de <span style="white-space:nowrap; line-height:1.2em;">facturation&nbsp;compl&egrave;tes&sup2;.</span></p>
                                        <?php } else { ?>
                                        <p class="legal clear">*Applies to full billing periods.<sup>2</sup></p>
                                        <?php } ?>


                                <?php } else { // FTTH CONDITIONAL ?>
                                   
                                    <?php if ($lang === 'fr') { // START LANG CONDITIONAL ?>

                                        <h2><?php echo $current ?> de vos voisins sont d&eacute;j&agrave;&nbsp;abonn&eacute;s.</h2>
                                        <p>Il suffit de
                                        <?php echo $remaining ?> personnes de plus pour d&eacute;crocher cette offre de groupe exclusive&nbsp;sur notre service Internet <span style="white-space:nowrap; line-height:1.2em;">super-rapide,</span> le&nbsp;meilleur service t&eacute;l&eacute;&nbsp;et notre service de t&eacute;l&eacute;phonie&nbsp;fiable.</p>

                                    <?php } else { // LANG CONDITIONAL ?>

                                        <h2><?php echo $current ?> of your neighbours have already signed&nbsp;up.</h2>
                                        <p>Only <?php echo $remaining ?> more are needed to unlock this exclusive group offer on <span style="white-space:nowrap; line-height:1.2em;">super-fast</span> Internet, the best TV service and our reliable Home&nbsp;phone&nbsp;service.</p>

                                    <?php } // END LANG CONDITIONAL ?>

                                <?php } // END FTTH CONDITIONAL ?>

                                </div>
                                <?php /* <p class="legal clear left">*Regular monthly price subject to&nbsp;change. **Applies&nbsp;to full billing&nbsp;periods.</p> */ ?>

                            </div>

                            <?php } ?>
                            <?php if ($current >= $goal) { ?>
                            <div>

                            <?php if ($lang === 'fr') { ?>
                              <h2>March&eacute; conclu.</h2>
                              <p>Un conseiller de Bell communiquera bient&ocirc;t avec vous pour que vous puissiez profiter de vos services de&nbsp;Bell.</p>  
                            <?php } else { ?>  
                              <h2>The deal is&nbsp;on.</h2>
                              <p>A Bell rep will be in touch soon to get you set up so you can start enjoying your Bell&nbsp;services.</p>
                              
                            <?php } ?>
                                
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div id="main-right" class="right">
                    <div id="meter-outer">
                        <?php if ($current >= $goal) { ?>
                        <img class="goal-yes" src="../img/img-fireworks.png" alt="" width="193" height="148">
                        <?php } ?>

                        <?php if ($lang === 'fr') { ?>
                          <span id="goal-banner">OBJECTIF
                        <?php } else { ?>  
                          <span id="goal-banner">Goal
                        <?php } ?>

                        <?php if ($current < $goal) { ?>: <?php echo $goal ?><?php } ?></span>

                        <div id="meter">
                            <div id="fill" style="height:<?php echo $fill ?>%;">
                                <?php if ($current < $goal) { ?>
                                <div id="counter"><span><?php echo $current ?></span></div>
                                <?php } ?>
                            </div>
                          
                          <img src="../img/img-building.png" alt="" width="192" height="462">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN - END -->

        <!-- FOOTER - START -->
        <?php if ($current < $goal) { ?>
        <div class="wrapper footer">
            <div class="container">

            <?php if ($lang === 'fr') { ?>
              <h2>Il est encore temps pour vous et vos voisins de vous&nbsp;abonner.<br />Communiquez avec votre repr&eacute;sentant de Bell aujourd&rsquo;hui&nbsp;m&ecirc;me&nbsp;:</h2>
            <?php } else { ?>  
              <h2>There&rsquo;s still time for you and your neighbours to join&nbsp;in.<br>Contact your Bell rep&nbsp;today:</h2>
            <?php } ?>
                
                <div class="container cta">
                    <div class="left width-50">
                        <img src="../img/icon-email.png" alt="" width="80" height="80">

                        <?php if ($lang === 'fr') { ?>
                          <p>&Eacute;crivez &agrave; 
                        <?php } else { ?>  
                          <p>Email
                        <?php } ?>

                            <a class="rep-email no-break" href="mailto:<?php echo $repEmail ?>">
                                <?php echo $repEmail ?>
                            </a>
                        </p>
                    </div>
                    <div class="right width-50">
                        <img src="../img/icon-phone.png" alt="" width="80" height="80">

                        <?php if ($lang === 'fr') { ?>
                          <p>Composez le <span class="no-break">
                        <?php } else { ?>  
                          <p>Call <span class="no-break">
                        <?php } ?>

                        <?php echo $repPhone ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- FOOTER - END -->

        <!-- LEGAL - START -->
        <div class="wrapper">
            <div class="container legal">
              <?php if ($lang === 'fr' && $FTTN != true) { ?><p><?php if ($current < $goal) { ?>Offre seulement disponible aux r&eacute;sidents au <?php echo $legalAddress_fr ?>. L&rsquo;offre se termine le <?php echo $legalDate_fr ?>. L&rsquo;offre s&rsquo;applique &agrave; la discr&eacute;tion de Bell, &agrave; condition que l&rsquo;objectif des r&eacute;sidents admissibles d&eacute;termin&eacute; pour l'&eacute;difice est satisfait et seulement avec un forfait admissible de Bell avec Internet&nbsp;Fibe avec des vitesses Gigabit et l&rsquo;utilisation Internet illimit&eacute;e, T&eacute;l&eacute; Fibe et T&eacute;l&eacute;phonie r&eacute;sidentielle. Offert aux nouveaux clients r&eacute;sidentiels qui r&eacute;sident dans un immeuble admissible pour cette offre, l&agrave; o&ugrave; l&rsquo;acc&egrave;s et la technologie le permettent. Toute partie du programme Forfait&nbsp;de&nbsp;Bell peut &ecirc;tre modifi&eacute;e, annul&eacute;e ou r&eacute;sili&eacute;e en tout temps. Bell n&rsquo;est pas tenue de fournir la r&eacute;duction du Forfait pendant toute la dur&eacute;e d&rsquo;un contrat &agrave; terme pour des services admissibles, y compris les services admissibles aux r&eacute;ductions; voir <a href="http://www.bell.ca/detailsforfait" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/detailsforfait</a>. Modifiable sans pr&eacute;avis et ne peut &ecirc;tre combin&eacute;e avec aucune autre offre. Taxes en sus; d&rsquo;autres conditions s&rsquo;appliquent. Pour certaines offres, le client doit choisir la facturation &eacute;lectronique et cr&eacute;er un profil MonBell. <strong>T&eacute;l&eacute;&nbsp;Fibe&nbsp;:</strong> T&eacute;l&eacute; Fibe peut &ecirc;tre incompatible avec le syst&egrave;me de vid&eacute;osurveillance de votre immeuble et restreindre votre acc&egrave;s &agrave; certaines fonctionnalit&eacute;s du syst&egrave;me de s&eacute;curit&eacute;, tel que la cam&eacute;ra du hall d&rsquo;entr&eacute;e. <strong>Internet&nbsp;Fibe&nbsp;:</strong> Location du modem obligatoire; frais uniques de location de modem cr&eacute;dit&eacute;s pour les nouveaux clients. Vitesses de t&eacute;l&eacute;versement allant jusqu&rsquo;&agrave; <span style="white-space: nowrap">100&nbsp;Mbit/s.</span> <strong>T&eacute;l&eacute;phonie&nbsp;:</strong> Disponible l&agrave; o&ugrave; non r&eacute;glement&eacute;e par le CRTC. Des frais de zone de service (4&nbsp;<span style="white-space: nowrap">$/mois)</span> peuvent s&rsquo;appliquer&nbsp;:&nbsp;voir <a href="http://www.bell.ca/fraispourzonedeservice" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/fraispourzonedeservice</a>. Par d&eacute;faut, appels interurbains Canada et &Eacute;.-U. &agrave; 40&nbsp;&cent;/min et frais de r&eacute;seau &agrave;&nbsp;2,95&nbsp;$&nbsp;pour le premier appel. <strong>(1)</strong>&nbsp;Dans des conditions de r&eacute;seau optimales. Connexion filaire requise pour atteindre les vitesses maximales. La vitesse variera selon votre &eacute;quipement, la configuration, l&rsquo;achalandage sur Internet, l&rsquo;utilisation simultan&eacute;e de la t&eacute;l&eacute; IP (si applicable), le serveur et d&rsquo;autres facteurs; les vitesses <span style="white-space: nowrap">Wi-Fi</span> peuvent &ecirc;tre limit&eacute;es &agrave; <span style="white-space: nowrap">150&nbsp;Mbit/s</span> ou <span style="white-space: nowrap">600&nbsp;Mbit/s</span> selon le type de modem; voir <a href="http://www.bell.ca/guidevitesse" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/guidevitesse</a>. <strong>(2)</strong>&nbsp;Offert aux nouveaux clients qui s&rsquo;abonnent &agrave; un forfait admissible de Bell avec Internet&nbsp;Fibe avec des vitesses Gigabit et l&rsquo;utilisation Internet illimit&eacute;e, T&eacute;l&eacute; Fibe et T&eacute;l&eacute;phonie r&eacute;sidentielle. Le tarif mensuel promotionnel de&nbsp;99,90&nbsp;$&nbsp;est bas&eacute; sur des cr&eacute;dits promotionnels appliqu&eacute;s au prix courant et sur un abonnement continu au service Internet&nbsp;Fibe Gigabit de&nbsp;47,95&nbsp;<span style="white-space: nowrap">$/mois</span> :&nbsp;99,95&nbsp;$ moins un cr&eacute;dit de&nbsp;52&nbsp;$&nbsp;pour les 24&nbsp;premi&egrave;res p&eacute;riodes de facturation compl&egrave;tes; Bell T&eacute;l&eacute; Fibe forfait Bon + &Agrave; la carte 15&nbsp;de&nbsp;28,95&nbsp;<span style="white-space: nowrap">$/mois</span> :&nbsp;52,95&nbsp;$&nbsp;moins un cr&eacute;dit de&nbsp;24&nbsp;$&nbsp;pour les 24&nbsp;premi&egrave;res p&eacute;riodes de facturation compl&egrave;tes; et Bell T&eacute;l&eacute;phonie r&eacute;sidentielle D&eacute;part de <span style="white-space: nowrap">23&nbsp;$/mois.</span> Le tarif courant s&rsquo;applique par la suite. Tous les prix sont sujets &agrave; modification. Enregistreur HD&nbsp;:&nbsp;Location &agrave;&nbsp;0&nbsp;$&nbsp;bas&eacute;e sur des frais mensuels de&nbsp;15&nbsp;$&nbsp;moins un cr&eacute;dit mensuel de 15&nbsp;$. R&eacute;serv&eacute; aux nouveaux clients de Bell T&eacute;l&eacute; avec un abonnement continu &agrave; trois services admissibles de Bell; voir <a href="http://www.bell.ca/forfait" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/forfait</a>. Bell demeurera le propri&eacute;taire du r&eacute;cepteur. Vous pouvez r&eacute;silier la location &agrave; tout moment si vous retournez le r&eacute;cepteur. Les r&eacute;cepteurs peuvent &ecirc;tre neufs ou remis &agrave; neuf au choix de Bell. Le prix promotionnel s&rsquo;appliquera &agrave; votre premi&egrave;re p&eacute;riode de facturation compl&egrave;te de 30&nbsp;jours et &agrave; chaque p&eacute;riode de facturation compl&egrave;te par la suite, pour la dur&eacute;e de votre promotion. Votre p&eacute;riode de facturation peut ne pas d&eacute;buter le jour o&ugrave; vous souscrivez &agrave; nos services. Le tarif mensuel courant s&rsquo;applique donc aux services rendus avant votre premi&egrave;re p&eacute;riode de facturation compl&egrave;te de 30&nbsp;jours ou si Bell annule vos services pendant une p&eacute;riode de facturation de 30&nbsp;jours. Tous les prix sont sujets &agrave; modification. Inclut l&rsquo;installation du modem, de l&rsquo;enregistreur Partout chez vous et d&rsquo;un maximum de 2&nbsp;r&eacute;cepteurs HD; voir <a href="http://www.bell.ca/installationtelefibe" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/installationtelefibe</a>. Frais d&rsquo;installation de&nbsp;50&nbsp;$&nbsp;pour chaque enregistreur additionnel. Internet&nbsp;Fibe&nbsp;:&nbsp;des conditions s&rsquo;appliquent; voir <a href="http://www.bell.ca/installationtotale" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/installationtotale</a>. T&eacute;l&eacute;phonie&nbsp;:&nbsp;l&rsquo;installation inclut une prise au point de branchement du service lorsque aucune n&rsquo;est pr&eacute;sente. Co&ucirc;t d&rsquo;installation des prises suppl&eacute;mentaires :&nbsp;75&nbsp;$&nbsp;pour la premi&egrave;re prise,&nbsp;50&nbsp;$&nbsp;pour toute prise subs&eacute;quente. Utilisation Internet illimit&eacute;e&nbsp;:&nbsp;Offert aux clients d&rsquo;Internet avec un abonnement continu &agrave; trois services admissibles de Bell; voir <a href="http://www.bell.ca/forfait" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/forfait</a>. Sujet au respect des modalit&eacute;s de votre convention de service Internet; voir <a href="http://www.bell.ca/convention" target="_blank" style="color:#00549a; text-decoration:none;">bell.ca/convention</a>. Fibe est une marque de commerce de Bell&nbsp;Canada. <?php } ?>&copy;&nbsp;Bell&nbsp;Canada,&nbsp;2016. Tous&nbsp;droits&nbsp;r&eacute;serv&eacute;s.</p>
                <?php } elseif ($lang === 'fr' && $FTTN === true) { ?>
                <p><?php if ($current < $goal) { ?>Offre seulement disponible aux r&eacute;sidents au <?php echo $legalAddress_fr ?>. L&rsquo;offre s&rsquo;applique &agrave; la discr&eacute;tion de Bell, &agrave; condition que l&rsquo;objectif d&eacute;fini des r&eacute;sidents admissibles de l'&eacute;difice est atteint et seulement avec un forfait admissible de Bell avec Internet&nbsp;Fibe, T&eacute;l&eacute; Fibe et T&eacute;l&eacute;phonie r&eacute;sidentielle. L&rsquo;offre se termine le <?php echo $legalDate_fr ?> Fibe est une marque de commerce de Bell&nbsp;Canada. <?php } ?>&copy;&nbsp;Bell&nbsp;Canada, 2016. Tous&nbsp;droits&nbsp;r&eacute;serv&eacute;s.</p>
                <?php } elseif ($lang === 'en' && $FTTN != true) { ?> 
                <p><?php if ($current < $goal) { ?>Offer only available to residents of <?php echo $legalAddress ?>. Offer applied at Bell&rsquo;s discretion, and only on a bundle including Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed with Unlimited&nbsp;Internet usage<?php if ($offer != "triple") { ?> and<?php } ?><?php if ($offer == "triple") { ?>,<?php } ?> Fibe&nbsp;TV<?php if ($offer == "triple") { ?> and Home phone<?php } ?>. Offer expires <?php echo $legalDate ?>. Any portion of the Bell&nbsp;Bundle&nbsp;Program may be modified, discontinued or terminated at any time. Bell is not obligated to provide the Bundle&nbsp;Discount for the duration of any term contract for Eligible&nbsp;Services, including the Discountable Services; see <a href="http://www.bell.ca/bundledetails" target="_blank">bell.ca/bundledetails</a>. Subject to change without notice, not combinable with other offers. Taxes and restrictions apply. Customer must select <span style="white-space: nowrap">e-bill</span> and create a MyBell profile. Early termination charges may apply. <strong>Fibe&nbsp;TV:</strong> Fibe&nbsp;TV may be incompatible with closed-circuit television systems in your building and affect access to security features, such as lobby camera. Actual speeds will vary depending on the distance between the customer&rsquo;s modem and switching equipment from Bell; upload speeds up to 100&nbsp;Mbps. <strong>Fibe&nbsp;Internet:</strong> Modem rental required; <span style="white-space: nowrap">one-time</span> modem rental fee waived for new customers. Actual speeds will vary depending on the distance between the customer&rsquo;s modem and switching equipment from Bell; upload speeds up to 100&nbsp;Mbps. <?php if ($offer == "triple") { ?><strong>Home&nbsp;phone:</strong> Available where not <span style="white-space: nowrap">CRTC-regulated.</span> Service area charge <span style="white-space: nowrap">($4/mo.)</span> may apply; see <a href="http://www.bell.ca/serviceareacharge" target="_blank">bell.ca/serviceareacharge</a>. By default, Canada and U.S. long distance is <span style="white-space: nowrap">40&cent;/min.</span> and <span style="white-space: nowrap">$2.95/mo.</span> network charge applies on first call.<?php } ?> <strong>(1)</strong>&nbsp;Assuming optimal network conditions. Maximum speeds can only be obtained on a wired connection. Speeds will vary with equipment, configuration, Internet traffic, simultaneous use of IPTV (if applicable), server or other factors. <span style="white-space: nowrap">Wi-Fi</span> speeds may be limited to 150&nbsp;Mbps or 600&nbsp;Mbps depending on modem type; see <a href="http://www.bell.ca/speedguide" target="_blank">bell.ca/speedguide</a>. <strong>(2)</strong>&nbsp;Available to customers who continuously subscribe to Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed with Unlimited&nbsp;Internet usage<?php if ($offer != "triple") { ?> and<?php } ?><?php if ($offer == "triple") { ?>,<?php } ?> Fibe&nbsp;TV<?php if ($offer == "triple") { ?> and Home phone<?php } ?>. Promotional monthly price of&nbsp;$99.90&nbsp;based on promotional credit applied to regular price and based on the continued subscription to Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed with Unlimited&nbsp;Internet usage at $46.95/mo.:&nbsp;$99.95, less&nbsp;$53&nbsp;credit for months 1&nbsp;to 24; Bell&nbsp;Fibe&nbsp;TV&rsquo;s <?php if ($package == "good") { ?>Good<?php } ?><?php if ($package != "good") { ?>Better<?php } ?> Package at <?php if ($package == "good") { ?>$49.95/mo.: $46.95<?php } ?><?php if ($package != "good") { ?>$52.95/mo.:&nbsp;$79.95, less&nbsp;$7&nbsp;bundle discount, less&nbsp;$23&nbsp;credit for months 1&nbsp;to&nbsp;24<?php } ?>, plus $3&nbsp;Digital Service Fee<?php if ($offer == "triple") { ?> and Bell Home&nbsp;phone&nbsp;Lite package at <span style="white-space: nowrap">$0/mo.:</span> <span style="white-space: nowrap">$38.80/mo.,</span> plus <span style="white-space: nowrap">$0.15/mo.</span> <span style="white-space: nowrap">9-1-1</span> fee, less $38.95 credit for months 1&nbsp;to&nbsp;24<?php } ?>. Regular monthly rate applies thereafter. All pricing is subject to change without notice. Whole&nbsp;Home&nbsp;PVR: $0&nbsp;rental based on&nbsp;$15&nbsp;monthly rental fee, less a&nbsp;$15&nbsp;monthly credit. Available to Bell&nbsp;TV subscribers with continued subscription to Bell&nbsp;Fibe&nbsp;Internet and Fibe&nbsp;TV; see <a href="http://www.bell.ca/bundle" target="_blank">bell.ca/bundle</a>. The receiver remains Bell&rsquo;s property. You may terminate your rental at any time provided you return the receiver (early termination fees on programming may apply). Receivers may be new or refurbished at Bell&rsquo;s choice. Promotional monthly price will apply to your first full <span style="white-space: nowrap">30-day</span> billing period and for each full billing period after that, for the duration of your promotion. Your billing period may not start on the day you subscribe to our services. Regular price will apply for services delivered prior to your first full <span style="white-space: nowrap">30-day</span> billing period or if Bell terminates your services during a <span style="white-space: nowrap">30-day</span> billing period. Installation included:&nbsp;$199.95&nbsp;credit will be applied against the <span style="white-space: nowrap">one-time</span> <span style="white-space: nowrap">activation/installation</span> fee of&nbsp;$199.95&nbsp;for Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed and Fibe&nbsp;TV service. Fibe&nbsp;TV: Includes installation of modem, Whole&nbsp;Home&nbsp;PVR and up to 2&nbsp;additional HD receivers; see <a href="http://www.bell.ca/fibetvinstall" target="_blank">bell.ca/fibetvinstall</a> for details.&nbsp;$50&nbsp;installation fee for each additional receiver. Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed: Conditions apply; see <a href="http://www.bell.ca/fullinstall" target="_blank">bell.ca/fullinstall</a>. <?php if ($offer == "triple") { ?>Home phone: Installation includes one jack at the service entry point where none present; installation fee of $75 for the 1<sup>st</sup> additional jack, $50 for every subsequent jack.<?php } ?> Unlimited&nbsp;Internet usage: Available to Internet customers with continued subscription to a TV and Internet bundle; see <a href="http://www.bell.ca/bundledetails" target="_blank">bell.ca/bundledetails</a>. Subject to your compliance with the terms and conditions of your Internet service agreement found at <a href="http://www.bell.ca/agreements" target="_blank">bell.ca/agreements</a>. Fibe is a trademark of Bell&nbsp;Canada. <?php } ?>&copy;&nbsp;Bell&nbsp;Canada,&nbsp;2016. All&nbsp;rights&nbsp;reserved.</p>
                <?php } else { ?>
                    <p><?php if ($current < $goal) { ?>Offer only available to residents of <?php echo $legalAddress ?>. Offer applied at Bell&rsquo;s discretion, provided target of eligible residents determined for the building is met, and only on advertised bundle including Fibe&nbsp;Internet, Fibe&nbsp;TV and Home&nbsp;phone. Offer expires <?php echo $legalDate ?>. Fibe is a trademark of Bell&nbsp;Canada. <?php } ?>&copy;&nbsp;Bell&nbsp;Canada,&nbsp;2016. All&nbsp;rights&nbsp;reserved.</p>
                <?php } ?>
            </div>
        </div>
        <!-- LEGAL - END -->
        </body>

    </html>
