<?php
echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Converter</title>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.button {
  background-color: #000;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button:hover {
  background-color: #00c800;
}

.button2 {
  background-color: #000;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button2:hover {
  background-color: #e00000;
}

.button3 {
  background-color: #000;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button3:hover {
  background-color: #3232ff;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 25px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #fff;
  color: black;
}

/* Style the content */
.maincontent {
  background-color: #0ba;
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content1 {
  background-image: radial-gradient(#dcdc00,#c80000);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content2 {
  background-image: linear-gradient(#00a1e9, #002ce9);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content3 {
  background-image: linear-gradient(#002ce9, #002c75);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content4 {
  background-image: linear-gradient(#002c75, #7f00ff);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content5 {
  background-image: linear-gradient(#5f75a3, #5f758a, #5f756e);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content6 {
  background-image: linear-gradient(#ffaf4b,#ce754b);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content7 {
  background-image: radial-gradient(#6ba15d,#6ba18d,#6ba1be);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.content8 {
  background-image: radial-gradient(#00ce8a, #00a8ac);
  background-attachment: fixed;
  padding: 0px;
  align:center; 
  text-align:center;
}

.selects {
  width: 250px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #e1e1e1;
  text-align-last: center;
  box-shadow: inset 0px 0px 10px rgba(0,0,0,0.75);
}

.inputs {
  width:125px;
  text-align: center;
  border-radius: 10px;
  background-color: #d7d7fa;
  box-shadow: inset 0px 0px 10px rgba(0,0,0,0.5);
  font-weight: bold;
}

.labels {
  font-weight: bold; 
}

</style>
</head>
<body style=\"text-align:center\">

<div class=\"topnav\">
  <a href=\"index.php\">Main Page</a>
  <a href=\"Temperature.php\">Temperature</a>
  <a href=\"Length.php\">Length</a>
  <a href=\"Area.php\">Area</a>
  <a href=\"Volume.php\">Volume</a>
  <a href=\"NumberBases.php\">Number Bases</a>
  <a href=\"Weight.php\">Weight</a>
  <a href=\"Time.php\">Time</a>
  <a href=\"Money.php\">Money</a>
  <a href=\"RGB_Hex.php\">RGB - Hex</a>
</div>

<script>
let current = 0;
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href === document.URL) {
        current = i;
    break;
    }
}
document.links[current].style.backgroundColor='#ddd';
document.links[current].style.color='red';
</script>
";
?>