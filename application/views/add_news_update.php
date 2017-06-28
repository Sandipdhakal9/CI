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
<title>Untitled Page</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/add_news_update.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:970px;height:521px;z-index:2;">
<img src="<?PHP echo base_url();?>Assets/images/delete Vehicle.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:3;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:4;">Add Latest News Here</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard;return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:5;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:6;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:41px;top:127px;width:867px;height:266px;z-index:7;">
<form   action="<?php echo base_url();?>Vehicle_ctrl/addNewsUpdate" method="post">
<input type="submit" id="Button1" name="btnAdd" value="Add" style="position:absolute;left:638px;top:205px;width:219px;height:61px;z-index:0;">
<input type="text" id="Editbox1" style="position:absolute;left:0px;top:0px;width:857px;height:195px;line-height:195px;z-index:1;" name="txtNews" value="" autofocus spellcheck="false">
</form>
</div>
</div>
</body>
</html>