<!DOCTYPE html>
<html>
<head>
	<title>Color block</title>
</head>
<body>
	<?php print_r($_POST);?>
	<form id="myForm"  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div>
			<table  border="1" cellpadding="" cellspacing="0">
<?php
				for($i=0;$i<10;$i++){ 
				echo "<tr>"; ?>
					<?php for ($j=0;$j<10;$j++)  { ?>
						<td>
							<input type="color" name="<?php echo "name".$j.$i?>" value="<?php echo $_POST['name'.$j.$i]; ?>">
						</td>
			 		<?php } ?>
<?php		echo "</tr>"; } ?>
			</table>
		</div>	
<?php 
echo str_repeat("<br>", 5);
?>
<div >

	<label>	Number of Block in width</label>
	<input type="text" name="n" value="0">	
<br>	
<br>	
	<label>	Number of Block in height</label>
	<input type="text" name="m" value="0">	
	<br>
	<input name="submit" type="submit" value="Generate"></div>
	</form>
	
<br>
<p id="aaa"></p>
<p id="bbb"></p>
<div id="dvTable"></div>
<!-- <canvas id="myCanvas" width="200" height="100"> -->
</body>

</html>