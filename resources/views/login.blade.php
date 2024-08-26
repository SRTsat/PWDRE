<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMTM Library Login</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="content">
                <div class="logo">
                    <img src="logo1.png" alt="SMTM Library Logo">
                </div>
                <h1>SMTM Library</h1>
            </div>
        </div>
        <div class="right-side">
            <div class="form-container">
                <h2>LOGIN</h2>
                <form>
                    <input type="text" placeholder="Username" required>
                    <input type="password" placeholder="Password" required>
                    <p>Dont have an account? <a href="register.blade.php"> Register Now</a></p>
                    <a href="home.blade.php" class="button">Login</a>
                    <p style="text-align: center;">or login with</p>
                    <button type="submit">Log in with Google</button><br>
                    <button type="submit">Log in with Facebook</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
