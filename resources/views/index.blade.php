<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Novel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .split-background {
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
        }
        .top-half {
            background-color: #323644;
            padding-bottom: 30px;
            flex: 1;
        }
        .bottom-half {
            background-color: #f1f1f1;
            flex: 1.1;
        }
        .content-wrapper {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #323644;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
        }
        .back-button i {
            margin-right: 10px;
            margin-top: 15px;
            font-size: 38px;
            color: #000000;
        }
        .back-button i:hover {
            color: #5c5555;
        }
        .book-image {
            margin: 50px 0;
            text-align: center;
        }
        .book-image img {
            width: 100%;
            max-width: 265px;
            border-radius: 10px;
        }
        .book-details {
            color: white;
            padding: 0 20px;
            text-align: center;
        }
        .book-details h1 {
            margin: 0;
            font-size: 2em;
            padding-top: 30px;
        }
        .book-details h2 {
            margin: 0;
            padding-top: 3px;
            font-size: 1.2em;
        }
        .text {
            margin: 0;
            font-size: 1em;
            line-height: 1.5;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .actions a, .actions button {
            padding: 10px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            color: #ffffff;
            font-size: 1em;
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
        .actions button i, .actions a i {
            margin-right: 5px;
        }
        .actions button:hover, .actions a:hover {
            background-color: #323644;
        }
        .read, .favorite, .download, .share {   
            background-color: #3d3d3d;
        }
        .rating {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }
        .rating h2, .stars {
            margin: 0;
            padding: 0;
        }
        .stars {
            font-size: 1.5em;
            color: #ffdd57;
            margin-left: 10px;
        }
        .description p {
            margin: 0;
            padding: 0 20px;
        }
        .description h2 {
            margin: 0;
            padding: 0 20px;
        }
        .divider {
            width: 80%;
            height: 3px;
            background-color: #323644;
            margin: 20px auto;
        }
        #notification {
            position: fixed;
            top: 10%; 
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 1000;
            display: none;
            text-align: center;
        }

        @media (min-width: 768px) {
            .content-wrapper {
                flex-direction: row;
                align-items: flex-start;
            }
            .book-image {
                margin-left: 50px;
                text-align: left;
            }
            .book-details {
                text-align: left;
            }
            .book-details h1 {
                font-size: 55px;
                margin-left: 0;
            }
            .book-details h2 {
                font-size: 18px;
                margin-left: 0;
            }
            .text {
                margin-left: 0;
            }
            .actions {
                justify-content: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="split-background">
        <div class="top-half"></div>
        <div class="bottom-half"></div>
        <div class="content-wrapper">
            <div class="back-button">
                <a href="home.blade.php"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            <div class="book-image">
                <img src="harrypotter.jpg" alt="Harry Potter and the Deathly Hallows">
                <div class="description">
                    <h2>Description</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos quos sunt blanditiis debitis reprehenderit cum maiores qui? Harum sint totam, expedita rem voluptatum enim praesentium consequuntur deserunt aperiam qui.</p>
                </div>
                <div class="rating">
                    <h2>Rating</h2>
                    <div class="stars">
                        ★★★★☆
                    </div>
                </div>
            </div>
            <div class="book-details">
                <h1>Harry Potter and The Deathly Hallows</h1>
                <h2>JK Rowling</h2>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus tempus, eleifend ligula nec, dictum odio. Pellentesque et dolor porttitor, sollicitudin dui eu, dapibus arcu. Aliquam commodo felis a euismod volutpat. Suspendisse gravida nulla ullamcorper eros vehicula, vel eleifend velit bibendum. Nunc tincidunt tellus ac orci eleifend eleifend. Phasellus tincidunt euismod ex ac feugiat. Phasellus a purus finibus sem volutpat bibendum.
                </p>
                <div class="actions">
                    <a class="read" href="lihat.blade.php"><i class="fas fa-book-open"></i>Start Reading</a>
                    <button class="favorite"><i class="fas fa-heart"></i>Like</button>
                    <button class="download"><i class="fas fa-download"></i>Download</button>
                    <button class="share"><i class="fas fa-share-alt"></i>Share</button>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <div id="notification">
        <p id="notification-text"></p>
    </div>
    <script>
        function showNotification(message) {
            const notification = document.getElementById('notification');
            const notificationText = document.getElementById('notification-text');
            
            notificationText.innerText = message;
            notification.style.display = 'block';
            
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }

        document.querySelector('.favorite').addEventListener('click', () => {
            showNotification('Liked!');
        });

        document.querySelector('.download').addEventListener('click', () => {
            showNotification('image downloaded!');
        });

        document.querySelector('.share').addEventListener('click', () => {
            showNotification('Link copied!');
        });
    </script>
</body>
</html>
