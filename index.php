<!DOCTYPE html>
<html><head>
<title>Figma</title>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quintessential|Roboto" rel="stylesheet"> 
<style type="text/css">
body{
background-image: url("./bg.jpg");
position: absolute;
background-size: 1300px 800px;


}
.topic{

position: absolute;


     

font-family: 'Quintessential', cursive;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 24px;

color: #000000;
}
.time{

text-align: center;

font-family: 'Roboto', sans-serif;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 36px;
padding-top: 250px;
padding-bottom: 0px;
padding-left: 550px;

color: #333333;
}
.date{
position: absolute;
width: 154px;
height: 52px;
padding-top: 0px;

font-family: 'Roboto';
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 24px;

color: #333333;
}


</style>

</head>
<body>


	<div class="topic">
		
<p>Hng internship 4.0</p>
	</div>
	
	<div class ="time">
 <?php

echo " " . date("h:i:a");
?> 

<div class ="date">
 <?php
echo " " . date("d.m.Y") ;
?> 
	</div>
</body>
</html>
