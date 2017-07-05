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
<meta charset="utf-8">
<title>Update Route</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/update_route.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:960px;height:980px;z-index:5;">
<img src="<?PHP echo base_url();?>Assets/images/Vehicle_Routes.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:6;">
<a href="<?PHP echo base_url();?>Redirect/index.php/"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:7;">Update Route Info</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:8;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:33px;z-index:9;">
<form name="logoutform" method="post" action="<?PHP echo base_url();?>User_ctrl/logout" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:188px;top:128px;width:656px;height:396px;z-index:10;">
<form name="Form1" method="post" action="<?PHP echo base_url();?>Vehicle_ctrl/updateRoute" id="Form1">


<?php
// if($fdetails->num_rows()>0){
    foreach ($rdetails as $rdata) {
      ?>



<input type="hidden" name="id" value="<?php echo $rdata->id;?>">

<input type="submit" id="Button1" name="Update Route" value="Update Route" style="position:absolute;left:268px;top:279px;width:201px;height:60px;z-index:0;" tabindex="5">
<label for="" id="Label5" style="position:absolute;left:0px;top:0px;width:209px;height:46px;line-height:46px;z-index:1;">Route ID</label>
<input type="text" id="Editbox1" style="position:absolute;left:321px;top:0px;width:325px;height:44px;line-height:44px;z-index:2;" name="txtRouteId" value="<?php echo $rdata->route_id;?>" tabindex="3" spellcheck="false" placeholder="eg: R5">
<input type="text" id="Editbox3" style="position:absolute;left:321px;top:124px;width:325px;height:44px;line-height:44px;z-index:3;" name="txtRoute" value="<?php echo $rdata->route;?>" tabindex="3" spellcheck="false" placeholder="eg: Bhaktapur to Gongabu">
<label for="" id="Label4" style="position:absolute;left:0px;top:124px;width:209px;height:46px;line-height:46px;z-index:4;">Route</label>



 <?php
  }
// }
?> 


</form>
</div>
</div>
</body>
</html>