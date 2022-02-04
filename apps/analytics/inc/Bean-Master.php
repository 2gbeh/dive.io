<?PHP
class BeanMaster 
{
	public $TABLE;
	function __construct ($table)
	{
		$this->TABLE = $table;		
		$this->SUPER = new DataAccessObject($table);
	}	
	function getTotal ($clause)
	{
		$sql = 'SELECT COUNT(id) FROM '.$this->TABLE.$clause;
		$result = $this->SUPER->Execute($sql);
		return current($result);
	}	
	function getRecords ($clause)
	{
		$sql = 'SELECT * FROM '.$this->TABLE.$clause;
		$result = $this->SUPER->Execute($sql,true);
		return $result;
	}	
	function getSum ($column_name, $clause)
	{
		$sql = 'SELECT SUM('.$column_name.') FROM '.$this->TABLE.$clause;
		$result = $this->SUPER->Execute($sql);
		return current($result);
	}
	function getName ($id)
	{
		$user = getRow($id);
		$output = getName($user);
		return $output;
	}	
	function getPerc ($total, $fraction)
	{
		$perc = (100 * $fraction) / $total;
		return round($perc);
	}		
	function getAttrib ($perc)
	{
		if ($perc <= 33) {$hex = '#DD4B39';}
		else if ($perc >= 34 && $perc <= 66) {$hex = '#F39C12';}
		else {$hex = '#00A65A';}
		$output = 'style="background-color:'.$hex.'; width:'.$perc.'%;" title="'.$perc.'%"';
		return $output;
	}
	function formatDate ($timestamp, $format = "M j")
	{
		$array = explode(" ",$timestamp);
		$strtotime = strtotime($array[0]);
		return date($format,$strtotime);
	}
	function formatTime ($timestamp, $format = "h:i A")
	{
		$array = explode(" ",$timestamp);
		$strtotime = strtotime($array[1]);
		return date($format,$strtotime);
	}	
	function sendMail ($appname, $body)
	{
		$from = 'contact@hwplabs.com';
		$to = 'tugbeh.osaretin@gmail.com';
		$subject = 'Data Capture #'.$this->getTotal();
		$message = '<html>';
		$message .= '<head>';
		$message .= '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
		$message .= '</head>';
		$message .= '<body>';
		$message .= '<table border="1" width="100%" cellpadding="10" cellspacing="0">';
		$message .= '<tr style="background-color:#0093DD; color:#FFF;">';
		$message .= '<th colspan="2">'.$appname.'</th>';
		$message .= '</tr>';
		$message .= $body;
		$message .= '<tr><td>Date</td><td>'.date("Y-m-d H:i:s").'</td></tr>';
		$message .= '</table>';
		$message .= '</body>';
		$message .= '</html>';
		$server = 'Dive Analytics';
		JRAD_MAIL_HTML($from,$to,$subject,$message,$server);
	}	
	function getView ($USER, $array)
	{
		foreach ($array as $row)
		{
			$row = (object)$row;
			$action = $row->required && !$USER ? loginReq('../../') : $row->link;
			$title = $row->title;
			$date = t_file($row->date);
			
			$buffer .= '<tr><td>
			<a href="'.$action.'">
				<div class="heading">'.$title.'</div>
				<div class="footnote">
					<span class="date">'.$date.'</span>
				</div>
			</a>
			</td></tr>';
		}
		$object->total = count($array) ? count($array).' Total' : '';
		$object->output = $buffer;
		return $object;
	}
	function getReport ($array, $total)
	{
		foreach ($array as $assoc)
		{
			$label = $assoc[0];			
			$perc = $this->getPerc($total,$assoc[1]);
			$attrib = $this->getAttrib($perc);
			
			$buffer .= '<li>
				<div>'.$perc.' %</div>    
				<div>'.$label.'</div>
				<ol><li '.$attrib.'>&nbsp;</li></ol>
			</li>';
		}
		$output = $buffer;
		return $output;
	}	
}
?>