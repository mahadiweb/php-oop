<?php

/**

  Three type Access Modifier:=
  1.'public'=> the property or method can be accessed from everywhere. This is default | access from anywhere;
  2.'protected'=> the property or method can be accessed within the class and by classes derived from that class | access from own class and child/extends class;
  3.'private'=> the property or method can ONLY be accessed within the class | only access from own class;

	tutorials=https://www.youtube.com/watch?v=B4w6qTteOJo&list=PL03GdZZs-POW3pvyD5hONwc040qFan08o&index=4
 */
class Home
{
	public $name = "mahdi";
	protected $age = 20;
	private $address = "Blank";

	public function name(){
		return "mahdi";
	}
	protected function age(){
		return 20;
	}
	private function address(){
		return "Blank";
	}
}


class Post extends Home
{
	public function aa(){
		return $this->age;
	}
}

$obj = new Post;

echo $obj->aa();

?>