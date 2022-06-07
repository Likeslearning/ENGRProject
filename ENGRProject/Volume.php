<?php
   include( "menu.php" );
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="content4">
    <div>
        <form name="myform4" id="myform4">
            <h2 style="color: white"><img src="volume.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Volume Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value4" id="value4" value="0"/>
			<select name="from4" id="from4" class="selects">
				<option value="">From Cubic Unit</option>
				<option value="Kilometer Cube">Kilometer Cube</option>
				<option value="Hectometer Cube">Hectometer Cube</option>
				<option value="Decameter Cube">Decameter Cube</option>
				<option value="Meter Cube">Meter Cube</option>
				<option value="Decimeter Cube">Decimeter Cube</option>
				<option value="Centimeter Cube">Centimeter Cube</option>
				<option value="Millimeter Cube">Millimeter Cube</option>
				<option value="Litre">Litre</option>
				<option value="Gallon">Gallon</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
		</td>
		<td>
		<input type="text" name="result4" id="result4" class="inputs" value="—" readonly/>
			<select name="to4" id="to4" class="selects">
				<option value="">To Cubic Unit</option>
				<option value="Kilometer Cube">Kilometer Cube</option>
				<option value="Hectometer Cube">Hectometer Cube</option>
				<option value="Decameter Cube">Decameter Cube</option>
				<option value="Meter Cube">Meter Cube</option>
				<option value="Decimeter Cube">Decimeter Cube</option>
				<option value="Centimeter Cube">Centimeter Cube</option>
				<option value="Millimeter Cube">Millimeter Cube</option>
				<option value="Litre">Litre</option>
				<option value="Gallon">Gallon</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
  </table>
        </form>

<input type="button" name="button4" id="button4" onclick="clicked()" class="button" value="Convert"/>
<input type="button" onclick="reset()" class="button2" value="Reset"/>
</div>

<div style="float: left;">
    <table align="center" style="margin-left: 485px; color: black; background-image: linear-gradient(#ff6d69,#ff6dd4);" border="1" rules="none">
        <h2 style="margin-left: 470px; color: white;">According to Meter Cube:</h2>
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
            <td>&nbsp; Millimeter Cube &nbsp;</td>
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
<br><br><br><br>
        <div style="margin-right: 300px;">
            <form name="showform4" id="showform4" action="Volume_Records.php" method="POST">
                <label style="color: white;">From Unit:</label>
                <input type="text" name="showfrom4" id="showfrom4" class="inputs"/>
                &nbsp; &nbsp;

                <label style="color: white;">To Unit:</label>
                <input type="text" name="showto4" id="showto4" class="inputs"/>
                <br>
                <br>
                <input type="submit" name="show4" id="show4" class="button3" value="Show Previous Records"/>
            </form>
        </div>
</body>

<script>
function reset(){
	let fromValue = document.getElementById("value4");
	fromValue.value = 0;

	let selectFrom = document.getElementById("from4");
	selectFrom.options[0].selected = true;
	let selectTo = document.getElementById("to4");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result4");
	lblResult.value = "—";
}

function clicked(){
	let fromValue = document.getElementById("value4").value;

	let selectFrom = document.getElementById("from4");
	let from = selectFrom.options[selectFrom.selectedIndex].value;

	let selectTo = document.getElementById("to4");
	let to = selectTo.options[selectTo.selectedIndex].value;

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result4");
	let result = 0;

	if(from === "Kilometer Cube" && to === "Litre"){
		result = Number(fromValue) * 1000000000000;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Cube" && to === "Gallon"){
		result = Number(fromValue) * 264172052358;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Cube" && to === "Hectometer Cube"){
		result = Number(fromValue) * 1000;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Cube" && to === "Decameter Cube"){	  
		result = Number(fromValue) * 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Cube" && to === "Meter Cube"){		   
		result = Number(fromValue) * 1000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Cube" && to === "Decimeter Cube"){	   
		result = Number(fromValue) * 1000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Cube" && to === "Centimeter Cube"){	   
		result = Number(fromValue) * 1000000000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Cube" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 1000000000000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Litre"){
		result = Number(fromValue) * 1000000000;
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Gallon"){
		result = Number(fromValue) * 264172052.358;
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Kilometer Cube"){	  
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Decameter Cube"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Meter Cube"){		   
		result = Number(fromValue) * 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Decimeter Cube"){	   
		result = Number(fromValue) * 1000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Centimeter Cube"){	   
		result = Number(fromValue) * 1000000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Cube" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 1000000000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Litre"){
		result = Number(fromValue) * 1000000;
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Gallon"){
		result = Number(fromValue) * 264172.052358;
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Kilometer Cube"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Hectometer Cube"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Meter Cube"){		   
		result = Number(fromValue) * 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Decimeter Cube"){	   
		result = Number(fromValue) * 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Centimeter Cube"){	   
		result = Number(fromValue) * 1000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Cube" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 1000000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Litre"){
		result = Number(fromValue) * 1000;
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Gallon"){
		result = Number(fromValue) * 264.172052358;
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Kilometer Cube"){	  
		result = Number(fromValue) / 1000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Hectometer Cube"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Decameter Cube"){		   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Decimeter Cube"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Centimeter Cube"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Meter Cube" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 1000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Litre"){
		result = Number(fromValue) * 1;
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Gallon"){
		result = Number(fromValue) * 0.264172052358;
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Kilometer Cube"){	  
		result = Number(fromValue) / 1000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Hectometer Cube"){	   
		result = Number(fromValue) / 1000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Decameter Cube"){		   
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Meter Cube"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Centimeter Cube"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Cube" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Litre"){
		result = Number(fromValue) * 0.001;
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Gallon"){
		result = Number(fromValue) * 0,000264172052358;
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Kilometer Cube"){	  
		result = Number(fromValue) / 1000000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Hectometer Cube"){	   
		result = Number(fromValue) / 1000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Decameter Cube"){		   
		result = Number(fromValue) / 1000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Meter Cube"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Decimeter Cube"){	   
		result = Number(fromValue) / 1000;	   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Cube" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Litre"){
		result = Number(fromValue) * 0.000001;
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Gallon"){
		result = Number(fromValue) * 0,000000264172052358;
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Kilometer Cube"){	  
		result = Number(fromValue) / 1000000000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Hectometer Cube"){	   
		result = Number(fromValue) / 1000000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Decameter Cube"){		   
		result = Number(fromValue) / 1000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Meter Cube"){	   
		result = Number(fromValue) / 1000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Decimeter Cube"){	   
		result = Number(fromValue) / 1000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Cube" && to === "Centimeter Cube"){	   
		result = Number(fromValue) / 1000;	   
		lblResult.value =  result;
	} 
        else if(from === "Litre" && to === "Gallon"){	   
		result = Number(fromValue) * 0.264172052358;	   
		lblResult.value =  result;
	}
        else if(from === "Litre" && to === "Kilometer Cube"){
		result = Number(fromValue) * 0.000000000001; 
		lblResult.value =  result;
	} 
        else if(from === "Litre" && to === "Hectometer Cube"){
		result = Number(fromValue) * 0.000000001; 
		lblResult.value =  result;
	} 
        else if(from === "Litre" && to === "Decameter Cube"){	  
		result = Number(fromValue) * 0.000001;  
		lblResult.value =  result;
	} 
        else if(from === "Litre" && to === "Meter Cube"){		   
		result = Number(fromValue) * 0.001;		   
		lblResult.value =  result;
	} 
        else if(from === "Litre" && to === "Decimeter Cube"){	   
		result = Number(fromValue);		   
		lblResult.value =  result;
	} 
        else if(from === "Litre" && to === "Centimeter Cube"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.value =  result;
	} 
        else if(from === "Litre" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.value =  result;
        }
        else if(from === "Gallon" && to === "Litre"){	   
		result = Number(fromValue) * 3.7854;	   
		lblResult.value =  result;
	}
        else if(from === "Gallon" && to === "Kilometer Cube"){
		result = Number(fromValue) * 0.0000000000037854;
		lblResult.value =  result;
	} 
        else if(from === "Gallon" && to === "Hectometer Cube"){
		result = Number(fromValue) * 0.0000000037854;
		lblResult.value =  result;
	} 
        else if(from === "Gallon" && to === "Decameter Cube"){	  
		result = Number(fromValue) * 0.0000037854;		   
		lblResult.value =  result;
	} 
        else if(from === "Gallon" && to === "Meter Cube"){		   
		result = Number(fromValue) * 0.0037854;		   
		lblResult.value =  result;
	} 
        else if(from === "Gallon" && to === "Decimeter Cube"){	   
		result = Number(fromValue) * 3.7854;		   
		lblResult.value =  result;
	} 
        else if(from === "Gallon" && to === "Centimeter Cube"){	   
		result = Number(fromValue) * 3785.4;	   
		lblResult.value =  result;
	} 
        else if(from === "Gallon" && to === "Millimeter Cube"){	   
		result = Number(fromValue) * 3785400;	   
		lblResult.value =  result;
	} 
        else{
		lblResult.value =  Number(fromValue);
	}
        
        var values = $("#myform4").serialize(); 
            $.ajax({
                url: "Volume_to_DB.php",
                type: "POST",
                data: values
                });
}

</script>
</html>




