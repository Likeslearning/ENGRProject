<?php
   include( "menu.php" );
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="content3"><br>
    <div class="content3">
        <form name="myform3" id="myform3">
            <h2 style="color: white"><img src="area.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Area Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="0" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
                        event.charCode === 46 || event.charCode === 0" class="inputs" name="value3" id="value3" value="0"/>
			<select name="from3" id="from3" class="selects3">
				<option value="">From Area Unit</option>
				<option value="Kilometer Square">Kilometer Square</option>
				<option value="Hectometer Square">Hectometer Square</option>
				<option value="Decameter Square">Decameter Square</option>
				<option value="Meter Square">Meter Square</option>
				<option value="Decimeter Square">Decimeter Square</option>
				<option value="Centimeter Square">Centimeter Square</option>
				<option value="Millimeter Square">Millimeter Square</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
		</td>
		<td>
		<input type="text" name="result3" id="result3" class="inputs" value="—" readonly/>
			<select name="to3" id="to3" class="selects3">
				<option value="">To Area Unit</option>
				<option value="Kilometer Square">Kilometer Square</option>
				<option value="Hectometer Square">Hectometer Square</option>
				<option value="Decameter Square">Decameter Square</option>
				<option value="Meter Square">Meter Square</option>
				<option value="Decimeter Square">Decimeter Square</option>
				<option value="Centimeter Square">Centimeter Square</option>
				<option value="Millimeter Square">Millimeter Square</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
  </table>
        </form>
    <input type="button" onclick="clicked()" name="button3" id="button3" class="button" value="Convert"/>
    <input type="button" onclick="reset()" class="button2" value="Reset"/>
</div>
<br>
<div style="float: left;">
    <table align="center" style="margin-left: 500px; color: black; background-image: linear-gradient(#ff6d69,#ff6dd4);" border="1" rules="none">
        <h2 style="margin-left: 450px; color: white;">According to Meter Square:</h2>
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
            <td>&nbsp; Millimeter Square &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>6 &nbsp;</td>
        </tr>
    </table>
</div>
        <div style="margin-right: 300px;">
            <form name="showform3" id="showform3" action="Area_Records.php" method="POST">
                <table align="center">
                    <h2 style="color: white;">Query Previous Records:</h2>
                    <tr>
                        <td>
                            <label style="color: white;">From Unit:</label>
                            <select name="showfrom3" id="showfrom3" class="selects3">
                                <option value="">To Area Unit</option>
                                <option value="Kilometer Square">Kilometer Square</option>
                                <option value="Hectometer Square">Hectometer Square</option>
                                <option value="Decameter Square">Decameter Square</option>
                                <option value="Meter Square">Meter Square</option>
                                <option value="Decimeter Square">Decimeter Square</option>
                                <option value="Centimeter Square">Centimeter Square</option>
                                <option value="Millimeter Square">Millimeter Square</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 20px;"></tr>
                    <tr>
                        <td>
                            <label style="color: white;">&nbsp; &nbsp; To Unit:</label>
                            <select name="showto3" id="showto3" class="selects3">
                                <option value="">To Area Unit</option>
                                <option value="Kilometer Square">Kilometer Square</option>
                                <option value="Hectometer Square">Hectometer Square</option>
                                <option value="Decameter Square">Decameter Square</option>
                                <option value="Meter Square">Meter Square</option>
                                <option value="Decimeter Square">Decimeter Square</option>
                                <option value="Centimeter Square">Centimeter Square</option>
                                <option value="Millimeter Square">Millimeter Square</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 35px;"></tr>
                    <tr>
                        <td>&emsp; &emsp; <input type="submit" name="show3" id="show3" class="button3" value="Show Previous Records"/></td>
                    </tr>
                </table>
            </form>
        </div>
</body>

<script>
function reset(){
	let fromValue = document.getElementById("value3");
	fromValue.value = 0;

	let selectFrom = document.getElementById("from3");
	selectFrom.options[0].selected = true;
	let selectTo = document.getElementById("to3");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result3");
	lblResult.value = "—";
        
        let showFrom = document.getElementById("showfrom3");
	showFrom.value = "";
        
        let showTo = document.getElementById("showto3");
	showTo.value = "";
}

function clicked(){

	let fromValue = document.getElementById("value3").value;
        fromValue = fromValue.trim();

	let selectFrom = document.getElementById("from3");
	let from = selectFrom.options[selectFrom.selectedIndex].value;

	let selectTo = document.getElementById("to3");
	let to = selectTo.options[selectTo.selectedIndex].value;

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result3");
	let result = 0;
	
        if(from === "Kilometer Square" && to === "Hectometer Square"){
		result = Number(fromValue) * 100;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Square" && to === "Decameter Square"){	  
		result = Number(fromValue) * 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Square" && to === "Meter Square"){		   
		result = Number(fromValue) * 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Square" && to === "Decimeter Square"){	   
		result = Number(fromValue) * 100000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Square" && to === "Centimeter Square"){	   
		result = Number(fromValue) * 10000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer Square" && to === "Millimeter Square"){	   
		result = Number(fromValue) * 1000000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Square" && to === "Kilometer Square"){	  
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Square" && to === "Decameter Square"){	   
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Square" && to === "Meter Square"){		   
		result = Number(fromValue) * 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Square" && to === "Decimeter Square"){	   
		result = Number(fromValue) * 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Square" && to === "Centimeter Square"){	   
		result = Number(fromValue) * 100000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer Square" && to === "Millimeter Square"){	   
		result = Number(fromValue) * 10000000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Square" && to === "Kilometer Square"){	  
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Square" && to === "Hectometer Square"){	   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Square" && to === "Meter Square"){		   
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Square" && to === "Decimeter Square"){	   
		result = Number(fromValue) * 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Square" && to === "Centimeter Square"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decameter Square" && to === "Millimeter Square"){	   
		result = Number(fromValue) * 100000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Meter Square" && to === "Kilometer Square"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Square" && to === "Hectometer Square"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Square" && to === "Decameter Square"){		   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Square" && to === "Decimeter Square"){	   
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter Square" && to === "Centimeter Square"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.value =  result;
	} 
        else if(from === "Meter Square" && to === "Millimeter Square"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Square" && to === "Kilometer Square"){	  
		result = Number(fromValue) / 100000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Square" && to === "Hectometer Square"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Square" && to === "Decameter Square"){		   
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Square" && to === "Meter Square"){	   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Square" && to === "Centimeter Square"){	   
		result = Number(fromValue) * 100;	   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter Square" && to === "Millimeter Square"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Square" && to === "Kilometer Square"){	  
		result = Number(fromValue) / 10000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Square" && to === "Hectometer Square"){	   
		result = Number(fromValue) / 100000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Square" && to === "Decameter Square"){		   
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Square" && to === "Meter Square"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Square" && to === "Decimeter Square"){	   
		result = Number(fromValue) / 100;	   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter Square" && to === "Millimeter Square"){	   
		result = Number(fromValue) * 100;	   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Square" && to === "Kilometer Square"){	  
		result = Number(fromValue) / 1000000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Square" && to === "Hectometer Square"){	   
		result = Number(fromValue) / 10000000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Square" && to === "Decameter Square"){		   
		result = Number(fromValue) / 100000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Square" && to === "Meter Square"){	   
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Square" && to === "Decimeter Square"){	   
		result = Number(fromValue) / 10000;	   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter Square" && to === "Centimeter Square"){	   
		result = Number(fromValue) / 100;	   
		lblResult.value =  result;
	} 
        else{
		lblResult.value =  Number(fromValue);
	}
        
        var values = $("#myform3").serialize(); 
            $.ajax({
                url: "Area_to_DB.php",
                type: "POST",
                data: values
                });
}

</script>
</html>





