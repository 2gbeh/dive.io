<?PHP
class Schema
{
	function __construct ()
	{
		$this->pseudo = "hwplabsc";		
		$this->server = "localhost";
		$this->username = "root";
		$this->password = "";
#		$this->username = "hwplabsc_root";
#		$this->password = "_Strongp@ssw0rd";
		$this->database = "hwplabsc_db";
		$this->table = array 
		(
			"dv_admin",
			"dve_users",
			"dve_developers",
			"dve_payment",			
			"dve_audit",
			"dve_help",
			"dve_materials"			
		);
		$this->field = array 
		(
			"email,username,password,access",
			"photo,fullname,gender,email,phone,location,groups,username,password",
			"user_id,domain,project,linkedin,github,company,website",
			"user_id,order_id,summary,depositor,mode,date",
			"user_id,barcode,duration",
			"email,subject,message",
			"barcode,chapter,title,size,filename",
		);
		$this->desc = array 
		(
			"VARCHAR (50),VARCHAR (25),VARCHAR (25),INT (1)",
			"VARCHAR (25),VARCHAR (50),INT (1),VARCHAR (50),VARCHAR (25),INT (2),INT (2),VARCHAR (25),VARCHAR (25)",
			"INT (6),INT (2),VARCHAR (160),VARCHAR (100),VARCHAR (100),VARCHAR (50),VARCHAR (100)",
			"INT (6),INT (3),VARCHAR (160),VARCHAR (50),VARCHAR (25),VARCHAR (25)",
			"INT (6),VARCHAR (25),INT (3)",
			"VARCHAR (50),VARCHAR (160),LONGTEXT",
			"VARCHAR (25),INT (2),VARCHAR (160),INT (3),VARCHAR (25)",
		);
		$this->preset = array 
		(
			"status INT(1) DEFAULT 0,",
			"eta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,",
			"id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY"
		);						
		$this->record = array 
		(
			"dehphantom@yahoo.com,2gbeh,4444,3",
			"2gbeh.png,tugbeh emmanuel osaretin,0,tugbeh.osaretin@gmail.com,08169960927,24,2gbeh,4444",
		);
	}
}
$SCHEMA = new Schema();
?>