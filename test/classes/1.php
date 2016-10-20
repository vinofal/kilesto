<?php 
Class Template {

        private $registry;
        private $vars = array();

        function __construct($registry) {
                $this->registry = $registry;

        }
function vars($varname, $value) {
		if (isset($this->vars[$varname]) == true) {
			trigger_error ('Unable to set var `' . $varname . '`. Already set, and overwrite not allowed.', E_USER_NOTICE);
			return false;
		}
		$this->vars[$varname] = $value;
		return true;
	}
	
	// отображение
	function view($name) {
		$pathLayout = site_path . 'views' . DIRSEP . 'layouts' . DIRSEP . $this->layouts . '.php';
		$contentPage = site_path . 'views' . DIRSEP . $this->controller . DIRSEP . $name . '.php';
		if (file_exists($pathLayout) == false) {
			trigger_error ('Layout `' . $this->layouts . '` does not exist.', E_USER_NOTICE);
			return false;
		}
		if (file_exists($contentPage) == false) {
			trigger_error ('Template `' . $name . '` does not exist.', E_USER_NOTICE);
			return false;
		}
		
		foreach ($this->vars as $key => $value) {
			$$key = $value;
		}

		include ($pathLayout);                
	}


}