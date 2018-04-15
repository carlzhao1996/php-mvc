<?php

class homeController extends Controller
{
	public function index($id='',$name=''){
		//echo 'I am in '.__CLASS__.' and the method is '.__METHOD__;
		//echo 'id is '.$id.' Name is: '.$name;
		$this->view('home\index',[
			'name' =>$name,
			'id' => $id
		]);
		$this->view->page_title = 'Home Page';
		$this->view->render();
	}

	public function aboutUs (){
		// echo 'I am in '.__CLASS__.' and the method is '.__METHOD__;
		$this->view('home\aboutUs');
		$this->view->page_title = 'About Page';
		$this->view->render();
	}

}