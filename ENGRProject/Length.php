<?php
   include( "menu.php" );
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="content2">
    <div>
        <form id="myform2" name="myform2">
            <h2 style="color: white;"><img src="length.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Length Conversion</h2>
      <table align="center">
            <tr>
                    <td>
                    <input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value2" id="value2" value="0">
                            <select name="from2" id="from2" class="selects">
                                    <option value="">From Length Unit</option>
                                    <option value="Kilometer">Kilometer</option>
                                    <option value="Hectometer">Hectometer</option>
                                    <option value="Decameter">Decameter</option>
                                    <option value="Meter">Meter</option>
                                    <option value="Decimeter">Decimeter</option>
                                    <option value="Centimeter">Centimeter</option>
                                    <option value="Millimeter">Millimeter</option>
                                    <option value="Feet">Feet</option>
                                    <option value="Yard">Yard</option>
                                    <option value="Mile">Mile</option>
                            </select>
                    </td>
                    <td>
                            <img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;"/>
                    </td>
                    <td>
                    <input type="text" name="result2" id="result2" class="inputs" value="—" readonly/>
                            <select name="to2" id="to2" class="selects">
                                    <option value="">To Length Unit</option>
                                    <option value="Kilometer">Kilometer</option>
                                    <option value="Hectometer">Hectometer</option>
                                    <option value="Decameter">Decameter</option>
                                    <option value="Meter">Meter</option>
                                    <option value="Decimeter">Decimeter</option>
                                    <option value="Centimeter">Centimeter</option>
                                    <option value="Millimeter">Millimeter</option>
                                    <option value="Feet">Feet</option>
                                    <option value="Yard">Yard</option>
                                    <option value="Mile">Mile</option>
                            </select>
                    </td>
            </tr>
            
      </table>
        </form>
        <input type="button" onclick="clicked()" name="button2" id="button2" class="button" value="Convert">
        <input type="button" onclick="reset()" class="button2" value="Reset">
    </div>

<div style="float: left;">
    <table align="center" style="margin-left: 515px; color: black; background-image: linear-gradient(#ff6d69,#ff6dd4);" border="1" rules="none">
        <h2 style="margin-left: 505px; color: white;">According to Meter:</h2>
        <tr>
            <td>&nbsp; Kilometer &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-3</sup> &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Hectometer &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-2</sup> &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decameter &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>-1</sup> &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Meter &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decimeter &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>1</sup> &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Centimeter &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>2</sup> &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Millimeter &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>10<sup>3</sup> &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Feet &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>3.2808 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Yard &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1.0936 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Mile &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>0.0006 &nbsp;</td>
        </tr>
    </table>
</div>
<br><br><br><br><br><br><br><br>
        <div style="margin-right: 300px;">
            <form name="showform2" id="showform2" action="Length_Records.php" method="POST">
                <label style="color: white;">From Unit:</label>
                <input type="text" name="showfrom2" id="showfrom2" class="inputs"/>
                &nbsp; &nbsp;

                <label style="color: white;">To Unit:</label>
                <input type="text" name="showto2" id="showto2" class="inputs"/>
                <br>
                <br>
                <input type="submit" name="show2" id="show2" class="button3" value="Show Previous Records"/>
            </form>
        </div>
</body>

<script>
function reset(){
	let fromValue = document.getElementById("value2");
	fromValue.value = 0;

	let selectFrom = document.getElementById("from2");
	selectFrom.options[0].selected = true;
	let selectTo = document.getElementById("to2");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result2");
	lblResult.value = "—";
        
        let showFrom = document.getElementById("showfrom2");
	showFrom.value = "";
        
        let showTo = document.getElementById("showto2");
	showTo.value = "";
}

function clicked(){

	let fromValue = document.getElementById("value2").value;

	let selectFrom = document.getElementById("from2");
	let from = selectFrom.options[selectFrom.selectedIndex].value;

	let selectTo = document.getElementById("to2");
	let to = selectTo.options[selectTo.selectedIndex].value;

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result2");
	let result = 0;

	if(from === "Kilometer" && to === "Mile"){
		result = Number(fromValue) * 0.62137;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Yard"){
		result = Number(fromValue) * 1093.61;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Feet"){
		result = Number(fromValue) * 3280.83;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Hectometer"){
		result = Number(fromValue) * 10;
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Decameter"){	  
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Meter"){		   
		result = Number(fromValue) * 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Decimeter"){	   
		result = Number(fromValue) * 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Centimeter"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.value =  result;
	} 
        else if(from === "Kilometer" && to === "Millimeter"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Mile"){
		result = Number(fromValue) * 0.062137;
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Yard"){
		result = Number(fromValue) * 109.361;
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Feet"){
		result = Number(fromValue) * 328.083;
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Kilometer"){	  
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Decameter"){	   
		result = Number(fromValue) * 10;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Meter"){		   
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Decimeter"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Centimeter"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.value =  result;
	} 
        else if(from === "Hectometer" && to === "Millimeter"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Mile"){
		result = Number(fromValue) * 0.0062137;
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Yard"){
		result = Number(fromValue) * 10.9361;
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Feet"){
		result = Number(fromValue) * 32.8083;
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Kilometer"){	  
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Hectometer"){	   
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Meter"){		   
		result = Number(fromValue) * 10;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Decimeter"){	   
		result = Number(fromValue) * 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Centimeter"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decameter" && to === "Millimeter"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Mile"){
		result = Number(fromValue) * 0.00062137;
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Yard"){
		result = Number(fromValue) * 1.09361;
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Feet"){
		result = Number(fromValue) * 3.28083;
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Kilometer"){	  
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Hectometer"){	   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Decameter"){		   
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Decimeter"){	   
		result = Number(fromValue) * 10;		   
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Centimeter"){	   
		result = Number(fromValue) * 100;	   
		lblResult.value =  result;
	} 
        else if(from === "Meter" && to === "Millimeter"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Mile"){
		result = Number(fromValue) * 0.000062137;
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Yard"){
		result = Number(fromValue) * 0.109361;
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Feet"){
		result = Number(fromValue) * 0.328083;
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Kilometer"){	  
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Hectometer"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Decameter"){		   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Meter"){	   
		result = Number(fromValue) / 10;		   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Centimeter"){	   
		result = Number(fromValue) * 10;	   
		lblResult.value =  result;
	} 
        else if(from === "Decimeter" && to === "Millimeter"){	   
		result = Number(fromValue) * 100;	   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Mile"){
		result = Number(fromValue) * 0.0000062137;
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Yard"){
		result = Number(fromValue) * 0.0109361;
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Feet"){
		result = Number(fromValue) * 0.0328083;
		lblResult.value =  result;
	}
        else if(from === "Centimeter" && to === "Kilometer"){	  
		result = Number(fromValue) / 100000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Hectometer"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Decameter"){		   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Meter"){	   
		result = Number(fromValue) / 100;		   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Decimeter"){	   
		result = Number(fromValue) / 10;	   
		lblResult.value =  result;
	} 
        else if(from === "Centimeter" && to === "Millimeter"){	   
		result = Number(fromValue) * 10;	   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Feet"){
		result = Number(fromValue) * 0.00328083;
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Mile"){
		result = Number(fromValue) * 0.00000062137;
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Yard"){
		result = Number(fromValue) * 0.00109361;
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Kilometer"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Hectometer"){	   
		result = Number(fromValue) / 100000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Decameter"){		   
		result = Number(fromValue) / 10000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Meter"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Decimeter"){	   
		result = Number(fromValue) / 100;	   
		lblResult.value =  result;
	} 
        else if(from === "Millimeter" && to === "Centimeter"){	   
		result = Number(fromValue) / 10;	   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Yard"){	  
		result = Number(fromValue) * 0.3333;		   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Mile"){	  
		result = Number(fromValue) * 0.00018;		   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Kilometer"){	  
		result = Number(fromValue) / 3280.83;		   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Hectometer"){	   
		result = Number(fromValue) / 328.083;	   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Decameter"){		   
		result = Number(fromValue) / 32.8083;	   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Meter"){	   
		result = Number(fromValue) / 3.28083;		   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Decimeter"){	   
		result = Number(fromValue) / 0.328083;	   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Centimeter"){	   
		result = Number(fromValue) / 0.0328083;   
		lblResult.value =  result;
	} 
        else if(from === "Feet" && to === "Millimeter"){	   
		result = Number(fromValue) / 0.00328083;	   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Feet"){	  
		result = Number(fromValue) * 3;		   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Mile"){	  
		result = Number(fromValue) * 0.00056;		   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Kilometer"){	  
		result = Number(fromValue) / 1093.613;		   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Hectometer"){	   
		result = Number(fromValue) / 109.361;		   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Decameter"){		   
		result = Number(fromValue) / 10.9361;		   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Meter"){	   
		result = Number(fromValue) / 1.09361;		   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Decimeter"){	   
		result = Number(fromValue) / 0.109361;	   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Centimeter"){	   
		result = Number(fromValue) / 0.0109361;	   
		lblResult.value =  result;
	} 
        else if(from === "Yard" && to === "Millimeter"){	   
		result = Number(fromValue) / 0.00109361;	   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Feet"){	  
		result = Number(fromValue) * 5280;		   
		lblResult.value =  result;
	}  
        else if(from === "Mile" && to === "Yard"){	  
		result = Number(fromValue) * 1760;		   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Kilometer"){	  
		result = Number(fromValue) / 0.62137;	   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Hectometer"){	   
		result = Number(fromValue) /  0.062137;		   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Decameter"){		   
		result = Number(fromValue) /  0.0062137;		   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Meter"){	   
		result = Number(fromValue) /  0.00062137;		   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Decimeter"){	   
		result = Number(fromValue) /  0.000062137;	   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Centimeter"){	   
		result = Number(fromValue) /  0.0000062137;	   
		lblResult.value =  result;
	} 
        else if(from === "Mile" && to === "Millimeter"){	   
		result = Number(fromValue) /  0.00000062137;	   
		lblResult.value =  result;
	} 
        else{
		lblResult.value =  Number(fromValue);
	}
        
        var values = $("#myform2").serialize(); 
            $.ajax({
                url: "Length_to_DB.php",
                type: "POST",
                data: values
                });
}

</script>
</html>


