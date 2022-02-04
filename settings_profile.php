<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Groups.php");
include_once("php/server/Settings-Profile.php");
JRAD_CTRL_BOUNCE($login);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Account Settings';
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
	<section class="hud">
    	<?php $photo = getPhoto($USER); ?>
        <div class="profile" style="background-image:url(<?php echo $photo; ?>);">&nbsp;</div>
        <a href="settings_photo.php" title="Edit Photo">Change Photo</a>
    </section>
    
    
	<section class="">
    <form <?php echo JRAD_FORM_POST(); ?>>
	<?php echo JRAD_DISPLAY_ERROR($err); ?>
    <table class="list">
    	<tr><th colspan="2">Edit Profile</th></tr>
    	<tr>
        	<td class="label">Username:</td>
        	<td class="input"><input type="search" name="username" value="<?php echo $USER->username; ?>" placeholder="Username" required /></td>
		</tr>        
    	<tr>
        	<td class="label">Name:</td>
        	<td class="input"><input type="search" name="fullname" value="<?php echo $USER->fullname; ?>" placeholder="Full Name" required /></td>
		</tr>
    	<tr>
        	<td class="label">Gender:</td>
        	<td class="input">
		        <select name="gender" required>
                <?php echo JRAD_FORM_OPTION('gender',$USER->gender); ?>
                </select>
            </td>
		</tr>        
    	<tr>
        	<td class="label">Email:</td>
	    	<td class="input"><input type="email" name="email" value="<?php echo $USER->email; ?>" placeholder="Email Address" required /></td>
		</tr>        
    	<tr>
        	<td class="label">Phone:</td>        
	    	<td class="input"><input type="search" name="phone" value="<?php echo $USER->phone; ?>" placeholder="Phone Number" required /></td>
		</tr>
        <tr>
        	<td class="label">Location:</td>
        	<td class="input">
		        <select name="location" required>
				<?php echo JRAD_FORM_SELECT(JRAD_ENUM_STATE(),$USER->location); ?>
                </select>
            </td>
		</tr>
    	<tr>
        	<td class="label">Community:</td>
            <td class="input">
                <select name="groups" required>
                <?php echo JRAD_FORM_SELECT($__Groups,$USER->groups); ?>
                </select>
			</td>
		</tr>          
        <tr>
        	<td colspan="2"><input type="submit" value="Update" /></td>
        </tr>             
    </table>
    </form>
    </section>
    
    
    <section>
    <table class="menu">    
    	<tr><th>Settings</th></tr>    
    	<tr><td><a href="settings_password.php">Change Password</a></td></tr>    
    	<tr>
            <td>
                <a href="settings_developer.php">Developer Account</a>
	            <div class="summary">Update your account with your technical skillsets and get discovered by potential clients on Dive Platform</div>
            </td>
        </tr>
    	<tr>
            <td>
                <a href="landing_register.php">Create an Account</a>
	            <div class="summary">Sign up now to access a repository of Course Materials thoughtfully prepared just for you</div>
            </td>
        </tr>
    	<tr><td><a href="index.php">Home</a></td></tr>
    	<tr><td><a href="?logout=true">Log out</a></td></tr>
    </table>
    </section>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

