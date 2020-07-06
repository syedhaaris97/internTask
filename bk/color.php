<!DOCTYPE html>
<html>
<head>
	<title>Color block</title>
</head>
<body>
	
	<form id="myForm" method="post">
		<div>
			<table  border="1" cellpadding="" cellspacing="0">
<?php
				for($i=0;$i<10;$i++){ 
				echo "<tr>"; ?>
					<?php for ($j=0;$j<10;$j++)  { ?>
						<td>
							<input 
								value="<?php echo (isset($_POST['values']))? $_POST['values'][$i][$j]:"#ffffff"; ?>"
								type="color" 
								name="<?php echo "values[".$i."][".$j."]"; ?>"
								>
						</td>
			 		<?php } ?>
<?php		echo "</tr>"; } ?>
			</table>
		</div>	
<?php echo str_repeat("<br>", 5); ?>
<div >

	<label>	Number of Block in width</label>
	<input type="text" name="n" value="<?php echo (isset($_POST['n']))? $_POST['n']:"1"; ?>">	<br>	<br>	
	<label>	Number of Block in height</label>
	<input type="text" name="m" value="<?php echo (isset($_POST['m']))? $_POST['m']:"1"; ?>">	<br>
	<input name="submit" type="submit" value="Generate"></div>
	</form>
</body>

<?php
if(isset($_POST["submit"])){
	$x = str_repeat("&nbsp;", 7);
	$voluneers = $_POST["values"];
	$successors = Array();
	$mirror = Array();
	$firsty=-1;
	$lasty=-1;
	$firstx=-1;
	$lastx=-1;
	function prepareGird() {
		global $voluneers, $firstx, $lastx, $firsty, $lasty;
		for ($i = 0; $i < sizeof($voluneers); $i++) {
			if($firsty != -1)
				break;
			for ($j = 0; $j < sizeof($voluneers[$i]); $j++) {
				if($voluneers[$i][$j] != "#ffffff"){
					$firsty = $i;
					break;
				}
			}
		}
		for ($i = sizeof($voluneers)-1; $i >= 0; $i--) {
			for ($j = 0; $j < sizeof($voluneers[$i]); $j++) {
				if($voluneers[$i][$j] != "#ffffff"){
					$lasty = $i;
					break;
				}
			}
			if($lasty != -1)
				break;
		}
		for ($i = 0; $i < sizeof($voluneers); $i++) {
			for ($j = 0; $j < sizeof($voluneers[$i]); $j++) {
				if($voluneers[$i][$j] != "#ffffff"){
					$firstx = ($firstx == -1)? $j:$firstx;
					$firstx = ($j < $firstx)? $j:$firstx;
					continue;
				}
			}
		}
		for ($i = 0; $i < sizeof($voluneers); $i++) {
			for ($j = sizeof($voluneers[$i])-1; $j >=0 ; $j--) {
				if($voluneers[$i][$j] != "#ffffff"){
					$lastx = ($lastx == -1)? $j:$lastx;
					$lastx = ($j > $lastx)? $j:$lastx;
					continue;
				}
			}
		}
	}

	function generateTable() {
		global $voluneers, $x, $firstx, $lastx, $firsty, $lasty;
		$table = "<table>";
        for ($i = $firsty; $i <= $lasty && $i < sizeof($voluneers); $i++) {
    		$row = "<tr>";
            for ($j = $firstx; $j <= $lastx; $j++) {
                $cell = "<td bgcolor=";
                $cell.= $voluneers[$i][$j];
                $cell.= ">". $x . "</td>";
				$row.=$cell;
            }
			$row.="</tr>";
			$table.=$row;
        } 
        return $table."</table>";
	}
	function geneateGird($n, $m, $table) {
		$gird = "<table>";
        for ($i = 0; $i < $n; $i++) {
            $row = "<tr>";
            for ($j = 0; $j < $m; $j++) {
                $cell = "<td>";
                $cell.=$table . "</td>";
				$row.=$cell;
            }
			$row.="</tr>";
			$gird.=$row;
        } 
		$gird.="</table>";
        $dvTable = $gird;
		return $dvTable;
	}
	function doIt() {
		$tab;
		$n = $_POST["n"];
		$m = $_POST["m"];
		prepareGird();
		$tab=generateTable();
		echo geneateGird($m, $n, $tab);	
	}
	doIt();
}
?>
</html>