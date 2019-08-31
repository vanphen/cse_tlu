<?php 

include_once("../model/M_Student.php");

//declarat-ion
class Ctrl_Student{
	public function invoke(){
		if(isset($_GET['stid'])){
			$modelStudent = new Model_Student();
			$student = $modelStudent-> getStudentDetail($_GET['stid']);

			include_one("../view/getStudentDetail.html");
		}else{
			$modelStudent = new Model_Student();
			$studentList = $modelStudent->getAllStudent();

			include_one("../View/StudentList.html");

		}
	}
}

// process

$C_Student = new Ctrl_Student();
$C_Student->invoke();
 ?>