<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMTM Library Registration</title>
    <link rel="stylesheet" href="{{ asset('stylessss.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="content">
                <div class="logo">
                    <img src="logo.png" alt="SMTM Library Logo">
                </div>
                <h1>SMTM Library</h1>
            </div>
        </div>
        <div class="right-side">
            <div class="form-container">
                <h2>REGISTER</h2>
                <form>
                    <input  type="text" placeholder="Username" required>
                    <input type="email" placeholder="Email Address" required>
                    <input type="password" placeholder="Password" required>
                    <input type="password" placeholder="Verify Password" required>
                    <a href="login.blade.php" class="button">REGISTER</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
