<?php
include_once("../../config/@config.php");
include_once("../../library/JRAD/PHP/@JRAD-PHP.php");
include_once("../../library/JRAD/SQL/@JRAD-SQL.php");
include_once("../../php/logic/Controller.php");
include_once("../../php/logic/Methods.php");

include_once("glob/Master.php");
include_once("inc/Bean-Master.php");
include_once("inc/INF-Job.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = $menu3;
include_once("../../include/shared/Meta.php");
include_once("lib/@JRAD-CSS.php");
include_once("lib/@JRAD-JS.php");
include_once("lib/@JRAD-CSS-DRA.php");
include_once("glob/External.php");
?>
<link type="text/css" href="inc/Style-Master.css" rel="stylesheet" /> 
<link type="text/css" href="inc/Style-Form.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS form">
<?php include_once("glob/Header.php"); ?>
<main>
    <section class="">
    <table class="list">
    <tr>
        <th class="nowrap">
            The Headhunter's Guide to securing your dream job 
        </th>
    </tr>
    <tr>
        <td class="notice"><div class="notice"><?php echo $promo2; ?></div></td>
        </td>
    </tr>
	</table>
	</section>
    
    <section class="">

    </section>    
    
	<section>
    <table class="menu">    
    	<tr><th>Options</th></tr>
        <tr><td><a href="<?php echo $page1; ?>"><?php echo $menu1; ?></a></td></tr>
        <tr><td><a href="<?php echo $page2; ?>"><?php echo $menu2; ?></a></td></tr>        
        <tr><td><a href="index.php">Main Menu</a></td></tr>
        <tr><td><a href="../../index.php">Home</a></td></tr>            
    </table>
    </section>     
</main>
<?php include_once("../../include/shared/Footer.php"); ?>
</body>
</html>

