<?php
   include( "menu.php" );
?>
<body class="content6">
    <div>
<h2><img src="weight.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Weight Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value" id="value" value="0">
			<select name="from" id="from" class="selects">
				<option value="">From Weight Unit</option>
				<option value="ton">Ton</option>
				<option value="kg">Kilogram</option>
				<option value="hg">Hectogram</option>
				<option value="dag">Decagram</option>
				<option value="g">Gram</option>
				<option value="dg">Decigram</option>
				<option value="cg">Centigram</option>
				<option value="mg">Miligram</option>
				<option value="lb">Pound</option>
				<option value="oz">Ons</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
		</td>
		<td>
		<label id="result" class="labels" style="color:black;">—</label>
			<select name="to" id="to" class="selects">
				<option value="">To Weight Unit</option>
				<option value="ton">Ton</option>
				<option value="kg">Kilogram</option>
				<option value="hg">Hectogram</option>
				<option value="dag">Decagram</option>
				<option value="g">Gram</option>
				<option value="dg">Decigram</option>
				<option value="cg">Centigram</option>
				<option value="mg">Miligram</option>
				<option value="lb">Pound</option>
				<option value="oz">Ons</option>
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
    <table align="center" style="margin-left: 515px; color: black;" border="4" rules="none">
        <h2 style="margin-right: 285px; color: black;">According to Gram:</h2>
        <tr>
            <td>&nbsp; Kilogram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-3 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Hectogram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-2 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decagram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Gram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decigram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Centigram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>2 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Miligram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>3 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Pound &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>0.0353 &nbsp;</td>
        </tr> 
        
        <tr>
            <td>&nbsp; Ons &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>0.0022 &nbsp;</td>
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
	
	if(from === "ton" && to === "oz"){
		result = Number(fromValue) * 32000;
		lblResult.innerHTML =  result;
	}  else	if(from === "ton" && to === "lb"){
		result = Number(fromValue) * 2204;
		lblResult.innerHTML =  result;
	} else if(from === "ton" && to === "kg"){
		result = Number(fromValue) * 1000;
		lblResult.innerHTML =  result;
	} else if(from === "ton" && to === "hg"){
		result = Number(fromValue) * 10000;
		lblResult.innerHTML =  result;
	} else if(from === "ton" && to === "dag"){	  
		result = Number(fromValue) * 100000;		   
		lblResult.innerHTML =  result;
	} else if(from === "ton" && to === "g"){		   
		result = Number(fromValue) * 1000000;		   
		lblResult.innerHTML =  result;
	} else if(from === "ton" && to === "dg"){	   
		result = Number(fromValue) * 10000000;		   
		lblResult.innerHTML =  result;
	} else if(from === "ton" && to === "cg"){	   
		result = Number(fromValue) * 100000000;	   
		lblResult.innerHTML =  result;
	} else if(from === "ton" && to === "mg"){	   
		result = Number(fromValue) * 1000000000;	   
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "oz"){
		result = Number(fromValue) * 32;
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "lb"){
		result = Number(fromValue) * 2.204;
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "ton"){
		result = Number(fromValue) / 1000;
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "hg"){
		result = Number(fromValue) * 10;
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "dag"){	  
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "g"){		   
		result = Number(fromValue) * 1000;		   
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "dg"){	   
		result = Number(fromValue) * 10000;		   
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "cg"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.innerHTML =  result;
	} else if(from === "kg" && to === "mg"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "oz"){
		result = Number(fromValue) * 3.2;
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "lb"){
		result = Number(fromValue) * 0.2204;
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "ton"){
		result = Number(fromValue) / 10000;
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "kg"){	  
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "dag"){	   
		result = Number(fromValue) * 10;		   
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "g"){		   
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "dg"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "cg"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.innerHTML =  result;
	} else if(from === "hg" && to === "mg"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "oz"){
		result = Number(fromValue) * 0.32;
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "lb"){
		result = Number(fromValue) * 0.02204;
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "ton"){
		result = Number(fromValue) / 100000;
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "kg"){	  
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "hg"){	   
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "g"){		   
		result = Number(fromValue) * 10;		   
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "dg"){	   
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "cg"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.innerHTML =  result;
	} else if(from === "dag" && to === "mg"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "oz"){
		result = Number(fromValue) * 0.032;
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "lb"){
		result = Number(fromValue) * 0.002204;
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "ton"){
		result = Number(fromValue) / 1000000;
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "kg"){	  
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "hg"){	   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "dag"){		   
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "dg"){	   
		result = Number(fromValue) * 10;		   
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "cg"){	   
		result = Number(fromValue) * 100;	   
		lblResult.innerHTML =  result;
	} else if(from === "g" && to === "mg"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "oz"){
		result = Number(fromValue) * 0.0032;
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "lb"){
		result = Number(fromValue) * 0.0002204;
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "ton"){
		result = Number(fromValue) / 10000000;
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "kg"){	  
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "hg"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "dag"){		   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "g"){	   
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "cg"){	   
		result = Number(fromValue) * 10;	   
		lblResult.innerHTML =  result;
	} else if(from === "dg" && to === "mg"){	   
		result = Number(fromValue) * 100;	   
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "oz"){
		result = Number(fromValue) * 0.00032;
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "lb"){
		result = Number(fromValue) * 0.00002204;
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "ton"){
		result = Number(fromValue) / 100000000;
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "kg"){	  
		result = Number(fromValue) / 100000;		   
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "hg"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "dag"){		   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "g"){	   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "dg"){	   
		result = Number(fromValue) / 10;	   
		lblResult.innerHTML =  result;
	} else if(from === "cg" && to === "mg"){	   
		result = Number(fromValue) * 10;	   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "ton"){
		result = Number(fromValue) * 453.56;
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "kg"){	  
		result = Number(fromValue) * 0.45356;		   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "hg"){	   
		result = Number(fromValue) * 0.045356;		   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "dag"){		   
		result = Number(fromValue) * 0.0045356;		   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "g"){	   
		result = Number(fromValue) * 0.00045356;			   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "dg"){	   
		result = Number(fromValue) * 0.000045356;		   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "cg"){	   
		result = Number(fromValue) * 0.0000045356;	   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "mg"){
		result = Number(fromValue) * 0.00000045356;	
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "oz"){
		result = Number(fromValue) * 0.000032;
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "lb"){
		result = Number(fromValue) * 0.000002204;
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "ton"){
		result = Number(fromValue) / 1000000000;
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "kg"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "hg"){	   
		result = Number(fromValue) / 100000;		   
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "dag"){		   
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "g"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "dg"){	   
		result = Number(fromValue) / 100;	   
		lblResult.innerHTML =  result;
	} else if(from === "mg" && to === "cg"){	   
		result = Number(fromValue) / 10;	   
		lblResult.innerHTML =  result;
	} else if(from === "lb" && to === "oz"){
		result = Number(fromValue) * 16;
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "lb"){
		result = Number(fromValue) * 0.0625;
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "ton"){
		result = Number(fromValue) * 3.12500;
		lblResult.innerHTML =  result +"x10<sup>-5<sup>";
	} else if(from === "oz" && to === "kg"){	  
		result = Number(fromValue) * 0.0283495231;		   
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "hg"){	   
		result = Number(fromValue) * 0.00283495231;		   
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "dag"){		   
		result = Number(fromValue) * 0.000283495231;		   
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "g"){	   
		result = Number(fromValue) * 0.0000283495231;			   
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "dg"){	   
		result = Number(fromValue) * 0.00000283495231;		   
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "cg"){	   
		result = Number(fromValue) * 0.000000283495231; 
		lblResult.innerHTML =  result;
	} else if(from === "oz" && to === "mg"){
		result = Number(fromValue) * 0.0000000283495231;
		lblResult.innerHTML =  result;
	} else{
		lblResult.innerHTML =  fromValue;
	}
}


</script>




