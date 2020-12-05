<!DOCTYPE html>
<html>
<head>
	<title>Random name list</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Random Name Generation</label><br>
		Min: length
		<input type="text" name="min" ><br>
		Min: length
		<input type="text" name="max">
		<?php echo str_repeat("<br>", 3) ?>
		<label>Numbers of Name </label><br>
		<input type="number" name="nameNum">
		<input type="submit" name="gen" value="Generate">
		<!--  -->
	</form>
</body>
</html>


<?php
if (isset($_POST['gen'])) {

 	$min = $_POST['min'];
 	$max = $_POST['max'];

	$nameNum = $_POST['nameNum'];

?>
<table border="1">
	<tr>
		<th>Name</th>
		<th>Numbers</th>
	</tr>
<?php 
for ($j=0; $j<$nameNum ; $j++) { 
	 $length = mt_rand($min,$max);
		$data = randomName($length);
// echo "<pre>";
// print_r($data);
// echo "<pre>";
		foreach ($data as $key => $value) { ?>
		<tr>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['number']; ?></td>

		</tr>

<?php		}
	}
}

 ?>


	
</table>

	
<?php
  /**************
  *@length - length of random string (must be a multiple of 2)
  **************/

  // echo $leg = rand(0,11);	

  function randomName($length)
  {
    $conso=array("b","c","d","f","g","h","j","k","l",
                 "m","n","p","r","s","t","v","w","x","y","z");
    // $dconso=array("bb","cc","dd","ff","gg","hh","jj","kk","ll",
    //              "mm","nn","pp","rr","ss","tt","vv","ww","xx","yy","zz");
    $vocal=array("a","e","i","o","u");
    $name="";
    // srand ( (double)microtime()*1000000 );
    $max = $length/2;

	// $rdname = array();
// for ($j=0; $j<=5 ; $j++) { 
$flag = true;
	for($i=1; $i<=$max; $i++)
    {
    		$name .= $conso[rand(0,19)];
    	if (rand(0,1))
    	{
    		 // $name .= $conso[rand(0,19)];
    		 // $name .= $conso[rand(0,19)];
    		 $name .= $vocal[rand(0,4)];
    		 $name .= $conso[rand(0,19)];
    	}
    	else{
    		 // $name .= $conso[rand(0,19)];
     		 $name .= $vocal[rand(0,4)];
	 		 // $name .= "haaris";
    	}
    }
   
	 $rdname[] = array('name' => $name, 'number' => rand(100, 9999));
 	return $rdname;
  }





?>