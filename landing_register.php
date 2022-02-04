<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Groups.php");
include_once("php/server/Landing-Register.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Create an Account';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-LANDING register">
<?php include_once("include/local/Header.php"); ?>
<main>
	<h1>Get started with Dive</h1>
    <h2>HWP Labs's courseware repository for entry-level developers</h2>
    <form <?php echo JRAD_FORM_POST(); ?>>           
		<?php echo JRAD_DISPLAY_ERROR($err); ?>
        <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Enter your Email Address" required />		        
        <input type="search" name="username" value="<?php echo $_POST['username']; ?>" placeholder="Enter your Username" required />		
        <input type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" placeholder="Enter your Password" onDblClick="$_togglePassword()" required />
        <select name="groups" required>
	        <optgroup label="Select Community">
			<?php echo JRAD_FORM_SELECT($__Groups,$_POST['groups']); ?>
    	    </optgroup>
        </select>
		<input type="submit" value="Sign up" />
        <p></p>
        Already have an Account? <a href="landing_login.php">Click here</a>
    </form>    
    <p>&nbsp;</p>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

