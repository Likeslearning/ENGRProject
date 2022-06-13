<?php
   include( "menu.php" );
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body class="content6">
    <div>
        <form name="myform6" id="myform6">
            <h2><img src="weight.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Weight Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="0" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
                        event.charCode === 46 || event.charCode === 0" class="inputs" name="value6" id="value6" value="0">
			<select name="from6" id="from6" class="selects6">
				<option value="">From Weight Unit</option>
				<option value="Ton">Ton</option>
				<option value="Kilogram">Kilogram</option>
				<option value="Hectogram">Hectogram</option>
				<option value="Decagram">Decagram</option>
				<option value="Gram">Gram</option>
				<option value="Decigram">Decigram</option>
				<option value="Centigram">Centigram</option>
				<option value="Milligram">Milligram</option>
				<option value="Pound">Pound</option>
				<option value="Ounce">Ounce</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" onclick="change()"/>
		</td>
		<td>
		<input type="text" name="result6" id="result6" class="inputs" value="—" readonly/>
			<select name="to6" id="to6" class="selects6">
				<option value="">To Weight Unit</option>
				<option value="Ton">Ton</option>
				<option value="Kilogram">Kilogram</option>
				<option value="Hectogram">Hectogram</option>
				<option value="Decagram">Decagram</option>
				<option value="Gram">Gram</option>
				<option value="Decigram">Decigram</option>
				<option value="Centigram">Centigram</option>
				<option value="Milligram">Milligram</option>
				<option value="Pound">Pound</option>
				<option value="Ounce">Ounce</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
  </table>
        </form>

<input type="button" name="button6" id="button6" onclick="clicked()" class="button" value="Convert"/>
<input type="button" onclick="reset()" class="button2" value="Reset"/>

    </div>

<div style="float: left;">
    <table align="center" style="margin-left: 515px; color: black; background-image: linear-gradient(#ace5a0,#a6fb7c);" border="1" rules="none">
        <h2 style="margin-left: 500px; color: black;">According to Gram:</h2>
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
            <td>&nbsp; Milligram &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>3 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Pound &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>0.0353 &nbsp;</td>
        </tr> 
        
        <tr>
            <td>&nbsp; Ounce &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>0.0022 &nbsp;</td>
        </tr>
    </table>
</div>
        <div style="margin-right: 300px;">
            <form name="showform6" id="showform6" action="Weight_Records.php" method="POST">
                <table align="center">
                    <h2 style="color: black;">Query Previous Records:</h2>
                    <tr>
                        <td>
                            <label style="color: black;">From Unit:</label>
                            <select name="showfrom6" id="showfrom6" class="selects6">
				<option value="">To Weight Unit</option>
				<option value="Ton">Ton</option>
				<option value="Kilogram">Kilogram</option>
				<option value="Hectogram">Hectogram</option>
				<option value="Decagram">Decagram</option>
				<option value="Gram">Gram</option>
				<option value="Decigram">Decigram</option>
				<option value="Centigram">Centigram</option>
				<option value="Milligram">Milligram</option>
				<option value="Pound">Pound</option>
				<option value="Ounce">Ounce</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 20px;"></tr>
                    <tr>
                        <td>
                            <label style="color: black;">&nbsp; &nbsp; To Unit:</label>
                            <select name="showto6" id="showto6" class="selects6">
				<option value="">To Weight Unit</option>
				<option value="Ton">Ton</option>
				<option value="Kilogram">Kilogram</option>
				<option value="Hectogram">Hectogram</option>
				<option value="Decagram">Decagram</option>
				<option value="Gram">Gram</option>
				<option value="Decigram">Decigram</option>
				<option value="Centigram">Centigram</option>
				<option value="Milligram">Milligram</option>
				<option value="Pound">Pound</option>
				<option value="Ounce">Ounce</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 35px;"></tr>
                    <tr>
                        <td> &emsp; &emsp;
                            <input type="submit" name="show6" id="show6" class="button3" value="Show Previous Records"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>

<script>
function reset(){
	let fromValue = document.getElementById("value6");
	fromValue.value = 0;

	let selectFrom = document.getElementById("from6");
	selectFrom.options[0].selected = true;
	let selectTo = document.getElementById("to6");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result6");
	lblResult.value = "—";
        
        let showFrom = document.getElementById("showfrom6");
	showFrom.value = "";
        
        let showTo = document.getElementById("showto6");
	showTo.value = "";
}

function change(){

	let selectFrom = document.getElementById("from6");
	let selectTo = document.getElementById("to6");
	
        let from = selectFrom.options[selectFrom.selectedIndex].value;
        let to = selectTo.options[selectTo.selectedIndex].value;
        
        selectFrom.value = to;
        selectTo.value = from;
}

function clicked(){

	let fromValue = document.getElementById("value6").value;
        fromValue = fromValue.trim();

	let selectFrom = document.getElementById("from6");
	let from = selectFrom.options[selectFrom.selectedIndex].value;

	let selectTo = document.getElementById("to6");
	let to = selectTo.options[selectTo.selectedIndex].value;

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result6");
	let result = 0;
	
	if(from === "Ton" && to === "Ounce"){
		result = Number(fromValue) * 35274;
		lblResult.value =  result;
	}  else	if(from === "Ton" && to === "Pound"){
		result = Number(fromValue) * 2204.6226;
		lblResult.value =  result;
	} else if(from === "Ton" && to === "Kilogram"){
		result = Number(fromValue) * 1000;
		lblResult.value =  result;
	} else if(from === "Ton" && to === "Hectogram"){
		result = Number(fromValue) * 10000;
		lblResult.value =  result;
	} else if(from === "Ton" && to === "Decagram"){	  
		result = Number(fromValue) * 100000;		   
		lblResult.value =  result;
	} else if(from === "Ton" && to === "Gram"){		   
		result = Number(fromValue) * 1000000;		   
		lblResult.value =  result;
	} else if(from === "Ton" && to === "Decigram"){	   
		result = Number(fromValue) * 10000000;		   
		lblResult.value =  result;
	} else if(from === "Ton" && to === "Centigram"){	   
		result = Number(fromValue) * 100000000;	   
		lblResult.value =  result;
	} else if(from === "Ton" && to === "Milligram"){	   
		result = Number(fromValue) * 1000000000;	   
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Ounce"){
		result = Number(fromValue) * 35.274;
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Pound"){
		result = Number(fromValue) * 2.204;
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Ton"){
		result = Number(fromValue) / 1000;
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Hectogram"){
		result = Number(fromValue) * 10;
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Decagram"){	  
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Gram"){		   
		result = Number(fromValue) * 1000;		   
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Decigram"){	   
		result = Number(fromValue) * 10000;		   
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Centigram"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.value =  result;
	} else if(from === "Kilogram" && to === "Milligram"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Ounce"){
		result = Number(fromValue) * 3.5274;
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Pound"){
		result = Number(fromValue) * 0.2204;
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Ton"){
		result = Number(fromValue) / 10000;
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Kilogram"){	  
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Decagram"){	   
		result = Number(fromValue) * 10;		   
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Gram"){		   
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Decigram"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Centigram"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.value =  result;
	} else if(from === "Hectogram" && to === "Milligram"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Ounce"){
		result = Number(fromValue) * 0.35274;
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Pound"){
		result = Number(fromValue) * 0.02204;
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Ton"){
		result = Number(fromValue) / 100000;
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Kilogram"){	  
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Hectogram"){	   
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Gram"){		   
		result = Number(fromValue) * 10;		   
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Decigram"){	   
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Centigram"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.value =  result;
	} else if(from === "Decagram" && to === "Milligram"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Ounce"){
		result = Number(fromValue) * 0.035274;
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Pound"){
		result = Number(fromValue) * 0.002204;
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Ton"){
		result = Number(fromValue) / 1000000;
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Kilogram"){	  
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Hectogram"){	   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Decagram"){		   
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Decigram"){	   
		result = Number(fromValue) * 10;		   
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Centigram"){	   
		result = Number(fromValue) * 100;	   
		lblResult.value =  result;
	} else if(from === "Gram" && to === "Milligram"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Ounce"){
		result = Number(fromValue) * 0.0035274;
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Pound"){
		result = Number(fromValue) * 0.0002204;
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Ton"){
		result = Number(fromValue) / 10000000;
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Kilogram"){	  
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Hectogram"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Decagram"){		   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Gram"){	   
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Centigram"){	   
		result = Number(fromValue) * 10;	   
		lblResult.value =  result;
	} else if(from === "Decigram" && to === "Milligram"){	   
		result = Number(fromValue) * 100;	   
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Ounce"){
		result = Number(fromValue) * 0.00035274;
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Pound"){
		result = Number(fromValue) * 0.00002204;
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Ton"){
		result = Number(fromValue) / 100000000;
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Kilogram"){	  
		result = Number(fromValue) / 100000;		   
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Hectogram"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Decagram"){		   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Gram"){	   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Decigram"){	   
		result = Number(fromValue) / 10;	   
		lblResult.value =  result;
	} else if(from === "Centigram" && to === "Milligram"){	   
		result = Number(fromValue) * 10;	   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Ton"){
		result = Number(fromValue) * 0.00045359;
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Kilogram"){	  
		result = Number(fromValue) * 0.45359;		   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Hectogram"){	   
		result = Number(fromValue) * 0.045359;		   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Decagram"){		   
		result = Number(fromValue) * 0.0045359;		   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Gram"){	   
		result = Number(fromValue) * 0.00045359;			   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Decigram"){	   
		result = Number(fromValue) * 0.000045359;		   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Centigram"){	   
		result = Number(fromValue) * 0.0000045359;	   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Milligram"){
		result = Number(fromValue) * 0.00000045359;	
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Ounce"){
		result = Number(fromValue) * 0.000035274;
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Pound"){
		result = Number(fromValue) * 0.000002204;
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Ton"){
		result = Number(fromValue) / 1000000000;
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Kilogram"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Hectogram"){	   
		result = Number(fromValue) / 100000;		   
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Decagram"){		   
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Gram"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Decigram"){	   
		result = Number(fromValue) / 100;	   
		lblResult.value =  result;
	} else if(from === "Milligram" && to === "Centigram"){	   
		result = Number(fromValue) / 10;	   
		lblResult.value =  result;
	} else if(from === "Pound" && to === "Ounce"){
		result = Number(fromValue) * 16;
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Pound"){
		result = Number(fromValue) * 0.0625;
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Ton"){
		result = Number(fromValue) * 0.0000312500;
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Kilogram"){	  
		result = Number(fromValue) * 0.0283495231;		   
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Hectogram"){	   
		result = Number(fromValue) * 0.283495231;		   
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Decagram"){		   
		result = Number(fromValue) * 2.83495231;		   
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Gram"){	   
		result = Number(fromValue) * 28.3495231;			   
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Decigram"){	   
		result = Number(fromValue) * 283.495231;		   
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Centigram"){	   
		result = Number(fromValue) * 2834.95231; 
		lblResult.value =  result;
	} else if(from === "Ounce" && to === "Milligram"){
		result = Number(fromValue) * 28349.5231;
		lblResult.value =  result;
	} else{
		lblResult.value =  Number(fromValue);
	}
        
        var values = $("#myform6").serialize(); 
            $.ajax({
                url: "Weight_to_DB.php",
                type: "POST",
                data: values
                });
}


</script>

</html>


