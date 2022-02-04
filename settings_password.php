<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("php/server/Settings-Password.php");
JRAD_CTRL_BOUNCE($login);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Change Password';
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
    <table class="list">
    	<tr><th>Change Password</th></tr>
    	<tr>
        	<td><input 
            type="password" 
            name="current" 
            id="current"             
            value="<?php echo $_POST['current']; ?>" 
            onDblClick="$_togglePassword('current')" 
            placeholder="Current Password" 
            required /></td>
		</tr>                
    	<tr>
        	<td><input 
            type="password" 
            name="password" 
            id="psw1"
            placeholder="New Password" 
            required /></td>
		</tr>        
    	<tr>
        	<td><input 
            type="password" 
            id="psw2" 
            onBlur="$_confirmPassword('psw1','psw2')" 
            placeholder="Re-enter New Password" 
            required /></td>
		</tr>
        <tr>
        	<td><input type="submit" value="Update" /></td>
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

