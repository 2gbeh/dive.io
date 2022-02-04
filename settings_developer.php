<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Domain.php");
include_once("php/server/Settings-Developer.php");
JRAD_CTRL_BOUNCE($login);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Developer Account';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS settings">
<?php include_once("include/shared/Header.php"); ?>
<main>
    <section class="">
    <form <?php echo JRAD_FORM_POST(); ?>>
	<?php echo JRAD_DISPLAY_ERROR($err); ?>    
	<input type="hidden" name="user_id" value="<?php echo $USER->id; ?>" />        
    <table class="list">
    	<tr><th colspan="2">Developer Account</th></tr>
    	<tr>
        	<td class="label">*Domain:</td>
        	<td class="input">
		        <select name="domain" required>
                <?php echo JRAD_FORM_SELECT($__Domain,$DEV->domain); ?>
                </select>
            </td>
		</tr>
		<!--<tr>
        	<td colspan="2" class="notice">Describe an idea or project you're currently working on <span>(160 characters)</span>:</td>
		</tr>        
    	<tr>
	    	<td colspan="2"><textarea name="project" id="message" onFocus="$_smartReset('message','...')" maxlength="160"><?php echo dotted($DEV->project); ?></textarea></td>
		</tr>-->
    	<tr>
        	<td class="label">LinkedIn:</td>        
	    	<td class="input"><input type="text" name="linkedin" value="<?php echo $DEV->linkedin; ?>" placeholder="LinkedIn Profile Link" /></td>
		</tr>
        <tr>
        	<td class="label">GitHub:</td>
        	<td class="input"><input type="text" name="github" value="<?php echo $DEV->github; ?>" placeholder="GitHub Profile Link (GitLab, Bitbucket)" /></td>
		</tr>        
    	<tr>
        	<td class="label">Company:</td>
        	<td class="input"><input type="text" name="company" value="<?php echo $DEV->company; ?>" placeholder="Company or Brand" /></td>
		</tr>                
    	<tr>
        	<td class="label">Website:</td>
        	<td class="input"><input type="text" name="website" value="<?php echo $DEV->website; ?>" placeholder="Website Link" /></td>
		</tr>
        <tr>
        	<td colspan="2"><input type="submit" value="Save" /></td>
        </tr>             
    </table>
    </form>
    </section>
    
    <section>
		<?php include_once("include/local/Settings-Footer.php"); ?>
    </section>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

