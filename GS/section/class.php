<?php
class GS_Section_Class
{
	private $section = '';
	public $file_path = '';
	public $_controller = '';
	public function __construct($_controller){
		$this->_controller = $_controller;
	}
	public function setSection($_section){
		$this->section = $_section;
		$_section_path = WEB_DIR.DS.$this->_controller.DS.'section'.DS.$this->section.'.php';
		if(file_exists($_section_path)){
			include $_section_path;
		}
		else
		{
			echo "<pre>Section ".$this->section." not found.</pre>";
		}
	}
	public function setMainSection($_section){
		$this->section = $_section;
		$_MainSection_path = 'site'.DS.'section'.DS.$this->section.'.php';
		if(file_exists($_MainSection_path)){
			include $_MainSection_path;
		}
		else
		{	
			echo "<pre>Main Section ".$this->section." not found.</pre>";
		}
	}
}
?>