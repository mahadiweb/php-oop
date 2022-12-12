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
}


class Childs extends Parentsss //using extends inheritance you can access Parent class properties and method
{
	
}

$obj = new Childs;

echo $obj->name; //Child class haven't any properties and method but i can access it from Parent class

?>