<?php
   include( "menu.php" );
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body class="content7">
    <div>
        <form name="myform7" id="myform7">
            <h2><img src="time.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Time Conversion</h2>
  <table align="center">
	<tr>
		<td>
		<input type="number" min="1" onkeypress="return event.charCode >= 48" class="inputs" name="value7" id="value7" value="0">
			<select name="from7" id="from7" class="selects">
				<option value="">From Time Unit</option>
				<option value="Year">Year</option>
				<option value="Month">Month</option>
				<option value="Day">Day</option>
				<option value="Hour">Hour</option>
				<option value="Minute">Minute</option>
				<option value="Second">Second</option>
				<option value="Millisecond">Millisecond</option>
			</select>
		</td>
		<td>
			<img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;"/>
		</td>
		<td>
		<input type="text" name="result7" id="result7" class="inputs" value="—" readonly/>
			<select name="to7" id="to7" class="selects">
				<option value="">From Time Unit</option>
				<option value="Year">Year</option>
				<option value="Month">Month</option>
				<option value="Day">Day </option>
				<option value="Hour">Hour </option>
				<option value="Minute">Minute</option>
				<option value="Second">Second</option>
				<option value="Millisecond">Millisecond</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
  </table>
        </form>

<input type="button" name="button7" id="button7" onclick="clicked()" class="button" value="Convert"/>
<input type="button" onclick="reset()" class="button2" value="Reset"/>
</div>
<br>
<div style="float: left;">
    <table align="center" style="margin-left: 505px; color: black; background-image: linear-gradient(#dcdc00,#ff7500);" border="1" rules="none">
        <h2 style="margin-left: 495px; color: black;">According to Minute:</h2>
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
            <td>0.01667 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Minute &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>1 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Second &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>60 &nbsp;</td>
        </tr>
        
        <tr>
            <td>&nbsp; Millisecond &nbsp;</td>
            <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
            <td>60000 &nbsp;</td>
        </tr>
    </table>
</div>
<br><br><br><br>
        <div style="margin-right: 300px;">
            <form name="showform7" id="showform7" action="Time_Records.php" method="POST">
                <label style="color: black;">From Unit:</label>
                <input type="text" name="showfrom7" id="showfrom7" class="inputs"/>
                &nbsp; &nbsp;

                <label style="color: black;">To Unit:</label>
                <input type="text" name="showto7" id="showto7" class="inputs"/>
                <br>
                <br>
                <input type="submit" name="show7" id="show7" class="button3" value="Show Previous Records"/>
            </form>
        </div>
</body>

<script>
function reset(){
	let fromValue = document.getElementById("value7");
	fromValue.value = 0;

	let selectFrom = document.getElementById("from7");
	selectFrom.options[0].selected = true;
	let selectTo = document.getElementById("to7");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result7");
	lblResult.value = "—";

}

function clicked(){

	let fromValue = document.getElementById("value7").value;

	let selectFrom = document.getElementById("from7");
	let from = selectFrom.options[selectFrom.selectedIndex].value;

	let selectTo = document.getElementById("to7");
	let to = selectTo.options[selectTo.selectedIndex].value;

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result7");
	let result = 0;

	if(from === "Year" && to === "Month"){
		result = Number(fromValue) * 12;
		lblResult.value =  result;
	} else if(from === "Year" && to === "Day"){	  
		result = Number(fromValue) * 365;
		lblResult.value =  result;
	} else if(from === "Year" && to === "Hour"){	  
		result = Number(fromValue) * 365 * 24;
		lblResult.value =  result;
	} else if(from === "Year" && to === "Minute"){	  
		result = Number(fromValue) * 365 * 24 * 60;
		lblResult.value =  result;
	} else if(from === "Year" && to === "Second"){	  
		result = Number(fromValue) * 365 * 24 * 60 * 60;
		lblResult.value =  result;
	} else if(from === "Year" && to === "Millisecond"){	  
		result = Number(fromValue) * 365 * 24 * 60 * 60 * 1000;
		lblResult.value =  result;
	} else if(from === "Month" && to === "Year"){
		result = Number(fromValue) / 12;
		lblResult.value =  result;
	} else if(from === "Month" && to === "Day"){	  
		result = Number(fromValue) * 30;
		lblResult.value =  result;
	} else if(from === "Month" && to === "Hour"){	  
		result = Number(fromValue) * 30 * 24;
		lblResult.value =  result;
	} else if(from === "Month" && to === "Minute"){	  
		result = Number(fromValue) * 30 * 24 * 60;
		lblResult.value =  result;
	} else if(from === "Month" && to === "Second"){	  
		result = Number(fromValue) * 30 * 24 * 60 * 60;
		lblResult.value =  result;
	} else if(from === "Month" && to === "Millisecond"){	  
		result = Number(fromValue) * 30 * 24 * 60 * 60 * 1000;
		lblResult.value =  result;
	} else if(from === "Day" && to === "Year"){
		result = Number(fromValue) / 365;
		lblResult.value =  result;
	} else if(from === "Day" && to === "Month"){	  
		result = Number(fromValue) / 30;
		lblResult.value =  result;
	} else if(from === "Day" && to === "Hour"){	  
		result = Number(fromValue) * 24;
		lblResult.value =  result;
	} else if(from === "Day" && to === "Minute"){	  
		result = Number(fromValue) * 24 * 60;
		lblResult.value =  result;
	} else if(from === "Day" && to === "Second"){	  
		result = Number(fromValue) * 24 * 60 * 60;
		lblResult.value =  result;
	} else if(from === "Day" && to === "Millisecond"){	  
		result = Number(fromValue) * 24 * 60 * 60 * 1000;
		lblResult.value =  result;
	} else if(from === "Hour" && to === "Year"){
		result = Number(fromValue) / (365 * 24);
		lblResult.value =  result;
	} else if(from === "Hour" && to === "Month"){	  
		result = Number(fromValue) / (30 * 24);
		lblResult.value =  result;
	} else if(from === "Hour" && to === "Day"){	  
		result = Number(fromValue) / 24;
		lblResult.value =  result;
	} else if(from === "Hour" && to === "Minute"){	  
		result = Number(fromValue) * 60;
		lblResult.value =  result;
	} else if(from === "Hour" && to === "Second"){	  
		result = Number(fromValue) * 60 * 60;
		lblResult.value =  result;
	} else if(from === "Hour" && to === "Millisecond"){	  
		result = Number(fromValue) * 60 * 60 * 1000;
		lblResult.value =  result;
	} else if(from === "Minute" && to === "Year"){
		result = Number(fromValue) / (365 * 24 * 60);
		lblResult.value =  result;
	} else if(from === "Minute" && to === "Month"){	  
		result = Number(fromValue) / (30 * 24 * 60);
		lblResult.value =  result;
	} else if(from === "Minute" && to === "Day"){	  
		result = Number(fromValue) / (24 * 60);
		lblResult.value =  result;
	} else if(from === "Minute" && to === "Hour"){	  
		result = Number(fromValue) / 60;
		lblResult.value =  result;
	} else if(from === "Minute" && to === "Second"){	  
		result = Number(fromValue) * 60 ;
		lblResult.value =  result;
	} else if(from === "Minute" && to === "Millisecond"){	  
		result = Number(fromValue) * 60 * 1000;
		lblResult.value =  result;
	} else if(from === "Second" && to === "Year"){
		result = Number(fromValue) / (365 * 24 * 60 * 60);
		lblResult.value =  result;
	} else if(from === "Second" && to === "Month"){	  
		result = Number(fromValue) / (30 * 24 * 60 * 60);
		lblResult.value =  result;
	} else if(from === "Second" && to === "Day"){	  
		result = Number(fromValue) / (24 * 60 * 60);
		lblResult.value =  result;
	} else if(from === "Second" && to === "Hour"){	  
		result = Number(fromValue) / (60 * 60);
		lblResult.value =  result;
	} else if(from === "Second" && to === "Minute"){	  
		result = Number(fromValue) / 60 ;
		lblResult.value =  result;
	} else if(from === "Second" && to === "Millisecond"){	  
		result = Number(fromValue) * 1000;
		lblResult.value =  result;
	}  else if(from === "Millisecond" && to === "Year"){
		result = Number(fromValue) / (365 * 24 * 60 * 60 * 1000);
		lblResult.value =  result;
	} else if(from === "Millisecond" && to === "Month"){	  
		result = Number(fromValue) / (30 * 24 * 60 * 60 * 1000);
		lblResult.value =  result;
	} else if(from === "Millisecond" && to === "Day"){	  
		result = Number(fromValue) / (24 * 60 * 60 * 1000);
		lblResult.value =  result;
	} else if(from === "Millisecond" && to === "Hour"){	  
		result = Number(fromValue) / (60 * 60 * 1000);
		lblResult.value =  result;
	} else if(from === "Millisecond" && to === "Minute"){	  
		result = Number(fromValue) / (60 * 1000);
		lblResult.value =  result;
	} else if(from === "Millisecond" && to === "Second"){	  
		result = Number(fromValue) / 1000;
		lblResult.value =  result;
	} else{
		lblResult.value =  Number(fromValue);
	}
        
        var values = $("#myform7").serialize(); 
            $.ajax({
                url: "Time_to_DB.php",
                type: "POST",
                data: values
                });
}

</script>
</html>



