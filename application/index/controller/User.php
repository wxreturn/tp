<?php
namespace app\index\controller;

use think\Controller;
use think\Db;


class User extends Controller
{
	public function index()
	{	
	    echo config('template.item');
		return $this->fetch('index');
	}
	
	public function hello($name='world')
	{
		return 'hello, ' . $name . '!';
	}
	
	public function guest()
	{
		return 'User guest';
	}
	
	public function downLoad()
	{
	    
	}
}




























