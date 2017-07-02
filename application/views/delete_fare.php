<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
   unset($_SESSION['fullname']);
   header('Location: login');
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
<link href="<?PHP echo base_url();?>Assets/CSS/delete_fare.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:970px;height:760px;filter:alpha(opacity=20);opacity:0.20;z-index:3;">
<img src="<?PHP echo base_url();?>Assets/images/delete Vehicle.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:4;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='<?php echo base_url()?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:5;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:6;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:7;">Delete Fare Details</label>
<div id="wb_Form1" style="position:absolute;left:185px;top:120px;width:645px;height:286px;z-index:8;">
<form name="Form1" method="post" action="<?php  echo base_url();?>Vehicle_ctrl/deleteFareInfo"  id="Form1">
<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:260px;height:61px;line-height:61px;z-index:0;">Select Vehicle</label>
<select name="cmbFare" size="1" id="Combobox1" style="position:absolute;left:335px;top:0px;width:310px;height:69px;z-index:1;">

<?php
				
	foreach($records as $Fid){
		?>
	}

	<option style="font-size:25px;" ><?php echo $Fid->fare_id;?></option>

	<?php
	}
	?>




</select>
<input type="submit" id="Button1" name="Delete" value="Delete" style="position:absolute;left:276px;top:225px;width:219px;height:61px;z-index:2;">
</form>
</div>
</div>
</body>
</html>