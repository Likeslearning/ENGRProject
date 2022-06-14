<?php
   include( "menu.php" );
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body class="content5">
    <div>
        <form name="myform5" id="myform5">
            <h2 style="color: white;"><img src="number base.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Number Base Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="text" class="inputs" name="value5" id="value5" value="0">
			<select name="from5" id="from5" class="selects5">
                            <option value="">From Number Base</option>
                            <option value="Binary">Binary</option>
                            <option value="Octal">Octal</option>
                            <option value="Decimal">Decimal</option>
                            <option value="Hexadecimal">Hexadecimal</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" onclick="change()"/>
		</td>
		<td>
		<input type="text" name="result5" id="result5" class="inputs" value="—" readonly/>
			<select name="to5" id="to5" class="selects5">
                            <option value="">From Number Base</option>
                            <option value="Binary">Binary</option>
                            <option value="Octal">Octal</option>
                            <option value="Decimal">Decimal </option>
                            <option value="Hexadecimal">Hexadecimal</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
  </table>
        </form>

<input type="button" name="button5" id="button5" onclick="clicked()" class="button" value="Convert"/>
<input type="button" onclick="reset()" class="button2" value="Reset"/>
</div>
<br><br>
<div style="float: left;">
    <table align="center" style="margin-left: 500px; color: black; background-image: linear-gradient(#ffa535,#ffd935);" border="1" rules="none">
        <h2 style="margin-left: 485px; color: white;">According to Decimal:</h2>
        
        <tr>
            <td>&nbsp; Hexadecimal &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>64 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Decimal &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>100 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Octal &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>144 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Binary &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1100100 &nbsp;</td>
        </tr>
    </table>
</div>

        <div style="margin-right: 300px;">
            <form name="showform5" id="showform5" action="NumberBases_Records.php" method="POST">
                <table align="center">
                    <h2 style="color: white;">Query Previous Records:</h2>
                    <tr>
                        <td>
                            <label style="color: white;">From Unit:</label>
                            <select name="showfrom5" id="showfrom5" class="selects5">
                                <option value="">From Number Base</option>
                                <option value="Binary">Binary</option>
                                <option value="Octal">Octal</option>
                                <option value="Decimal">Decimal </option>
                                <option value="Hexadecimal">Hexadecimal</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 20px;"></tr>
                    <tr>
                        <td>
                            <label style="color: white;">&nbsp; &nbsp; To Unit:</label>
                            <select name="showto5" id="showto5" class="selects5">
                                <option value="">From Number Base</option>
                                <option value="Binary">Binary</option>
                                <option value="Octal">Octal</option>
                                <option value="Decimal">Decimal </option>
                                <option value="Hexadecimal">Hexadecimal</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 35px;"></tr>
                    <tr>
                        <td> &emsp; &emsp;
                            <input type="submit" name="show5" id="show5" class="button3" value="Show Previous Records"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>

<script>
function reset(){
	let fromValue = document.getElementById("value5");
	fromValue.value = 0;

	let selectFrom = document.getElementById("from5");
	selectFrom.options[0].selected = true;
	let selectTo = document.getElementById("to5");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result5");
	lblResult.value = "—";

        let showFrom = document.getElementById("showfrom5");
	showFrom.value = "";
        
        let showTo = document.getElementById("showto5");
	showTo.value = "";
}

function change(){

	let selectFrom = document.getElementById("from5");
	let selectTo = document.getElementById("to5");
	
        let from = selectFrom.options[selectFrom.selectedIndex].value;
        let to = selectTo.options[selectTo.selectedIndex].value;
        
        selectFrom.value = to;
        selectTo.value = from;
}

function clicked(){

	let fromValue = document.getElementById("value5").value;
        fromValue = fromValue.trim();

	let selectFrom = document.getElementById("from5");
	let from = selectFrom.options[selectFrom.selectedIndex].value;

	let selectTo = document.getElementById("to5");
	let to = selectTo.options[selectTo.selectedIndex].value;

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result5");
	let result = 0;

	if(from === "Binary" && to === "Decimal"){
		result = parseInt(fromValue, 2); // parseInt fonksiyonu ile binary den decimale �evriliyor.
		lblResult.value =  result;
	} else if(from === "Binary" && to === "Octal"){	  
		result = parseInt(fromValue, 2);
		lblResult.value =  result.toString(8); // toString(8) decimal de�eri octale �eciriyor
	} else if(from === "Binary" && to === "Hexadecimal"){	  
		result = parseInt(fromValue, 2);
		lblResult.value =  result.toString(16);// toString(8) decimal de�eri hexadecimale �eciriyor
	} else if(from === "Decimal" && to === "Binary"){	  
		result = Number(fromValue).toString(2);
		lblResult.value =  result;
	} else if(from === "Decimal" && to === "Octal"){	  
		result = Number(fromValue).toString(8);
		lblResult.value =  result;
	} else if(from === "Decimal" && to === "Hexadecimal"){	  
		result = Number(fromValue).toString(16);
		lblResult.value =  result;
	} else if(from === "Octal" && to === "Binary"){	  
		result = parseInt(fromValue, 8);
		lblResult.value =  result.toString(2);
	} else if(from === "Octal" && to === "Decimal"){	  
		result = parseInt(fromValue, 8);
		lblResult.value =  result;
	} else if(from === "Octal" && to === "Hexadecimal"){	  
		result = parseInt(fromValue, 8);
		lblResult.value =  result.toString(16);
	} else if(from === "Hexadecimal" && to === "Binary"){	  
		result = parseInt(fromValue, 16);
		lblResult.value =  result.toString(2);
	} else if(from === "Hexadecimal" && to === "Decimal"){	  
		result = parseInt(fromValue, 16);
		lblResult.value =  result;
	} else if(from === "Hexadecimal" && to === "Octal"){	  
		result = parseInt(fromValue, 16);
		lblResult.value =  result.toString(8);
	} 
        else{
		lblResult.value =  fromValue;
	}
        
        var values = $("#myform5").serialize(); 
            $.ajax({
                url: "NumberBases_to_DB.php",
                type: "POST",
                data: values
                });
}

</script>
</html>




