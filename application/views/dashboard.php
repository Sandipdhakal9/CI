<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
  // unset($_SESSION['user_id']);

   exit;
}
$uname=$_SESSION['username'];
//$uid=$_SESSION['uid'];


?>
<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>Dashboard</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/dashboard.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:12px;width:896px;height:739px;z-index:0;">
<img src="<?PHP echo base_url();?>Assets/images/Naturally Nepal  Once is not enough by a7madbina.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:6px;width:176px;height:103px;z-index:1;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label1" style="position:absolute;left:556px;top:6px;width:332px;height:58px;line-height:58px;z-index:2;">Welcome <?php echo "<b>"."$uname"."</b>";?></label>
<input type="submit" id="Button1" onclick="window.location.href='<?PHP echo base_url();?>User_ctrl/getUserdata';return false;" name="btnUpdateProfile" value="Update Profile" style="position:absolute;left:686px;top:72px;width:210px;height:37px;z-index:3;">
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Vehicle_ctrl/viewFare';return false;" name="" value="View Fare Details" style="position:absolute;left:0px;top:310px;width:425px;height:60px;z-index:4;">
<input type="submit" id="Button3" onclick="window.location.href='<?PHP echo base_url();?>Vehicle_ctrl/viewRoute';return false;" name="" value="Browse Vehicle Routes" style="position:absolute;left:0px;top:439px;width:425px;height:60px;z-index:5;">
<input type="submit" id="Button4" onclick="window.location.href='<?php echo base_url();?>Vehicle_ctrl/getSearchDetail';return false;" name="Search Vehicle" value="Search Details" style="position:absolute;left:471px;top:267px;width:425px;height:55px;z-index:6;">
<input type="submit" id="Button5" onclick="window.location.href='<?PHP echo base_url();?>Vehicle_ctrl/rentVehicle';return false;" name="RentVehilce" value="Rent Vehicle" style="position:absolute;left:471px;top:398px;width:425px;height:60px;z-index:7;">
<input type="submit" id="Button6" onclick="window.location.href='<?PHP echo base_url();?>Vehicle_ctrl/viewSchedule';return false;" name="Vehicle Station And Schedule" value="Vehicle Station And Schedule" style="position:absolute;left:351px;top:532px;width:545px;height:60px;z-index:8;">
<input type="submit" id="Button7" onclick="window.location.href='<?PHP echo base_url();?>Vehicle_ctrl/viewNews';return false;" name="News" value="News And Updates" style="position:absolute;left:0px;top:617px;width:425px;height:60px;z-index:9;">
<label for="" id="Label2" style="position:absolute;left:35px;top:180px;width:818px;height:44px;line-height:44px;z-index:10;">Dear User, Please Choose Provided Options below :)</label>
<div id="wb_Image3" style="position:absolute;left:306px;top:12px;width:227px;height:157px;z-index:11;">
<img src="<?PHP echo base_url();?>Assets/images/nepal-flag-animation.gif" id="Image3" alt=""></div>
<div id="wb_Logout1" style="position:absolute;left:560px;top:72px;width:124px;height:32px;z-index:12;">
<form name="logoutform" method="post" action="<?php echo base_url(); ?>Redirect/login" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
</div>
</body>
</html>