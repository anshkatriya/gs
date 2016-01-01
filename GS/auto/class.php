<?php
class GS_Auto_Class
{
	private $request_path = array();
	private $controller = '';
	private $page= '';
	private $subpage = '';
	public $default_controller = '';
	public $default_page = '';
	public function __construct($_actionArray){
		$this->default_controller = $_actionArray['default_controller'];
                $this->default_page = $_actionArray['default_page'];
		$this->makePath($_REQUEST);
	}
	public function setPath(){
		$this->makePath($_REQUEST);
	}
	public function makePath($req_path){
		$this->request_path = $req_path;
		$this->makeNameSpace();
	}
	public function makeNameSpace(){
		$request_path = array_keys($this->request_path);
		if(empty($request_path)){
			$this->setController($this->default_controller);
			$this->setPage($this->default_page);
		}
		else{
			$path = explode("/",$request_path[0]);
			$_length = count($path);
			switch($_length){
				case '1':
					$_controller = (isset($path[0]) && !is_null($path[0]))?$path[0]:'';
					$_page = (isset($path[1]) && !is_null($path[1]))?$path[1]:$this->default_page;
					$_subpage = (isset($path[2]) && !is_null($path[2]))?$path[2]:'';
					break;
				case '2':
					$_controller = (isset($path[0]) && !is_null($path[0]))?$path[0]:'';
					$_page = (isset($path[1]) && !is_null($path[1]))?$path[1]:'';
					$_subpage = (isset($path[2]) && !is_null($path[2]))?$path[2]:'';
					break;
				case '3':
					$_controller = (isset($path[0]) && !is_null($path[0]))?$path[0]:'';
					$_page = (isset($path[1]) && !is_null($path[1]))?$path[1]:'';
					$_subpage = (isset($path[2]) && !is_null($path[2]))?$path[2]:'';
					break;
				default:
					break;
			}
			$this->setController($_controller);
			$this->setPage($_page);
			$this->setSubpage($_subpage);
		}
	}
	public function setController($_controller){
		$this->controller = $_controller;
	}
	public function setPage($_page){
		$this->page = $_page;
	}
	public function setSubpage($_subpage){
		$this->subpage = $_subpage;
	}
	public function load(){
		$_path = new GS_Auto_Path();
		$_path->setController($this->controller);
		$_path->setPage($this->page);
		$_path->setSubpage($this->subpage);
		$_path->fixNames();
		$this->runApp();
	}
	public function runApp(){
		$loader = new GS_Auto_Loader();
		$loader->runAll();
	}
}
?>