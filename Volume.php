<?php
   include( "menu.php" );
?>
<body class="content4">
    <div>
<h2 style="color: white"><img src="volume.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Volume Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value" id="value" value="0">
			<select name="from" id="from" class="selects">
				<option value="">From Cubic Unit</option>
				<option value="km">Kilometer Cube</option>
				<option value="hm">Hectometer Cube</option>
				<option value="dam">Decameter Cube</option>
				<option value="m">Meter Cube</option>
				<option value="dm">Decimeter Cube</option>
				<option value="cm">Centimeter Cube</option>
				<option value="mm">Milimeter Cube</option>
				<option value="lt">Litre</option>
				<option value="gal">Gallon</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
		</td>
		<td>
		<label id="result" class="labels" style="color:white;">—</label>
			<select name="to" id="to" class="selects">
				<option value="">To Cubic Unit</option>
				<option value="km">Kilometer Cube</option>
				<option value="hm">Hectometer Cube</option>
				<option value="dam">Decameter Cube</option>
				<option value="m">Meter Cube</option>
				<option value="dm">Decimeter Cube</option>
				<option value="cm">Centimeter Cube</option>
				<option value="mm">Milimeter Cube</option>
				<option value="lt">Litre</option>
				<option value="gal">Gallon</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
  </table>
<button onclick="clicked()" class="button">Convert</button>
<button onclick="reset()" class="button2">Reset</button>
</div>

<div>
    <table align="center" style="margin-left: 485px; color: white;" border="4" rules="none">
        <h2 style="margin-right: 285px; color: white;">According to Meter Cube:</h2>
        <tr>
            <td>&nbsp; Kilometer Cube &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-9 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Hectometer Cube &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-6 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decameter Cube &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-3 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Meter Cube &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decimeter Cube &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>3 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Centimeter Cube &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>6 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Milimeter Cube &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>9 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Litre &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>3 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Gallon &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>264.1720 &nbsp;</td>
        </tr>
    </table>
</div>
</body>

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
	let fromValue = document.getElementById("value").value;

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

	if(from === "km" && to === "lt"){
		result = Number(fromValue) * 1000000000000;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "gal"){
		result = Number(fromValue) * 264172052358;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "hm"){
		result = Number(fromValue) * 1000;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "dam"){	  
		result = Number(fromValue) * 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "m"){		   
		result = Number(fromValue) * 1000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "dm"){	   
		result = Number(fromValue) * 1000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "cm"){	   
		result = Number(fromValue) * 1000000000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "mm"){	   
		result = Number(fromValue) * 1000000000000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "lt"){
		result = Number(fromValue) * 1000000000;
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "gal"){
		result = Number(fromValue) * 264172052.358;
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "km"){	  
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "dam"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "m"){		   
		result = Number(fromValue) * 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "dm"){	   
		result = Number(fromValue) * 1000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "cm"){	   
		result = Number(fromValue) * 1000000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "mm"){	   
		result = Number(fromValue) * 1000000000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "lt"){
		result = Number(fromValue) * 1000000;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "gal"){
		result = Number(fromValue) * 264172.052358;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "km"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "hm"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "m"){		   
		result = Number(fromValue) * 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "dm"){	   
		result = Number(fromValue) * 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "cm"){	   
		result = Number(fromValue) * 1000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "mm"){	   
		result = Number(fromValue) * 1000000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "lt"){
		result = Number(fromValue) * 1000;
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "gal"){
		result = Number(fromValue) * 264.172052358;
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "km"){	  
		result = Number(fromValue) / 1000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "hm"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "dam"){		   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "dm"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "cm"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "mm"){	   
		result = Number(fromValue) * 1000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "lt"){
		result = Number(fromValue) * 1;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "gal"){
		result = Number(fromValue) * 0.264172052358;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "km"){	  
		result = Number(fromValue) / 1000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "hm"){	   
		result = Number(fromValue) / 1000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "dam"){		   
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "m"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "cm"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "mm"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "lt"){
		result = Number(fromValue) * 0.001;
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "gal"){
		result = Number(fromValue) * 0,000264172052358;
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "km"){	  
		result = Number(fromValue) / 1000000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "hm"){	   
		result = Number(fromValue) / 1000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "dam"){		   
		result = Number(fromValue) / 1000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "m"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "dm"){	   
		result = Number(fromValue) / 1000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "mm"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "lt"){
		result = Number(fromValue) * 0.000001;
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "gal"){
		result = Number(fromValue) * 0,000000264172052358;
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "km"){	  
		result = Number(fromValue) / 1000000000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "hm"){	   
		result = Number(fromValue) / 1000000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "dam"){		   
		result = Number(fromValue) / 1000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "m"){	   
		result = Number(fromValue) / 1000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "dm"){	   
		result = Number(fromValue) / 1000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "cm"){	   
		result = Number(fromValue) / 1000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "lt" && to === "gal"){	   
		result = Number(fromValue) * 0.264172052358;	   
		lblResult.innerHTML =  result;
	}
        else if(from === "lt" && to === "km"){
		result = Number(fromValue) * 0.000000000001; 
		lblResult.innerHTML =  result;
	} 
        else if(from === "lt" && to === "hm"){
		result = Number(fromValue) * 0.000000001; 
		lblResult.innerHTML =  result;
	} 
        else if(from === "lt" && to === "dam"){	  
		result = Number(fromValue) * 0.000001;  
		lblResult.innerHTML =  result;
	} 
        else if(from === "lt" && to === "m"){		   
		result = Number(fromValue) * 0.001;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "lt" && to === "dm"){	   
		result = Number(fromValue);		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "lt" && to === "cm"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "lt" && to === "mm"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.innerHTML =  result;
        }
        else if(from === "gal" && to === "lt"){	   
		result = Number(fromValue) * 3.7854;	   
		lblResult.innerHTML =  result;
	}
        else if(from === "gal" && to === "km"){
		result = Number(fromValue) * 0.0000000000037854;
		lblResult.innerHTML =  result;
	} 
        else if(from === "gal" && to === "hm"){
		result = Number(fromValue) * 0.0000000037854;
		lblResult.innerHTML =  result;
	} 
        else if(from === "gal" && to === "dam"){	  
		result = Number(fromValue) * 0.0000037854;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "gal" && to === "m"){		   
		result = Number(fromValue) * 0.0037854;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "gal" && to === "dm"){	   
		result = Number(fromValue) * 3.7854;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "gal" && to === "cm"){	   
		result = Number(fromValue) * 3785.4;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "gal" && to === "mm"){	   
		result = Number(fromValue) * 3785400;	   
		lblResult.innerHTML =  result;
	} 
        else{
		lblResult.innerHTML =  fromValue;
	}
}

</script>




