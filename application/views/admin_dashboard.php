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
<title>Admin Dashboard</title>
<link href="TransportFare.css" rel="stylesheet">
<link href="admin_dashboard.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:1px;top:6px;width:896px;height:955px;z-index:0;">
<img src="images/Naturally Nepal  Once is not enough by a7madbina.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:1;">
<a href="./index.html"><img src="images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label1" style="position:absolute;left:556px;top:0px;width:332px;height:58px;line-height:58px;z-index:2;">Welcome Username</label>
<input type="submit" id="Button3" onclick="window.location.href='./delete_vehicle.html';return false;" name="Delete Vehicle" value="Delete" style="position:absolute;left:744px;top:283px;width:152px;height:60px;z-index:3;">
<input type="submit" id="Button5" onclick="window.location.href='./add_vehicle.html';return false;" name="Add Vehicle" value="Add" style="position:absolute;left:368px;top:283px;width:188px;height:60px;z-index:4;">
<input type="submit" id="Button7" onclick="window.location.href='./update_vehicle.html';return false;" name="Update Vehicle" value="Update" style="position:absolute;left:575px;top:283px;width:149px;height:60px;z-index:5;">
<label for="" id="Label2" style="position:absolute;left:36px;top:175px;width:818px;height:44px;line-height:44px;z-index:6;">Hello Admin :) What do you want to do?</label>
<div id="wb_Image3" style="position:absolute;left:306px;top:6px;width:227px;height:157px;z-index:7;">
<img src="images/nepal-flag-animation.gif" id="Image3" alt=""></div>
<div id="wb_Logout1" style="position:absolute;left:770px;top:67px;width:124px;height:32px;z-index:8;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Heading1" style="position:absolute;left:0px;top:290px;width:288px;height:53px;text-align:center;z-index:9;">
<h1 id="Heading1">Vehicle Info</h1></div>
<div id="wb_Heading2" style="position:absolute;left:0px;top:736px;width:288px;height:53px;text-align:center;z-index:10;">
<h1 id="Heading2">Owner Info</h1></div>
<div id="wb_Heading3" style="position:absolute;left:0px;top:521px;width:288px;height:53px;text-align:center;z-index:11;">
<h1 id="Heading3">Route Info</h1></div>
<div id="wb_Heading4" style="position:absolute;left:0px;top:625px;width:329px;height:53px;text-align:center;z-index:12;">
<h1 id="Heading4">Schedule Info</h1></div>
<div id="wb_Heading5" style="position:absolute;left:0px;top:860px;width:288px;height:53px;text-align:center;z-index:13;">
<h1 id="Heading5">Station Info</h1></div>
<div id="wb_Heading6" style="position:absolute;left:0px;top:406px;width:288px;height:53px;text-align:center;z-index:14;">
<h1 id="Heading6">Fare Info</h1></div>
<input type="submit" id="Button1" onclick="window.location.href='./add_fare.html';return false;" name="Add Fare" value="Add" style="position:absolute;left:368px;top:405px;width:188px;height:60px;z-index:15;">
<input type="submit" id="Button2" onclick="window.location.href='./update_fare.html';return false;" name="Update Fare" value="Update" style="position:absolute;left:575px;top:405px;width:149px;height:60px;z-index:16;">
<input type="submit" id="Button4" onclick="window.location.href='./delete_fare.html';return false;" name="Delete Fare" value="Delete" style="position:absolute;left:744px;top:402px;width:152px;height:60px;z-index:17;">
<input type="submit" id="Button6" onclick="window.location.href='./add_vehicle_route.html';return false;" name="Add Route" value="Add" style="position:absolute;left:368px;top:518px;width:188px;height:60px;z-index:18;">
<input type="submit" id="Button8" onclick="window.location.href='./update_vehicle_route.html';return false;" name="Update Route" value="Update" style="position:absolute;left:575px;top:518px;width:149px;height:60px;z-index:19;">
<input type="submit" id="Button9" onclick="window.location.href='./delete_vehicle_route.html';return false;" name="Delete Route" value="Delete" style="position:absolute;left:744px;top:518px;width:152px;height:60px;z-index:20;">
<input type="submit" id="Button10" onclick="window.location.href='./add_vehicle_schedule.html';return false;" name="Add Schedule" value="Add" style="position:absolute;left:368px;top:621px;width:188px;height:60px;z-index:21;">
<input type="submit" id="Button11" onclick="window.location.href='./update_vehicle_schedule.html';return false;" name="Update Schedule" value="Update" style="position:absolute;left:575px;top:621px;width:149px;height:60px;z-index:22;">
<input type="submit" id="Button12" onclick="window.location.href='./delete_vehicle_schedule.html';return false;" name="Delete Schedule" value="Delete" style="position:absolute;left:744px;top:621px;width:152px;height:60px;z-index:23;">
<input type="submit" id="Button13" onclick="window.location.href='./add_owner.html';return false;" name="Add Owner" value="Add" style="position:absolute;left:368px;top:732px;width:188px;height:60px;z-index:24;">
<input type="submit" id="Button14" onclick="window.location.href='./update_owner.html';return false;" name="Update Owner" value="Update" style="position:absolute;left:575px;top:732px;width:149px;height:60px;z-index:25;">
<input type="submit" id="Button15" onclick="window.location.href='./delete_owner.html';return false;" name="Delete Owner" value="Delete" style="position:absolute;left:744px;top:732px;width:152px;height:60px;z-index:26;">
<input type="submit" id="Button16" onclick="window.location.href='./add_vehicle_station.html';return false;" name="Add Station" value="Add" style="position:absolute;left:368px;top:856px;width:188px;height:60px;z-index:27;">
<input type="submit" id="Button17" onclick="window.location.href='./Update_vehicle_station.html';return false;" name="Update Station" value="Update" style="position:absolute;left:575px;top:856px;width:149px;height:60px;z-index:28;">
<input type="submit" id="Button18" onclick="window.location.href='./delete_vehicle_station.html';return false;" name="Delete Station" value="Delete" style="position:absolute;left:744px;top:856px;width:152px;height:60px;z-index:29;">
</div>
</body>
</html>