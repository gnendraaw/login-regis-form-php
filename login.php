<section>
    <div class="container">
        <div class="box">
            <img src="style/White fly.svg" alt="Sign in">
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="form-area">
                <div class="title">
                    <h2>Login</h2>
                </div>
                <form action="pLogin.php" method="post">
                    <div class="input-field">
                        <p class="text">Username</p>
                        <input type="text" placeholder="" name="username" required autofocus>
                        <div class="underline"></div>
                    </div>
                    <div class="input-field">
                        <p class="text">Password</p>
                        <input type="password" placeholder="" name="password" required>
                        <div class="underline"></div>
                    </div>
                    <input type="submit" value="Sign in" name="submit">
                </form>
                <div class="forget">
                    <span>don't have an account yet? <a href="signup.php">Signup here</a></span>
                </div>
            </div>
        </div>
    </div>
</section>