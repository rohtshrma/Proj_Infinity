<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Component</title>
    <style>
        body {
            background-color: white;
            margin: 0;
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

        .items-container {
            @media only screen and (max-width: 768px) {
                flex-direction: column;
                align-items: center;
            }
        }

        .about-section {
            display: flex;
            align-items: center;
            padding: 48px 64px;
            font-size: 2.25rem;
            font-weight: 700;
            background-color: #D1D5DB;
            padding: 48px 20px;
            justify-content: center;
            width:-webkit-fill-available ;
        }
        .width-25 {
            width: 50px;

            @media only screen and (max-width: 768px) {
                width: 80%;
            }

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
            width: 250px;
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
    </style>
</head>

<body>
    <div class="flex flex-col items-center pb-20 bg-white">
    <?php include 'includes/header.php'; ?>
    <div class="about-section">
            Office Series
        </div>
        <div class="padding-x-5 mt-24 w-full max-width-1133 mt-10-md max-width-full-md">
            <div class="flex gap-5 flex-col-md gap-0 items-container">
            <?php
                $query = "SELECT * FROM `pen items`";
                $data = mysqli_query($con, $query);
                $results = mysqli_num_rows($data);
                if ($results) {
                    while ($rows = mysqli_fetch_array($data)) {
                ?>
                        <div class="flex flex-col width-25 flex-grow text-2xl font-bold text-black whitespace-nowrap mt-10-md">
                            <a href="detailPage.php?id=<?php echo $rows['id']; ?>">
                                <img loading="lazy" src="<?php echo $rows['image1']; ?>" class="common-img mt-5" />
                                <div class="flex-grow text-3xl font-bold text-black whitespace-nowrap mt-7" style="text-decoration: none;">
                                    <?php echo $rows['name']; ?>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                } else {
                    echo '<div>No items found</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>