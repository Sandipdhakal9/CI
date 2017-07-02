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
<title>Add Vehicle</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/add_vehicle.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:970px;height:804px;filter:alpha(opacity=20);opacity:0.20;z-index:9;">
<img src="<?PHP echo base_url();?>Assets/images/add vehicle.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:10;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:11;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:12;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:13;">Add New Vehicle Details Here</label>
<div id="wb_Form1" style="position:absolute;left:192px;top:103px;width:513px;height:565px;z-index:14;">
<form name="Form1" method="post" action="<?PHP echo base_url();?>Vehicle_ctrl/addVehicle"  id="Form1">
<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:209px;height:46px;line-height:46px;z-index:0;">Vehicle ID</label>
<label for="" id="Label2" style="position:absolute;left:0px;top:131px;width:209px;height:46px;line-height:46px;z-index:1;">Vehicle Name</label>
<input type="text" id="Editbox1" style="position:absolute;left:240px;top:131px;width:263px;height:44px;line-height:44px;z-index:2;" name="txtVehicleName" value="" tabindex="3" spellcheck="false">
<input type="text" id="Editbox2" style="position:absolute;left:240px;top:0px;width:263px;height:44px;line-height:44px;z-index:3;" name="txtVehicleId" value="" tabindex="2" autofocus spellcheck="false">
<input type="submit" id="Button1" name="Add Vehicle" value="Add Vehicle" style="position:absolute;left:227px;top:478px;width:178px;height:60px;z-index:4;" tabindex="5">
<label for="" id="Label3" style="position:absolute;left:0px;top:352px;width:209px;height:46px;line-height:46px;z-index:5;">Vehicle Type</label>
<select name="cmbVehicleType" size="1" id="Combobox1" style="position:absolute;left:240px;top:352px;width:273px;height:54px;z-index:6;" tabindex="4">
<option value="Bus">Bus</option>
<option value="Micro">Micro</option>
<option value="Taxi">Taxi</option>
<option value="Tempo">Tempo</option>
</select>
<label for="" id="Label3" style="position:absolute;left:0px;top:239px;width:209px;height:46px;line-height:46px;z-index:7;">RouteID</label>
<select name="cmbRouteId" size="1" id="Combobox1" style="position:absolute;left:240px;top:239px;width:273px;height:54px;z-index:8;" tabindex="4">

 <?php
				
    if($routes->num_rows()>0){
	foreach($routes->result() as $r){
		?>

	
	<option style="font-size:25px;" ><?php echo $r->route_id;?></option>

	<?php
	}
}
	?>



</select>
</form>
</div>
</div>
</body>
</html>