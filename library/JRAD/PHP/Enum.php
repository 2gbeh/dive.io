<?PHP
function JRAD_ENUM_FORM ($args)
{
	if ($args == 'sex') 
		$array = array ("M","F");		
	if ($args == 'gender') 
		$array = array ("Male","Female");	
	if ($args == 'marital') 
		$array = array ("Single","Married","Separated","Divorced","Widowed");		
	if ($args == 'pos') 
		$array = array ("ATM Transfer","Bank Deposit","Mobile App","USSD Transfer");
	return $array;
}
function JRAD_ENUM_STATE ($args)
{
	$array = array('Abia','Abuja','Adamawa','Akwa Ibom','Anambra','Bauchi','Bayelsa','Benue','Borno','Cross River','Delta','Ebonyi','Edo','Ekiti','Enugu','Gombe','Imo','Jigawa','Kaduna','Kano','Katsina','Kebbi','Kogi','Kwara','Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba','Yobe','Zamfara');
	if (is_numeric($args) && array_key_exists($args,$array)) {return $array[$args];}
	else if (in_array($args,$array)) {return array_search($args,$array);}
	else {return $array;}

}
function JRAD_ENUM_BANK ()
{
	$array = array('Access Bank','ASO Bank','Citibank','Diamond Bank','Ecobank','FCMB','Fidelity Bank','First Bank','GTBank','Heritage Bank','Jaiz Bank','Jubilee Bank','Keystone Bank','LAPO MFB','Mainstreet Bank','Page MFB','Skye Bank (Polaris)','Stanbic IBTC','Standard Chartered Bank','Sterling Bank','Suntrust Bank','UBA','Union Bank','Unity Bank','Wema Bank','Zenith Bank');
	if (is_numeric($args) && array_key_exists($args,$array)) {return $array[$args];}
	else if (in_array($args,$array)) {return array_search($args,$array);}
	else {return $array;}
}
function JRAD_ENUM_SEED ($args)
{
	$map = array
	(
		array('Tugbeh Emmanuel','M','etugbeh','1'),
		array('Obi Sopuluchukwu','M','sobi','2'),
		array('Ndolo Chimaobi','M','cndolo','3'),
		array('Daniel Ugonna','M','udaniel','4'),
		array('Nwokejiobi Wisdom','M','wnwokejiobi','5'),
		array('Nisakpo Joshua','M','jnisakpo','6'),
		array('Oiboh Peter','M','poiboh','7'),
		array('Ogbeomoide James','M','jogbeomoide','8'),
		array('Osagie Eseosa','F','eosagie','9'),
		array('Molokwu Chijioke','M','cmolokwu','10'),
		array('Tugbeh Roosevelt','M','rtugbeh','11'),
		array('Ogiri Adaeze','F','aogiri','12'),
		array('Nworgu Kingsley','M','knworgu','13'),
		array('Osarokwata Emerald','F','eosarokwata','14'),
		array('Olasinde Morolake','F','molasinde','15'),
		array('Okosun Deborah','F','dokosun','16'),	
		array('Orih Prince','M','porih','17'),
		array('Alokwe Peter','M','palokwe','18'),
		array('Okhuebor Cynthia','F','cokhuebor','19'),
		array('Yeno Misan','M','myeno','20'),		
		array('Bobmanuel Godwin','M','gbobmanuel','21'),
		array('Isuru Nyerhowo','M','nisuru','22'),	
		array('Tanshi Jovworie','M','jtanshi','23'),
		array('Ogobegwu Jennifer','F','jogobegwu','24'),
		array('Anyim Victor','M','vanyim','25')
	);
	if (is_numeric($args) && array_key_exists($args,$map)) {return $map[$args];}
	else {return $map;}
}
?>