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
<title>Vehicle Schedule</title>
<link href="TransportFare.css" rel="stylesheet">
<link href="vehicle_schedule.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:8px;top:0px;width:1024px;height:926px;filter:alpha(opacity=20);opacity:0.20;z-index:0;">
<img src="images/Schedule.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:1;">
<a href="./index.html"><img src="images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='./dashboard.html';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:2;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:3;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Text1" style="position:absolute;left:184px;top:0px;width:494px;height:42px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:37px;">Vehicle Schedule Information</span></div>
<div id="wb_Text3" style="position:absolute;left:0px;top:155px;width:274px;height:49px;z-index:5;">
<span style="color:#000000;font-family:Arial;font-size:43px;">Vehicle Name</span></div>
<div id="wb_Text2" style="position:absolute;left:306px;top:155px;width:305px;height:49px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:43px;">Departure Time</span></div>
<div id="wb_Text4" style="position:absolute;left:631px;top:155px;width:239px;height:49px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:43px;">Arrival Time</span></div>
<label for="" id="Label1" style="position:absolute;left:669px;top:89px;width:193px;height:33px;line-height:33px;z-index:8;">Date Today</label>
<div id="wb_Text5" style="position:absolute;left:886px;top:155px;width:267px;height:49px;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:43px;">Station Name</span></div>
</div>
</body>
</html>