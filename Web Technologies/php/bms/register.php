<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="./assets/css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Gabarito" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="registerCard">
            <h2>Create an Account</h2>
            <span class="text">Enter your personal details to create your account.</span>
            <br><br>
            <form action="" method="post">
                <label for="name"><b>Your Name</b></label><br>
                <input type="text" name="first_name" id="name" placeholder="First Name">
                <input type="text" name="last_name" id="l_name" placeholder="Last Name">

                <br><br>

                <label for="email"><b>Email Address</b></label><br>
                <input type="email" name="email" id="email" placeholder="Test@gmail.com">

                <br><br>

                <label for="password"><b>Password</b></label><br>
                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="*********">
                    <span class="show-password">Show</span>
                </div>

                <br>

                <input type="checkbox" name="privacy_policy" id="privacy_policy">
                <label for="privacy_policy"><b>Agree with</b> <span>Privacy Policy</span></label>

                <br><br>

                <input type="submit" value="CREATE ACCOUNT" class="create-account">

                <br>

                <div class="or">
                    <hr class="before">
                    <span class="sign-up-with">
                        &nbsp;&nbsp;&nbsp;Sign up with&nbsp;&nbsp;&nbsp;
                    </span>
                    <hr class="after">
                </div>

                <div class="social-media">
                    <a href="#" class="linkedin"><img src="./assets/images/linkedin.svg" alt="linkedin"></a>
                    <a href="#" class="twitter"><img src="./assets/images/twitter.svg" alt="twitter"></a>
                    <a href="#" class="facebook"><img src="./assets/images/facebook.svg" alt="facebook"></a>
                    <a href="#" class="instagram"><img src="./assets/images/instagram.svg" alt="instagram"></a>
                </div>

            </form>
        
            <br>

            <div class="login">
                <span>Already have an account? <a href="./login.php">Login</a></span>
            </div>

        </div>
    </div>
</body>
</html>