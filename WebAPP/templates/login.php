<?php
?>
<html>
<head>
<style>
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

.space{
	margin-left:50px;
}

}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>
</head>
<body>
<?php
SESSION_START();
$conn=mysqli_connect("localhost","root","","pcoded");
if(isset($_REQUEST['sub']))
{
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	$type = $_REQUEST['type'];
	if($type='User')
	{
		$q="select * from user where email='$email' and password='$password'";
		$r=mysqli_query($conn,$q);
		if($d=mysqli_fetch_assoc($r))
		{
			$username=$d['username'];
			$_SESSION['name']=$username;
			$_SESSION['user']=$email;
			header("location:user.php");
		}
		else
		{
			echo "<script>alert('Wrong email or password1')</script>";
		}
	}
	if($type='Admin')
	{
			if($email=='admin@123' && $password=='12345')
			{
				$e="Admin";
				$_SESSION['username']=$e;
				header("location:admin.html");
			}
			else
			{
				echo "<script>alert('Wrong email or password')</script>";
			}
	}
}
?>
<a href="home.php" ><i><font face = "San Francisco" size =" 5" color='black' ><br>PCOd'ed</font></i></a>
<div class="login-box">
  <h2>Sign In</h2>
  <form action="login.php" method="post">
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
	<div class="user-box">
	<p><font color='white'>Role:</font></p>
    <select id=p1 name="type" required="">
	<option>-SELECT-</option>
	<option value="Admin">Admin</option>
	<option value="User">User</option>
	</select>
</div>
    <a href="user.php">
	<input type="submit" name='sub' class="bt">       
    </a>
	
	<a href="register.php" class="space">Sign Up</a>
  </form>
</div>
</body>
</html>