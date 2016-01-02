<?php
/**
* Just some examples of php7
*/
class php7{

	//Scalar type declarations
	//http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration

	function SumAge(int $age1, int $age2){
		
		return $age1 + $age2;
		//Should output a int value.
	}

	//Return type declarations
	//http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration.types

	function ReceiveNames(array $names1, array $names2):array{

		return array_merge($names1, $names2);
	}

	//Null coalescing operator

	function DetectAge(int $birthyear = null):int{

		$age = date("Y") - $birthyear ?? "error";

		return $age;

	}

	//Anonymous Classes

	function AnomClass(){
		$output = new class(){

			public function __construct(){
				$this->name = "Solid Snake";
			}
		};
		return $output;
	}
	

}