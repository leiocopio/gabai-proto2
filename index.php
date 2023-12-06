

<?php include 'components/head.php';?>
 <title>Home - GabAI</title>

<body>




    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('images/page-loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
        }
   

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

<?php include 'components/header.php';?>


    <div class="banner">
        <div class="opacity_overlay">
            <div class="info">
                <div class="subscribe">
                    <div class="opacity_overlay">
                        <div class="container">

                            <img src="images/white-logo.png" height="40px" width="150px">
                            <p style="font-size: 35px;">Explore the world of computer science with ease</p>
                            <p>Unlock your coding potential with us</p>

                            <form class="form-subscribe" action="search.php">
                                <div class="input-group">
                                    <input style="color:white;" type="text" class="form-input" name="query"
                                        placeholder="Search here">
                                    <span class="btn-group">
                                        <button class="btn" type="submit">Search</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="secondary_layer">

            </div>

        </div>
    </div>


    <div class="services">
        <div class="container">
            <h2>GabAI is a <span id="rotate"></span> educational web search engine</h2>
            <h3>It is designed to help students find reliable and relevant information on a
                wide range of computer science topics.</h3>

            <div class="overview">

                <div class="col-md-4 col-sm-4">
                    <div class="feature-box">
                        <img src="images/image1.png" class="img-responsive">
                    </div>

                    <div class="feature-body">
                        <h4>Responsive</h4>
                        <p>It is designed to be accessible and easy to use on desktop, tablet, and mobile devices by
                            being optimized for various devices and screen sizes.</p>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="feature-box">
                        <img src="images/image2.png" class="img-responsive">
                    </div>

                    <div class="feature-body">
                        <h4>Reliable</h4>
                        <p>We use algorithms and filters to ensure that the most relevant and trustworthy information is
                            presented to the user.</p>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="feature-box">
                        <img src="images/image3.png" class="img-responsive">
                    </div>

                    <div class="feature-body">
                        <h4>Relevant</h4>
                        <p> We provide quick and easy access to vast amounts of information on computer science topics.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="more-information">
        <div class="container">
            <div class="col-md-6">
                <div class="sides">
                    <h4>Why Choose Us</h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sides">
                    <h4>What We Will Do</h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>


<?php include 'components/footer.php';?>




    <script type="text/javascript">
        $(document).ready(function () {
            $('.toggle-menu').jPushMenu({
                closeOnClickLink: false
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>

    <script type="text/javascript">
        var terms = ["responsive", "reliable", "relevant"];

        function rotateTerm() {
            var ct = $("#rotate").data("term") || 0;
            $("#rotate").data("term", ct == terms.length - 1 ? 0 : ct + 1).text(terms[ct]).fadeIn()
                .delay(1000).fadeOut(200, rotateTerm);
        }
        $(rotateTerm);
    </script>


    <script type="text/javascript">
        jQuery('.counter-item').appear(function () {
            jQuery('.counter-number').countTo();
            jQuery(this).addClass('funcionando');
            console.log('funcionando');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#clients-slider").carousel({
                interval: 5000 //TIME IN MILLI SECONDS
            });
        });
    </script>


    <script type="text/javascript">
        $(function () {
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


</body>

</html>