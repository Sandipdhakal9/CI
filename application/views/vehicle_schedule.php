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
<title>Vehicle Schedule</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/vehicle_schedule.css" rel="stylesheet">

<style >
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
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
<div id="wb_Image1" style="position:absolute;left:8px;top:0px;width:1024px;height:926px;filter:alpha(opacity=20);opacity:0.20;z-index:0;">
<img src="<?PHP echo base_url();?>Assets/imagess/Schedule.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:1;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/userDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:2;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:3;">
<form name="logoutform" method="post" action="<?php echo base_url(); ?>login"" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>
<div id="wb_Text1" style="position:absolute;left:184px;top:0px;width:494px;height:42px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:37px;">Vehicle Schedule Information</span></div><br><br><br><br><br><br><br><br><br><br><br>

<?php
	echo "<h1>"."Date Today :"." " . date("Y/m/d") ."</h1>". "<br>";

?>
<br><br><br>
<table border="1" style="background-color:82E0AA;">


<tr>
	<th><h1>Scheduled Date</h1></th>
	<th><h1>Station Name</h1></th>
	<th><h1>Station Location</h1></th>
    <th><h1>Vehicle Name</h1></th>
    <th><h1>Route Name</h1></th>
    <th><h1>Departure Time</h1></th>
    <th><h1>Arrival Time</h1></th>
  </tr>
<?php
	foreach ($records as $schedule): 
?>
	<tr>

	<td><h3><?= $schedule->date?></h3></td>

	<td><h3><?= $schedule->station_name?></h3></td>

	<td><h3><?= $schedule->station_location?></h3></td>

	<td><h3><?= $schedule->vehicle_name?></h3></td>

	<td><h3><?= $schedule->route?></h3></td>

	<td><h3><?= $schedule->departure_time?></h3></td>

	<td><h3><?= $schedule->arrival_time?></h3></td>

	</tr>

<?php
	endforeach;

?>


</table>



</div>
</body>
</html>