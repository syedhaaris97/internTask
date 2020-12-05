<!DOCTYPE html>
<html>
<head>
	<title> JavaScript Task</title>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style type="text/css">
	.graph{
			display: grid;
			 grid-template-columns:repeat(2, 1fr);
      grid-gap:1em;
      /* grid-auto-rows:100px; */
      grid-auto-rows: minmax(100px, auto);
		}
	.graph > div:nth-child(odd){
      background:#ddd;
    }

    .graph > div{
      border:#333 1px solid;
      padding:1em;
    }

    .form{
    	display: grid;
    	grid-template-columns: repeat(2,1fr);
    	grid-gap:1em;
    	grid-auto-rows: minmax(100px, auto);
    }

    .form > div:nth-child(odd){
      background:#ddd;
    }

    .form > div{
    	border:#333 1px solid;
    	padding: 1em;
    }

    .info{
    	display: grid;
    	grid-template-columns: repeat(2,1fr);
    	grid-gap:1em;
    	grid-auto-rows: minmax(100px, auto);
    }
    .info > div:nth-child(odd){
      background:#ddd;
    }

    .info > div{
    	border:#333 1px solid;
    	padding: 1em;
    }

    .highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

	</style>
</head>
<body>


<div class="graph">
	<div>
		<h1>Sale by Month</h1>
		<figure class="highcharts-figure">
    <div id="container"></div>
   <!--  <p class="highcharts-description">
        A basic column chart compares rainfall values between four cities.
        Tokyo has the overall highest amount of rainfall, followed by New York.
        The chart is making use of the axis crosshair feature, to highlight
        months as they are hovered over.
    </p> -->
</figure>

	</div>
	<div>
		<h1>Sale by Product</h1>
		<figure class="highcharts-figure">
    <div id="piachart"></div>
    <!-- <p class="highcharts-description">
        Pie charts are very popular for showing a compact overview of a
        composition or comparison. While they can be harder to read than
        column charts, they remain a popular choice for small datasets.
    </p> -->
</figure>
	</div>
</div>
<script type="text/javascript">
Date.prototype.monthNames = [
    "January", "February", "March",
    "April", "May", "June",
    "July", "August", "September",
    "October", "November", "December"
];

Date.prototype.getMonthName = function() {
    return this.monthNames[this.getMonth()];
};
function getMonthNum(date) {
	return Date.prototype.monthNames.indexOf(new Date(date).getMonthName());
}
function percentage(arr){
  return arr.reduce(function(a,b){
    return a + b
  }, 0);
}
	function saveData() {
        var b  = document.forms[0]['brand'].value;
        var q  = document.forms[0]['quantity'].value;   
        var d  = document.forms[0]['date'].value;   
        if (b == "" || q == "" || d == "") {
            alert("form must be filled");
            return false;
        }
        else{
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let nicReq = false;
                    var data = (this.responseText === "")? null:JSON.parse(this.responseText);;
                    data = (data == null)? {Olay:[],Palm:[],Lux:[],Capri:[],Pears:[],Dove:[]}:data;
                    var item={
                        brand:document.forms[0]['brand'].value,
                        qty: document.forms[0]['quantity'].value,
                        date: document.forms[0]['date'].value,  
                    };
                    if(parseInt(item.qty) > 99){
                        nicReq=true;
                    }
                    data[item.brand].push(item);
                    var xhttp2 = new XMLHttpRequest();
                    xhttp2.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            console.log(this.responseText+"data1");;
                        }
                    };
                    xhttp2.open("POST", "index.php", false);
                    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp2.send("what=harisDon1_a&content="+JSON.stringify(data));
                    if(nicReq)
                        document.getElementById('id01').style.display='block';            
                    else
                        location.reload();
                }
            };
            xhttp.open("POST", "index.php", false);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("what=harisDon1_b");
        }
        
	}
    function HarisIsDon() { 
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data2 = (this.responseText === "")? null:JSON.parse(this.responseText);;
                data2 = (data2 == null)? []:data2;
                var user = {
                    name:document.forms[1]['name'].value, 
                    nic:document.forms[1]['cnic'].value,
                };
                data2.push(user);    
                var xhttp2 = new XMLHttpRequest();
                xhttp2.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText+"data2");;
                    }
                };
                xhttp2.open("POST", "index.php", false);
                xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp2.send("what=harisDon2_a&content="+JSON.stringify(data2));
                document.getElementById('id01').style.display='none';
                location.reload();
            }
        };
        xhttp.open("POST", "index.php", false);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("what=harisDon2_b");
    }

</script>
<div class="form">
	<div>
		<h1>Products Form</h1>
		<form>
			<label>Product Brand</label>
			<select name="brand" required>
				<option>Olay</option>
				<option>Palm</option>
				<option>Lux</option>
				<option>Capri</option>
				<option>Pears</option>
				<option>Dove</option>
			</select>
			<label>Quantity</label>
			<input type="number" name="quantity" value="" required>
			<label>Date</label>
			<input type="Date" name="date" value="">
			<input type="button" name="save" value="save" onclick="saveData();" required>
		</form>
	</div>

	<div>
		<h1>Sales Date</h1>
		<table border="1">
			<thead>
				<tr>
					<th>Product Brand</th>
					<th>Quality</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<script type="text/javascript">
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var dataOne = (this.responseText === "")? null:JSON.parse(this.responseText);;
                            if(dataOne != null){
                                let brand=Object.keys(dataOne);
                                for (var i = 0; i < brand.length; i++) {
                                    let entries = dataOne[brand[i]];
                                    for (var j = 0; j < entries.length; j++) {
                                        document.write("<tr>");
                                        document.write("<td>"+entries[j].brand+"</td>");
                                        document.write("<td>"+entries[j].qty+"</td>");
                                        document.write("<td>"+entries[j].date+"</td>");
                                        document.write("</tr>");
                                    }
                                }
                            }
                        }
                    };
                    xhttp.open("POST", "index.php", false);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("what=harisDon1_b");
				</script>
			</tbody>
		</table>
	</div>
</div>

<div class="info">
	<div style="visibility: hidden;"></div>
	<div>
		<h1>Information</h1>
		<table border="1">
			<thead>
				<tr>
					<th>Name</th>
					<th>CNIC #</th>
				</tr>
			</thead>
			<tbody>
				<script type="text/javascript">
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data2 = (this.responseText === "")? null:JSON.parse(this.responseText);;
                            if(data2 != null){
                                for (var i = 0; i < data2.length; i++) {
                                    document.write("<tr>");
                                    document.write("<td>"+data2[i].name+"</td>");
                                    document.write("<td>"+data2[i].nic+"</td>");
                                    document.write("</tr>");
                                }
                            }
                        }
                    };
                    xhttp.open("POST", "index.php", false);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("what=harisDon2_b");
				</script>
			</tbody>
		</table>
	</div>
</div>

<div>

	<div class="w3-container">
 
  <!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button> -->

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Modal Header</h2>
      </header>
      <div class="w3-container">
        <form>
            <br>
        <label>Name</label>
        <input type="text" name="name" value="" required="">
        <br>
        <br>
        <label>CNIC #</label>
        <input type="text" class="target" name="cnic" value="" id="number" onkeypress="return isNumber(event);"  required="">
       <br><br>  
        <input type="button" name="info" id="info" onclick="HarisIsDon();" value="save Info"> 
        </form>
      </div>

      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
</div>
</div>

</body>
<script type="text/javascript">
	function isNumber(evt) {
    var theEvent = evt || window.event;
    var theVal = theEvent.target.value;
    var key = theEvent.keyCode || theEvent.which;

    key = String.fromCharCode(key);

    if (key.length == 0) return;
    var regex = /^[0-9?!.,\b]+$/;

    if (!regex.test(key)) {
        if (theEvent.preventDefault) theEvent.preventDefault();
        return false;
    }
    if (theEvent.target.value.length > 14) {
    	if (theEvent.preventDefault) theEvent.preventDefault();
        return false;
    }
    length = theVal.length;
    if (length == 5 || length == 13) {
    	theEvent.target.value += '-';
    }
    // return true;
}
</script>
<script type="text/javascript">
const target = document.querySelector('input.target');

target.addEventListener('paste', (event) => {
    let paste = (event.clipboardData || window.clipboardData).getData('text');
    paste = paste.toUpperCase();
    var res = (Number.isInteger(parseInt(paste)))? paste.slice(0, 5)+"-"+ paste.slice(5, 12)+"-"+paste.slice(12, 14):"";
    document.getElementById('number').value = res;
    event.preventDefault();
});

</script>
<!-- <script type="text/javascript">

	function validateCnic() {
			// var cnic_no = cnic;
		var cnics = document.getElementById('cnic');
		 // cnics.value = cnics.value.replace(/[^\d,]/g,'')
		// var cnic_mask = /^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/;

		var length = cnics.value.length;
		if (length == 5 || length == 13) {
			cnics.value += "\55";
 
		}

		// if(cnic_mask.test(cnic_no)) 
		// {
		//     alert('valid');
		// }
		// else 
		// {
		//     // alert('not valid');
		//     document.getElementById('cnic').value = "";
		// }
}
</script> -->
<script type="text/javascript">
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = (this.responseText === "")? null:JSON.parse(this.responseText);;
            if(data != null){
                var brands=Object.keys(data);
                var monthlyData={
                    Olay:[],
                    Palm:[],
                    Lux:[],
                    Capri:[],
                    Pears:[],
                    Dove:[],
                };
                for (var i = 0; i < brands.length; i++) {
                    var d = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
                    var entries = data[brands[i]];
                    for (var j = 0; j < entries.length; j++) {
                        d[getMonthNum(entries[j].date)] += parseInt(entries[j].qty);
                    }
                    monthlyData[brands[i]]=d;
                }
                Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Monthly Average Each Product Sale'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: Date.prototype.monthNames,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: ''
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} qty</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: brands[0],
                    data: monthlyData[brands[0]]

                }, {
                    name: brands[1],
                    data: monthlyData[brands[1]]

                }, {
                    name: brands[2],
                    data: monthlyData[brands[2]]

                }, {
                    name: brands[3],
                    data: monthlyData[brands[3]]

                },{
                    name: brands[4],
                    data: monthlyData[brands[4]]

                },{
                    name: brands[5],
                    data: monthlyData[brands[5]]

                }]
            });


            Highcharts.chart('piachart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: ''
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Olay',
                        y: percentage(monthlyData.Olay)
                    }, {
                        name: 'Palm',
                        y: percentage(monthlyData.Palm),
                    }, {
                        name: 'Lux',
                        y: percentage(monthlyData.Lux),
                    }, {
                        name: 'Capri',
                        y: percentage(monthlyData.Capri),
                    }, {
                        name: 'Pears',
                        y: percentage(monthlyData.Pears),
                    }, {
                        name: 'Dove',
                        y: percentage(monthlyData.Dove),
                    }]
                }]
            });
                }
        }
    };
    xhttp.open("POST", "index.php", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("what=harisDon1_b");
</script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>
</html>