<?php
class GS_Auto_Loader
{
	public $loader_classes = array();
	public function __construct(){
		$this->add_class('GS_'.ucfirst(CONTROLLER).'_Controller');
		$this->loadController(CONTROLLER);
	}
	public function add_class($_class){
		$this->loader_classes[] = $_class;
	}
	public function runAll(){
		foreach ($this->loader_classes as $class) {
			$view_name = PAGE_MAIN;
			$o=new $class();
			$o->$view_name();
		}
	}

	public function loadController($_controller){
		$_controller_path = WEB_DIR.DS.$_controller.DS.'controller'.DS.$_controller.'.php';
		/* 
		/ If controller path does not exist.
		*/
		if(file_exists($_controller_path)){
			include $_controller_path;
		}
		else
		{
			echo "404 not found.";
		}
	}
}
?>