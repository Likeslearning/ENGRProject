<?php
   include( "menu.php" );
?>

<body class="content3">
    <div class="content3">
<h2 style="color: white"><img src="area.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Area Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value" id="value" value="0">
			<select name="from" id="from" class="selects">
				<option value="">From Area Unit</option>
				<option value="km">Kilometer Square</option>
				<option value="hm">Hectometer Square</option>
				<option value="dam">Decameter Square</option>
				<option value="m">Meter Square</option>
				<option value="dm">Decimeter Square</option>
				<option value="cm">Centimeter Square</option>
				<option value="mm">Milimeter Square</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
		</td>
		<td>
		<label id="result" class="labels" style="color:white;">—</label>
			<select name="to" id="to" class="selects">
				<option value="">To Area Unit</option>
				<option value="km">Kilometer Square</option>
				<option value="hm">Hectometer Square</option>
				<option value="dam">Decameter Square</option>
				<option value="m">Meter Square</option>
				<option value="dm">Decimeter Square</option>
				<option value="cm">Centimeter Square</option>
				<option value="mm">Milimeter Square</option>
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
<br>
<div>
    <table align="center" style="margin-left: 500px; color: white;" border="4" rules="none">
        <h2 style="margin-right: 285px; color: white;">According to Meter Square:</h2>
        <tr>
            <td>&nbsp; Kilometer Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-6 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Hectometer Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-4 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decameter Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-2 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Meter Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decimeter Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>2 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Centimeter Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>4 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Milimeter Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>6 &nbsp;</td>
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
	
        if(from === "km" && to === "hm"){
		result = Number(fromValue) * 100;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "dam"){	  
		result = Number(fromValue) * 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "m"){		   
		result = Number(fromValue) * 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "dm"){	   
		result = Number(fromValue) * 100000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "cm"){	   
		result = Number(fromValue) * 10000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "mm"){	   
		result = Number(fromValue) * 1000000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "km"){	  
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "dam"){	   
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "m"){		   
		result = Number(fromValue) * 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "dm"){	   
		result = Number(fromValue) * 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "cm"){	   
		result = Number(fromValue) * 100000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "mm"){	   
		result = Number(fromValue) * 10000000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "km"){	  
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "hm"){	   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "m"){		   
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "dm"){	   
		result = Number(fromValue) * 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "cm"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "mm"){	   
		result = Number(fromValue) * 100000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "km"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "hm"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "dam"){		   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "dm"){	   
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "cm"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "mm"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "km"){	  
		result = Number(fromValue) / 100000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "hm"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "dam"){		   
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "m"){	   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "cm"){	   
		result = Number(fromValue) * 100;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "mm"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "km"){	  
		result = Number(fromValue) / 10000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "hm"){	   
		result = Number(fromValue) / 100000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "dam"){		   
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "m"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "dm"){	   
		result = Number(fromValue) / 100;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "mm"){	   
		result = Number(fromValue) * 100;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "km"){	  
		result = Number(fromValue) / 1000000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "hm"){	   
		result = Number(fromValue) / 10000000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "dam"){		   
		result = Number(fromValue) / 100000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "m"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "dm"){	   
		result = Number(fromValue) / 10000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "cm"){	   
		result = Number(fromValue) / 100;	   
		lblResult.innerHTML =  result;
	} 
        else{
		lblResult.innerHTML =  fromValue;
	}
}

</script>




