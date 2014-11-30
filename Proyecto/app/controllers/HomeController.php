<?php

class HomeController extends BaseController {

	public function index()
  	{
        $this->layout->nest('content', 'home');
    }

    public function login()
    {
    	$this->layout->nest('content', 'login');
        //return Redirect::to('home');
    }

    public function register()
    {
    	$this->layout->nest('content', 'register');
    }

   
}
