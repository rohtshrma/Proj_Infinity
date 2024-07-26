<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="./css/styles.css">

    <style>
        body {
            background-color: white;
            margin: 0;
        }

        .gallery {
            display: flex;
            margin-top: 20px;
            margin-bottom: 20px;
            flex-direction: row;
            gap: 20px;
        }

        .thumbnails {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            flex-direction: column;
            width: 21%;
            gap: 15px;
        }

        .thumbnail-item {
            width: 120px;
            height: 120px;
            cursor: pointer;
        }

        .main-image {
            width: 45%;
        }

        .info-sec {
            width: 33%;
        }

        .flex {
            display: flex;
        }

        .flex-col {
            flex-direction: column;
        }

        .items-center {
            align-items: center;
        }

        .pb-20 {
            padding-bottom: 20px;
        }

        .text-base {
            font-size: 1rem;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-black {
            color: black;
        }

        .gap-5 {
            gap: 5px;
        }

        .justify-between {
            justify-content: space-between;
        }

        .self-stretch {
            align-self: stretch;
        }

        .w-full {
            width: 100%;
        }

        .flex-wrap-md {
            flex-wrap: wrap;
        }

        .max-width-full-md {
            max-width: 100%;
        }

        .shrink-0 {
            flex-shrink: 0;
        }

        .aspect-ratio-3-45 {
            aspect-ratio: 3.45;
        }

        .width-225 {
            width: 225px;
        }

        .mt-9 {
            margin-top: 9px;
        }

        .self-end {
            align-self: flex-end;
            gap: 20px;
        }

        .bg-gray-light {
            background-color: #d1d5db;
        }

        .padding-x-small-md {
            padding-left: 5px;
            padding-right: 5px;
        }

        .justify-center {
            justify-content: center;
        }

        .padding-x-6 {
            padding-left: 6px;
            padding-right: 6px;
        }

        .padding-y-2-5 {
            padding-top: 2.5px;
            padding-bottom: 2.5px;
        }

        .rounded-large {
            border-radius: 1.5rem;
        }

        .padding-x-16 {
            padding-left: 16px;
            padding-right: 16px;
        }

        .padding-y-16 {
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .mt-2 {
            margin-top: 2px;
        }

        .text-4xl {
            font-size: 2.25rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .mt-24 {
            margin-top: 24px;
        }

        .max-width-1133 {
            max-width: 1133px;
        }

        .gap-0 {
            gap: 20px;
        }

        .flex-col {
            flex-direction: column;
        }

        .width-25 {
            width: 20%;
        }

        .ml-5 {
            margin-left: 5px;
        }

        .aspect-ratio-1-02 {
            aspect-ratio: 1.02;
        }

        .mt-5 {
            margin-top: 5px;
        }

        .mt-7 {
            margin-top: 7px;
        }

        .mt-10-md {
            margin-top: 10px;
        }

        .flex-grow {
            flex-grow: 1;
        }

        .whitespace-nowrap {
            white-space: nowrap;
        }

        .self-center {
            align-self: center;
        }

        .common-img {
            width: auto;
            /* Set fixed width */
            height: auto;
            /* Maintain aspect ratio */
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            /* Allows cards to wrap onto the next line if needed */
            gap: 20px;
            /* Space between cards */
            justify-content: space-between;
            /* Aligns cards to have space between them */
        }

        .card {
            width: calc(25% - 20px);
            /* Adjusts card width to fit four in a row with gaps */
            background-color: #fff;
            /* Card background color */
            padding: 16px;
            /* Padding inside the card */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Light shadow for card */
            box-sizing: border-box;
            /* Ensures padding and border are included in total width and height */
        }

        @media (max-width: 768px) {
            .gallery{
                flex-direction: column;
            }
            .thumbnails{
                flex-direction: row;
                order: 1;
                width: 100%;
            }
            .main-image{
                width: 80%;
                height: auto;
            }
            .info-sec{
                width: 85%;
                order: 2;

            }
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <!-- img viewer -->
    <div class="gallery">
        <div class="thumbnails">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM `pen items` WHERE id = $id";
                $data = mysqli_query($con, $query);
                $item = mysqli_fetch_array($data);
                if ($item) {
            ?>
                    <img loading="lazy" class="thumbnail-item" src="<?php echo $item['image1']; ?>" onclick="showImage('<?php echo $item['image1']; ?>')" />
                    <?php if (isset($item['image2']) && !empty($item['image2'])) : ?>
                        <img loading="lazy" class="thumbnail-item" src="<?php echo $item['image2']; ?>" onclick="showImage('<?php echo $item['image2']; ?>')" />
                    <?php endif; ?>
                    <?php if (isset($item['image3']) && !empty($item['image3'])) : ?>
                        <img loading="lazy" class="thumbnail-item" src="<?php echo $item['image3']; ?>" onclick="showImage('<?php echo $item['image3']; ?>')" />
                    <?php endif; ?>
        </div>
        <div class="main-image">
            <img id="mainImage" src="<?php echo $item['image1']; ?>" />
        </div>
        <div class="info-sec">
            <h1><?php echo $item['name']; ?></h1>
            <p><?php echo $item['description']; ?></p>
            <p>Features: <?php echo $item['features']; ?></p>
        </div>
        <?php
                } else {
                    echo '<div>Item not found</div>';
                }
            } else {
                echo '<div>No item ID provided</div>';
            }
        ?>
    </div>
    <img loading="lazy" style="width: 100%;" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&" className="mt-6 w-full aspect-[2.44] max-md:max-w-full" />

    <script src="script.js"></script>
</body>

</html>
