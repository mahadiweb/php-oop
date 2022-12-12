<?php

/**
 * 
 * tutorial= www.youtube.com/watch?v=4aPzwyosycU&list=PL03GdZZs-POW3pvyD5hONwc040qFan08o&index=5
 */

class Home
{
	
	public const Name = "Hello,"; //this is not changeable
	private const Name2 = "Hello,2"; //this is not changeable
	protected const Name3 = "Hello,3"; //this is not changeable

	public function Test(){
		return self::Name2; //for return same class constant class value use self::
	}

}



class Home2 extends Home
{
	public function Test2()
	{
		return self::Name3; //we can use protected value from extend class
	}
}


echo Home::Name; //you can access class constant without making object



$obj = new Home;
echo $obj->Test();



$obj2 = new Home2;
echo $obj2->Test2();



?>