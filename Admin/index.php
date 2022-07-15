<?php
	if(isset($_POST["login"])){
		$username= $_POST["username"];
		$password= $_POST["password"];
		//echo print_r($_POST);die();
		if($username == "admin" AND $password == "admin"){
			header("location: additem.php");
		}
		else {
			echo "<script>alert('incorrect username or password')</script>";
		}
		
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>You Think We Wrap</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

	  <style>
	  </style>
</head>
<body>
<nav class=" nav-back py-2">
	<?php include 'toptext.php' ?>
       </nav>
	 <div class="container-fluid">

	  	 <div class="container-fluid">
            <div class="container mt-4">
                <div class="row py-4">
                    <div class="col-md-4 py-4" style="">
                        <figure><img src="images/admin.png" alt="sing up image" height="300" width="300"></figure>
                    </div>

                    <div class="col-md-4 py-4">
                        <h2 class="form-title text-color-in"><center><b>LOGIN</b></center></h2>
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" required="_required"placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" required="_required" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="login" class="cust-btn-in btn btn-block" value="LOGIN"/>
                            </div>
            			     <div class="form-group">
                                <a href="../" class="cust-btn-in btn btn-block">GO TO USER PANNEL</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
	  </div>
	  </div>
	  <?php include 'footer.php'; ?>
</body>
</html>
