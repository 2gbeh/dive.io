<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Services.php");
include_once("php/server/Payment.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Payment Portal';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS payment">
<?php include_once("include/shared/Header.php"); ?>
<main>
	<section>
    <div class="pagicon">
    	<img src="media/icons/Payment-Alt.png" border="0" alt="" />
    </div>    
    <form>
    <table class="list">
    	<tr><th colspan="2">Account Details</th></tr>
    	<tr>
        	<td class="label">Bank:</td>
            <td class="input"><input type="text" value="FirstBank Nigeria" readonly /></td>
		</tr>
    	<tr>
        	<td class="label">Name:</td>
            <td class="input"><input type="text" value="TUGBEH EMMANUEL OSARETIN" readonly /></td>
		</tr>
    	<tr>
        	<td class="label">Number:</td>
            <td class="input"><input type="text" value="3051022630" readonly /></td>
        </tr>
    </table>
    </form>
    </section>


	<section class="">
    <form <?php echo JRAD_FORM_POST(); ?>>
	<?php echo JRAD_DISPLAY_ERROR($err); ?>
	<input type="hidden" name="user_id" value="<?php echo $USER->id; ?>" />    
    <table class="list">
    	<tr><th colspan="2">Payment Category</th></tr>
    	<tr>
        	<td colspan="2">
		        <select name="order_id" required>
                <?php echo JRAD_FORM_SELECT($__Services,$_POST['order_id']); ?>
                </select>
            </td>
		</tr>
    	<tr>
        	<td colspan="2" class="notice">Kindly fill and submit the Payment Ticket below AFTER you have made the required deposit</td>
        </tr>                
    	<tr><th colspan="2">Teller Information</th></tr>      
    	<tr>
        	<?php $depositor = !isset($_POST['depositor']) && $USER->fullname ? $USER->fullname : $_POST['depositor']; ?>
        	<td class="label">Name of Depositor:</td>        
	    	<td class="input"><input type="text" name="depositor" value="<?php echo $depositor; ?>" placeholder="Bank Account Name" required /></td>
		</tr>
    	<tr>
        	<td class="label">Reason for Payment:</td>        
	    	<td class="input"><input type="text" name="summary" value="<?php echo $_POST['summary']; ?>" placeholder="Eg. Course Materials for Java Application Development" required /></td>
		</tr>          
    	<tr>
        	<td class="label">Mode of Payment:</td>        
	    	<td class="input">
            	<input type="text" list="list-pos" name="mode" value="<?php echo $_POST['mode']; ?>" list="list-pos" placeholder="Cash Deposit or Transfer" required />
		        <?php echo JRAD_FORM_DATALIST('pos'); ?>
            </td>
		</tr>
		<tr>
        	<td class="label">Date of Payment:</td>
			<td class="input"><input type="date" name="date" value="<?php echo $_POST['date'] ? $_POST['date'] : date("Y-m-d"); ?>" placeholder="YYYY-MM-DD" required /></td>
		</tr>            
        <tr>
        	<td colspan="2"><input type="submit" value="Submit" /></td>
        </tr>             
    </table>
    </form>
    </section>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

