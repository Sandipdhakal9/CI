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
<link href="<?PHP echo base_url();?>Assets/CSS/update_owner.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1006px;height:938px;z-index:6;">
<img src="<?PHP echo base_url();?>Assets/images/vehicle_owner.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:7;">
<a href="<?PHP echo base_url();?>Redirect/index"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:8;">Update Owner Details Here</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:9;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:10;">
<form name="logoutform" method="post" action="<?PHP echo base_url();?>User_ctrl/logout" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:222px;top:88px;width:592px;height:474px;z-index:11;">
<form name="Form1" method="post" action="<?php echo base_url();?>Vehicle_ctrl/updateOwner"  id="Form1">
<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:209px;height:46px;line-height:46px;z-index:0;">Vehicle ID</label>
<label for="" id="Label2" style="position:absolute;left:0px;top:131px;width:209px;height:46px;line-height:46px;z-index:1;">Owner Name</label>


<?php
// if($fdetails->num_rows()>0){
    foreach ($odetails as $odata) {
      ?>

 <!-- hidden field -->
 <input type="hidden" name="id" value="<?php echo $odata->owner_id;?>">




<input type="text" id="Editbox1" style="position:absolute;left:240px;top:131px;width:263px;height:44px;line-height:44px;z-index:2;" name="txtOwnerName" value="<?php echo $odata->full_name;?>" tabindex="3" spellcheck="false">
<input type="submit" id="Button1" name="Update Owner" value="Update Owner" style="position:absolute;left:217px;top:373px;width:226px;height:60px;z-index:3;" tabindex="5">
<label for="" id="Label3" style="position:absolute;left:0px;top:257px;width:221px;height:46px;line-height:46px;z-index:4;">Phone Number</label>
<input type="text" id="Editbox3" style="position:absolute;left:240px;top:257px;width:263px;height:44px;line-height:44px;z-index:5;" name="txtPhoneNumber" value="<?php echo $odata->phone_number;?>" tabindex="3" spellcheck="false">

 <?php
  }
// }
?> 



<select name="cmbVehicleId" size="1" id="Combobox1" style="position:absolute;left:242px;top:1px;width:273px;height:58px;z-index:12;">



	 <?php
				
    // if($vid->num_rows()>0){
	foreach($vid->result() as $rowid){
		?>

	
	<option style="font-size:25px;" ><?php echo $rowid->vehicle_id;?></option>



	<?php
	// }
}
	?>




</select>





</form>
</div>

</div>
</body>
</html>