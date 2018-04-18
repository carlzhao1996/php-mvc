<?php

class carController extends Controller
{
	public function index(){
		$this->model('car');
		$this->view('car'.DIRECTORY_SEPARATOR.'carindex');
		$this->view->render();
		var_dump($this->model->findall());
	}
}	
