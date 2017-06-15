<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>TransportFare</title>
<link href="TransportFare.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wb.slideshow.min.js"></script>
<script>
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 6000,
      type: 'sequence',
      effect: 'drop',
      direction: 'right',
      pagination: false,
      effectlength: 3000
   });
});
</script>
</head>
<body>
<div id="container">
<div id="Layer2" style="position:absolute;text-align:left;left:3px;top:102px;width:796px;height:295px;z-index:2;">
</div>
<div id="wb_Image2" style="position:absolute;left:0px;top:103px;width:799px;height:311px;z-index:3;">
<img src="../Assets/images/Transport Fare Nepal.png" id="Image2" alt=""></div>
<div id="wb_Text1" style="position:absolute;left:1px;top:417px;width:796px;height:212px;text-align:justify;z-index:4;">
<span style="color:#000000;font-family:'Lucida Sans Unicode';font-size:43px;">Welcome to Transport Fare Nepal. Here You will find any kind of Information related with Vehicles and its Fare inside the Routes of Nepal.</span></div>
<div id="SlideShow1" style="position:absolute;left:0px;top:102px;width:799px;height:315px;z-index:5;">
<img class="image" src="../Assets/images/Transport_Fare_Nepal.png" alt="" title="">
<img class="image" src="../Assets/images/Mahanagar yatayat.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/Nepal Yatayat.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/Sajha Yatayat.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/Bus Nepal.JPG" style="display:none;" alt="" title="">
<img class="image" src="images/Micro Bus.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/Taxi.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/Tempo Nepal.jpg" style="display:none;" alt="" title="">
</div>
</div>
<div id="Layer1" style="position:fixed;text-align:center;left:0;top:0;right:0;height:103px;z-index:6;">
<div id="Layer1_Container" style="width:900px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:0;">
<a href="./index.html"><img src="images/Untitled design.png" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:176px;top:44px;width:623px;height:30px;z-index:1;">
<ul>
<li class="firstmain"><a href="#" target="_self">Home</a>
</li>
<li><a href="./signUp.html" target="_blank">Sign&nbsp;Up</a>
</li>
<li><a href="./login.html" target="_blank">Login</a>
</li>
<li><a href="#" target="_self">Features</a>
</li>
<li><a href="#" target="_self">About&nbsp;Us</a>
</li>
</ul>
</div>
</div>
</div>
</body>
</html>