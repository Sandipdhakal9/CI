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
<link href="<?PHP echo base_url();?>Assets/CSS/update_vehicle.css" rel="stylesheet">

<style >
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background: solid;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>


</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:995px;height:666px;filter:alpha(opacity=15);opacity:0.15;z-index:7;">
<img src="<?PHP echo base_url();?>Assets/images/Update Vehicle.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:8;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:9;">Update Vehicle Details</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:10;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:11;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Form1" style="position:absolute;left:533px;top:120px;width:597px;height:455px;z-index:12;">
<form  action="<?php echo base_url();?>Vehicle_ctrl/updateVehicle" method="post" >
<input type="hidden" name="id" value="">
<label for="" id="Label2" style="position:absolute;left:0px;top:26px;width:217px;height:54px;line-height:54px;z-index:0;">Vehicle ID</label>
<label for="" id="Label3" style="position:absolute;left:0px;top:153px;width:217px;height:54px;line-height:54px;z-index:1;">Vehicle Name</label>
<label for="" id="Label4" style="position:absolute;left:0px;top:262px;width:217px;height:54px;line-height:54px;z-index:2;">Vehicle Type</label>
<input type="text" id="Editbox1" style="position:absolute;left:278px;top:153px;width:309px;height:52px;line-height:52px;z-index:3;" name="txtVehicleId" value="" spellcheck="false">
<input type="text" id="Editbox2" style="position:absolute;left:277px;top:26px;width:309px;height:52px;line-height:52px;z-index:4;" name="txtVehicleId" value="" spellcheck="false">
<input type="submit" id="Button1" name="btnUpdate" value="Update" style="position:absolute;left:225px;top:389px;width:200px;height:66px;z-index:5;">
<select name="cmbVehicleType" size="1" id="Combobox2" style="position:absolute;left:277px;top:262px;width:319px;height:62px;z-index:6;" tabindex="4">
<option value="Bus">Bus</option>
<option value="Micro">Micro</option>
<option value="Taxi">Taxi</option>
<option value="Tempo">Tempo</option>
</select>
</form>
</div>
<div id="wb_Text1" style="position:absolute;left:203px;top:103px;width:240px;height:37px;z-index:13;">
<span style="background-color:#90EE90;color:#000000;font-family:Arial;font-size:32px;"><strong>Select Vehicle</strong></span></div><br><br><br><br><br><br><br><br><br><br>

<table border="1" style="background-color:82E0AA;">


<tr>
    <th><h1>Vehicle Idenity Number</h1></th>
    <th><h1>Select</h1></th>
  </tr>
<?php
	foreach ($records as $name): 
?>
	<tr>
	<td><h3><?= $name->vehicle_id?></h3></td>
	<td><h3>Select</h3></td>

	</tr>

<?php
	endforeach;

?>


</table>






</div>
</body>
</html>