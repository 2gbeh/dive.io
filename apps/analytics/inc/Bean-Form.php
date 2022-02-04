<?PHP
class BeanForm
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
		$array = $this->LIST;
		$q = 1;
		foreach ($array as $value)
		{
			$sn = 'Q'.$q.'.';
			$name = 'q'.$q;
			
			$buffer = '<li>';
			$buffer .= '<label for="'.$name.'">'.$sn.'&nbsp;&nbsp;'.$value.'</label>';
			$buffer .= '<textarea name="'.$name.'" id="'.$name.'">'.$_POST[$name].'</textarea>';
			$buffer .= '</li>';
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
			$question = htmlspecialchars($list[$i]);
			$answer = htmlspecialchars($values[$i]);
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
			$question = htmlspecialchars($list[$i]);
			$answer = htmlspecialchars($values[$i]);
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
}
?>