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
<link href="<?PHP echo base_url();?>Assets/CSS/add_fare.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:970px;height:920px;z-index:15;">
<img src="<?PHP echo base_url();?>Assets/images/Fare Information.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:16;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:17;">Add Vehicle Fare Here</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:18;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:33px;z-index:19;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:229px;top:103px;width:513px;height:780px;z-index:20;">
<form name="Form1" method="post" action="<?php echo base_url();?>Vehicle_ctrl/getVehicleRoute" enctype="text/plain" id="Form1">
<label for="" id="Label2" style="position:absolute;left:0px;top:2px;width:209px;height:46px;line-height:46px;z-index:0;">Fare ID</label>
<input type="text" id="Editbox2" style="position:absolute;left:240px;top:2px;width:263px;height:44px;line-height:44px;z-index:1;" name="txtFareId" value="" tabindex="2" autofocus spellcheck="false" placeholder="eg: FR2">
<input type="submit" id="Button1" name="Add Fare" value="Add Fare" style="position:absolute;left:253px;top:720px;width:178px;height:60px;z-index:2;" tabindex="5">
<label for="" id="Label1" style="position:absolute;left:0px;top:86px;width:209px;height:46px;line-height:46px;z-index:3;">Vehicle ID</label>
<select name="cmbVehicleId" size="1" id="Combobox2" style="position:absolute;left:240px;top:84px;width:273px;height:58px;z-index:4;">



<?php if(count($get)):?>
								
					<?php foreach($get as $vr):?>
					<option value="<?php echo $vr->vehicle_id;?>" > <?php echo $vr->vehicle_id;?> </option>

										
					<?php endforeach;?>
									
					<?php else :?>
								
					<?php endif;?>

</select>
<label for="" id="Label4" style="position:absolute;left:0px;top:617px;width:209px;height:46px;line-height:46px;z-index:5;">Student Fare</label>
<label for="" id="Label5" style="position:absolute;left:0px;top:183px;width:209px;height:46px;line-height:46px;z-index:6;">Route ID</label>
<select name="cmbRouteId" size="1" id="Combobox1" style="position:absolute;left:240px;top:183px;width:273px;height:58px;z-index:7;">
</select>
<input type="text" id="Editbox1" style="position:absolute;left:240px;top:506px;width:263px;height:44px;line-height:44px;z-index:8;" name="txtNormalFare" value="" tabindex="3" spellcheck="false" placeholder="eg: 15">
<input type="text" id="Editbox3" style="position:absolute;left:240px;top:617px;width:263px;height:44px;line-height:44px;z-index:9;" name="txtStudentFare" value="" tabindex="3" spellcheck="false" placeholder="eg: 10">
<label for="" id="Label6" style="position:absolute;left:0px;top:298px;width:209px;height:46px;line-height:46px;z-index:10;">From Place</label>
<label for="" id="Label8" style="position:absolute;left:0px;top:399px;width:209px;height:46px;line-height:46px;z-index:11;">To Place</label>
<label for="" id="Label3" style="position:absolute;left:0px;top:506px;width:209px;height:46px;line-height:46px;z-index:12;">Normal Fare</label>
<input type="text" id="Editbox4" style="position:absolute;left:240px;top:298px;width:263px;height:44px;line-height:44px;z-index:13;" name="txtFromPlace" value="" tabindex="3" spellcheck="false" placeholder="e.g: Kapan">
<input type="text" id="Editbox5" style="position:absolute;left:240px;top:399px;width:263px;height:44px;line-height:44px;z-index:14;" name="txtToPlace" value="" tabindex="3" spellcheck="false" placeholder="eg: Dillibazaar">
</form>
</div>
</div>
</body>
</html>