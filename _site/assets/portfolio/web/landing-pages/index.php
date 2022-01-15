<?php 

$myurl= $_SERVER['HTTP_HOST'];

if ($myurl == 'offredegroupebell.ca' OR $myurl == 'www.offredegroupebell.ca') {
header('Location: http://offredegroupebell.ca/404');  
} else {
header('Location: http://bellgroupoffer.ca/404'); 
}

?>
