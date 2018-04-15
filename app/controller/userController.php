<?php

class userController extends Controller
{

	public function index(){
		$this->model('user');
		$this->view('user'.DIRECTORY_SEPARATOR.'userindex',['users'=>$this->model->getuser()]);
		$this->view->render();
		var_dump($this->model->getuser());// data render debugging
	}

}
