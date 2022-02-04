<?PHP
$username = $SCHEMA->username;
$password = $SCHEMA->password;
$database = $SCHEMA->database;

$CONN = new mysqli("localhost",$username,$password,$database);
if ($CONN->connect_error) die("Connection failed: ".$CONN->connect_error);
else 
{
	$result = $CONN->query("SHOW TABLES");
	while($row = mysqli_fetch_array($result)) 
		$exist_tb[] = current($row);
	$schema_tb = $SCHEMA->table;
	if (count($exist_tb) != count($schema_tb)) install();
}
function dump ($args) {var_dump($args);}
function install ()
{	
	$schema =  $GLOBALS['SCHEMA'];
	$sqlBuffer = "";
	foreach ($schema->table as $pointer => $table)
	{	
		$field = $schema->field;
		$desc = $schema->desc;
		$fieldArrray = explode(",",$field[$pointer]);
		$descArrray = explode(",",$desc[$pointer]);
		$length = count($fieldArrray);
		$sql = "";
		for ($i = 0; $i < $length; $i++)
			$sql .= $fieldArrray[$i]." ".$descArrray[$i].",";
		foreach ($schema->preset as $glob) $sql .= $glob;	
		$sqlBuffer .= "CREATE TABLE ".$table." (".$sql.");";
	}
	$sqlBuffer = substr($sqlBuffer,0,-1);
	$conn = $GLOBALS['CONN'];
	if ($conn->multi_query($sqlBuffer) === TRUE) {seed();}
	else {echo "Error creating tables: ".$conn->error;}
}
function seed ()
{
	$schema =  $GLOBALS['SCHEMA'];	
	$tableArray = $schema->table;
	$fieldArray = $schema->field;
	$recordArray = $schema->record;	
	$sqlBuffer = "";
	foreach ($recordArray as $pointer => $assoc_array)
	{
		$table = $tableArray[$pointer];
		$fields = $fieldArray[$pointer];
		if (is_array($assoc_array))
		{
			foreach ($assoc_array as $csv) 
			{
				$records = pad($csv);
				$sqlBuffer .= "INSERT INTO ".$table." (".$fields.") VALUES (".$records.");";
			}
		}
		else 
		{
			$records = pad($assoc_array);
			$sqlBuffer .= "INSERT INTO ".$table." (".$fields.") VALUES (".$records.");";
		}
	}
	$sqlBuffer = substr($sqlBuffer,0,-1);
	$conn = $GLOBALS['CONN'];
	if ($conn->multi_query($sqlBuffer) !== TRUE) 
		echo "Error creating tables: ".$conn->error;
}
function pad ($csv) 
{
	$array = explode(",",$csv);
	$buffer = "";
	foreach ($array as $value)
		$buffer .= "'".$value."',";
	return substr($buffer,0,-1);
}
$CONN->close();
?>