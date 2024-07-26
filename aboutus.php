<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Component</title>
    <style>
        body{
            margin: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            padding-bottom: 20px;
            color: black;
            background-color: white;
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
        }
        .description {
            text-align: center;
            margin-top: 36px;
            font-size: 1.875rem;
            padding: 0 24px;
        }
        @media (max-width: 768px) {
            .header, .about-section, .description {
                width: 100%;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <?php include 'includes/header.php'; ?>
        <div class="about-section">
            About Us
        </div>
        <div class="description">
            With more than 24 years of expertise in the market, Infinity Global
            Industries Pvt. Ltd. is a renowned stationery brand in India. We offer
            top notch stationery products for homes, workplaces, and schools. Our
            cutting-edge production lines are critical for satisfying the market's
            rising customer demands. The company named Infinity Global Industries
            Private Limited is located in Rohini Sector-10, New Delhi-110085
        </div>
    </div>
</body>
</html>
