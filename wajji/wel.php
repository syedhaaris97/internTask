<?php 
require 'db.php';
$obj->is_login();
$data = $obj->registrationData();
// $obj->debug($data);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

 	<title></title>
 </head>
 <body>
 	<div class="container">
 		<a style="float: right;" href="signout.php"  class="btn btn-md btn-warning"> Log Out</a>

 		<div class="row justify-content-center">
 			<div class="col-9">
 					<h1>Welcome To Test Phase portal</h1>
 					<br>
 					<br>
 			<h4><?=$_SESSION['user']['username']." - "."Succesfully login";?></h4>
 			</div>

 			<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
        <th scope="col">name</th>
      <th scope="col">Gender</th>
      <th scope="col">address</th>
      <th scope="col">contact_no</th>
      <th>Action</th>
      <th></th>
    <!-- 
      <th scope="col">name</th>
      <th scope="col">name</th> -->
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $key => $value) { ?>
  	<tr>
		<th scope="row"><?php echo $value['id']; ?></th>
  		<td><?php echo $value['username']; ?></td>
  		<td><?php echo $value['password']; ?></td>
  		<td><?php echo $value['name']; ?></td>
  		<td><?php echo $value['Gender']; ?></td>
  		<td><?php echo $value['address']; ?></td>
  		<td><?php echo $value['contact_no']; ?></td>
  		<td>
  			<a class="btn btn-warning btn-sm" href="processDocterDEL.php?drId=<?php echo $value['drId'] ?>" >Delete</a>
  		</td>
  		<td>
  			<a class="btn btn-info btn-sm" href="index.php?updateId=<?php echo $value['reg_id'] ?>"> Update</a>
  		</td>
              
		
    </tr>
  	
  	<?php } 
  	?>
    
  </tbody>
</table>
 		</div>
 	
 	</div>
 			
 </body>
 </html>