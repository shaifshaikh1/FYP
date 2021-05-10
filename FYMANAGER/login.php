<?php 
	session_start();
	if(isset($_POST['txtSubmit']))
	{
		$_SESSION['SN_USER']="Admin";
		$Name=$_POST['txtUser'];
		$Password=$_POST['txtPass'];

		if($Name=="test" && $Password=="test")
		{
			header("location:index.php");
		}
		else
		{
			$error = "Invalid Username/Password";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSMS Login</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <style>

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}

.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}

.form-signin .checkbox {
  font-weight: normal;
}

.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
      box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}

.form-signin .form-control:focus {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 20px;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
</head>
<body>
<header class="codrops-header">
						<img src = "logo1.png">
						<div style="width: 100px;height: 100px;float: right;position: relative;padding: 35px;">
							<a href="logout.php"><img src="home1.png" style="float: right;width: 150px;height: 150px"></a>
						</div>
							<h1> StandWell Construction Management System <span></span></h1>
</header>
  
        <form class="form-signin" role="form" method="post">

        <h2 class="form-signin-heading">Please sign in</h2>

        <div class="control-group warning">

        	<label class="control-label" for="inputWarning">

				<?php if(isset($error)) echo $error;?>

            </label>

        </div>

        <input type="text" style="padding:10px" class="form-control" placeholder="User Name" id="txtUser" name="txtUser" required autofocus>
        <br><br>
        <input type="password" class="form-control" placeholder="Password" id="txtPass" name="txtPass" required>
        <br><br>
        <label>

        	&nbsp;

        </label>

        <button class="btn btn-lg btn-primary btn-block" type="submit" id="txtSubmit" name="txtSubmit">Sign in</button>

      </form>

      </div>
    </div>
</body>
</html>