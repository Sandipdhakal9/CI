<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
   unset($_SESSION['fullname']);
   header('Location: ./login.html');
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>Fare Information</title>
<link href="TransportFare.css" rel="stylesheet">
<link href="fare_info.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:891px;height:983px;filter:alpha(opacity=50);opacity:0.50;z-index:0;">
<img src="images/Fare Information.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:1;">
<a href="./index.html"><img src="images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='./dashboard.html';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:613px;top:0px;width:278px;height:41px;z-index:2;">
<div id="wb_Logout1" style="position:absolute;left:765px;top:41px;width:124px;height:32px;z-index:3;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Text1" style="position:absolute;left:200px;top:0px;width:386px;height:55px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:48px;">Fare Information</span></div>
<select name="cmbVehicle" size="1" id="Combobox1" style="position:absolute;left:282px;top:94px;width:271px;height:56px;z-index:5;">
<option selected>Select Vehicle</option>
</select>
<div id="wb_Text2" style="position:absolute;left:321px;top:199px;width:277px;height:49px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:43px;">Normal Fares</span></div>
<div id="wb_Text3" style="position:absolute;left:0px;top:199px;width:282px;height:49px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:43px;">Vehicle Name</span></div>
<div id="wb_Text4" style="position:absolute;left:636px;top:199px;width:255px;height:49px;z-index:8;">
<span style="color:#000000;font-family:Arial;font-size:43px;">Student Fare</span></div>
</div>
</body>
</html>