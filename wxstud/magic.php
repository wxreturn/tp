<?php

class Person
{
	private $name = '';
	private $age = 0;
	
	public function __construct()
	{
		$this->name = 'wx';
		$this->age = 90;
	}
	
	function display()
	{
		echo $this->name . ' ' . $this->age; 
	}
	
	public function __get($k)
	{
		
		return $this->$k;
	}
	
	public function __set($k, $v)
	{
		$this->$k = $v;
	}
}

$p = new Person();
echo $p->name;
$p->name = 'return';
$p->display();