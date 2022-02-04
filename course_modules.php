<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Quotes.php");
include_once("data/list/Modules.php");
include_once("php/server/Course-Modules.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Course Modules';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-FEEDS-PREVIEW modules">
<?php include_once("include/shared/Header.php"); ?>
<?php 
$array = $__Quotes;
$random = array_rand($array,1);
#$random = 16;
$row = $array[$random];
?>
<div class="quoteblock">
<main>
    <div class="quote"><?php echo $row['quote']; ?></div>
    <div class="byline"><?php echo $row['author'].', '.$row['company']; ?></div>
    <p></p>
    <ul class="nav">
    	<li>&nbsp;</li>
		<li id="selected">&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
    </ul>
</main>    
</div>

<main>   
<section class="DRAGONFLY-SEARCH">
<form <?php echo JRAD_FORM_GET(); ?>>
    <input 
        type="search" 
        name="search" 
        value="<?php echo $_GET['search']; ?>" 
        placeholder="Search..."
        onKeyUp="" 
    />
    <input type="submit" disabled />
</form>
</section>
    
<section>
    <div class="tags">Course Modules</div>
    <table class="list"><?php echo $output; ?></table>
</section>    
</main>

<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

