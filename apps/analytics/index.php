<?php
include_once("../../config/@config.php");
include_once("../../library/JRAD/PHP/@JRAD-PHP.php");
include_once("../../library/JRAD/SQL/@JRAD-SQL.php");
include_once("../../php/logic/Controller.php");
include_once("../../php/logic/Methods.php");

include_once("inc/List-Master.php");
include_once("inc/Bean-Master.php");
$bean = new BeanMaster();
$display = $bean->getView($USER,$list);
#var_dump($display);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Dive Analytics';
include_once("../../include/shared/Meta.php");
include_once("lib/@JRAD-CSS.php");
include_once("lib/@JRAD-JS.php");
include_once("lib/@JRAD-CSS-DRA.php");
include_once("glob/External.php");
?>
</head>
<body class="DRAGONFLY DRAGONFLY-DOWNLOAD">
<?php include_once("glob/Header.php"); ?>
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
        <tr><th>
        	<span class="meta"><?php echo $display->total; ?></span> 
            <?php echo $meta_page; ?>
		</th></tr>
        <?php echo $display->output; ?>
    </table>
    </section>
    
    <section>
        <table class="menu">
            <tr><th>Options</th></tr>
            <tr><td><a href="../../index.php" class="menu">Home</a></td></tr>        
        </table>
    </section>        
</main>

<?php include_once("../../include/shared/Footer.php"); ?>
</body>
</html>

