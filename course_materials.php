<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Modules.php");
include_once("php/server/Course-Materials.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = $c_meta;
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-DOWNLOAD slides">
<?php include_once("include/shared/Header.php"); ?>
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
    <table class="list">
        <tr><td>
        	<table border="0" class="clearfix">
            <tr>
                <td class="thumb">
	                <img src="<?php echo $c_thumb; ?>" alt="" border="0" />
                </td>
                <td>
                    <div class="heading"><?php echo $c_title; ?></div>
                    <div class="footnote date"><?php echo $c_outline; ?></div>
                </td>
            </tr>
            </table>
        </td></tr>
        <tr><th>
        	<span class="meta"><?php echo $caption; ?></span> 
            Course Materials
		</th></tr>
        <?php echo $output; ?>
    </table>
    </section>
    
    <section>
        <table class="menu">
            <tr><th>Options</th></tr>
            <tr><td><a href="course_modules.php" class="menu">Course Modules</a></td></tr>
            <tr><td><a href="index.php" class="menu">Home</a></td></tr>        
        </table>
    </section>        
</main>

<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

