<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>Login</title>
<link href="<?PHP echo base_url();?>Assets/CSS/TransportFare.css" rel="stylesheet">
<link href="<?PHP echo base_url();?>Assets/CSS/login.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image2" style="position:absolute;left:0px;top:1px;width:1071px;height:669px;z-index:12;">
<img src="<?PHP echo base_url();?>Assets/images/Nature background.jpg" id="Image2" alt=""></div>
<div id="wb_Image1" style="position:absolute;left:0px;top:1px;width:176px;height:103px;z-index:13;">
<a href="index.php"><img src="<?PHP echo base_url();?>Assets/images/Untitled design.png" id="Image1" alt=""></a></div>
<label for="" id="Label8" style="position:absolute;left:21px;top:341px;width:511px;height:42px;line-height:42px;z-index:14;">New To Transport Fare Nepal?</label>
<input type="submit" id="Button2" onclick="window.location.href='signUp';return false;" name="backToSingUp" value="Sign Up Here" style="position:absolute;left:369px;top:391px;width:206px;height:56px;z-index:15;">
<div id="wb_Form1" style="position:absolute;left:196px;top:22px;width:320px;height:277px;z-index:16;">

<h1>User Login</h1>
<form method="post" action="<?php echo base_url();?>Login/loginUser/">
	
<label>Username</label><br>
<input type="text" name="username" placeholder="username"><br>

<label>Password</label><br>
<input type="password" name="password" placeholder="password"><br>

<input type="submit" value="Login" name="login">

</form>


</div>
<div id="wb_Form2" style="position:absolute;left:549px;top:22px;width:320px;height:277px;z-index:17;">

<h1>Admin Login</h1>
<form method="post" action="<?php echo base_url();?>Login/loginAdmin/">
<input type="hidden" name="user_type_id" value="2">
<label>Username</label><br>
<input type="text" name="username" placeholder="username"><br>

<label>Password</label><br>
<input type="password" name="password" placeholder="password"><br>

<input type="submit" value="Login" name="login" >

</form>


</div>
</div>
</body>
</html>