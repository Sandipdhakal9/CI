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
<title>Update Schedule</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/update_schedule.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1024px;height:1002px;filter:alpha(opacity=20);opacity:0.20;z-index:11;">
<img src="<?PHP echo base_url();?>Assets/images/Schedule.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:12;">
<a href="<?PHP echo base_url();?>Redirect/index"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:13;">Update Vehicle Schedule</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:14;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:33px;z-index:15;">
<form name="logoutform" method="post" action="<?PHP echo base_url();?>User_ctrl/adminDashboad" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:188px;top:128px;width:656px;height:831px;z-index:16;">
<form name="Form1" method="post" action="<?PHP echo base_url();?>Vehicle_ctrl/updateSchedule" id="Form1">
<input type="submit" id="Button1" name="Update Schedule" value="Update Schedule" style="position:absolute;left:239px;top:771px;width:260px;height:60px;z-index:0;" tabindex="5">
<label for="" id="Label1" style="position:absolute;left:0px;top:223px;width:209px;height:46px;line-height:46px;z-index:1;">Vehicle ID</label>
<select name="cmbRouteId" size="1" id="Combobox1" style="position:absolute;left:321px;top:114px;width:335px;height:54px;z-index:2;">



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
<select name="cmbVehicleId" size="1" id="Combobox2" style="position:absolute;left:321px;top:223px;width:335px;height:56px;z-index:3;">


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
<label for="" id="Label5" style="position:absolute;left:0px;top:114px;width:209px;height:46px;line-height:46px;z-index:4;">Route ID</label>
<label for="" id="Label2" style="position:absolute;left:0px;top:0px;width:209px;height:46px;line-height:46px;z-index:5;">Schedule ID</label>

<?php
// if($fdetails->num_rows()>0){
    foreach ($sdetails as $sdata) {
      ?>

 <!-- hidden field -->
 <input type="hidden" name="id" value="<?php echo $sdata->id;?>">



<input type="text" id="Editbox1" style="position:absolute;left:321px;top:0px;width:325px;height:44px;line-height:44px;z-index:6;" name="txtScheduleId" value="<?php echo $sdata->schedule_id;?>" tabindex="3" spellcheck="false" placeholder="eg: SCHW3PM">
<label for="" id="Label8" style="position:absolute;left:0px;top:615px;width:250px;height:46px;line-height:46px;z-index:7;">Date of Schedule</label>
<label for="" id="Label3" style="position:absolute;left:0px;top:353px;width:228px;height:46px;line-height:46px;z-index:8;">Departure Time</label>
<label for="" id="Label6" style="position:absolute;left:0px;top:492px;width:218px;height:46px;line-height:46px;z-index:9;">Arrival Time</label>
<input type="date" id="Editbox5" style="position:absolute;left:321px;top:615px;width:325px;height:44px;line-height:44px;z-index:10;" name="txtDate" value="<?php echo $sdata->date;?>" tabindex="3" spellcheck="false" placeholder="eg: 2017/01/01">



<input type="time" id="Editbox4" style="position:absolute;left:310px;top:490px;width:325px;height:44px;line-height:44px;z-index:17;" name="txtArrivalTime" value="<?php echo $sdata->arrival_time;?>" tabindex="3" spellcheck="false" placeholder="09:00:00">
<input type="time" id="Editbox2" style="position:absolute;left:310px;top:351px;width:325px;height:44px;line-height:44px;z-index:18;" name="txtDepartureTime" value="<?php echo $sdata->departure_time;?>" tabindex="3" spellcheck="false" placeholder="05:00:00">


<?php
  }
// }
?> 

</form>
</div>


</div>
</body>
</html>