<?php
   include( "menu.php" );
?>
<body class="content7">
    <div>
<h2><img src="time.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Time Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="1" onkeypress="return event.charCode >= 48" class="inputs" name="value" id="value" value="0">
			<select name="from" id="from" class="selects">
				<option value="">From Time Unit</option>
				<option value="Y">Year</option>
				<option value="M">Month</option>
				<option value="D">Day</option>
				<option value="H">Hour</option>
				<option value="MI">Minute</option>
				<option value="S">Second</option>
				<option value="MS">Milisecond</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;"/>
		</td>
		<td>
		<label id="result" class="labels" style="color:black;">—</label>
			<select name="to" id="to" class="selects">
				<option value="">From Time Unit</option>
				<option value="Y">Year</option>
				<option value="M">Month</option>
				<option value="D">Day </option>
				<option value="H">Hour </option>
				<option value="MI">Minute</option>
				<option value="S">Second</option>
				<option value="MS">Milisecond</option>
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
    <table align="center" style="margin-left: 505px; color: black;" border="4" rules="none">
        <h2 style="margin-right: 285px; color: black;">According to Minute:</h2>
        <tr>
            <td>&nbsp; Year &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1.9013e<sup>-6 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Month &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>2.2816e<sup>-5 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Day &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>0.0007 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Hour &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>0.1667 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Minute &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Second &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>60000 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Milisecond &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>3 &nbsp;</td>
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

	if(from === "Y" && to === "M"){
		result = Number(fromValue) * 12;
		lblResult.innerHTML =  result;
	} else if(from === "Y" && to === "D"){	  
		result = Number(fromValue) * 365;
		lblResult.innerHTML =  result;
	} else if(from === "Y" && to === "H"){	  
		result = Number(fromValue) * 365 * 24;
		lblResult.innerHTML =  result;
	} else if(from === "Y" && to === "MI"){	  
		result = Number(fromValue) * 365 * 24 * 60;
		lblResult.innerHTML =  result;
	} else if(from === "Y" && to === "S"){	  
		result = Number(fromValue) * 365 * 24 * 60 * 60;
		lblResult.innerHTML =  result;
	} else if(from === "Y" && to === "MS"){	  
		result = Number(fromValue) * 365 * 24 * 60 * 60 * 1000;
		lblResult.innerHTML =  result;
	} else if(from === "M" && to === "Y"){
		result = Number(fromValue) / 12;
		lblResult.innerHTML =  result;
	} else if(from === "M" && to === "D"){	  
		result = Number(fromValue) * 30;
		lblResult.innerHTML =  result;
	} else if(from === "M" && to === "H"){	  
		result = Number(fromValue) * 30 * 24;
		lblResult.innerHTML =  result;
	} else if(from === "M" && to === "MI"){	  
		result = Number(fromValue) * 30 * 24 * 60;
		lblResult.innerHTML =  result;
	} else if(from === "M" && to === "S"){	  
		result = Number(fromValue) * 30 * 24 * 60 * 60;
		lblResult.innerHTML =  result;
	} else if(from === "M" && to === "MS"){	  
		result = Number(fromValue) * 30 * 24 * 60 * 60 * 1000;
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "Y"){
		result = Number(fromValue) / 365;
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "M"){	  
		result = Number(fromValue) / 30;
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "H"){	  
		result = Number(fromValue) * 24;
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "MI"){	  
		result = Number(fromValue) * 24 * 60;
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "S"){	  
		result = Number(fromValue) * 24 * 60 * 60;
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "MS"){	  
		result = Number(fromValue) * 24 * 60 * 60 * 1000;
		lblResult.innerHTML =  result;
	} else if(from === "H" && to === "Y"){
		result = Number(fromValue) / (365 * 24);
		lblResult.innerHTML =  result;
	} else if(from === "H" && to === "M"){	  
		result = Number(fromValue) / (30 * 24);
		lblResult.innerHTML =  result;
	} else if(from === "H" && to === "D"){	  
		result = Number(fromValue) / 24;
		lblResult.innerHTML =  result;
	} else if(from === "H" && to === "MI"){	  
		result = Number(fromValue) * 60;
		lblResult.innerHTML =  result;
	} else if(from === "H" && to === "S"){	  
		result = Number(fromValue) * 60 * 60;
		lblResult.innerHTML =  result;
	} else if(from === "H" && to === "MS"){	  
		result = Number(fromValue) * 60 * 60 * 1000;
		lblResult.innerHTML =  result;
	} else if(from === "MI" && to === "Y"){
		result = Number(fromValue) / (365 * 24 * 60);
		lblResult.innerHTML =  result;
	} else if(from === "MI" && to === "M"){	  
		result = Number(fromValue) / (30 * 24 * 60);
		lblResult.innerHTML =  result;
	} else if(from === "MI" && to === "D"){	  
		result = Number(fromValue) / (24 * 60);
		lblResult.innerHTML =  result;
	} else if(from === "MI" && to === "H"){	  
		result = Number(fromValue) / 60;
		lblResult.innerHTML =  result;
	} else if(from === "MI" && to === "S"){	  
		result = Number(fromValue) * 60 ;
		lblResult.innerHTML =  result;
	} else if(from === "MI" && to === "MS"){	  
		result = Number(fromValue) * 60 * 1000;
		lblResult.innerHTML =  result;
	} else if(from === "S" && to === "Y"){
		result = Number(fromValue) / (365 * 24 * 60 * 60);
		lblResult.innerHTML =  result;
	} else if(from === "S" && to === "M"){	  
		result = Number(fromValue) / (30 * 24 * 60 * 60);
		lblResult.innerHTML =  result;
	} else if(from === "S" && to === "D"){	  
		result = Number(fromValue) / (24 * 60 * 60);
		lblResult.innerHTML =  result;
	} else if(from === "S" && to === "H"){	  
		result = Number(fromValue) / (60 * 60);
		lblResult.innerHTML =  result;
	} else if(from === "S" && to === "MI"){	  
		result = Number(fromValue) / 60 ;
		lblResult.innerHTML =  result;
	} else if(from === "S" && to === "MS"){	  
		result = Number(fromValue) * 1000;
		lblResult.innerHTML =  result;
	}  else if(from === "MS" && to === "Y"){
		result = Number(fromValue) / (365 * 24 * 60 * 60 * 1000);
		lblResult.innerHTML =  result;
	} else if(from === "MS" && to === "M"){	  
		result = Number(fromValue) / (30 * 24 * 60 * 60 * 1000);
		lblResult.innerHTML =  result;
	} else if(from === "MS" && to === "D"){	  
		result = Number(fromValue) / (24 * 60 * 60 * 1000);
		lblResult.innerHTML =  result;
	} else if(from === "MS" && to === "H"){	  
		result = Number(fromValue) / (60 * 60 * 1000);
		lblResult.innerHTML =  result;
	} else if(from === "MS" && to === "MI"){	  
		result = Number(fromValue) / (60 * 1000);
		lblResult.innerHTML =  result;
	} else if(from === "MS" && to === "S"){	  
		result = Number(fromValue) / 1000;
		lblResult.innerHTML =  result;
	} else{
		lblResult.innerHTML =  fromValue;
	}
}

</script>



