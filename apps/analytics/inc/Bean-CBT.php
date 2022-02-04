<?PHP
class BeanCBT
{
	public $TABLE, $APPNAME, $CBT, $LIST, $NAV;
	function __construct ($appname, $cbt_id, $list, $nav)
	{
		$this->TABLE = 'dve_ana_cbt';
		$this->SUPER = new BeanMaster($this->TABLE);	

		$this->APPNAME = $appname;
		$this->CBT = $cbt_id;
		$this->LIST = $list;		
		$this->NAV = $nav;
		$this->CLAUSE = ' WHERE cbt_id="'.$cbt_id.'"';
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
	function getAnswers ()
	{
		$list = $this->LIST;
		foreach ($list as $assoc)
			$array[] = $assoc['answer'];
		return $array;
	}		
	function getScore ($postArray)
	{
		$ansArray = $this->getAnswers();
		$selected = array_values($postArray);
		$score = 0;
		foreach ($ansArray as $key => $answer)
			if ($answer == $selected[$key]) {$score++;}
		return $score;
	}		
	function toServer ($USER)
	{	
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{	
			$table = $this->TABLE;
			$user_id = $USER->id;
			$cbt_id = $this->CBT;				
			$score = $this->getScore($_POST);
			
			$entry = array('user_id'=>$user_id,'cbt_id'=>$cbt_id,'score'=>$score);
			$execute = JRAD_CRUD_CREATE($table,$entry);
			if ($execute) 
			{
				$super = $this->SUPER;
				$appname = $this->APPNAME;
				$nav = $this->NAV;	
				$username = getName($USER);

				// Compose Email
				$message = '<tr><td>Username</td><td>'.$username.'</td></tr>';
				$message .= '<tr><td>Score</td><td>'.$score.'</td></tr>';
				$super->sendMail($appname,$message);
				
				// Goto Report			
				$err = "Data captured. Thank you."; 
				JRAD_CTRL_GOTO($nav.'?err='.$err);	
			}
			else {$err = "!Oops, something went wrong.";}
			return $err;
		}
	}	
	function getReport ()
	{
		$super = $this->SUPER;
		$array = $super->getRecords($this->CLAUSE.' ORDER BY id DESC');			
		foreach ($array as $i => $row)
		{
			$name = $super->getName($row->user_id);
			$date = $super->formatDate($row->eta);
			$dataset[$i][0] = $name.' <sup class="extra">'.$date.'</sup>';
			$dataset[$i][1] = $row->score;
		}		
		$overall = count($this->LIST);
		$output->total = $this->getTotal();
		$output->chart = $super->getReport($dataset,$overall);			
		return $output;
	}	
}
?>