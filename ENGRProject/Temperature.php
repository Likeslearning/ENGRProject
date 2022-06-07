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
                        <input type="number" class="inputs" name="value" id="value" value="0"/>
                                <select name="from" id="from" class="selects">
                                        <option value="">From Temperature Unit</option>
                                        <option value="Celsius">Celcius</option>
                                        <option value="Kelvin">Kelvin</option>
                                        <option value="Fahrenheit">Fahrenheit </option>
                                </select>
                        </td>
                        <td>
                                <img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;"/>
                        </td>
                        <td>
                        
                        <input type="text" name="result" id="result" class="inputs" value="—" readonly/>
                                <select name="to" id="to" class="selects">
                                        <option value="">To Temperature Unit</option>
                                        <option value="Celsius">Celcius</option>
                                        <option value="Kelvin">Kelvin</option>
                                        <option value="Fahrenheit">Fahrenheit </option>
                                </select>
                        </td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                </tr>
          </table>
            </form>
            <input type="button" name="button1" id="button1" onclick="calculate()" class="button" value="Convert"/>
            <input type="button" onclick="reset()" class="button2" value="Reset"/>
        </div>
    <br><br>
        <div style="float: left;">
            <table align="center" style="margin-left: 500px; color: black; 
                   background-image: linear-gradient(#6ba15d,#6ba18d,#6ba1be);" border="1" rules="none">
                <h2 style="margin-left: 460px; color: black;">According to Celsius:</h2>
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
        <br><br><br><br>
        <div style="margin-right: 300px;">
            <form name="showform" id="showform" action="Temperature_Records.php" method="POST">
                <label style="color: black;">From Unit:</label>
                <input type="text" name="showfrom" id="showfrom" class="inputs"/>
                &nbsp; &nbsp;

                <label style="color: black;">To Unit:</label>
                <input type="text" name="showto" id="showto" class="inputs"/>
                <br>
                <br>
                <input type="submit" name="show" id="show" class="button3" value="Show Previous Records"/>
            </form>
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
	lblResult.value = "—";
        
        let showFrom = document.getElementById("showfrom");
	showFrom.value = "";
        
        let showTo = document.getElementById("showto");
	showTo.value = "";
}

function calculate(){

	let fromValue = document.getElementById("value").value;
	console.log("value : " + fromValue);

	let selectFrom = document.getElementById("from");
	let from = selectFrom.options[selectFrom.selectedIndex].value;
	console.log("fromTemp : " + from);

	let selectTo = document.getElementById("to");
	let to = selectTo.options[selectTo.selectedIndex].value;
	console.log("toTemp : " + to);

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result");
	let result = 0;
	
        if(from === "Fahrenheit" && to === "Celsius"){
		result = (5/9) * (Number(fromValue)-32);
		lblResult.value =  result;
	} 
        else if(from === "Fahrenheit" && to === "Kelvin"){						 
		result = (5 * (Number(fromValue)-32) / 9) + 273;			
		lblResult.value =  result;
	} 
        else if(from === "Celsius" && to === "Fahrenheit"){						
		result = Number(fromValue) * (9/5) + 32;			 
		lblResult.value =  result;
	} 
        else if(from === "Celsius" && to === "Kelvin"){						 
		result = Number(fromValue)+273;				 
		lblResult.value =  result;
	} 
        else if(from === "Kelvin" && to === "Fahrenheit"){						 
		result = (Number(fromValue)-273) * (9/5) + 32;			 
		lblResult.value =  result;
	} 
        else if(from === "Kelvin" && to === "Celsius"){						 
		result = Number(fromValue)-273;				 
		lblResult.value =  result;
	}
        else{
		lblResult.value =  Number(fromValue);
	}
        
        var values = $("#myform").serialize(); 
            $.ajax({
                url: "Temperature_to_DB.php",
                type: "POST",
                data: values
                });
}

</script>
</html>




