<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Domain.php");
include_once("data/list/Groups.php");
include_once("php/server/Page.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = $smartTitle;
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-PAGE page">
<?php include_once("include/shared/Header.php"); ?>
<section class="hud">
    <div class="profile" style="background-image:url(<?php echo $photo; ?>);" title="Profile Picture">&nbsp;</div>
    <div class="title"><?php echo $fullname; ?></div>
    <div class="subtitle"><?php echo $domain; ?></div>
    <div class="article">
       	<img src="media/icons/Group.png" class="group" alt="" border="0" />
    	<?php echo $groups; ?>
    </div>
    <div class="article">
    	<img src="media/icons/Location.png" class="location" alt="" border="0" />
    	<?php echo $location; ?>
    </div>
    <div class="action"><?php echo $action_btn; ?></div>
</section>

<main>    
	<section class="">
    <table class="list">
		<tr>
        	<th colspan="2">
				<?php echo $action_link_1; ?> 
                Basic Information
        	</th>
        </tr>
    	<tr>
        	<td class="label">Gender:</td>
            <td class="input"><?php echo $gender; ?></td>
		</tr>
    	<tr>
        	<td class="label">Username:</td>
        	<td class="input"><?php echo $username; ?></td>
        </tr>
    	<tr>
        	<td class="label">Phone:</td>
            <td class="input"><?php echo dash($phone); ?></td>
        </tr>        
    	<tr>
	        <td class="label">Email:</td>
        	<td class="input"><?php echo $email; ?></td>
        </tr>
    </table>
    </section>        


	<section class="">
    <table class="list">    
		<tr>
        	<th colspan="2">
				<?php echo $action_link_2; ?> 
                Technical Information
        	</th>
        </tr>
    	<tr>
	        <td class="label">LinkedIn:</td>
	        <td class="input"><?php echo dash($linkedin); ?></td>
        </tr>
    	<tr>
	        <td class="label">GitHub:</td>
	        <td class="input"><?php echo dash($github); ?></td>
        </tr>        
    	<tr>
        	<td class="label">Company:</td>
            <td class="input"><?php echo dash($company); ?></td>
        </tr>
    	<tr>
        	<td class="label">Website:</td>
	        <td class="input"><?php echo dash($website); ?></td>
        </tr>
<!--		<?php echo $project; ?>-->
    </table>
    </section> 

	<?php include_once("include/local/Groups-Footer.php"); ?>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

