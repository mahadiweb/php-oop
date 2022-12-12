<?php

/**
 * 
 */

class Parentsss
{
	
	public $name = "mahdi"; //properties

	public function getName(){ //method
		return "mahdi";
	}
	public final function getName2(){ //method
		return "mahdi";
	}
}


class Childs2 extends Parentsss //using extends inheritance you can access Parent class properties and method
{
	public function getName(){ //parent class child class vmethod name same, this is overwrite main method value, for prevailing this use final keyword
		return "mahdi2";
	}

	public function getName2(){ //method
		return "mahdi2";
	}
}

$obj = new Childs2;

echo $obj->getName(); //

?>