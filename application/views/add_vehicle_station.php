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
<title> Add Vehicle Station</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/add_vehicle_station.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1024px;height:786px;filter:alpha(opacity=50);opacity:0.50;z-index:9;">
<img src="<?PHP echo base_url();?>Assets/images/Vehicle Station.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:10;">
<a href="./index.html"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:11;">Add Vehicle Station Details</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:12;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:13;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:392px;top:85px;width:592px;height:636px;z-index:14;">
<form name="Form1" method="post" action="<?PHP echo base_url();?>Vehicle_ctrl/addStation"  id="Form1">
<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:209px;height:46px;line-height:46px;z-index:0;">Vehicle ID</label>
<label for="" id="Label2" style="position:absolute;left:0px;top:131px;width:209px;height:46px;line-height:46px;z-index:1;">Station ID</label>
<input type="text" id="Editbox1" style="position:absolute;left:273px;top:131px;width:309px;height:44px;line-height:44px;z-index:2;" name="txtStationId" value="" tabindex="3" spellcheck="false" placeholder="eg: STR45">
<input type="submit" id="Button1" name="Add Station" value="Add Station" style="position:absolute;left:327px;top:548px;width:194px;height:60px;z-index:3;" tabindex="5">
<input type="text" id="Editbox2" style="position:absolute;left:273px;top:274px;width:309px;height:44px;line-height:44px;z-index:4;" name="txtStationName" value="" tabindex="3" spellcheck="false" placeholder="eg: Gongabu Buspark">
<label for="" id="Label4" style="position:absolute;left:0px;top:274px;width:221px;height:46px;line-height:46px;z-index:5;">Station Name</label>
<label for="" id="Label5" style="position:absolute;left:0px;top:399px;width:230px;height:46px;line-height:46px;z-index:6;">Station Location</label>
<input type="text" id="Editbox4" style="position:absolute;left:273px;top:399px;width:309px;height:44px;line-height:44px;z-index:7;" name="txtStationLocation" value="" tabindex="3" spellcheck="false" placeholder="eg: Gongabu,Kathmandu">
<select name="cmbVehicleId" size="1" id="Combobox1" style="position:absolute;left:273px;top:0px;width:319px;height:58px;z-index:8;">

<?php
				
    if($vid->num_rows()>0){
	foreach($vid->result() as $v){
		?>

	
	<option style="font-size:25px;" ><?php echo $v->vehicle_id;?></option>

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