<?php
class GS_Auto_Path
{
	public $_controller = '';
	public $_page = '';
	public $_subpage = '';
	public function __construct(){
	}
	public function fixNames(){
		if(is_null($this->_page)){
			$this->_page=defined('PAGE_MAIN_DEFAULT')?PAGE_MAIN_DEFAULT:$this->_page;
		}
		if(is_null($this->_subpage)){
			$this->_subpage=defined('PAGE_SUB_DEFAULT')?PAGE_SUB_DEFAULT:$this->_subpage;
		}
		if(!defined('CONTROLLER'))
		{
			define('CONTROLLER',$this->_controller);
		}
		if(!defined('PAGE_MAIN')){
			define('PAGE_MAIN',$this->_page);	
		}
		if(!defined('PAGE_SUB')){
			define('PAGE_SUB',$this->_subpage);
		}
	}
	public function setController($_controller){
		$this->_controller = $_controller;
	}
	public function setPage($_page){
		$this->_page = $_page;
	}
	public function setSubpage($_subpage){
		$this->_subpage = $_subpage;
	}
}
?>