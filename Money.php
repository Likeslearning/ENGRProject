<?php
   include( "menu.php" );
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body class="content8">
    <div>
    <br><h2><img src="money.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Money Conversion</h2><br>
  <table align="center">
	<tr>
            <td>
		<input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value" id="value" value="0">
		<select name="from" id="from" class="selects"></select>
            </td>
		
            <td>
		<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
            </td>
            
            <td>
		<label id="result" class="labels" style="color:black;">—</label>
		<select name="to" id="to" class="selects"></select>
            </td>
	</tr>
	
        <tr>
            <td>&nbsp;</td>
	</tr>
  </table>
        <br>
        <button onclick="clicked()" class="button">Convert</button>
        <button onclick="reset()" class="button2">Reset</button>
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
    $("#from").append('<option value=' + key + '>' + key + '</option>');
	$("#to").append('<option value=' + key + '>' + key + '</option>');
});
		
  })
  .catch(error => console.log('error', error));

</script>

<script>
function reset(){
    let fromValue = document.getElementById("value");
    fromValue.value = 0;

    let selectFrom = document.getElementById("from");
    selectFrom.options[0].selected = true;
	
    let selectTo = document.getElementById("to");
    selectTo.options[0].selected = true;

    let lblResult = document.getElementById("result");
    lblResult.innerHTML = "—";
}

function clicked(){
    let amount = document.getElementById("value").value;

    let selectFrom = document.getElementById("from");
    let from = selectFrom.options[selectFrom.selectedIndex].value;

    let selectTo = document.getElementById("to");
    let to = selectTo.options[selectTo.selectedIndex].value;

    if(from === "" || to === ""){
	alert("Please select both units.");
	return;
    }

    let lblResult = document.getElementById("result");
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
    .then(result => lblResult.innerHTML=result.result) // Printing the exchange value(comes from API) inside the label
    .catch(error => console.log('error', error));		
}

</script>




