<?php
   include( "menu.php" );
?>
<body class="content5">
    <div>
<h2 style="color: white;"><img src="number base.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Number Base Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" class="inputs" name="value" id="value" value="0">
			<select name="from" id="from" class="selects">
				<option value="">From Number Base</option>
				<option value="B">Binary</option>
				<option value="O">Octal</option>
				<option value="D">Decimal</option>
				<option value="H">Hexadecimal</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
		</td>
		<td>
		<label id="result" class="labels" style="color:white;">—</label>
			<select name="to" id="to" class="selects">
				<option value="">From Number Base</option>
				<option value="B">Binary</option>
				<option value="O">Octal</option>
				<option value="D">Decimal </option>
				<option value="H">Hexadecimal </option>
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
<br><br>
<div>
    <table align="center" style="margin-left: 515px; color: white;" border="4" rules="none">
        <h2 style="margin-right: 285px; color: white;">According to Decimal:</h2>
        
        <tr>
            <td>&nbsp; Hexadecimal &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decimal &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Octal &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>12 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Binary &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1010 &nbsp;</td>
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

	if(from === "B" && to === "D"){
		result = parseInt(fromValue, 2); // parseInt fonksiyonu ile binary den decimale �evriliyor.
		lblResult.innerHTML =  result;
	} else if(from === "B" && to === "O"){	  
		result = parseInt(fromValue, 2);
		lblResult.innerHTML =  result.toString(8); // toString(8) decimal de�eri octale �eciriyor
	} else if(from === "B" && to === "H"){	  
		result = parseInt(fromValue, 2);
		lblResult.innerHTML =  result.toString(16);// toString(8) decimal de�eri hexadecimale �eciriyor
	} else if(from === "D" && to === "B"){	  
		result = Number(fromValue).toString(2);
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "O"){	  
		result = Number(fromValue).toString(8);
		lblResult.innerHTML =  result;
	} else if(from === "D" && to === "H"){	  
		result = Number(fromValue).toString(16);
		lblResult.innerHTML =  result;
	} else if(from === "O" && to === "B"){	  
		result = parseInt(fromValue, 8);
		lblResult.innerHTML =  result.toString(2);
	} else if(from === "O" && to === "D"){	  
		result = parseInt(fromValue, 8);
		lblResult.innerHTML =  result;
	} else if(from === "O" && to === "H"){	  
		result = parseInt(fromValue, 8);
		lblResult.innerHTML =  result.toString(16);
	} else if(from === "H" && to === "B"){	  
		result = parseInt(fromValue, 16);
		lblResult.innerHTML =  result.toString(2);
	} else if(from === "H" && to === "D"){	  
		result = parseInt(fromValue, 16);
		lblResult.innerHTML =  result;
	} else if(from === "H" && to === "O"){	  
		result = parseInt(fromValue, 16);
		lblResult.innerHTML =  result.toString(8);
	} 
        else{
		lblResult.innerHTML =  fromValue;
	}
}

</script>




