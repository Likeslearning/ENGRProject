<?php
   include("menu.php");
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div>
            <form name="myform9" id="myform9">
                <h2><img src="RGB.png" style="width:70px; height:70px; image-rendering: -webkit-optimize-contrast;"/>
                    &nbsp; RGB - Hexadecimal Conversion</h2>
          <table align="center">
                <tr>
                        <td>
                            <input type="text" class="inputs" name="value9" id="value9" value="0"/>
                                <select name="from9" id="from9" class="selects">
                                    <option value="">From Option</option>
                                    <option value="RGB">RGB</option>
                                    <option value="Hexadecimal">Hexadecimal</option>
                                </select>
                        </td>
                        
                        <td>
                            <img src="right_arrow.png" style="width: 60px; image-rendering: -webkit-optimize-contrast;" onclick="change()"/>
                        </td>
                        
                        <td>
                            <input type="text" name="result9" id="result9" class="inputs" value="—" readonly/>
                                <select name="to9" id="to9" class="selects">
                                    <option value="">To Option</option>
                                    <option value="RGB">RGB</option>
                                    <option value="Hexadecimal">Hexadecimal</option>
                                </select>
                        </td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                </tr>
          </table>
            </form>
            <input type="button" name="button9" id="button9" onclick="calculate()" class="button" value="Convert"/>
            <input type="button" onclick="reset()" class="button2" value="Reset"/>
        </div>
    <br><br>
        <div style="float: left;">
            <table align="center" style="margin-left: 500px; color: black;" border="1" rules="none">
                <h2 style="margin-left: 485px; color: black;">Some Main Colors:</h2>
                <tr>
                    <td>&nbsp; Black &nbsp;</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>#000000 &nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp; White &nbsp;</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>#ffffff &nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp; Red &nbsp;</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>#ff0000 &nbsp;</td>
                </tr>
                
                <tr>
                    <td>&nbsp; Green &nbsp;</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>#00ff00 &nbsp;</td>
                </tr> 
                
                <tr>
                    <td>&nbsp; Blue &nbsp;</td>
                    <td><img src="right_arrow.png" style="width: 30px; height: 30px; image-rendering: -webkit-optimize-contrast;" /> &nbsp;</td>
                    <td>#0000ff &nbsp;</td>
                </tr>
            </table>
        </div>

        <div style="margin-right: 300px;">
            <form name="showform9" id="showform9" action="RGB_HEX_Records.php" method="POST">
                <table align="center">
                    <h2 style="color: black;">Query Previous Records:</h2>
                    <tr>
                        <td>
                            <label style="color: black;">From Unit:</label>
                            <select name="showfrom9" id="showfrom9" class="selects">
                                <option value="">To Option</option>
                                <option value="RGB">RGB</option>
                                <option value="Hexadecimal">Hexadecimal</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 20px;"></tr>
                    <tr>
                        <td>
                            <label style="color: black;">&nbsp; &nbsp; To Unit:</label>
                            <select name="showto9" id="showto9" class="selects">
                                <option value="">To Option</option>
                                <option value="RGB">RGB</option>
                                <option value="Hexadecimal">Hexadecimal</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 35px;"></tr>
                    <tr>
                        <td> &emsp; &emsp;
                            <input type="submit" name="show9" id="show9" class="button3" value="Show Previous Records"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>

<script>
function reset(){
	let fromValue = document.getElementById("value9");
	fromValue.value = 0;

	let selectFrom = document.getElementById("from9");
	selectFrom.options[0].selected = true;

	let selectTo = document.getElementById("to9");
	selectTo.options[0].selected = true;

	let lblResult = document.getElementById("result9");
	lblResult.value = "—";
        
        let showFrom = document.getElementById("showfrom9");
	showFrom.value = "";
        
        let showTo = document.getElementById("showto9");
	showTo.value = "";
        
        document.body.style.backgroundColor = "white";
}

function change(){

	let selectFrom = document.getElementById("from9");
	let selectTo = document.getElementById("to9");
	
        let from = selectFrom.options[selectFrom.selectedIndex].value;
        let to = selectTo.options[selectTo.selectedIndex].value;
        
        selectFrom.value = to;
        selectTo.value = from;
}

function calculate(){

	let fromValue = document.getElementById("value9").value;
        fromValue = fromValue.trim();

	let selectFrom = document.getElementById("from9");
	let from = selectFrom.options[selectFrom.selectedIndex].value;

	let selectTo = document.getElementById("to9");
	let to = selectTo.options[selectTo.selectedIndex].value;

	if(from === "" || to === ""){
		alert("Please select both units.");
		return;
	}

	let lblResult = document.getElementById("result9");
	let result = 0;
	
        if(from === "RGB" && to === "Hexadecimal") {
            colors = fromValue.split(",");
            var red = RGB_to_HEX(colors[0]);
            var green = RGB_to_HEX(colors[1]);
            var blue = RGB_to_HEX(colors[2]);
            hexadecimal_value = "#"+red+green+blue;
            
            lblResult.value =  hexadecimal_value;
            document.body.style.backgroundColor = hexadecimal_value;
        }
        
        else if(from === "Hexadecimal" && to === "RGB") {
            var RGB_to_Hex = fromValue.match(/.{1,2}/g);
            var RGB_value = [parseInt(RGB_to_Hex[0], 16),
                        parseInt(RGB_to_Hex[1], 16),
                        parseInt(RGB_to_Hex[2], 16)];
            
            lblResult.value =  "("+RGB_value+")";
            document.body.style.backgroundColor = "#"+fromValue;
        }
        
        else {
            lblResult.value =  fromValue;
        }
        
        var values = $("#myform9").serialize(); 
            $.ajax({
                url: "RGB_HEX_to_DB.php",
                type: "POST",
                data: values
                });
}

function RGB_to_HEX(rgb) { 
    var hex = Number(rgb).toString(16);
    
    if(hex.length < 2) {
        hex = "0" + hex;
    }
    
    return hex;
}

</script>
</html>