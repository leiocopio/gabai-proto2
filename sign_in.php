


<!DOCTYPE html>
<html>

<head>

    <title>Sign-in - SearchSerpent</title>

    <meta charset="utf-8" />

    <script src="/service-worker.js"></script>
<link rel="manifest" crossorigin="use-credentials" href="./manifest.json">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jPushMenu.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="/service-worker.js"></script>
<link rel="manifest" crossorigin="use-credentials" href="./manifest.json">

    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        })
    </script>



    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div class="loader"></div>



    <header>

        <nav class="navbar-default navbar-static-top" id="navbar-default" style="border-radius:0;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><span>Home</span></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="sign_in.php">Sign-in</a></li>

                    </ul>
                </div>
            </div>
        </nav>

        <style>
            .navbar-default {
                background: #F5F5F5;
            }

            .navbar-default .navbar-nav li a {
                color: #000;
            }

            .navbar-default .navbar-toggle .icon-bar {
                background: #000;
            }

            .navbar-nav {
                float: right;
            }

            @media screen and (max-width: 768px) {
                .navbar-nav {
                    float: left;
                }
            }
        </style>

        <style>
            .red {
                color: #EB455F;
                font-size: 14px;
                text-transform: none;
                border-radius: 3px;
                padding: 4px 4px;
                text-align: center;
            }

            input.larger {
                width: 10px;
                height: 10px;
            }
        </style>


        <style>
            .login-with-google-btn {

                transition: background-color 0.3s, box-shadow 0.3s;
                padding: 12px 16px 12px 42px;
                border: none;
                border-radius: 5px;
                box-shadow: 0 -1px 0 rgb(0 0 0 / 10%), 1px 1px 1px rgb(0 0 0 / 25%);
                color: black;
                font-size: 16px;
                font-family: montserrat;
                background-color: white;
                background-repeat: no-repeat;
                background-position: 12px 11px;
                text-decoration: none;
                display: inline-block;
                width: 500px;
                max-width: 100%;
                text-align: center;
                height: 40px;
                margin-top: -20px;
                padding-top: 9px;

            }

            .login-with-google-btn:hover {

                text-decoration: none;
            }

            .login-with-google-btn:active {
                background-color: white;
                text-decoration: none;
            }

            .login-with-google-btn:focus {
                outline: none;
                box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.04), 0 2px 4px rgba(0, 0, 0, 0.25), 0 0 0 3px #c8dafc;
                text-decoration: none;
            }

            .login-with-google-btn:disabled {
                filter: grayscale(100%);
                background-color: #ebebeb;
                box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.04), 0 1px 1px rgba(0, 0, 0, 0.25);
                cursor: not-allowed;
                text-decoration: none;
            }
        </style>


    </header>

    <p style="color: green; text-align:center; margin-top: 20px; margin-bottom: -10px;">
        <?php
        if (isset($_GET['msg'])) {
            $msg = urldecode($_GET['msg']);
            echo $msg;
        }
        ?>

    </p>

    <p style="color: green; text-align:center; margin-top: 20px; margin-bottom: -10px;">
        <?php
        if (isset($_GET['msg1'])) {
            $msg1 = urldecode($_GET['msg1']);
            echo $msg1;
        }
        ?>

    </p>


    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Sign-in</li>
        </ul>
    </div>



    <div class="contact">
        <div class="container">
            <div class="col-md-8">
                <div class="contact-form">
                    <?php
                    if (isset($error1)) {
                    ?>
                        <div style="width: 500px;" class="alert alert-danger" role="alert">
                            <center>
                                <p> Email/username not found.</p>
                            </center>
                        </div>
                    <?php
                        unset($error1);
                    }

                    ?>
                    <?php
                    if (isset($error2)) {
                    ?>
                        <div style="width: 500px;" class="alert alert-danger" role="alert">
                            <center>
                                <p> Incorrect password.</p>
                            </center>
                        </div>
                    <?php
                        unset($error2);
                    }

                    ?>
                    <h3><b>Sign-in</b></h3>
                    <hr>
                    <form action="#" method="post">

                        <input style="text-transform: none; width: 500px; font-family: montserrat; margin-top: 5px;" type="text" name="email" required value="<?= isset($_SESSION['info']['email']) ? $_SESSION['info']['email'] : '' ?>" placeholder="Email or username">

                        <div>
                            <input style="width:500px; font-family: montserrat" type="password" id="id_password" name="password" required placeholder="Password">
                            <i class="far fa-eye" id="togglePassword" style="margin-left: -35px; cursor: pointer;"></i>
                        </div>

                        <a href="forgot_password.php" style="color: #000; font-family: montserrat; line-height: 2">Forgot password?</a></p>


                        <!-- Next button -->
                        <input style="color:#F5F5F5; background-color:#000; text-transform:none; font-size: 16px; width: 500px; height: 40px; margin-top: -2px ;padding-top: 9px; font-family: Montserrat;" type="submit" name="submit" value="Sign-in" class="form-btn">
                        <br>
                        <br>

                        
                        <a type="button" class="login-with-google-btn button1" href="login.php">
                            Sign-in with Google
                        </a>
                     
                    </form>

                    <br>
                    <p style="font-size: 15px;font-family: Montserrat; margin-top: 7px;">Don't have an account? <a href="sign_up.php" style="color: #000">Sign-up now!</a></p>
                    <p style="font-size: 15px;font-family: Montserrat; margin-top: 7px;"><a href="https://serchserpent.infinityfreeapp.com/admin/" style="color: #000">Sign-in as Admin</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-info">

                    <h3><b>Our Mission</b></h3>
                    <hr>
                    <p style="font-size: 15px; font-family: Montserrat;">To develop an educational web search engine application that provides computer science students with accurate and relevant search results.</p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <h3><b>Our Vision</b></h3>
                    <hr>
                    <p style="font-size: 15px; font-family: Montserrat;">To create a user-friendly platform that provides computer science students with easy access to high-quality educational resources. Through advanced search filters, the application will help students find the resources they need quickly and efficiently. Ultimately, we aim to support students in their learning journey and help them achieve academic success.</p>

                </div>
            </div>
        </div>
    </div>
<?php include 'components/footer.php' ?>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.toggle-menu').jPushMenu({
                closeOnClickLink: false
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>


    <script type="text/javascript">
        $(function() {
            $.scrollUp({
                scrollName: 'scrollUp', // Element ID
                topDistance: '300', // Distance from top before showing element (px)
                topSpeed: 600, // Speed back to top (ms)
                animation: 'fade', // Fade, slide, none
                animationInSpeed: 200, // Animation in speed (ms)
                animationOutSpeed: 200, // Animation out speed (ms)
                activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
                scrollImg: true,
            });
        });
    </script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>


</body>

</html>