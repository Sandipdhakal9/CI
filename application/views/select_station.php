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
<title>Select Update</title>
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

<body>

<div id="container">

<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:8;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<label for="" id="Label7" style="position:absolute;left:176px;top:0px;width:508px;height:56px;line-height:56px;z-index:9;">Select Station Details</label>
<input type="submit" id="Button2" onclick="window.location.href='<?PHP echo base_url();?>Redirect/adminDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:692px;top:0px;width:278px;height:41px;z-index:10;">
<div id="wb_Logout1" style="position:absolute;left:844px;top:41px;width:124px;height:32px;z-index:11;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" name="logout" value="Logout" id="Logout1">
</form>
</div>

<br><br><br><br><br><br><br><br><br><br><br>

<table border="1" style="background-color:82E0AA;">


<tr>
    <th><h1>Station ID</h1></th>
    <th><h1>Vehicle ID</h1></th>
    <th><h1>Station Name</h1></th>
    <th><h1>Station Location </h1></th>
    <th><h1>Update </h1></th>
    <th><h1>Delete</h1></th>

  </tr>

  <?php
    // if($records->num_rows()>0){
    foreach ($records as $sdata) {
      ?>

	<tr>
	<td><h3><?= $sdata->station_id?></h3></td>
  <td><h3><?= $sdata->vehicle_id?></h3></td>
  <td><h3><?= $sdata->station_name?></h3></td>
  <td><h3><?= $sdata->station_location?></h3></td>

	<td><a href="<?php echo base_url();?>Vehicle_ctrl/getStationDetails?sid=<?php echo  $sdata->station_id;?>"><h3>Update </h3></a></td>

  <td><a href="<?php echo base_url();?>Vehicle_ctrl/deleteStation?sid=<?php echo  $sdata->station_id;?>"><h3>Delete </h3></a></td>

	</tr>
  <?php
  }
// }
?>


</table>

</body>
</html>