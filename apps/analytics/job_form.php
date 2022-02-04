<?php
include_once("../../config/@config.php");
include_once("../../library/JRAD/PHP/@JRAD-PHP.php");
include_once("../../library/JRAD/SQL/@JRAD-SQL.php");
include_once("../../php/logic/Controller.php");
include_once("../../php/logic/Methods.php");

include_once("glob/Master.php");
include_once("inc/Bean-Master.php");
include_once("inc/INF-Job.php");
include_once("inc/Bean-Form.php");
include_once("inc/Logic-Form.php");
$display = procForm($USER);
#var_dump($display);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = $menu1;
include_once("../../include/shared/Meta.php");
include_once("lib/@JRAD-CSS.php");
include_once("lib/@JRAD-JS.php");
include_once("lib/@JRAD-CSS-DRA.php");
include_once("glob/External.php");
?>
<link type="text/css" href="inc/Style-Master.css" rel="stylesheet" /> 
<link type="text/css" href="inc/Style-CBT.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS">
<?php include_once("glob/Header.php"); ?>
<main>
    <section class="">
    <table class="list">
    <tr>
        <th class="nowrap">
            This mock interview is conducted by Jobsavvy.com, a subsidiary of HWP Labs.
        </th>
    </tr>
    <tr>
        <td class="notice">
			<?php echo $meta_desc; ?>
            <p></p>
            <div class="notice">
                <b>See also</b>: The <a href="<?php echo $page3; ?>">Headhunter's Guide</a> to securing your 
                dream job.
            </div>            
        </td>
    </tr>
    <tr>
        <th>
            <a href="<?php echo $page2; ?>" class="meta">
                <img src="../../media/icons/Trends.png" border="0" alt="View Analysis" title="View Analysis" />
            </a>
            <?php echo $meta_page; ?> 
        </th>
    </tr>    
	</table>
	</section>
    
    <section class="">
    <form <?php echo JRAD_FORM_POST(); ?> id="target">
		<?php echo JRAD_DISPLAY_ERROR($display->err); ?>    
        <?php echo $display->form; ?>
        <input type="button" onClick="$_confirmSubmit('target')" value="Done" />
    </form>
    </section>    
    
	<section>
    <table class="menu">    
    	<tr><th>Options</th></tr>
        <tr><td><a href="<?php echo $page2; ?>"><?php echo $menu2; ?></a></td></tr>
        <tr><td><a href="<?php echo $page3; ?>"><?php echo $menu3; ?></a></td></tr>        
        <tr><td><a href="index.php">Main Menu</a></td></tr>
        <tr><td><a href="../../index.php">Home</a></td></tr>            
    </table>
    </section>     
</main>
<?php include_once("../../include/shared/Footer.php"); ?>
</body>
</html>

