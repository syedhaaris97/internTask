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
	<input type="text" name="n" value="1">	
<br>	
<br>	
	<label>	Number of Block in height</label>
	<input type="text" name="m" value="1">	
	<br>
	<input name="submit" type="button" value="Generate" onclick="doIt();" ></div>
	</form>
	
<br>
<p id="aaa"></p>
<p id="bbb"></p>
<div id="dvTable"></div>
<!-- <canvas id="myCanvas" width="200" height="100"> -->
</body>
<script type="text/javascript">
	var x = "<?php echo str_repeat("&nbsp;", 7); ?>" ;
	var voluneers = new Array(<?php echo str_repeat("new Array(10),", 10) ?>);
	var successors = new Array(10);
	var mirror;
	function putMeIn(ref, i, j) {
		voluneers[i][j]=ref.value;
	}
	function prepareGird() {
		for (var i = 0; i < voluneers.length; i++) {
			successors[i]=11;
			for (var j = 0; j < voluneers[i].length; j++) {
				if(voluneers[i][j] != undefined){
					successors[i] = j;
					break;
				}
			}
		}
		mirror = successors.map(e => (e != 11)? 12:11);
	}
	function isBetween(n, a, b) {
   		return (n - a) * (n - b) <= 0
	}
	function generateTable() {
		var first=mirror.indexOf(12);
		var last=mirror.lastIndexOf(12);
		var table = document.createElement("TABLE");
        for (var i = 0; i < 10; i++) {
        	if(successors[i] == 11){
        		if(!isBetween(i, first, last))
        			continue;
        	}
    		row = table.insertRow(-1);
            for (var j = Math.min.apply(null, successors); j < 10; j++) {
                var cell = row.insertCell(-1);
                cell.style.backgroundColor = (voluneers[i][j]==undefined)? "#ffffff":voluneers[i][j];
                cell.innerHTML = x;
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
			try{
		var tab;
		let n = document.forms[0].n.value;
		let m = document.forms[0].m.value;
		prepareGird();
		tab=generateTable();
		geneateGird(m, n, tab);	
		}catch(e){
	alert(e);
}
	}

</script>
</html>