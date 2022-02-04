<?PHP
class BeanSurvey
{
	public $TABLE, $APPNAME, $FORM, $LIST, $NAV;
	function __construct ($appname, $form_id, $list, $nav)
	{
		$this->TABLE = 'dve_ana_form';
		$this->SUPER = new BeanMaster($this->TABLE);	

		$this->APPNAME = $appname;
		$this->FORM = $form_id;
		$this->LIST = $list;		
		$this->NAV = $nav;
		$this->CLAUSE = ' WHERE form_id="'.$form_id.'"';
	}	
	function getTotal () {return $this->SUPER->getTotal($this->CLAUSE);}		
	function getView ()
	{
		$bullet = array("A","B","C","D","E");
		$array = $this->LIST;
		$q = 1;	
		foreach ($array as $index => $assoc)
		{
			$sn = 'Q'.$q.'.';
			$name = 'q'.$q;
			$question = $assoc['question'];
			
			$buffer = '<li>';
			$buffer .= '<label>'.$sn.'&nbsp;&nbsp;'.$question.'</label>';
			$buffer .= '<ol class="options">';
			$buffer .= '<li><input type="radio" name="'.$name.'" value="option0" checked style="display:none;" /></li>';
			
			$i = 0;
			foreach (array_keys($assoc) as $key)
			{					
				if (substr($key,0,6) == 'option')
				{
					$buffer .= '<li>
						<input type="radio" name="'.$name.'" value="'.$key.'" /> 
						('.$bullet[$i].') '.$assoc[$key].'
					</li>';
					$i++;
				}
			}						
			$buffer .= '</ol></li>';
			$output .= $buffer;
			$q++;				
		}
		$output = '<ul class="cbt">'.$output.'</ul>';
		return $output;
	}	
	function toServer ($USER)
	{	
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$table = $this->TABLE;			
			$user_id = $USER->id;
			$form_id = $this->FORM;
			$entry = $this->setEntry($_POST);
			
			$entry = array('user_id'=>$user_id,'form_id'=>$form_id,'entry'=>$entry);
			$execute = JRAD_CRUD_CREATE($table,$entry);
			if ($execute) 
			{
				$super = $this->SUPER;
				$appname = $this->APPNAME;
				$nav = $this->NAV;
							
				// Compose Email
				$message = $this->composeMail($_POST,$USER);
				$super->sendMail($appname,$message);
				
				// Goto Report			
				$err = "Data captured. Thank you."; 
				JRAD_CTRL_GOTO($nav.'?err='.$err);
			}
			else {$err = "!Oops, something went wrong.";}
			return $err;			
		}
	}
	function composeMail ($post, $user)
	{
		$list = $this->LIST;
		$values = array_values($post);
		for ($i = 0; $i < count($list); $i++) 
		{
			$map = $list[$i];
			$sel = $values[$i];
			$question = htmlspecialchars($map["question"]);
			$answer = htmlspecialchars($map[$sel]);
			$tbody .= '<tr><td>Question</td><td>'.$question.'</td></tr>';
			$tbody .= '<tr><td>Answer</td><td>'.$answer.'</td></tr>';
		}
		$username = getName($user);
		$thead = '<tr><td>Username</td><td>'.$username.'</td></tr>';				
		$output = $thead.$tbody;
		return $output;
	}
	function setEntry ($post)
	{
		$list = $this->LIST;
		$values = array_values($post);
		for ($i = 0; $i < count($list); $i++) 
		{
			$map = $list[$i];
			$sel = $values[$i];
			$question = htmlspecialchars($map["question"]);
			$answer = htmlspecialchars($map[$sel]);
			$buffer[] = '{"question":"'.$question.'","answer":"'.$answer.'"}';
		}
		$output = implode(",",$buffer);
		return $output;		
	}	
	function getEntry () 
	{
		$super = $this->SUPER;
		$resultSet = $super->getRecords($this->CLAUSE);
		foreach ($resultSet as $key => $row)
		{
			$csv = explode('},{',$row->entry);
			$nth = count($csv) - 1;
			$csv[0] = substr($csv[0],1);
			$csv[$nth] = substr($csv[$nth],0,-1);			
			foreach ($csv as $each)
				$array[$key][] = '{'.$each.'}';
		}
		// $json = '{"objectName":['.implode(",",$array[$i]).']}';
		return $array;
	}
	function scanEntry ($question, $option)
	{
		$resultSet = $this->getEntry();
		$pointer = $question - 1;		
		$counter = 0;
		foreach ($resultSet as $assoc)
		{
			$row = $assoc[$pointer];
			$object = json_decode($row);
			if ($object->answer == $option)
				$counter++;		
		}
		return $counter;
	}	
}
?>