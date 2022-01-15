
<?php

$remaining = $goal - $current;
$fill = $current/$goal * 100;

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<!--[if lte IE 7 ]>    <html lass="no-js ie7"> <![endif]-->
<!--[if lte IE 8 ]>    <html class="no-js ie8 "> <![endif]-->
<html><!--<![endif]-->
<head>
<meta charset="UTF-8">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<title>Bell 团购优惠</title>

<meta name="viewport" content="initial-scale=1.0, width=device-width">

<link rel="stylesheet" type="text/css" href="../css/styles.css" />

</head>

<body id="zh"<?php if ($current >= $goal) { ?> class="congrats"<?php } ?>>
<?php include_once("../analyticstracking.php") ?>

<!-- HEADER - START -->

<div class="wrapper header">

  <div class="container">

    <a href="http://www.bell.ca" target="_blank"><img src="../img/logo.png" alt="Bell" width="60" height="33"></a>

    <?php 

    if($toggle == true) { ?>

      <a href="<?php echo substr($url,0,-3)?>"><h4 class="toggle">EN</h4></a>

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
      <h1>越多越开⼼。</h1>

      <h2><span style="display: inline-block;"><?php echo $building ?> 的兴奋气氛日渐升温。</span></h2>
    </div>
    <?php } ?>

    <?php if ($current >= $goal) { ?>

    <div>
      <h1>恭喜您<br> <?php echo $building ?> !</h1>
    </div>
    <?php } ?>
    </div>
      <div id="main-left-box">
      <div class="inner">

		<?php if ($current < $goal) { ?>
        <div>
          <h2><?php echo $current ?> 户邻居已经登记。</h2>

          <p>只需多 <?php echo $remaining ?> 户，便可启动此独⼀无⼆的团购优惠，以最快⽹络科技 &ndash; 享受超过1&nbsp;Gbps<sup>1</sup>的上⽹速度 &ndash; 最佳电视服务和我們可靠的家居电话服务。</p>

          <div id="offer-left" class="left"><img src="../img/img-offer-triple.png" alt="Fibe&trade;" width="220" height="151"></div>

          <div id="offer-right" class="left">
          	<h3 style="line-height:1.2; padding-bottom: 0px;">两年内每月获享</h3>
            <h3>正价减$129.95*</h3>
            <span class="legal-2">现在，只需⽀付：</span>
            <span class="price"><sup class="from">每⽉ </sup><sup>$</sup>99<sup>90起<sup>2</sup></sup></span>


            <p class="legal">目前正价为每月$229.85。无需签约。</p>

            <p class="clear highlight full-width text-center" style="text-align: center;">保证您首两年内节省超过$3,000</p>

            <p class="legal clear">*适用于每个完整账单周期。<sup>2</sup></p>

          </div>


          <?php /* <p class="legal clear left">*Regular monthly price subject to&nbsp;change. **Applies&nbsp;to full billing&nbsp;periods.</p> */ ?>


        </div>
        <?php } ?>

        <?php if ($current >= $goal) { ?>
        <div>
          <h2>大家合作成功。</h2>
          <p>Bell 的一位营业代表将很快的与您联络并完成设置使您可以开始享受 Bell 的服务。</p>
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

          <span id="goal-banner">目标：<?php if ($current < $goal) { ?> <?php echo $goal ?><?php } ?></span>

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

    <h2>现在您和邻居仍可赶及加入，请即联系<br />您的Bell业务代表：</h2>

    <div class="container cta">

      <div class="left width-50">

        <img src="../img/icon-email.png" alt="" width="80" height="80">

        <p>电邮 <a class="rep-email no-break" href="mailto:<?php echo $repEmail ?>"><?php echo $repEmail ?></a></p>

      </div>

      <div class="right width-50">

        <img src="../img/icon-phone.png" alt="" width="80" height="80">

        <p>致电 <span class="no-break"><?php echo $repPhone ?></span></p>

      </div>

    </div>

  </div>

</div>
<?php } ?>
<!-- FOOTER - END -->


<!-- LEGAL - START -->
<div class="wrapper">

  <div class="container legal">

    <p style="line-height:1.2; font-size:10px;"><?php if ($current < $goal) { ?>优惠只适⽤于多伦多185 Bonis Aveune的居民。优惠由Bell全权决定是否提供，并只适⽤于包括以无限互联⽹⽤量的Gigabit Fibe速度Fibe上⽹服务、Fibe TV及家居电话组合。优惠截至2016年6⽉12⽇。该Bell组合计划（Bundle Program）的任何部分皆可随时修改、中断或终⽌。Bell并无责任在任何年期合约期内，就合资格服务（Eligible Services）, 包括折扣服务（Discountable Services），提供组合折扣（Bundle Discount）; 详情请参阅bell.ca/bundledetails。可随时更改，恕不另⾏通知; 不能与其他优惠⼀起使⽤。有税⾦及条件限制。客户须选择电⼦账单及建⽴MyBell资料档案。或需⽀付提前终⽌服务费。Fibe上⽹服务: 需付调制解调器租⽤费; 新客户可获豁免⼀次性的调制解调器租⽤费。实际速度将视乎客户的调制解调器与Bell数据交换设备的距离⽽有所不同; 上载速度可⾼达100 Mbps。家居电话：于不受CRTC管制的地区提供。或需⽀付服务地区费⽤（每⽉$4）; 详情请参阅bell.ca/serviceareacharge。按常规，加拿⼤及美国长途为每分钟40¢，并在⾸次通话时收取每⽉$2.95的⽹络费⽤。(1) 适⽤于继续订购无限互联⽹⽤量的Gigabit Fibe速度Fibe上⽹服务、Fibe TV及家居电话的客户。优惠⽉费$99.90乃根据在正价上提供优惠回扣，并基于继续订购下列服务计算得出 ― 无限互联⽹⽤量的Gigabit Fibe速度Fibe上⽹服务每⽉$46.95：即$99.95，减除第1至24个⽉的$53回扣︔Bell Fibe TV的Better组合每⽉$52.95：即$79.95，减除$7组合折扣，再减第1至24个⽉的$23回扣，加上$3数码服务费（Digital Service Fee）; 以及Bell家居电话Lite组合每⽉$0：即每⽉$38.80，加上每⽉$0.15的9-1-1费⽤，减除第1至24个⽉的$38.95回扣。之后需付正价⽉费。Whole Home PVR：$0租⽤费乃根据$15的每⽉租⽤费，减除$15的每⽉回扣计算得出。适⽤于继续订购BellFibe上⽹服务及Fibe TV的Bell TV订购⽤户︔详情请参阅bell.ca/bundle。该接收器仍属Bell的财产。只要将接收器退还，阁下可随时终⽌租⽤（或需⽀付提前终⽌服务费）。这些接收器可能是全新或复修器材，⼀律由Bell选定。所有订价可随时更改，恕不另⾏通知。优惠⽉费将适⽤于您优惠期内，⾸个完整的30天账单周期，以及之后的每个完整账单周期。您的账单周期有可能并非从您订购服务当天开始。⽽在您⾸个完整的30天账单周期之前所提供的服务，或若Bell在某个30天账单周期内终⽌您的服务，均需⽀付正价。已包括安装：将提供$199.95回扣，⽤来抵消Gigabit Fibe速度Fibe上⽹服务及Fibe TV服务的⼀次性$199.95开户/安装费。Fibe TV：包括安装调制解调器、Whole Home PVR及多达两部额外的⾼清接收器; 详情请参阅bell.ca/fibetvinstall。每部额外接收器的安装费为$50。Gigabit Fibe速度Fibe上⽹服务：受某些条件限制; 详情请参阅bell.ca/fullinstall。家居电话：tbv安装包括在服务接入点，安装⼀个插座（若⽬前未有的话）; ⾸个额外插座的安装费为$75，以后每个则为$50。(2) 最⾼速度只能在有线连接的情况下达到。速度会受设备、配置、互联⽹流量、同时使⽤IPTV（如适⽤）、伺服器或其他因素的影响⽽有所分别。Wi-Fi速度视乎调制解调器类型⽽定，可能会限于150Mbps或600 Mbps ; 详情请参阅bell.ca/speedguide。(3) 无限互联⽹⽤量：适⽤于继续订购电视及上⽹组合的上⽹服务客户︔详情请参阅bell.ca/bundledetails。您需遵守在bell.ca/agreements列明的上⽹服务协议条款及细则。Fibe乃Bell Canada之商标。 <?php } else { ?>&copy; Bell&nbsp;Canada,&nbsp;2016. 版权所有。<?php } ?></p>
  </div>

</div>
<!-- LEGAL - END -->


</body>
</html>
