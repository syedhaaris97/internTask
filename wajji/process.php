<?php 
require 'db.php';

switch ($_POST['submit']) {
	
	case 'reg':
			$data =	$obj->secure($_POST);
			$res = $obj->create_admin($data);
			if($res){
				header('location:login.php');
			}
		break;

	case 'login':
			$data =	$obj->secure($_POST);
			$res = $obj->admin_login($data);
			
			if($res){
				$obj->create_session($data);
				header('location:wel.php');
			
			}else{
			 	echo "invalid username and password";
			}
		break;

	case 'update':
			$data =	$obj->updateData($_POST);
				if($data)
				header('location:wel.php');	
		break;
}
?>