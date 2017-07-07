<?php
	echo "Hello World";
	echo "<br> My first PHP program on eclipse";	
	
	class Demo{
		
		public function one() {
			return 1;
		}
		
		public function two() {
			return "A word";
		}
		
	}
	
	$obj=new Demo();
	echo "\nOne function output: ".$obj->one();
	echo "\nTwo function output: ".$obj->two();
?>