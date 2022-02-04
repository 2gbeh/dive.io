<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Groups.php");
include_once("data/list/Domain.php");
include_once("php/server/Groups.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_title = 'Dive Groups: Discover world-class software development teams';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SEARCH network">
<?php include_once("include/shared/Header.php"); ?>
<main>
	<section>
    <form <?php echo JRAD_FORM_GET(); ?>>
    <input 
        type="search" name="search"
        value="<?php if ($isFound == false) echo $_GET['search']; ?>"
        list="list-groups"
        placeholder="Search Groups..."
        onKeyUp="$_this_toggle(this.value)" 
        onChange="$_this_datalist(this.value)" 
    />
    <?php echo JRAD_FORM_DATALIST('groups',$__Groups); ?>    
    <input type="submit" />
    </form>
    </section>
    
    <?php if ($isSearch == true) {echo $display; include_once("include/local/Groups-Footer.php");} ?>
        
    <section class="overflow" id="live">
    <?php if ($isSearch == false) {include_once("include/local/Groups-Live.php");} ?>    
    </section>
    
    <section id="recent">
    <?php if ($isSearch == false) {include_once("include/local/Groups-Recent.php");} ?>
    </section> 
</main>

<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

