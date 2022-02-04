<?php
include_once("../../config/@config.php");
include_once("../../library/JRAD/PHP/@JRAD-PHP.php");
include_once("../../library/JRAD/SQL/@JRAD-SQL.php");
include_once("../../php/logic/Controller.php");
include_once("../../php/logic/Methods.php");

include_once("glob/Master.php");
include_once("inc/Bean-Master.php");
include_once("inc/INF-Acute2.php");
include_once("inc/Bean-Poll.php");
include_once("inc/Logic-Acute2.php");
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
            From the data captured; <?php echo $display->contrast; ?> of registered 
            voters intend to vote in the coming election. 
            <?php echo $display->derived; ?> is currently the main deterrent amongst 
            non-voters. 
            <a>More insights below;</a>
        </td>
    </tr>
    </table>
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

