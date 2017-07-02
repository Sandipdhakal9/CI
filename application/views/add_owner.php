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
<title>Add Owner</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/add_owner.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1006px;height:938px;z-index:6;">
<img src="<?PHP echo base_url();?>Assets/images/vehicle_owner.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:7;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:8;">Add Vehicle Owner Details</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:9;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:10;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:222px;top:88px;width:592px;height:474px;z-index:11;">
<form name="Form1" method="post" action="<?PHP echo base_url();?>Vehicle_ctrl/addOwner"  id="Form1">
<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:209px;height:46px;line-height:46px;z-index:0;">Vehicle ID</label>
<label for="" id="Label2" style="position:absolute;left:0px;top:131px;width:209px;height:46px;line-height:46px;z-index:1;">Owner Name</label>
<input type="text" id="Editbox1" style="position:absolute;left:240px;top:131px;width:263px;height:44px;line-height:44px;z-index:2;" name="txtOwnerName" value="" tabindex="3" spellcheck="false">
<input type="submit" id="Button1" name="Add Owner" value="Add Owner" style="position:absolute;left:265px;top:372px;width:178px;height:60px;z-index:3;" tabindex="5">
<label for="" id="Label3" style="position:absolute;left:0px;top:257px;width:221px;height:46px;line-height:46px;z-index:4;">Phone Number</label>
<input type="text" id="Editbox3" style="position:absolute;left:240px;top:257px;width:263px;height:44px;line-height:44px;z-index:5;" name="txtPhoneNumber" value="" tabindex="3" spellcheck="false">

</div>
<select name="cmbVehicleId" size="1" id="Combobox1" style="position:absolute;left:462px;top:86px;width:273px;height:58px;z-index:12;">


<?php
				
    if($vhid->num_rows()>0){
	foreach($vhid->result() as $vid){
		?>

	
	<option style="font-size:25px;" ><?php echo $vid->vehicle_id;?></option>

	<?php
	}
}
	?>




</select>
</form>
</div>
</body>
</html>