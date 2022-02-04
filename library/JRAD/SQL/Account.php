<?PHP
function JRAD_ACCOUNT_SIGNUP ($table)
{
	$conn = $GLOBALS['CONNECTION'];	
	$appstate = $_SESSION['appstate'];
	$fieldArray = JRAD_CRUD_FIELDS($_POST);
	$valueArray = JRAD_CRUD_VALUES($_POST);
	$sql = "INSERT INTO ".$table." (".$fieldArray.") VALUES (".$valueArray.")";	
	if ($conn->query($sql) === TRUE) 
	{
		$sql = "SELECT * FROM ".$table." WHERE email='".$_POST['email']."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {$object = $result->fetch_object();}
		return $_SESSION[$appstate] = $object->id;
	}
}
function JRAD_ACCOUNT_SIGNIN ($table)
{
	$conn = $GLOBALS['CONNECTION'];	
	$appstate = $_SESSION['appstate'];	
	$fieldArray = array_keys($_POST);
	$valueArray = array_values($_POST);
	$sql = "SELECT * FROM ".$table." WHERE ".$fieldArray[0]."='".$valueArray[0]."'";
	$result = $conn->query($sql);	
	if ($result->num_rows > 0) 
	{
		$whereClause = JRAD_CRUD_WHERE($fieldArray,$valueArray);
		$sql = "SELECT * FROM ".$table." WHERE ".$whereClause;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			$object = $result->fetch_object();
			return $_SESSION[$appstate] = $object->id;
		}
		return '#402';		
	}
	return '#401';
}
function JRAD_ACCOUNT_SIGNOUT ()
{
	$appstate = $_SESSION['appstate'];
	if ($_GET['logout'] == true) {unset($_SESSION[$appstate]);}
}
function JRAD_ACCOUNT_RETRIEVE ($table)
{
	$conn = $GLOBALS['CONNECTION'];	
	$setClause = JRAD_CRUD_SET($_POST);
	$sql = "SELECT * FROM ".$table." WHERE ".$setClause;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {return $result->fetch_object();}
}
function JRAD_ACCOUNT_UPDATE ($table)
{
	$conn = $GLOBALS['CONNECTION'];
	$appstate = $_SESSION['appstate'];	
	$setClause = JRAD_CRUD_SET($_POST);
	$sql = "UPDATE ".$table." SET ".$setClause." WHERE id='".$_SESSION[$appstate]."'";
	if ($conn->query($sql) === TRUE) {return 1;}
}
function JRAD_ACCOUNT_PASSWORD ($table)
{
	$conn = $GLOBALS['CONNECTION'];
	$appstate = $_SESSION['appstate'];	
	$sql = "UPDATE ".$table." SET password='".$_POST['password']."' WHERE id='".$_SESSION[$appstate]."'";
	if ($conn->query($sql) === TRUE) {return 1;}
}


?>