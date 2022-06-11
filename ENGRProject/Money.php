<?php
   include( "menu.php" );
?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="content8">
    <div>
        <form name="myform8" id="myform8">
            <br><h2><img src="money.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Money Conversion</h2><br>
  <table align="center">
	<tr>
            <td>
		<input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value8" id="value8" value="0">
                    <select name="from8" id="from8" class="selects8">
                        <option value="">From Currency Unit</option>
                    </select>
            </td>
		
            <td>
		<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
            </td>
            
            <td>
		<input type="text" name="result8" id="result8" class="inputs" value="—" readonly/>
                <select name="to8" id="to8" class="selects8">
                    <option value="">To Currency Unit</option>
                </select>
            </td>
	</tr>
	
        <tr>
            <td>&nbsp;</td>
	</tr>
  </table>
            <br>
        </form>
    
        <input type="button" name="button8" id="button8" onclick="clicked()" class="button" value="Convert"/>
        <input type="button" onclick="reset()" class="button2" value="Reset"/>
    </div>

    <br><br><br>
        <div align="center">
            <form name="showform8" id="showform8" action="Money_Records.php" method="POST" align="center">
                <table align="center">
                    <h2 style="color: black;">Query Previous Records:</h2>
                    <tr>
                        <td>
                            <label style="color: black;">From Unit:</label>
                            <select name="showfrom8" id="showfrom8" class="selects8">
                                <option value="">From Currency Unit</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 20px;"></tr>
                    <tr>
                        <td>
                            <label style="color: black;">&nbsp; &nbsp; To Unit:</label>
                            <select name="showto8" id="showto8" class="selects8">
                                <option value="">To Currency Unit</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 35px;"></tr>
                    <tr>
                        <td> &emsp; &emsp;
                            <input type="submit" name="show8" id="show8" class="button3" value="Show Previous Records"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>

<script>

var myHeaders = new Headers();
myHeaders.append("apikey", "CMRl2gSrAD6nJGNOzc6YfMfzvwpMmTaR"); // API key here

var requestOptions = {
  method: 'GET',
  redirect: 'follow',
  headers: myHeaders
};

// Filling the select options by API
fetch("https://api.apilayer.com/exchangerates_data/symbols", requestOptions)
  .then(response => response.json())
  .then((data) => {
	  console.log(data.symbols);
		let rates = data.symbols;
		$.each(rates,function(key, value) 
{
    $("#from8").append('<option value=' + key + '>' + key + '</option>');
    $("#to8").append('<option value=' + key + '>' + key + '</option>');
    $("#showfrom8").append('<option value=' + key + '>' + key + '</option>');
    $("#showto8").append('<option value=' + key + '>' + key + '</option>');
});
		
  })
  .catch(error => console.log('error', error));

</script>

<script>
function reset(){
    let fromValue = document.getElementById("value8");
    fromValue.value = 0;

    let selectFrom = document.getElementById("from8");
    selectFrom.options[0].selected = true;
	
    let selectTo = document.getElementById("to8");
    selectTo.options[0].selected = true;

    let lblResult = document.getElementById("result8");
    lblResult.value = "—";
    
    let showFrom = document.getElementById("showfrom8");
    showFrom.value = "";
        
    let showTo = document.getElementById("showto8");
    showTo.value = "";
}

function clicked(){
    let amount = document.getElementById("value8").value;
    amount = amount.trim();

    let selectFrom = document.getElementById("from8");
    let from = selectFrom.options[selectFrom.selectedIndex].value;

    let selectTo = document.getElementById("to8");
    let to = selectTo.options[selectTo.selectedIndex].value;

    if(from === "" || to === ""){
	alert("Please select both units.");
	return;
    }

    let lblResult = document.getElementById("result8");
    let result = 0;

    var myHeaders = new Headers();
    myHeaders.append("apikey", "CMRl2gSrAD6nJGNOzc6YfMfzvwpMmTaR"); // API key here

    var requestOptions = {
	method: 'GET',
	redirect: 'follow',
	headers: myHeaders
    };
    
    
    fetch("https://api.apilayer.com/exchangerates_data/convert?to="+to+"&from="+from+"&amount=" + amount, requestOptions)
    .then(response => response.json())
    .then(result => {
        lblResult.value=result.result; // Printing the exchange value(comes from API) inside the label
 	
        var values = $("#myform8").serialize();
        $.ajax({
            url: "Money_to_DB.php",
            type: "POST",
            data: values 
        });
    }) 
    .catch(error => console.log('error', error));
    
}

</script>

</html>




