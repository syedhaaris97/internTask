<?php 
/**
 * 
 */
session_start();
class Mydb 
{
	
	private $conn = '';

	public function Mydb($host='localhost', $username="root", $password="", $db="testphasedb")
	{
		$this->conn = new mysqli($host,$username,$password,$db) or die("connection field");
		mysqli_set_charset($this->conn,"utf8");
	}

	public function create_admin($data){
			extract($data);
		$Query = "INSERT INTO `registrations` ( `name`, `gender`, `address`, `contact_no`) VALUES
									  ( '$name', '$gender', '$address', '$contact_no')";
		$res = $this->conn->query($Query);
		$reg_id = $this->conn->insert_id;
		if($reg_id)
			$Query1 = "INSERT INTO signins(`reg_id`, `username`, `password`) VALUES ('$reg_id', '$username', '$password')";
			$res = $this->conn->query($Query1);
		return $res;
		}

	
	public function admin_login($data)
	{
		extract($data);
		$Query = "SELECT * FROM signins 
		WHERE username = '$username' AND  password  = '$password'";
		$res = $this->conn->query($Query);
		if($res)
			{
				$fetch = $res->fetch_assoc();
			//$_SESSION['user'] = $fetch['user_name'];
				return $fetch;
			}
			else
			{
				return false;
			}
	}


	public function create_session($data)
	{
		$_SESSION['user'] = $data;
	}

	public function is_login()
	{
			if (!$_SESSION['user']) {
				header("location:index.php");
			}
	}
	
	public function logout()
	{
		session_unset();
		session_destroy();
		header('location:index.php');
	}

	public function registrationData(){

			$Query = "SELECT *, 
				case
					when gender = 1 then 'Male'
					when gender = 0 then 'Female' 
				end as Gender
			FROM registrations
			INNER JOIN signins ON (signins.reg_id = registrations.id)
			WHERE status = 'y'";

		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}


	public function FetchForUpdate($id){

			$Query = "SELECT *,
				case
					when gender = 0 then 'Male'
					when gender = 1 then 'Female' 
				end as Gender
			FROM registrations
			INNER JOIN signins ON (signins.reg_id = registrations.id)
			WHERE registrations.id = '$id' AND status = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function updateData($data){
		extract($data);

		// $updateId = $_GET['updateId'];
		
		$Query = "UPDATE 
		  `registrations` 
		SET
		  `name` = '$name',
		  `gender` = '$gender',
		  `address` = '$address',
		  `contact_no` = '$contact_no'
		WHERE `id` = '$updateId'";
		$res = $this->conn->query($Query);
		return  $res;
	}

	public function secure( $data )
	{
	    if ( is_array( $data ) )
	    {
	        return array_map( 'addslashes', $data );
	    }
	    else
	    {
	        return addslashes( $data );
	    }
	} 

	public function debug($arg){
		echo "<pre>";
		print_r($arg);
		echo "<pre>";
		die("debugging");
	} 
}

$obj = new Mydb();
?>
