<?php
   include( "menu.php" );
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="content1">
        <div>
            <form name="myform" id="myform">
                <h2><img src="temp.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>&nbsp; Temperature Conversion</h2>
          <table align="center">
                <tr>
                        <td>
                        <input type="number" class="inputs" name="fromValue" id="fromValue" value="0">
                                <select name="fromTemp" id="fromTemp" class="selects">
                                        <option value="">From Temperature Unit</option>
                                        <option value="C">Celcius</option>
                                        <option value="K">Kelvin</option>
                                        <option value="F">Fahrenheit </option>
                                </select>
                        </td>
                        <td>
                                <img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;"/>
                        </td>
                        <td>
                        
                        <input type="text" name="result" id="result" class="inputs" value="—" readonly/>
                                <select name="toTemp" id="toTemp" class="selects">
                                        <option value="">To Temperature Unit</option>
                                        <option value="C">Celcius</option>
                                        <option value="K">Kelvin</option>
                                        <option value="F">Fahrenheit </option>
                                </select>
                        </td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                </tr>
          </table>
            </form>
            <input type="button" onclick="clicked()" class="button" value="Convert">
            <input type="button" onclick="reset()" class="button2" value="Reset">
        </div>
    <br><br>
        <div>
            <table align="center" style="margin-left: 500px; color: black;" border="4" rules="none">
                <h2 style="margin-right: 325px; color: black;">According to Celsius:</h2>
                <tr>
                    <td>&nbsp; Celsius</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>0 &nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp; Fahrenheit &nbsp;</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>32 &nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp; Kelvin &nbsp;</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>273 &nbsp;</td>
                </tr>
            </table>
        </div> 
</body>
</html>


<script>
function reset(){
	let fromValue = document.getElementById("fromValue");
	fromValue.value = 0;

	let selectFrom = document.getElementById("fromTemp");
	selectFrom.options[0].selected = true;

	let selectTo = document.getElementById("toTemp");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result");
	lblResult.value = "—";
}

function clicked(){

	let fromValue = document.getElementById("fromValue").value;
	console.log("value : " + fromValue);

	let selectFrom = document.getElementById("fromTemp");
	let from = selectFrom.options[selectFrom.selectedIndex].value;
	console.log("fromTemp : " + from);

	let selectTo = document.getElementById("toTemp");
	let to = selectTo.options[selectTo.selectedIndex].value;
	console.log("toTemp : " + to);

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result");
	let result = 0;
	
        if(from === "F" && to === "C"){
		result = (5/9) * (Number(fromValue)-32);
		lblResult.value =  result;
	} 
        else if(from === "F" && to === "K"){						 
		result = (5 * (Number(fromValue)-32) / 9) + 273;			
		lblResult.value =  result;
	} 
        else if(from === "C" && to === "F"){						
		result = Number(fromValue) * (9/5) + 32;			 
		lblResult.value =  result;
	} 
        else if(from === "C" && to === "K"){						 
		result = Number(fromValue)+273;				 
		lblResult.value =  result;
	} 
        else if(from === "K" && to === "F"){						 
		result = (Number(fromValue)-273) * (9/5) + 32;			 
		lblResult.value =  result;
	} 
        else if(from === "K" && to === "C"){						 
		result = Number(fromValue)-273;				 
		lblResult.value =  result;
	}
        else{
		lblResult.value =  fromValue;
	}
        
        var values = $("#myform").serialize(); 
            $.ajax({
                url: "check.php",
                type: "POST",
                data: values
                });
}

</script>




