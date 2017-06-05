<html>
<head>
  <title>Sign up form</title>
</head>
<body>

  <form action= "<?php echo base_url();?>SignUp/registerUser/" method="post">
  
    <p><label><b>First Name</b></label></p>
    <p><input type="text" placeholder="Enter First Name" name="fname" id="fname" required></p> <br>

    <p><label><b>Last Name</b></label></p>
    <p><input type="text" placeholder="Enter Last Name" name="lname" id="lname" required></p><br>

    <p><label><b>Email</b></label></p>
    <p><input type="text" placeholder="Enter Email" name="email" id="email" required></p><br>

    <p><label><b>Username</b></label></p>
    <p><input type="text" placeholder="Enter Username" name="username" id="username" required></p><br>

    <p><label><b>Password</b></label></p>
    <p><input type="password" placeholder="Enter Password" name="password" id="password" required></p><br>

    <p><label><b>Repeat Password</b></label></p>
    <p><input type="password" placeholder="Repeat Password" name="psw-repeat" id="rpassword" required></p><br>

    <input type="submit" value="submit">
   
</form>
</body>
</html>
