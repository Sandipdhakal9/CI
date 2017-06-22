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
<title>News And Updates</title>
<link href="TransportFare.css" rel="stylesheet">
<link href="news_updates.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:970px;height:836px;filter:alpha(opacity=40);opacity:0.40;z-index:0;">
<img src="images/News.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:1;">
<a href="./index.html"><img src="images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='./dashboard.html';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:2;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:3;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Text1" style="position:absolute;left:217px;top:0px;width:432px;height:55px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:48px;">News And Updates</span></div>
<div id="wb_Text2" style="position:absolute;left:0px;top:137px;width:869px;height:132px;z-index:5;">
<span style="color:#F5F5F5;font-family:Arial;font-size:29px;">1. Info: Voli dheki Terai- Limbuwan banda gosana vayeko cha ra yo banda sabai area ma effective huney chaina..<br>Pradesh no.2 ra protesters dherai vako area matra effective hola.... Kathmandu lagayat ko area banda hoena.</span></div>
</div>
</body>
</html>