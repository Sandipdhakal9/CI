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
<title>Search Info</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/search.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1053px;height:865px;z-index:0;">
<img src="<?PHP echo base_url();?>Assets/images/Search.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:1;">
<a href="./index.html"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/userDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:2;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:3;">
<form name="logoutform" method="post" action="<?php echo base_url(); ?>login" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<label for="" id="Label1" style="position:absolute;left:16px;top:164px;width:337px;height:40px;line-height:40px;z-index:4;">Enter Vehicle Name</label>
<input type="text" id="Editbox1" style="position:absolute;left:390px;top:164px;width:323px;height:38px;line-height:38px;z-index:5;" name="txtSearch" value="" spellcheck="false" placeholder="e.g. Sajha Bus">
<input type="submit" id="Button1" name="btnSearch" value="Search" style="position:absolute;left:760px;top:164px;width:182px;height:49px;z-index:6;">
<div id="wb_Heading1" style="position:absolute;left:200px;top:0px;width:461px;height:53px;text-align:center;z-index:7;">
<h1 id="Heading1">Search Vehicle Info</h1></div>
</div>
</body>
</html>