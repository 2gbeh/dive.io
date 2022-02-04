<?PHP
function JRAD_CRUD_CREATE ($table, $post)
{
	$conn = $GLOBALS['CONNECTION'];	
	$farr = JRAD_CRUD_FIELDS($post);
	$rarr = JRAD_CRUD_VALUES($post);
	$sql = "INSERT INTO ".$table." (".$farr.") VALUES (".$rarr.")";	
	if ($conn->query($sql) === TRUE) {return $conn->insert_id;}
}
function JRAD_CRUD_UNIQUE ($table, $post, $where)
{
	$id = JRAD_FETCH_EXIST($table,$where[0],$where[1]);
	if ($id) {return JRAD_CRUD_UPDATE($table,$post,$where);}
	else {return JRAD_CRUD_CREATE($table,$post);}
}
function JRAD_CRUD_SEED ($table, $postArray)
{	
	foreach ($postArray as $post) {JRAD_CRUD_CREATE($table,$post);} return 1;
}
function JRAD_CRUD_READ ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	if ($field && $value) {$sql = "SELECT * FROM ".$table." WHERE ".$field."='".$value."'";}	
	else {$sql = "SELECT * FROM ".$table;}
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		while ($row = $result->fetch_assoc()) {$array[] = $row;}
		return $array;
	}
}
function JRAD_CRUD_UPDATE ($table, $post, $where)
{
	$conn = $GLOBALS['CONNECTION'];
	$setClause = JRAD_CRUD_SET($post);
	$whereClause = $where[0]."='".$where[1]."'";
	$sql = "UPDATE ".$table." SET ".$setClause." WHERE ".$whereClause;
	if ($conn->query($sql) === TRUE) {return 1;}
}
function JRAD_CRUD_DELETE ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "DELETE FROM ".$table." WHERE ".$field."='".$value."'";
	if ($conn->query($sql) === TRUE) {return 1;}
}
function JRAD_CRUD_DELETE_WHERE ($table, $clause)
{
	$conn = $GLOBALS['CONNECTION'];
	if (strpos($clause,'='))
	{
		$sql = "DELETE FROM ".$table." WHERE ".$clause;
		if ($conn->query($sql) === TRUE) {return 1;}
	}
}
function JRAD_CRUD_DROP ($table)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "DELETE * FROM ".$table;
	if ($conn->query($sql) === TRUE) {return 1;}
}
function JRAD_CRUD_TRUNCATE ($table)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "TRUNCATE TABLE ".$table;
	if ($conn->query($sql) === TRUE) {return 1;}
}

?>