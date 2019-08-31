<?php 

include_once("E_Student.php");

class Model_Student{
	public function __construct(){}

	public function getAllStudent(){
		// gia su dang ra load data cu csdl

		return array(
			"1"=> new Entity_Student(1,"pham van thao",23,"tlu"),
			"2"=> new Entity_Student(2,"pham van phen",24,"tlu"),
			"3"=> new Entity_Student(3,"pham van to",25"tlu"),
			"4"=> new Entity_Student(4,"pham van",26,"tlu"),

		);
	}

	public function getStudentDentail($stid){
		// gia su load dl tu csdl 
		$allStudent = $this->getAllStudent();

		return $allStudent[$stid];
	}
}






 ?>