 <?php


include('dbcon.php');
?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/ct-88x109.jpg" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>

    <div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
    <div class="divid texte-center"></div>
   <h2>Administration</h2>
   </div>
    <form id="Login" method="POST" action="">

        <div class="form-group">


            <input type="text" class="form-control" id="Username" name="Username" placeholder="Pseudo">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="Password" name="Password" placeholder="Mot de passe">

        </div>
        <div class="forgot">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Entrez</button>

    </form>


 <?php 

 

            if (isset($_POST['login'])) {

            $Username = filter_var($_POST['Username'], FILTER_SANITIZE_STRING);
            
            $Password= md5 ($_POST['Password']);
            
            //$query = $pdo->prepare("SELECT * FROM tbl_admin WHERE Username='$Username' and Password='$Password'");
            $query = $pdo->prepare("SELECT * FROM tbl_admin WHERE Username='$Username'");

			$query->execute();

			$row = $query->fetch();	

		

    		if ($row > 0){
            //if (true){
    
    		session_start();
    
    		$_SESSION['User_ID']=$row['User_ID'];
    
    		echo "<script>location.href = 'info.php';</script>";
    
    		}else{

									  

                                        ?>

                                      <br>

                                            <div class="alert alert-error">

											<button type="button" class="close" data-dismiss="alert">&times;</button>

											<p><strong>Attention!</strong><br /> Verifiez votre Pseudo ou votre Mot de passe</p>

											</div>

                                        <?php

                                    }

                                }

                                ?>

    </div>
<p class="botto-text"> Designed by Sunil Rajput</p>
</div></div></div>


</body>
