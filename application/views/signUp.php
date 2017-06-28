<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>Sign Up</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/signUp.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:999px;height:646px;z-index:14;">
<img src="<?PHP echo base_url();?>Assets/images/Bhaktapur by NCTA.jpg" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:176px;height:103px;z-index:15;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image2" alt=""></a></div>
<div id="wb_frmSignUp" style="position:absolute;left:342px;top:61px;width:464px;height:585px;z-index:16;">

 <form action= "<?php echo base_url();?>SignUp/registerUser/" method="post">
  
  	<input type="hidden" name="user_type_id" value="1"><br>
    <label><font size="5"> First Name </font></label>
    <input type="text" style=" position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Enter First Name" name="first_name" id="fname" required><br><br><br><br><br>

    <label><font size="5">Last Name </font></label>
    <input  type="text" style="position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Enter Last Name" name="last_name" id="lname" required><br><br><br><br><br>

    <label><font size="5">Email</font></label>
    <input type="email" style="position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Enter Email" name="email" id="email" required><br><br><br><br><br>

    <label><font size="5">Username </font></label>
    <input type="text" style="position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Enter Username" name="username" id="username" required><br><br><br><br><br>

    <label><font size="5">Password</font></label>
    <input  type="password" style="position:absolute; right: 50px; height: 30px; width: 200px"  placeholder="Enter Password" name="password" id="password" required ><br><br><br><br><br>

   <label><font size="5">Repeat Password </font></label>
    <input type="password"  style="position:absolute; right: 50px; height: 30px; width: 200px" placeholder="Repeat Password" name="psw-repeat" id="rpassword" required ><br><br><br><br><br>

    <input type="submit"  style=" position:absolute; right: 160px; height: 40px; width: 120px" value="SignUp"  id="btnSubmit">
 <?php
if(isset($message)) echo $msg;
?>  
</form>

</div>
<label for="" id="Label7" style="position:absolute;left:327px;top:17px;width:484px;height:36px;line-height:36px;z-index:17;">Register on Transport Fare Nepal</label>
<input type="submit" id="Button2" onclick="window.location.href='login';return false;" name="backToLoginPage" value="Login Here" style="position:absolute;left:149px;top:203px;width:170px;height:56px;z-index:18;">
<label for="" id="Label8" style="position:absolute;left:0px;top:126px;width:323px;height:52px;line-height:52px;z-index:19;">Already Have an Account?</label>
</div>
</body>
</html>