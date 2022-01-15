<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');

/* FOR LIVE - START */
$goal = 42;
$current = 0;
/* FOR LIVE - END */

/* FOR TESTING ONLY - START */
/*
$goal = $_GET['g'];
$current = $_GET['c'];
if (!$goal){$goal = 145;}
if (!$current){$current = 0;}
*/
/*FOR TESTING ONLY - END */

$building = "2015 Sheppard Avenue East";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "2015&nbsp;Sheppard&nbsp;Avenue&nbsp;East, North&nbsp;York";
$legalDate = "August&nbsp;6,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
