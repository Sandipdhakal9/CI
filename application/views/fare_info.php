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
<title>Fare Information</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/fare_info.css" rel="stylesheet">

<style >
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
    background: solid;
    width: 20%;
}

tr:nth-child(even) {
    background-color: #dddddd;

}
</style>


</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1200px;height:983px;filter:alpha(opacity=50);opacity:0.50;z-index:0;">
<img src="<?PHP echo base_url();?>Assets/imagess/Fare Information.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:1;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/userDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:613px;top:0px;width:278px;height:41px;z-index:2;">
<div id="wb_Logout1" style="position:absolute;left:765px;top:41px;width:124px;height:32px;z-index:3;">
<form name="logoutform" method="post" action="<?php echo base_url(); ?>login" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Text1" style="position:absolute;left:200px;top:0px;width:386px;height:55px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:48px;">Fare Information</span></div><br><br><br><br><br><br><br><br><br><br><br>

<h1><b>Dear User Please Use Find Option(CTRL+F) to search your places.</b></h1><br><br><br>
<table border="1" style="background-color:82E0AA;">


<tr>
	<th><h1>Vehicle Name</h1></th>
	<th><h1>Route</h1></th>
	<th><h1>From Location</h1></th>
	<th><h1>TO Location</h1></th>
    <th><h1>Normal Fare(RS)</h1></th>
    <th><h1><strong>Student Fare(RS)</strong></h1></th>
  
    
  </tr>
<?php
	foreach ($records as $fare_info): 
?>
	<tr>
	<td><h3><?= $fare_info->vehicle_name?></h3></td>

	<td><h3><?= $fare_info->route?></h3></td>

	<td><h3><?= $fare_info->from_place?></h3></td>

	<td><h3><?= $fare_info->to_place?></h3></td>

	<td><h3><?= $fare_info->normal_fare?></h3></td>

	<td><h3><?= $fare_info->student_fare?></h3></td>

	

	






	</tr>

<?php
	endforeach;

?>


</table>





</div>
</body>
</html>