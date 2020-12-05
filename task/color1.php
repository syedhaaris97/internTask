<!DOCTYPE html>
<html>
<head>
	<title>Color block</title>
</head>
<body>
	
	<form id="myForm" >
		<div>
			<table  border="1" cellpadding="" cellspacing="0">
<?php
				for($i=0;$i<10;$i++){ 
				echo "<tr>"; ?>
					<?php for ($j=0;$j<10;$j++)  { ?>
						<td>
							<input 
								type="color" 
								id="<?php echo "myColor".$i ?>" 
								name="<?php echo "name".$j.$i ?>"  
								onchange="<?php echo "putMeIn(this, $i, $j);" ?>"
								>
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
	<input name="submit" type="button" value="Generate" onclick="doIt();" ></div>
	</form>
	
<br>
<p id="aaa"></p>
<p id="bbb"></p>
<div id="dvTable"></div>
<canvas id="myCanvas" width="200" height="100">
</body>
<script type="text/javascript">
	var x = document.createElement("INPUT");
		x.setAttribute("type", "color");
		x.style.visibility = "hidden";
	var voluneers = new Array(
			new Array(10),
			new Array(10),
			new Array(10),
			new Array(10),
			new Array(10),
			new Array(10),
			new Array(10),
			new Array(10),
			new Array(10),
			new Array(10)
		);
	function putMeIn(ref, i, j) {
		voluneers[i][j]=ref.cloneNode(false);
	}
	function prepareGird() {
		for (var i = 0; i < voluneers.length; i++) {
			for (var j = 0; j < voluneers[i].length; j++) {
				voluneers[i][j] = (voluneers[i][j] == undefined)? x.cloneNode(false):voluneers[i][j];
			}
		}
	}
	function generateTable() {
		var table = document.createElement("TABLE");
        for (var i = 0; i < 10; i++) {
            row = table.insertRow(-1);
            for (var j = 0; j < 10; j++) {
                var cell = row.insertCell(-1);
                cell.appendChild(voluneers[i][j]);
            }
        } 
        return table;
	}
	function geneateGird(n, m, table) {
		var gird = document.createElement("TABLE");
        for (var i = 0; i < n; i++) {
            row = gird.insertRow(-1);
            for (var j = 0; j < m; j++) {
                var cell = row.insertCell(-1);
                cell.appendChild(table.cloneNode(true));
            }
        } 
        var dvTable = document.getElementById("dvTable");
        dvTable.innerHTML = "";
        dvTable.appendChild(gird);	
	}
	function doIt() {
		var tab;
		let n = document.forms[0].n.value;
		let m = document.forms[0].m.value;
		prepareGird();
		tab=generateTable();
		geneateGird(m, n, tab);	
	}
</script>
</html>