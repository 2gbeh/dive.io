<?php
include_once("../../config/@config.php");
include_once("../../library/JRAD/PHP/@JRAD-PHP.php");
include_once("../../library/JRAD/SQL/@JRAD-SQL.php");
include_once("../../php/logic/Controller.php");
include_once("../../php/logic/Methods.php");

include_once("glob/Master.php");
include_once("inc/Bean-Master.php");
include_once("inc/INF-Ttng.php");
include_once("inc/Bean-Survey.php");
include_once("inc/Logic-Ttng.php");
$display = procReport($keyPoints);
#var_dump($display);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = $menu2;
include_once("../../include/shared/Meta.php");
include_once("lib/@JRAD-CSS.php");
include_once("lib/@JRAD-JS.php");
include_once("lib/@JRAD-CSS-DRA.php");
include_once("glob/External.php");
?>
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS">
<?php include_once("glob/Header.php"); ?>
<main>
    <section class="">
    <table class="list">
    <tr><th class="nowrap"><?php echo $meta_page; ?></th></tr>
    <tr>
        <td class="notice">
            A total of <?php echo $display->total; ?> questionnaires have been 
            filled at this point. 
            From the data captured; <?php echo $display->contrast; ?> of college 
            students are passionate about their respective academic fields of study.
            <?php echo $display->derived; ?> currently has the most influence in 
            deciding an academic field of study for college students. 
            <a>More insights below:</a>
        </td>
    </tr>
    </table>
   	<?php echo JRAD_DISPLAY_ERROR($display->err); ?>    
    <ul class="DRAGONFLY-WIDGET-INKBLOT">
	<?php echo $display->chart; ?>      
    </ul>
	</section>

	<section>
    <table class="menu">    
    	<tr><th>Options</th></tr>
        <tr><td><a href="<?php echo $page1; ?>"><?php echo $menu1; ?></a></td></tr>
        <tr><td><a href="index.php">Main Menu</a></td></tr>
        <tr><td><a href="../../index.php">Home</a></td></tr>            
    </table>
    </section>       
</main>
<?php include_once("../../include/shared/Footer.php"); ?>
</body>
</html>

