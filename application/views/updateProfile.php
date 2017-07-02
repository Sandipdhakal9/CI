<?php
$this->load->library('session');
$uname=$_SESSION['username'];
//$uid=$_SESSION['uid'];
?>

        

<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>Update User Profile</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/updateProfile.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:899px;height:614px;z-index:11;">
<img src="<?PHP echo base_url();?>Assets/images/User Profile.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:12;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<div id="wb_frmSignUp" style="position:absolute;left:201px;top:110px;width:464px;height:500px;z-index:13;">


<form action= "<?php echo base_url();?>User_ctrl/updateUserProfile/" method="post">
  
  <?php     
    foreach($profile as $udata){
    }
    ?>
  	<input type="hidden" name="user_id" value="<?php echo $udata->user_id;?>"><br>

    <input type="hidden" name="username" value="<?php echo $udata->username;?>"><br>
    <label><font size="5"> First Name </font></label>
    <input type="text" style=" position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Enter First Name" name="txtFirstName"  value="<?php echo $udata->first_name;?>"><br><br><br><br><br>

    <label><font size="5">Last Name </font></label>
    <input  type="text" style="position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Enter Last Name" name="last_name" value="<?php echo $udata->last_name;?>"  ><br><br><br><br><br>

    <label><font size="5">Email</font></label>
    <input type="email" style="position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Enter Email value" name="email" value="<?php echo $udata->email;?>"><br><br><br><br><br>


    <label><font size="5">Password</font></label>
    <input  type="text" style="position:absolute; right: 50px; height: 30px; width: 200px"  placeholder="Enter Password" name="password" id="password" value="<?php echo $udata->password;?>"><br><br><br><br><br>



    <input type="submit"  style=" position:absolute; right: 160px; height: 40px; width: 120px" value="Update"  id="btnSubmit">
    

 <?php
if(isset($message)) echo $msg;
?>  
</form>



</div>
<label for="" id="Label7" style="position:absolute;left:415px;top:66px;width:242px;height:36px;line-height:36px;z-index:14;">Update Profile</label>
<label for=""  id="Label3" style="position:absolute;left:201px;top:66px;width:193px;height:36px;line-height:36px;z-index:15;"><?php echo "<b>"."$uname"."</b>";?></label>
<input type="submit" id="Button2" onclick="window.location.href='<?php echo base_url();?>Redirect/userDashboard';return false;" name="btnDashboard" value="Back to Dashboard" style="position:absolute;left:608px;top:0px;width:278px;height:41px;z-index:16;">
</div>
</body>
</html>