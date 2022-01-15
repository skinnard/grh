
<?php
$remaining = $goal - $current;
$fill = $current/$goal * 100;

?>

<!DOCTYPE html>
<!--[if lte IE 7 ]>    <html lass="no-js ie7"> <![endif]-->
<!--[if lte IE 8 ]>    <html class="no-js ie8 "> <![endif]-->
<html><!--<![endif]-->
<head>
<meta charset="UTF-8">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<title>Bell Group Offer</title>

<meta name="viewport" content="initial-scale=1.0, width=device-width">

<link rel="stylesheet" type="text/css" href="../css/styles.css" />



</head>

<body<?php if ($current >= $goal) { ?> class="congrats"<?php } ?>>
<?php include_once("../analyticstracking.php") ?>

<!-- HEADER - START -->
<div class="wrapper header">

  <div class="container">

    <a href="http://www.bell.ca" target="_blank"><img src="../img/logo.png" alt="Bell" width="60" height="33"></a>

    <?php 

    if($toggle == true) { ?>

      <a href="http://bellgroupoffer.ca/lovecondos-m"><h4 class="toggle">中文</h4></a>

    <?php } ?>

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
      <h1>The more the&nbsp;merrier.</h1>

      <h2>The excitement is rising at <span style="display: inline-block;"><?php echo $building ?>.</span></h2>
    </div>
    <?php } ?>

    <?php if ($current >= $goal) { ?>

    <div>
      <h1>Congratulations<br> <?php echo $building ?>!</h1>
    </div>
    <?php } ?>
    </div>
      <div id="main-left-box">
      <div class="inner">

		<?php if ($current < $goal) { ?>
        <div>
          <h2><?php echo $current ?> of your neighbours have already signed&nbsp;up.</h2>

          <p>Only <?php echo $remaining ?> more are needed to unlock this exclusive group offer on the fastest Internet technology &ndash; with speeds of 1Gbps<sup>1</sup> &ndash;<?php if ($offer != "triple") { ?> and<?php } ?> the best TV&nbsp;service<?php if ($offer == "triple") { ?> and our reliable Home&nbsp;phone&nbsp;service<?php } ?>.</p>

          <div id="offer-left" class="left">

            <?php if ($offer == "triple") {

              echo '<img src="../img/img-offer-triple.png" alt="Fibe&trade;" width="220">';

			} else {

			  echo '<img src="../img/img-offer-new-tv.png" alt="Fibe&trade;" width="220">';

			}

			?>

          </div>

          <div id="offer-right" class="left">
          	<h3>Get $<?php if ($offer == "triple") {

				if ($package == "good") {
              		echo '106.95';
				} else {
              		echo '129.95';
				}

			} else {

			  if ($package == "good") {
              		echo '106.95';
				} else {
              		echo '129.95';
				}

			}

			?>* off the regular price EVERY MONTH FOR TWO&nbsp;YEARS</h3>
            <span class="legal-2">Right now, pay only:</span>
            <span class="price"><sup class="from">From </sup><sup>$</sup>99<sup>90/mo.<sup>2</sup></sup></span>


            <p class="legal">
              Current regular price of $<?php if ($offer == "triple") {

				if ($package == "good") {
              		echo '203.85';
				} else {
              		echo '229.85';
				}

			} else {

			  if ($package == "good") {
              		echo '190.90';
				} else {
              		echo '190.90';
				}

			}

			?>/mo., subject to change.<br />No contract required.</p>

            <p class="clear highlight left">Guaranteed savings of over $<?php if ($offer == "triple") {

              if ($package == "good") {
              		echo '2,500';
				} else {
              		echo '3,000';
				}

			} else {

			 if ($package == "good") {
              		echo '';
				} else {
              		echo '';
				}

			}

			?> in your first 2&nbsp;years.</p>

            <p class="legal clear">*Applies to full billing periods.<sup>2</sup></p>

          </div>


          <?php /* <p class="legal clear left">*Regular monthly price subject to&nbsp;change. **Applies&nbsp;to full billing&nbsp;periods.</p> */ ?>


        </div>
        <?php } ?>

        <?php if ($current >= $goal) { ?>
        <div>
          <h2>The deal is&nbsp;on.</h2>

          <p>A Bell rep will be in touch soon to get you set up so you can start enjoying your Bell&nbsp;services.</p>
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

          <span id="goal-banner">Goal<?php if ($current < $goal) { ?>: <?php echo $goal ?><?php } ?></span>

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

    <h2>There&rsquo;s still time for you and your neighbours to join&nbsp;in.<br>
      Contact your Bell rep&nbsp;today:</h2>

    <div class="container cta">

      <div class="left width-50">

        <img src="../img/icon-email.png" alt="" width="80" height="80">

        <p>Email <a class="rep-email no-break" href="mailto:<?php echo $repEmail ?>"><?php echo $repEmail ?></a></p>

      </div>

      <div class="right width-50">

        <img src="../img/icon-phone.png" alt="" width="80" height="80">

        <p>Call <span class="no-break"><?php echo $repPhone ?></span></p>

      </div>

    </div>

  </div>

</div>
<?php } ?>
<!-- FOOTER - END -->


<!-- LEGAL - START -->
<div class="wrapper">

  <div class="container legal">

    <p><?php if ($current < $goal) { ?>Offer only available to residents of <?php echo $legalAddress ?>. Offer applied at Bell&rsquo;s discretion, and only on a bundle including Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed with Unlimited&nbsp;Internet usage<?php if ($offer != "triple") { ?> and<?php } ?><?php if ($offer == "triple") { ?>,<?php } ?> Fibe&nbsp;TV<?php if ($offer == "triple") { ?> and Home phone<?php } ?>. Offer expires <?php echo $legalDate ?>. Any portion of the Bell&nbsp;Bundle&nbsp;Program may be modified, discontinued or terminated at any time. Bell is not obligated to provide the Bundle&nbsp;Discount for the duration of any term contract for Eligible&nbsp;Services, including the Discountable Services; see <a href="http://www.bell.ca/bundledetails" target="_blank">bell.ca/bundledetails</a>. Subject to change without notice, not combinable with other offers. Taxes and restrictions apply. Customer must select <span style="white-space: nowrap">e-bill</span> and create a MyBell profile. Early termination charges may apply. <strong>Fibe&nbsp;TV:</strong> Fibe&nbsp;TV may be incompatible with closed-circuit television systems in your building and affect access to security features, such as lobby camera. Actual speeds will vary depending on the distance between the customer&rsquo;s modem and switching equipment from Bell; upload speeds up to 100&nbsp;Mbps. <strong>Fibe&nbsp;Internet:</strong> Modem rental required; <span style="white-space: nowrap">one-time</span> modem rental fee waived for new customers. Actual speeds will vary depending on the distance between the customer&rsquo;s modem and switching equipment from Bell; upload speeds up to 100&nbsp;Mbps. <?php if ($offer == "triple") { ?><strong>Home&nbsp;phone:</strong> Available where not <span style="white-space: nowrap">CRTC-regulated.</span> Service area charge <span style="white-space: nowrap">($4/mo.)</span> may apply; see <a href="http://www.bell.ca/serviceareacharge" target="_blank">bell.ca/serviceareacharge</a>. By default, Canada and U.S. long distance is <span style="white-space: nowrap">40¢/min.</span> and <span style="white-space: nowrap">$2.95/mo.</span> network charge applies on first call.<?php } ?> <strong>(1)</strong>&nbsp;Assuming optimal network conditions. Maximum speeds can only be obtained on a wired connection. Speeds will vary with equipment, configuration, Internet traffic, simultaneous use of IPTV (if applicable), server or other factors. <span style="white-space: nowrap">Wi-Fi</span> speeds may be limited to 150&nbsp;Mbps or 600&nbsp;Mbps depending on modem type; see <a href="http://www.bell.ca/speedguide" target="_blank">bell.ca/speedguide</a>. <strong>(2)</strong>&nbsp;Available to customers who continuously subscribe to Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed with Unlimited&nbsp;Internet usage<?php if ($offer != "triple") { ?> and<?php } ?><?php if ($offer == "triple") { ?>,<?php } ?> Fibe&nbsp;TV<?php if ($offer == "triple") { ?> and Home phone<?php } ?>. Promotional monthly price of&nbsp;$99.90&nbsp;based on promotional credit applied to regular price and based on the continued subscription to Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed with Unlimited&nbsp;Internet usage at $46.95/mo.:&nbsp;$99.95, less&nbsp;$53&nbsp;credit for months 1&nbsp;to 24; Bell&nbsp;Fibe&nbsp;TV&rsquo;s <?php if ($package == "good") { ?>Good<?php } ?><?php if ($package != "good") { ?>Better<?php } ?> Package at <?php if ($package == "good") { ?>$49.95/mo.: $46.95<?php } ?><?php if ($package != "good") { ?>$52.95/mo.:&nbsp;$79.95, less&nbsp;$7&nbsp;bundle discount, less&nbsp;$23&nbsp;credit for months 1&nbsp;to&nbsp;24<?php } ?>, plus $3&nbsp;Digital Service Fee<?php if ($offer == "triple") { ?> and Bell Home&nbsp;phone&nbsp;Lite package at <span style="white-space: nowrap">$0/mo.:</span> <span style="white-space: nowrap">$38.80/mo.,</span> plus <span style="white-space: nowrap">$0.15/mo.</span> <span style="white-space: nowrap">9-1-1</span> fee, less $38.95 credit for months 1&nbsp;to&nbsp;24<?php } ?>. Regular monthly rate applies thereafter. All pricing is subject to change without notice. Whole&nbsp;Home&nbsp;PVR: $0&nbsp;rental based on&nbsp;$15&nbsp;monthly rental fee, less a&nbsp;$15&nbsp;monthly credit. Available to Bell&nbsp;TV subscribers with continued subscription to Bell&nbsp;Fibe&nbsp;Internet and Fibe&nbsp;TV; see <a href="http://www.bell.ca/bundle" target="_blank">bell.ca/bundle</a>. The receiver remains Bell&rsquo;s property. You may terminate your rental at any time provided you return the receiver (early termination fees on programming may apply). Receivers may be new or refurbished at Bell&rsquo;s choice. Promotional monthly price will apply to your first full <span style="white-space: nowrap">30-day</span> billing period and for each full billing period after that, for the duration of your promotion. Your billing period may not start on the day you subscribe to our services. Regular price will apply for services delivered prior to your first full <span style="white-space: nowrap">30-day</span> billing period or if Bell terminates your services during a <span style="white-space: nowrap">30-day</span> billing period. Installation included:&nbsp;$199.95&nbsp;credit will be applied against the <span style="white-space: nowrap">one-time</span> <span style="white-space: nowrap">activation/installation</span> fee of&nbsp;$199.95&nbsp;for Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed and Fibe&nbsp;TV service. Fibe&nbsp;TV: Includes installation of modem, Whole&nbsp;Home&nbsp;PVR and up to 2&nbsp;additional HD receivers; see <a href="http://www.bell.ca/fibetvinstall" target="_blank">bell.ca/fibetvinstall</a> for details.&nbsp;$50&nbsp;installation fee for each additional receiver. Fibe&nbsp;Internet with Gigabit&nbsp;Fibe speed: Conditions apply; see <a href="http://www.bell.ca/fullinstall" target="_blank">bell.ca/fullinstall</a>. <?php if ($offer == "triple") { ?>Home phone: Installation includes one jack at the service entry point where none present; installation fee of $75 for the 1<sup>st</sup> additional jack, $50 for every subsequent jack.<?php } ?> Unlimited&nbsp;Internet usage: Available to Internet customers with continued subscription to a TV and Internet bundle; see <a href="http://www.bell.ca/bundledetails" target="_blank">bell.ca/bundledetails</a>. Subject to your compliance with the terms and conditions of your Internet service agreement found at <a href="http://www.bell.ca/agreements" target="_blank">bell.ca/agreements</a>. Fibe is a trademark of Bell&nbsp;Canada. <?php } ?>&copy;&nbsp;Bell&nbsp;Canada,&nbsp;2016. All&nbsp;rights&nbsp;reserved.</p>
  </div>

</div>
<!-- LEGAL - END -->


</body>
</html>
