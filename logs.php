<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
<meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="img/gps_bg.jpg">
<meta name="keywords" content="">
<meta charset="UTF-8">
<link rel="manifest" href="manifest.json" />
<meta name="theme-color" content="#f9d700" />
<meta name="description" content="Courier Services with lines of speed and effective real time tracking">
<meta property="og:image" content="img/gps_bg.jpg">


<meta name="google-signin-scope" content="profile email">
<title>Couriers | Logs</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/jquery-ui.css">	
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/login.css">
<link rel="icon" href="img/gps_bg.jpg">	
</head>
<body>


<div class="container mt-5">

<!-- LOGIN INTERFACE -->
    <div class="col-md-5 mx-auto mt-5 login_interface">
        <p class="lead text-center">
        <img src="img/gps_bg.jpg" width="200" class="text-center img-responsive" alt="">
        </p>


        <form method="post" action="">
        <?php //require_once('functions/function.php'); ?>
        <?php //sign_in() ?>
        <p class="login_response"></p>
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Email" name="email" type="email" required autofocus>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="*******" name="password" type="password" required>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-key"></span>
                    </div>
                </div>
                <a href="javascript:void(0)" class="link" id="forgot_activator">Forget your password?</a>
            </div>


            <div class="form-group">
                <div class="row">
                        <button type="submit" class="btn log_btn btn-block " name="sign_in" id="signin_btn"> <i class="fa fa-user"></i> Sign in </button>
                </div>
                 <a href="javacript:void(0)" class="link" id="register_activator">New here? Sign up</a>
            </div>

        </form>
    </div>
<!-- /LOGIN INTERFACE -->




<!-- REGISTER INTERFACE -->

<div class="col-md-5 mx-auto mt-5 register_interface">
        <p class="lead text-center">
            <img src="img/gps_bg.jpg" width="200" class="text-center img-responsive" alt="">
        </p>
        

        <form method="post" class="form-validate">
        <?php //require_once('functions/function.php'); ?>
        <?php //sign_up() ?>
        <p class="register_response"></p>
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Email" name="email" type="email" required autofocus>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-envelope"></span>
                    </div>
                </div>
            </div>


                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" placeholder="+234..." name="phone" type="text" required>

                        <div class="input-group-prepend">
                            <span class="input-group-text foot-link"><span class="fa fa-phone"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" placeholder="*******" name="password" type="password" minlength="8" required>

                        <div class="input-group-prepend">
                            <span class="input-group-text foot-link"><span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                            <button type="submit" class="btn log_btn btn-block " name="sign_up" id="register_btn"> <i class="fa fa-user-plus"></i> Sign up</button>
                    </div>
                    <a href="javacript:void(0)" class="link login_activator" >Already own an account? Sign in</a>

                </div>
        </form>
    </div>

<!-- /REGISTER INTERFACE -->



<!-- FORGOT PASSWORD INTERFACE -->
<div class="col-md-5 mx-auto mt-5 forgot_interface">
        <p class="lead text-center">
        <img src="img/gps_bg.jpg" width="200" class="text-center img-responsive" alt="">
        <br>Enter Email
        </p>


        <form method="post" action="">
        <?php //require_once('functions/function.php'); ?>
        <?php //forgot_password() ?>
        <p class="forgot_response"></p>
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Email" name="email" type="email" required autofocus>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-envelope"></span>
                    </div>
                </div>
            </div>

          

            <div class="form-group">
                <button type="submit" class="btn log_btn btn-block" name="forgot_btn" id="forgot_btn"><i class="fa fa-envelope"></i> Submit Request</button>
                <a href="javacript:void(0)" class="link login_activator">Remembered Details? Sign in</a>
            </div>
        </form>
    </div>

<!-- /FORGOT PASSWORD INTERFACE -->






<!-- RESET PASSWORD INTERFACE -->
<div class="col-md-5 mx-auto mt-5 reset_interface">
        <p class="lead text-center">
        <img src="img/gps_bg.jpg" width="200" class="text-center img-responsive" alt="">
        <br> Enter Reset Password
        </p>


        <form method="post">
        <?php //require_once('functions/function.php'); ?>
        <?php //reset_password() ?>
        <p class="reset_response"></p>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" placeholder="*******" name="password" type="password" required autofocus>
                <input type="hidden" value="<?php echo $_GET['reset_email'] ?>" name="email">

                <div class="input-group-prepend">
                    <span class="input-group-text foot-link"><span class="fa fa-key"></span>
                </div>
            </div>
        </div>


            <div class="form-group">
                <button type="submit" class="btn log_btn btn-block" name="reset_btn" id="forgot_btn"><i class="fa fa-key"></i> Submit</button>
                <a href="javacript:void(0)" class="link login_activator">Remembered Details? Sign in</a>
            </div>
        </form>
    </div>

<!-- /RESET PASSWORD INTERFACE -->
</div>

</body>


<!-- FOOTER -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/sweetalert.min.js"></script>			
<script src="js/jquery-ui.js"></script>	
<script src="js/login.js"></script>	
<script src="js/form_action.js"></script>	

</html>

<?php
    // session_start();
    // if($_SESSION['bigmarket_id'] !== ''){
    //     header('location: Admin');
    // }
?>