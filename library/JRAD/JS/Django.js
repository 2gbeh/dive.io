// JavaScript Document
window.addEventListener 
(	
	"resize", function ()
	{
		var $target = document.getElementById('django');
		var $viewport = $target.getAttribute('data-viewport');
		if (window.innerWidth > parseInt($viewport))
			$target.style.display = "none";
	}
);


