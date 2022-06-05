<?php
   include( "menu.php" );
?>

<body class="content2">
    <div>
    <h2 style="color: white;"><img src="length.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
        &nbsp; Length Conversion</h2>
      <table align="center">
            <tr>
                    <td>
                    <input type="number" min="0" onkeypress="return event.charCode >= 48" class="inputs" name="value" id="value" value="0">
                            <select name="from" id="from" class="selects">
                                    <option value="">From Length Unit</option>
                                    <option value="km">Kilometer</option>
                                    <option value="hm">Hectometer</option>
                                    <option value="dam">Decameter</option>
                                    <option value="m">Meter</option>
                                    <option value="dm">Decimeter</option>
                                    <option value="cm">Centimeter</option>
                                    <option value="mm">Milimeter</option>
                                    <option value="ft">Feet</option>
                                    <option value="yd">Yard</option>
                                    <option value="mi">Mile</option>
                            </select>
                    </td>
                    <td>
                            <img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" />
                    </td>
                    <td>
                    <label id="result" class="labels" style="color:white;">—</label>
                            <select name="to" id="to" class="selects">
                                    <option value="">To Length Unit</option>
                                    <option value="km">Kilometer</option>
                                    <option value="hm">Hectometer</option>
                                    <option value="dam">Decameter</option>
                                    <option value="m">Meter</option>
                                    <option value="dm">Decimeter</option>
                                    <option value="cm">Centimeter</option>
                                    <option value="mm">Milimeter</option>
                                    <option value="ft">Feet</option>
                                    <option value="yd">Yard</option>
                                    <option value="mi">Mile</option>
                            </select>
                    </td>
            </tr>
            
      </table>
        <button onclick="clicked()" class="button">Convert</button>
        <button onclick="reset()" class="button2">Reset</button>
    </div>

<div>
    <table align="center" style="margin-left: 515px; color: white;" border="4" rules="none">
        <h2 style="margin-right: 285px; color: white;">According to Meter:</h2>
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
            <td>&nbsp; Milimeter &nbsp;</td>
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

	if(from === "km" && to === "mi"){
		result = Number(fromValue) * 0.62137;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "yd"){
		result = Number(fromValue) * 1093.61;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "ft"){
		result = Number(fromValue) * 3280.83;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "hm"){
		result = Number(fromValue) * 10;
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "dam"){	  
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "m"){		   
		result = Number(fromValue) * 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "dm"){	   
		result = Number(fromValue) * 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "cm"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "km" && to === "mm"){	   
		result = Number(fromValue) * 1000000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "mi"){
		result = Number(fromValue) * 0.062137;
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "yd"){
		result = Number(fromValue) * 109.361;
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "ft"){
		result = Number(fromValue) * 328.083;
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "km"){	  
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "dam"){	   
		result = Number(fromValue) * 10;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "m"){		   
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "dm"){	   
		result = Number(fromValue) * 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "cm"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "hm" && to === "mm"){	   
		result = Number(fromValue) * 100000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "mi"){
		result = Number(fromValue) * 0.0062137;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "yd"){
		result = Number(fromValue) * 10.9361;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "ft"){
		result = Number(fromValue) * 32.8083;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "km"){	  
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "hm"){	   
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "m"){		   
		result = Number(fromValue) * 10;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "dm"){	   
		result = Number(fromValue) * 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "cm"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dam" && to === "mm"){	   
		result = Number(fromValue) * 10000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "mi"){
		result = Number(fromValue) * 0.00062137;
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "yd"){
		result = Number(fromValue) * 1.09361;
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "ft"){
		result = Number(fromValue) * 3.28083;
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "km"){	  
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "hm"){	   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "dam"){		   
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "dm"){	   
		result = Number(fromValue) * 10;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "cm"){	   
		result = Number(fromValue) * 100;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "m" && to === "mm"){	   
		result = Number(fromValue) * 1000;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "mi"){
		result = Number(fromValue) * 0.000062137;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "yd"){
		result = Number(fromValue) * 0.109361;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "ft"){
		result = Number(fromValue) * 0.328083;
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "km"){	  
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "hm"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "dam"){		   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "m"){	   
		result = Number(fromValue) / 10;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "cm"){	   
		result = Number(fromValue) * 10;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "dm" && to === "mm"){	   
		result = Number(fromValue) * 100;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "mi"){
		result = Number(fromValue) * 0.0000062137;
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "yd"){
		result = Number(fromValue) * 0.0109361;
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "ft"){
		result = Number(fromValue) * 0.0328083;
		lblResult.innerHTML =  result;
	}
        else if(from === "cm" && to === "km"){	  
		result = Number(fromValue) / 100000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "hm"){	   
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "dam"){		   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "m"){	   
		result = Number(fromValue) / 100;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "dm"){	   
		result = Number(fromValue) / 10;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "mm"){	   
		result = Number(fromValue) * 10;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "cm" && to === "ft"){
		result = Number(fromValue) * 0.00328083;
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "mi"){
		result = Number(fromValue) * 0.00000062137;
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "yd"){
		result = Number(fromValue) * 0.00109361;
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "km"){	  
		result = Number(fromValue) / 1000000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "hm"){	   
		result = Number(fromValue) / 100000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "dam"){		   
		result = Number(fromValue) / 10000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "m"){	   
		result = Number(fromValue) / 1000;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "dm"){	   
		result = Number(fromValue) / 100;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mm" && to === "cm"){	   
		result = Number(fromValue) / 10;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "yd"){	  
		result = Number(fromValue) * 0.3333;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "mi"){	  
		result = Number(fromValue) * 0.00018;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "km"){	  
		result = Number(fromValue) / 3280.83;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "hm"){	   
		result = Number(fromValue) / 328.083;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "dam"){		   
		result = Number(fromValue) / 32.8083;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "m"){	   
		result = Number(fromValue) / 3.28083;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "dm"){	   
		result = Number(fromValue) / 0.328083;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "cm"){	   
		result = Number(fromValue) / 0.0328083;   
		lblResult.innerHTML =  result;
	} 
        else if(from === "ft" && to === "mm"){	   
		result = Number(fromValue) / 0.00328083;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "ft"){	  
		result = Number(fromValue) * 3;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "mi"){	  
		result = Number(fromValue) * 0.00056;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "km"){	  
		result = Number(fromValue) / 1093.613;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "hm"){	   
		result = Number(fromValue) / 109.361;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "dam"){		   
		result = Number(fromValue) / 10.9361;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "m"){	   
		result = Number(fromValue) / 1.09361;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "dm"){	   
		result = Number(fromValue) / 0.109361;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "cm"){	   
		result = Number(fromValue) / 0.0109361;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "yd" && to === "mm"){	   
		result = Number(fromValue) / 0.00109361;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "ft"){	  
		result = Number(fromValue) * 5280;		   
		lblResult.innerHTML =  result;
	}  
        else if(from === "mi" && to === "yd"){	  
		result = Number(fromValue) * 1760;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "km"){	  
		result = Number(fromValue) / 0.62137;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "hm"){	   
		result = Number(fromValue) /  0.062137;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "dam"){		   
		result = Number(fromValue) /  0.0062137;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "m"){	   
		result = Number(fromValue) /  0.00062137;		   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "dm"){	   
		result = Number(fromValue) /  0.000062137;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "cm"){	   
		result = Number(fromValue) /  0.0000062137;	   
		lblResult.innerHTML =  result;
	} 
        else if(from === "mi" && to === "mm"){	   
		result = Number(fromValue) /  0.00000062137;	   
		lblResult.innerHTML =  result;
	} 
        else{
		lblResult.innerHTML =  fromValue;
	}
}

</script>


