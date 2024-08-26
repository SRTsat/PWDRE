<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novel Viewer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #323644;
        }

        .container {
            background-color: white;
            width: 60%;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 48px;
            margin: 0;
            color: white;
        }

        .author {
            font-size: 24px;
            color: #ccc;
            margin: 0 0 20px 0;
        }

        .content {
            font-size: 16px;
            line-height: 1.6;
            text-align: justify;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .pagination .page-number {
            font-size: 18px;
            color: white;
        }

        .pagination button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: white;
        }

        .pagination button:disabled {
            color: #ccc;
            cursor: not-allowed;
        }

        .back-button {
        position: absolute;
        top: 20px;
        left: 20px;
        }

        .back-button a {
            font-size: 30px;
            padding-left: 20px;
            color: white;
        }

        .back-button a:hover {
            color: gray;
        }

    </style>
</head>
<body>
    <div class="back-button">
        <a href="index copy.blade.php"><i class="fa-solid fa-chevron-left"></i></a>
    </div>
    <div class="header">
        <h1 class="title">Montie The Cat Killer</h1>
        <p class="author">ST Rowling</p>
    </div>
    <div class="container">
        <div class="content">
            <p id="novelContent">
            </p>
        </div>
    </div>
    <div class="pagination">
        <button id="prevPage" onclick="prevPage()" disabled>&#9664;</button>
        <span class="page-number" id="pageNumber">1/20</span>
        <button id="nextPage" onclick="nextPage()">&#9654;</button>
    </div>

    <script>
        // Example content split into pages
        const pages = [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus tempus, eleifend ligula nec, dictum odio.",
            "Pellentesque et dolor porttitor, sollicitudin dui eu, dapibus arcu. Aliquam commodo felis a euismod volutpat.",
            "Suspendisse gravida nulla ullamcorper eros vehicula, vel eleifend velit bibendum. Nunc tincidunt tellus ac orci eleifend eleifend.",
            "Phasellus tincidunt euismod ex ac feugiat. Phasellus a purus finibus sem volutpat bibendum.",
            "In nec magna dignissim, finibus lectus eu, vestibulum sem. Maecenas venenatis auctor lorem, vel sodales mi lobortis sed.",
            "Aliquam quam tellus, rutrum in sem quis, congue molestie dui.",
            "Maecenas porta, eros non mattis ultrices, nulla dolor placerat purus, eget fermentum nunc nisl vel sem.",
            "Curabitur rhoncus mi risus, id placerat sem congue sit amet.",
            "Suspendisse ac ante vel turpis euismod congue vitae ut ligula.",
            "Quisque pellentesque tortor quis lectus suscipit, vel euismod sapien ultricies. Proin sed nisi eu nulla sollicitudin pellentesque.",
            "Suspendisse at malesuada mauris, luctus malesuada enim.",
            "Nulla facilisi. Donec eget ligula vitae lorem dictum varius.",
            "Aenean euismod felis in velit dapibus, at tristique ex varius.",
            "Donec faucibus, mauris in luctus tristique, odio metus pharetra orci, sit amet posuere lorem ipsum in nisi.",
            "Fusce volutpat nibh non enim vehicula, in posuere ipsum vehicula.",
            "Pellentesque tincidunt est in odio finibus, in sodales nisl varius.",
            "Nulla in justo vitae sapien bibendum pellentesque.",
            "Nam facilisis, elit ut dapibus venenatis, ipsum nunc consectetur odio, vel auctor magna ipsum et mauris.",
            "Suspendisse a justo ac urna tincidunt consectetur.",
            "Aenean viverra dui a nisi tincidunt, nec blandit libero hendrerit."
        ];
        let currentPage = 1;

        function updatePage() {
            const contentElement = document.getElementById('novelContent');
            contentElement.innerHTML = pages[currentPage - 1];

            document.getElementById('pageNumber').textContent = `${currentPage}/${pages.length}`;

            document.getElementById('prevPage').disabled = currentPage === 1;
            document.getElementById('nextPage').disabled = currentPage === pages.length;
        }

        function nextPage() {
            if (currentPage < pages.length) {
                currentPage++;
                updatePage();
            }
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                updatePage();
            }
        }

        updatePage();
    </script>
</body>
</html>
