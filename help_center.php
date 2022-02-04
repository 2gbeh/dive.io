<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("php/server/Help-Center.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Help Center';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS help">
<?php include_once("include/shared/Header.php"); ?>
<main>   
	<section>
    <table class="menu">
        <tr><th>Help Center</th></tr>
        <tr><td>
            <a>Having difficulties on our platform?</a>
            <div class="summary">Kindly fill and submit an Enquiry Ticket below</div>
		</td></tr>
    </table>
    </section>

	<section class="">
    <form <?php echo JRAD_FORM_POST(); ?>>
    <?php echo JRAD_DISPLAY_ERROR($err); ?>
    <table class="list">       
    	<tr><th colspan="2">Submit Ticket</th></tr>
    	<tr>
        	<td class="label">Email:</td>
	    	<td class="input">
            	<input 
                	type="email" 
	                name="email" 
                    value="<?php echo $USER ? $USER->email : $_POST['email']; ?>" 
					placeholder="Enter Email Address" 
					required 
				/>
            </td>
		</tr>        
    	<tr>
        	<td class="label">Subject:</td>
	    	<td class="input"><input type="text" name="subject" value="<?php echo $_POST['subject']; ?>" placeholder="Enter Subject" required /></td>
		</tr>
    	<tr>
        	<td class="label">Message:</td>        
	    	<td class="input"><textarea name="message" id="message" onFocus="$_reset('message')" required>...</textarea></td>
		</tr>
        <tr>
        	<td colspan="2"><input type="submit" value="Send" /></td>
        </tr>
    </table>
    </form>
    </section>


	<section class="">    
    <form>
    <table class="list">
    	<tr><th colspan="2">Contact Us</th></tr>
    	<tr>
        	<td class="label">Email Address:</td>
	    	<td class="input"><input type="text" value="dive@hwplabs.com" readonly /></td>
		</tr>
    	<tr>
        	<td class="label">Telephone:</td>
	    	<td class="input"><input type="text" value="+234(0) 81 6996 0927" readonly /></td>
		</tr>        
    	<tr>
        	<td class="label">WhatsApp:</td>
	    	<td class="input"><input type="text" value="+234(0) 81 6996 0927" readonly /></td>
		</tr>
        </table>
	</form>
    </section>    
    

	<section>
    <table class="menu">    
    	<tr><th>Options</th></tr>
        <tr><td><a href="help_updates.php">Software Updates</a></td></tr>
        <tr><td><a href="help_docs.php">Documentation</a></td></tr>            
    </table>
    </section>        
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

