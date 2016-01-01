<?php
class GS_App_Class{
	public $default_controller = '';
	public $default_page = '';
	public function run(){
		$this->runApp();
	}
	public function runApp(){
		$array = array(
                   'default_controller'=>$this->default_controller,
                   'default_page'=>$this->default_page
               );
		$runApp = new GS_Auto_Class($array);
		$runApp->load();
	}
	public function setDefaultController($_controller){
		$this->default_controller = $_controller;
	}
	public function setDefaultPage($_page){
		$this->default_page = $_page;
	}
}

?>