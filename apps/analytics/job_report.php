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
$meta_page = $menu2;
include_once("../../include/shared/Meta.php");
include_once("lib/@JRAD-CSS.php");
include_once("lib/@JRAD-JS.php");
include_once("lib/@JRAD-CSS-DRA.php");
include_once("glob/External.php");
?>
<link type="text/css" href="inc/Style-CBT.css" rel="stylesheet" /> 
<style type="text/css">
form ul.cbt li {
	padding:15px 20px 0;
	margin:0 0 20px 0;
	background-color:#F1F1F1;}
form ul.cbt .question {font-weight:bold;}
form ul.cbt .answer {
	padding:10px 15px;
	margin:10px 0 0;
	background-color:#FFF;
	font-size:12px;
	border-left:solid #333;}
</style>
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS">
<?php include_once("glob/Header.php"); ?>
<main>
    <section class="">
    <table class="list">
    <tr><th class="nowrap"><?php echo $meta_page; ?></th></tr>
    <tr>
        <td class="notice">
            <div class="notice"><?php echo $promo2.'<p></p>'.$promo1; ?> </div>
        </td>
    </tr>
    </table>
	</section>
    
    <section class="">
    <form>
   	<?php echo JRAD_DISPLAY_ERROR($display->err); ?>
    <?php
    	foreach ($list as $key => $value)
		{
			$buffer .= '<li>';
			$buffer .= '<div class="question">'.$value.'</div>';
			$buffer .= '<div class="answer">'.$keyPoints[$key].'</div>';
			$buffer .= '</li>';
		}
		echo '<ul class="cbt">'.$buffer.'</ul>';
	?>
    </form>
    </section>

	<section>
    <table class="menu">    
    	<tr><th>Options</th></tr>
        <tr><td><a href="<?php echo $page1; ?>"><?php echo $menu1; ?></a></td></tr>
        <tr><td><a href="<?php echo $page3; ?>"><?php echo $menu3; ?></a></td></tr>                
        <tr><td><a href="index.php">Main Menu</a></td></tr>
        <tr><td><a href="../../index.php">Home</a></td></tr>            
    </table>
    </section>       
</main>
<?php include_once("../../include/shared/Footer.php"); ?>
</body>
</html>

