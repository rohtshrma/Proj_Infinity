<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header with Dropdowns</title>
    <style>
        .header {
            display: flex;
            gap: 14px;
            /* justify-content: space-between; */
            width: 100%;
            font-size: 1rem;
            font-weight: 600;
            flex-wrap: wrap;
        }

        .image {
            width: 250px;
        }

        .nav {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            width: 78%;
            position: relative;
        }

        .nav-item {
            flex: 1;
            margin: auto 0;
            width: 129px;
            text-decoration: none;
            position: relative;
            text-align: center;
        }

        .nav-item:hover .dropdown {
            display: block;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            width: 100%;
        }

        .dropdown-item {
            padding: 10px;
            text-decoration: none;
            display: block;
            color: #000;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
        }

        .search-button {
            display: flex;
            justify-content: center;
            padding: 10px 24px;
            border-radius: 24px;
            background-color: #D1D5DB;
        }

        .parent-nav {
            text-decoration: none;
            color: #000;
            font-size: 15px;
        }

        .parent-nav:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            .image {
                width: 150px;
                aspect-ratio: auto;
            }

            .nav {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #fff;
                position: absolute;
                top: 60px;
                left: 0;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .nav-item {
                width: 100%;
                text-align: center;
                padding: 10px 0;
                border-bottom: 1px solid #ddd;
            }

            .dropdown {
                position: static;
                box-shadow: none;
            }

            .dropdown-item {
                padding: 10px 0;
                text-decoration: none;
                color: #000;
            }

            .hamburger {
                display: block;
                cursor: pointer;
                font-size: 1.5rem;
            }
        }

        @media (min-width: 769px) {
            .hamburger {
                display: none;
            }
        }

        .nav.show {
            display: flex;
            z-index: 22;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <div class="header">
        <a href="index.php">
            <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a49da75f6c27db896055e0de143ee39aeb8ef30218685ef743e45a1329090de?apiKey=8cf79546bff94982893df7e3757c3630&" class="image" />
        </a>
        <div class="hamburger" onclick="toggleNav()">&#9776;</div>
        <div class="nav">
            <div class="nav-item">
                <a href="items.php" class="parent-nav">OFFICE SERIES</a>
                <div class="dropdown">
                    <a href="#" class="dropdown-item">Item 1</a>
                    <a href="#" class="dropdown-item">Item 2</a>
                    <a href="#" class="dropdown-item">Item 3</a>
                </div>
            </div>
            <div class="nav-item">
                <a href="#" class="parent-nav">SCHOOL SERIES</a>
                <div class="dropdown">
                    <a href="#" class="dropdown-item">Item 1</a>
                    <a href="#" class="dropdown-item">Item 2</a>
                    <a href="#" class="dropdown-item">Item 3</a>
                </div>
            </div>
            <div class="nav-item">
                <a href="#" class="parent-nav">FILE SERIES</a>
                <div class="dropdown">
                    <a href="#" class="dropdown-item">Item 1</a>
                    <a href="#" class="dropdown-item">Item 2</a>
                    <a href="#" class="dropdown-item">Item 3</a>
                </div>
            </div>
            <div class="nav-item">
                <a href="#" class="parent-nav">VIVID SERIES</a>
                <div class="dropdown">
                    <a href="#" class="dropdown-item">Item 1</a>
                    <a href="#" class="dropdown-item">Item 2</a>
                    <a href="#" class="dropdown-item">Item 3</a>
                </div>
            </div>
            <div class="nav-item">
                <a href="aboutus.php" class="parent-nav">ABOUT US</a>
            </div>
            <div class="nav-item">
                <a href="contactus.php" class="parent-nav">CONTACT US</a>
            </div>
            <div>
                <input type="search" id="searchInput" placeholder="Search Product" onkeydown="handleKeyDown(event)" />
                <i class="fas fa-search" onclick="searchProduct()" style="cursor: pointer;" ></i> <!-- Font Awesome search icon -->
            </div>
        </div>
    </div>
    <script>
        function searchProduct() {
            const input = document.getElementById('searchInput').value.trim();
            if (input.length > 0) {
                window.location.href = `detailpage.php?name=${encodeURIComponent(input)}`;
            }
        }

        function handleKeyDown(event) {
            if (event.key === 'Enter') {
                searchProduct();
            }
        }

        function toggleNav() {
            const nav = document.querySelector('.nav');
            nav.classList.toggle('show');
        }
    </script>
</body>

</html>