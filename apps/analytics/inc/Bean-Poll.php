<?PHP
class BeanPoll
{
	public $TABLE, $APPNAME, $POLL, $LIST, $NAV;
	function __construct ($appname, $poll_id, $list, $nav)
	{
		$this->TABLE = 'dve_ana_poll';
		$this->SUPER = new BeanMaster($this->TABLE);	

		$this->APPNAME = $appname;
		$this->POLL = $poll_id;
		$this->LIST = $list;		
		$this->NAV = $nav;
		$this->CLAUSE = ' WHERE poll_id="'.$poll_id.'"';
	}	
	function getTotal () {return $this->SUPER->getTotal($this->CLAUSE);}
	function getSum ($question_id) 
	{
		$array = $this->getEntry();
		$key = $question_id - 1;		
		foreach ($array as $assoc)
			$sum += $assoc[$key];
		return $sum;
	}
	function getView ()
	{
		$array = $this->LIST;
		$q = 1;
		foreach ($array as $value)
		{
			$name = 'q'.$q;
			$buffer .= '<tr>
	        	<td class="input"><input type="checkbox" name="'.$name.'" /></td>
    		    <td class="label">'.$value.'</td>
	    	</tr>';
			$q++;
		}
		$output = $buffer;
		return $output;
	}
	function toServer ($USER)
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$table = $this->TABLE;			
			$user_id = $USER->id;
			$poll_id = $this->POLL;
			$entry = $this->setEntry($_POST);
			
			$entry = array('user_id'=>$user_id,'poll_id'=>$poll_id,'entry'=>$entry);
			return JRAD_CRUD_CREATE($table,$entry);
		}
	}
	function setEntry ($post)
	{
		$list = $this->LIST;
		for ($i = 1; $i <= count($list); $i++) 
		{
			$key = 'q'.$i;
			$array[$key] = $post[$key] ? '1':'0';
		}
		$output = implode(',',$array);
		return $output;		
	}	
	function getEntry () 
	{
		$super = $this->SUPER;
		$resultSet = $super->getRecords($this->CLAUSE);
		foreach ($resultSet as $row)
			$csv[] = explode(',',$row->entry);	
		return $csv;
	}	
}

?>