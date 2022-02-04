<?PHP
class Annotation
{
	function __construct ()
	{
		$this->PREFIX = 	"dve_";
		$this->PK = 		"id";
		$this->FK = 		"user_id";
		$this->DATE = 		"eta";
		$this->MEDIA = 		array("photo","thumb");
		$this->ENUMS = 		array("gender","location","groups","status");
		$this->UNIQUE = 	array("photo","email","phone","username");
		$this->MAIN =	 	"dve_users";
	}
}
$ANNOTATION = new Annotation();
?>