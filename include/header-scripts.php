<?php
$siteurl = "http://localhost/wiki_instigator/";
$fullpageurl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pageurl   = "https://$_SERVER[HTTP_HOST]";
$ip_address = (isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:$_SERVER['REMOTE_ADDR']);
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="ip2loc" content="<?php echo $ip_address ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $siteurl; ?>favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/style-web.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/responsive.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">