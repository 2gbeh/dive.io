<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Locked Content';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS locked">
<?php include_once("include/shared/Header.php"); ?>
<main>
    <section class="">
    <div class="pagicon">
    	<img src="media/icons/Locked-Alt.png" border="0" alt="" />
	</div>
    <table class="list">
    	<tr><th>Subcription Required</th></tr>
    	<tr><td class="notice">
            If you have already subscribed for this service, kindly Login or 
            visit the Payment Portal by clicking on the link below.
        </td></tr>        
    </table>
    </section>
        
    <section>
    <table class="menu">
        <tr><th>Options</th></tr>
        <tr><td><a href="landing_login.php">Log into your Account</a></td></tr>        
        <tr><td><a href="payment.php">Payment Portal</a></td></tr>
        <tr><td><a href="index.php">Home</a></td></tr>
    </table>
    </section>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

