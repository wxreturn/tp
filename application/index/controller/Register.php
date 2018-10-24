<?php

namespace app\index\controller;


class Register 
{
    public function index($name='default method')
    {
        $user = 'root';
        $pass = '';
        $handle = new \PDO('mysql:host=localhost;dbname=wxreturn', $user, $pass);
        $res = $handle->query('select * from think_data');
        foreach($res as $v)
        {
            wxp($v);
        }
        
        
        //return "This is index model register controller index method" . $name;
    }
	public function reg($name='', $age=-1)
	{
		if ($name != '' and $age!='-1')
		{
			return 'welcom ' . $name .' your age is: ' . $age;
		}
		else
		{
			return 'your input information is not enought';
		}
	}
}