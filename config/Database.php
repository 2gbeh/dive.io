<?PHP
class Database
{
	private $SCHEMA, $ANNO, $CONN;	
	function __construct ()
	{
		$this->SCHEMA = $GLOBALS['SCHEMA'];
		$this->ANNO = $GLOBALS['ANNOTATION'];
		$this->CONN = $GLOBALS['CONNECTION'];		
	}
	function Tables ()
	{
		$sql = "SHOW TABLES FROM ".$this->SCHEMA->database;
		$result = $this->CONN->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
				$array[] = current($row);
		}
		return $array;
	}
	function Schema ($table)
	{		
		$tableArray = $this->Tables();
		foreach ($tableArray as $each)
		{
			$sql = "SELECT COLUMN_NAME,COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS 
			WHERE TABLE_SCHEMA='".$this->SCHEMA->database."' AND TABLE_NAME='".$each."'";
			$result = $this->CONN->query($sql);
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
					$array[$each][] = current($row).' '.strtoupper(end($row));
			}
		}
		if ($table) {return $array[$table];}
		return $array;
	}
	function Meta ($table)
	{
		$_DATE = $this->ANNO->DATE;
		$_PK = $this->ANNO->PK;
		$sql = "SELECT * FROM ".$table;
		$result = $this->CONN->query($sql);
		if ($result->num_rows > 0) 
		{
			$today = date("Y-m-d");
			$counter = 0;
			$object->total = $result->num_rows;
			while($row = $result->fetch_assoc()) 
			{
				$eta = explode(" ",$row[$_DATE]);
				$date = $eta[0];
				$time = $eta[1];
				if ($date == $today) {$counter++;}
				$array[] = $row;
			}
			$object->today = $counter;
			$object->first_row = current($array);
			$object->last_row = end($array);
			$object->first_id = $object->first_row[$_PK];
			$object->last_id = $object->last_row[$_PK];
			$object->next_id = $object->last_id + 1;			
			return $object;
		}
		else {return 0;}
	}	
	function Display ($table, $id)
	{		
		if (is_numeric($id) && $id > 0)
		{
			$_PK = $this->ANNO->PK;			
			$sql = "SELECT * FROM ".$table." WHERE ".$_PK."='".$id."'";
			$result = $this->CONN->query($sql);
			if ($result->num_rows > 0) {return $result->fetch_object();}			
		}
		else
		{
			$sql = "SELECT * FROM ".$table;
			$result = $this->CONN->query($sql);
			if ($result->num_rows > 0) 
				while($row = $result->fetch_assoc()) {$array[] = $row;}
			return $array;
		}
	}
	
}
$DATABASE = new Database();
?>
