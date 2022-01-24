<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Signup</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="box">
                <img src="style/Blue on the office.svg" alt="Sign in">
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="form-area">
                    <div class="title">
                        <h2>Sign up</h2>
                    </div>
                    <form action="pSignup.php" method="post">
                        <div class="input-field">
                            <p class="text">Username</p>
                            <input type="text" placeholder="" name="username" required autofocus>
                            <div class="underline"></div>
                        </div>
                        <div class="input-field">
                            <p class="text">Email</p>
                            <input type="email" placeholder="" name="email" required>
                            <div class="underline"></div>
                        </div>
                        <div class="input-field">
                            <p class="text">Password</p>
                            <input type="password" placeholder="" name="password" required>
                            <div class="underline"></div>
                        </div>
                        <div class="input-field">
                            <p class="text">Confirm Password</p>
                            <input type="password" placeholder=" " name="cpassword" required>
                            <div class="underline"></div>
                        </div>
                        <input type="submit" value="Sign up" name="submit">
                    </form>
                    <div class="forget">
                        <span>already have an account? <a href="index.php">Login here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>