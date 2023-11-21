<?php
include ('./includes/header.php');
?>
    <title>Login Page</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="container">
        <div class="left-container">
            <img src="./assets/images/Mobile-Marketing.png" alt="main-image">
        </div>
        <div class="right-container">
            <div class="loginCard">
                <div class="head">
                    <h2>Login</h2>
                    <span class="text">Welcome back! Login to your account.</span>
                    <br><br>

                    <form action="" method="post">
                        <label for="email"><b>Email Address</b></label><br>
                        <input type="email" name="email" id="email" placeholder="lost@gmail.com">

                        <br>

                        <label for="password"><b>Password</b></label><br>
                        <div class="password-container">
                            <input type="password" name="password" id="password" placeholder="*********">
                            <span class="show-password">Show</span>
                        </div>

                        <br>

                        <input type="checkbox" name="remember_pass" id="remember_pass"> Remember Password
                        <a href="./forgotpassword.html" id="forgotpassword">Forgot Password?</a>

                        <br>

                        <input type="submit" value="SIGN IN" class="sign-in">
                        <br>

                        <div class="or">
                            <hr>
                            <span class="sign-in-with">
                                &nbsp;&nbsp;&nbsp;Sign In With&nbsp;&nbsp;&nbsp;
                            </span>
                        </div>

                        <br>

                        <div class="social-media">
                            <a href="#" class="linkedin"><img src="./assets/images/linkedin.svg" alt="linkedin"></a>
                            <a href="#" class="twitter"><img src="./assets/images/twitter.svg" alt="twitter"></a>
                            <a href="#" class="facebook"><img src="./assets/images/facebook.svg" alt="facebook"></a>
                            <a href="#" class="instagram"><img src="./assets/images/instagram.svg" alt="instagram"></a>
                        </div>

                        <br>

                        <div class="signup" align="center">
                            Don't have an account? <a href="./signup.html">Create Account</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include ('./includes/footer.php'); ?>