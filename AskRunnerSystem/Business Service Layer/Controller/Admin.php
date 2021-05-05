<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Database/AskRunnerSystem.php';
	
class admincontroller{
		function login(){
			$admin = new adminaccount();
			return $admin->adminlogin();
		}

		function adminview($ADMIN_ID){
			$admin = new adminaccount();
			$admin->ADMIN_ID = $ADMIN_ID;
			return $admin-> admindata();
		}
		function adminedit($ADMIN_ID){
			$admin = new adminaccount();
			$admin->ADMIN_ID = $ADMIN_ID;
			$admin->ADMIN_NAME = $_POST['ADMIN_NAME'];
			$admin->ADMIN_PASSWORD = $_POST['ADMIN_PASSWORD'];
		
			
			if($admin->adminupdate()){
				$message = "Update Successfuly";
				echo "<script type='text/javascript'>alert('$message'); window.location = 'AdminIndex.php';</script>";
			}
		}
	}

?>

