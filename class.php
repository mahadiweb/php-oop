<?php

/**
 * 
 */

class Home
{
	public $var = "Hi"; //properties

	function __construct()
	{
		# code...
	}

	public function index(){ //method
		return "Hello";
	}
}


$obj = new Home; //make object of class

echo $obj->var; //properties
echo $obj->index(); //method





////////// Getter and Setter ////////


class Post
{
	public $name; //properties
	public $age; //properties
	public $email; //properties


	//Getter
	public function getName(){ //method
		return $this->name;
	}
	public function getAge(){ //method
		return $this->age;
	}
	public function getEmail(){ //method
		return $this->email;
	}





	//Setter
	public function setName($name){ //method
		return $this->name = $name;
	}
	public function setAge($age){ //method
		return $this->age = $age;
	}
	public function setEmail($email){ //method
		return $this->email = $email;
	}
}


$obj2 = new Post; //make object of class


//Getter
$obj2->setName("Hello,Name");


//Setter
echo $obj2->getName();
?>