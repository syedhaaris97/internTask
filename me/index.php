<!DOCTYPE html>
<html>
<head>
	<title></title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    <script type="text/javascript">
  
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
                    var data = (this.responseText === "")? null:JSON.parse(this.responseText);
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
                    xhttp2.open("POST", "process.php", false);
                    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp2.send("what=harisDon1_a&content="+JSON.stringify(data));
                    if(nicReq)
                        document.getElementById('id01').style.display='block';            
                    else
                        location.reload();
                }
            };
            xhttp.open("POST", "process.php", false);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("what=harisDon1_b");
        }
        
    }
</script>


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
                    xhttp.open("POST", "process.php", false);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("what=harisDon1_b");
                </script>
            </tbody>
        </table>
    </div>


    <!-- <div class="w3-container">
 
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

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
</div> -->

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

</html>