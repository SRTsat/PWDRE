<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="{{ asset('profile.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="back-button" onclick="goBack()">← Back</div>
            <div class="profile-pic">
                <img src="MON.jpg" alt="Profile Picture">
            </div>
            <h1>Timotius Julius Iwan</h1>
        </header>
        <nav>
            <ul>
                <li><a href="#"><span class="icon">❤️</span> Favorite</a></li>
                <li><a href="#"><span class="icon">⬇️</span> Download</a></li>
                <li><a href="aboutus.blade.php"><span class="icon">ℹ️</span> About Us</a></li>
                <li><a href="login.blade.php"><span class="icon">🚪</span> Log Out</a></li>
            </ul>
        </nav>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
