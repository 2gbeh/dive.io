<?PHP
function JRAD_FETCH_CLAUSE ($table, $clause)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT * FROM ".$table." WHERE ".$clause;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		while ($row = $result->fetch_assoc()) {$array[] = $row;}
		return $array;
	}
}
function JRAD_FETCH_EXIST ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$whereCluase = JRAD_CRUD_WHERE($field,$value); 
	$sql = "SELECT id FROM ".$table." WHERE ".$whereCluase;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {return $row['id'];}}
}
function JRAD_FETCH_ASSOC ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$whereCluase = JRAD_CRUD_WHERE($field,$value); 
	$sql = "SELECT * FROM ".$table." WHERE ".$whereCluase;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {return $result->fetch_assoc();}
}
function JRAD_FETCH_OBJECT ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$whereCluase = JRAD_CRUD_WHERE($field,$value); 
	$sql = "SELECT * FROM ".$table." WHERE ".$whereCluase;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {return $result->fetch_object();}
}
function JRAD_FETCH_LIKE ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT * FROM ".$table." WHERE ".$field." LIKE '".$value."%'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {$array[] = $row;} return $array;}
}
function JRAD_FETCH_FIRST ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT * FROM ".$table." WHERE ".$field."='".$value."' ORDER BY id ASC LIMIT 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {return $result->fetch_object();}
}
function JRAD_FETCH_LAST ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT * FROM ".$table." WHERE ".$field."='".$value."' ORDER BY id DESC LIMIT 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {return $result->fetch_object();}
}
function JRAD_FETCH_RECENT ($table, $limit = 10)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT * FROM ".$table." ORDER BY id DESC LIMIT ".$limit;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {$array[] = $row;} return $array;}
}
function JRAD_FETCH_RAND ($table, $limit = 10)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT * FROM ".$table." ORDER BY RAND() LIMIT ".$limit;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {$array[] = $row;} return $array;}
}
function JRAD_FETCH_NUMROWS ($table, $field, $value)
{
	$conn = $GLOBALS['CONNECTION'];
	$whereCluase = JRAD_CRUD_WHERE($field,$value); 
	$sql = "SELECT id FROM ".$table." WHERE ".$whereCluase;
	$result = $conn->query($sql);
	return $result->num_rows;
}
function JRAD_FETCH_CELL ($table, $field = 'id')
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT ".$field." FROM ".$table." ORDER BY id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) {$array[] = current($row);}
		return $array;		
	}
}
function JRAD_FETCH_DATE ($table, $date)
{
	$conn = $GLOBALS['CONNECTION'];
	$sql = "SELECT * FROM ".$table;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			$eta = $row['eta'];
			$dateArray = explode(" ",$eta);
			if ($date == $dateArray[0]) {$array[] = $row;}
		}
		return $array;
	}
}
function JRAD_FETCH_ID ($table, $id)
{
	return JRAD_FETCH_OBJECT($table,'id',$id);
}
function JRAD_FETCH_MAC ($table, $id)
{
	$object = JRAD_FETCH_OBJECT($table,'id',$id);
	$eta = toMac($object->eta);
	$id = toBinary($object->id,6);	
	$macAddress = $eta.$id;
	return $macAddress;
}
?>
