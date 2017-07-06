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
<link href="<?PHP echo base_url();?>Assets/CSS/update_fare.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:970px;height:1192px;filter:alpha(opacity=15);opacity:0.15;z-index:12;">
<img src="<?PHP echo base_url();?>Assets/images/Update Vehicle.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:13;">
<a href="<?PHP echo base_url();?>Redirect/index"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:14;">Update Vehicle Fare</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:15;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:16;">
<form name="logoutform" method="post" action="<?PHP echo base_url();?>User_ctrl/logout" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:196px;top:103px;width:597px;height:1016px;z-index:17;">
<form name="Form1" method="post" action="<?php echo base_url();?>Vehicle_ctrl/updateFare" method="post" id="Form1">
<label for="" id="Label3" style="position:absolute;left:0px;top:681px;width:217px;height:54px;line-height:54px;z-index:0;">Normal Fare</label>
<input type="submit" id="Button1" name="btnUpdate" value="Update" style="position:absolute;left:209px;top:950px;width:200px;height:66px;z-index:1;">
<label for="" id="Label4" style="position:absolute;left:0px;top:816px;width:217px;height:54px;line-height:54px;z-index:2;">Student Fare</label>
<select name="cmbRouteId" size="1" id="Combobox1" style="position:absolute;left:276px;top:124px;width:320px;height:62px;z-index:3;">


<?php
				
    if($rid->num_rows()>0){
	foreach($rid->result() as $rowid){
		?>

	
	<option style="font-size:25px;"><?php echo $rowid->route_id;?></option>

	<?php
	}
}
	?>


</select>
<label for="" id="Label6" style="position:absolute;left:0px;top:0px;width:217px;height:54px;line-height:54px;z-index:4;">Fare ID</label>
<label for="" id="Label5" style="position:absolute;left:0px;top:124px;width:217px;height:54px;line-height:54px;z-index:5;">Route ID</label>
<label for="" id="Label1" style="position:absolute;left:0px;top:259px;width:217px;height:54px;line-height:54px;z-index:6;">Vehicle ID</label>

<?php
// if($fdetails->num_rows()>0){
    foreach ($fdetails as $fdata) {
      ?>

 <!-- hidden field -->
 <input type="hidden" name="id" value="<?php echo $fdata->id;?>">

<input type="text" id="Editbox3" style="position:absolute;left:276px;top:0px;width:309px;height:52px;line-height:52px;z-index:7;" name="txtFareId" value="<?php echo $fdata->fare_id;?>" spellcheck="false">
<label for="" id="Label2" style="position:absolute;left:0px;top:415px;width:217px;height:54px;line-height:54px;z-index:8;">From Place</label>
<label for="" id="Label8" style="position:absolute;left:0px;top:563px;width:217px;height:54px;line-height:54px;z-index:9;">To Place</label>
<input type="text" id="Editbox1" style="position:absolute;left:277px;top:563px;width:309px;height:52px;line-height:52px;z-index:10;" name="txtToPlace" value="<?php echo $fdata->to_place;?>" spellcheck="false">


<input type="text" id="Editbox2" style="position:absolute;left:275px;top:415px;width:309px;height:52px;line-height:52px;z-index:18;" name="txtFromPlace" value="<?php echo $fdata->from_place;?>" spellcheck="false">
<input type="text" id="Editbox4" style="position:absolute;left:275px;top:680px;width:309px;height:52px;line-height:52px;z-index:19;" name="txtNormalFare" value="<?php echo $fdata->normal_fare;?>" spellcheck="false">
<input type="text" id="Editbox5" style="position:absolute;left:275px;top:819px;width:309px;height:52px;line-height:52px;z-index:20;" name="txtStudentFare" value="<?php echo $fdata->student_fare;?>" spellcheck="false">


 <?php
  }
// }
?> 

<select name="cmbVehicleId" size="1" id="Combobox4" style="position:absolute;left:276px;top:259px;width:320px;height:62px;z-index:11;">

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


 <!-- <?php
 // if($fdetails->num_rows()>0){
    foreach ($fdetails as $fdata) {
      ?>  -->

<!-- <input type="text" id="Editbox2" style="position:absolute;left:475px;top:518px;width:309px;height:52px;line-height:52px;z-index:18;" name="txtFromPlace" value="<?php echo $fdata->from_place;?>" spellcheck="false">
<input type="text" id="Editbox4" style="position:absolute;left:475px;top:784px;width:309px;height:52px;line-height:52px;z-index:19;" name="txtNormalFare" value="<?php echo $fdata->normal_fare;?>" spellcheck="false">
<input type="text" id="Editbox5" style="position:absolute;left:475px;top:919px;width:309px;height:52px;line-height:52px;z-index:20;" name="txtStudentFare" value="<?php echo $fdata->student_fare;?>" spellcheck="false"> -->



 <!--  <?php
  }
// }
?> 
 -->


</div>
</body>
</html>