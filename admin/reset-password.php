<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if (isset($_POST['submit'])) {
    $contactno = $_SESSION['contactno'];
    $email = $_SESSION['email'];
    $password = md5($_POST['newpassword']);

    $query = mysqli_query($con, "update tbladmin set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
    if ($query) {
        echo "<script>alert('Password successfully changed');</script>";
        session_destroy();
    }

}
?>
<!doctype html>
<html class="no-js" lang="">

<head>

    <title>EZ park-Reset Page</title>
    <style>
        #sign {
            background-color: rgb(252 211 77);
            color: black;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        function checkpass() {
            if (document.changepassword.newpassword.value != document.changepassword.confirmpassword.value) {
                alert('New Password and Confirm Password field does not match');
                document.changepassword.confirmpassword.focus();
                return false;
            }
            return true;
        }

    </script>
</head>

<body class="bg-dark" style="
        background: linear-gradient(123deg, #fffcac 0%, #ffffff 67%),
          linear-gradient(180deg, #d8d8d8 0%, #6b0000 100%),
          linear-gradient(
            142deg,
            #f9f5f0 0%,
            #f9f5f0 33%,
            #f2ead3 calc(33% + 1px),
            #f2ead3 56%,
            #f4991a calc(56% + 1px),
            #f4991a 62%,
            #321313 calc(62% + 1px),
            #321313 100%
          );
        background-blend-mode: multiply, overlay, normal;
      height:100vh;">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <h2 style="color: black; background-color: white; padding:20px; margin:0px;"><i
                                class="fa-solid fa-user"></i>&emsp;<strong>EZ-PARK RESET Password</strong>
                        </h2>
                    </a>
                </div>
                <div class="login-form">
                    <form action="" method="post" name="changepassword" onsubmit="return checkpass();">
                        <p style="font-size:16px; color:red" align="center">
                            <?php if ($msg) {
                            echo $msg + "";
                        } ?>
                        </p>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password"
                                required="true">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword"
                                placeholder="Confirm Password" required="true">
                        </div>
                        <div class="checkbox">

                            <label class="pull-right">
                                <a href="index.php">Sign in</a>
                            </label>

                        </div>
                        <button type="submit" name="submit" id="sign"
                            class="btn btn-success btn-flat m-b-30 m-t-30">Reset</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>