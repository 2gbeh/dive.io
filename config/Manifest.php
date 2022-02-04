<?PHP
class Manifest
{
	function __construct ()
	{
		$this->root =			"dive";		
		$this->appname = 		"Dive";
		$this->alias = 			"";		
		$this->typeface = 		"HWP Labs Dive";		
		$this->abbr =	 		"DVE";
		$this->domain = 		"dive.hwplabs.com";
		$this->url = 			"http://dive.hwplabs.com/";	
		$this->cpanel = 		"http://www.hwplabs.com:2083/";
		$this->webmail =		"http://www.hwplabs.com:2096/";
		$this->type = 			"Online Tutorials";		
		$this->meta = 			array 
								(
									"Title"=>"HWP Labs Dive: Courseware Repository for Entry-level Developers",
									"Alt"=>"HWP Labs Dive",
									"Desc"=>"Get started with HWP Labs's courseware repository for entry-level developers. Sign Up. Download."
								);		
		$this->favicon = 		"media/icons/Favicon.png";		
		$this->logo = 			"media/icons/Logo.png";
		$this->theme = 			array 
								(
									"Cyan"=>"#0093DD",
									"Dyan"=>"#007BB8",
									"Lyan"=>"#75C5F0"
								);
		$this->contractor = 	"HWP Labs";
		$this->client = 		array 
								(
									"Company"=>"HWP Labs",
									"Name"=>"Tugbeh Emmanauel",
									"Email"=>"tugbeh.osaretin@gmail.com",
									"Phone"=>"08169960927"
								);
		$this->mailto =			array 
								(
									"Info"=>"info@hwplabs.com",
									"Support"=>"support@hwplabs.com",
									"Contact"=>"contact@hwplabs.com"
								);
		$this->admin =			"HWP Labs Dive Team";
		$this->copyright = 		"2019 HWP Labs. CRBN 658815";		
		$this->impressum =	 	"Copyright &copy; 2019 <a href='http://www.hwplabs.com/'>HWP Labs</a>. CRBN 658815";
		$this->framework =	 	"DragonFly";
		$this->bundle =			"2.02.01.19";
		$this->dates = 			array 
								(
									"Initial"=>"2017/09/10",
									"Stable"=>"2018/09/08",
									"Expires"=>"2019/09/06"
								);
	}
}
$MANIFEST = new Manifest();
?>