<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        .justify-center {
            justify-content: center;
        }

        .items-center {
            align-items: center;
        }

        .self-stretch {
            align-self: stretch;
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

        .text-black {
            color: black;
        }

        .bg-gray-light {
            background-color: #d1d5db;
        }

        .flex-wrap-md {
            flex-wrap: wrap;
        }

        .max-width-full-md {
            max-width: 100%;
        }

        .container {
            display: flex;
            width: 100%;
            /* max-width: 1200px; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            flex-wrap: wrap;
            justify-content: space-between;

        }

        .left,
        .right {
            padding: 20px 120px;
            flex: 1;

        }

        .left {
            border-right: 1px solid #ddd;
        }

        .left h2 {
            margin-top: 0;
        }

        .right h2 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }

        .save_btn{
            cursor: pointer;
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
            width:100% ;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .left {
                border-right: none;
                border-bottom: 1px solid #ddd;
            }

            .left,
            .right {
                padding: 20px 20px;
                flex: 1;

            }
        }

        @media (max-width: 480px) {
            .container {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="about-section">
        Contact Us
    </div>
    <div class="container">
        <div class="left">
            <h2>Contact Information</h2>
            <p>Address: Rohini Sector-10,<br>
                New Delhi-110085</p>
            <p>Phone No: 98203050600</p>
            <p>Email: info@infinitiystationery.com</p>
        </div>
        <div class="right">
            <h2>Contact Us</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone No</label>
                    <input type="tel" id="phone" name="phoneNo" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <!-- <button type="submit">Submit</button> -->
                    <input type="submit" name="save_btn" value="Save" class="save_btn" >
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php 
include 'connection.php'; 

if (isset($_POST['save_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phoneNo']);
    $email = mysqli_real_escape_string($con, $_POST['email']); 
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO `contact us info` (`name`, `phoneNo`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$message')";
    
    if(mysqli_query($con, $query)) {
        echo "<script>alert('Data inserted successfully.');</script>";
    } else {
        echo "<script>alert('Error: " . addslashes(mysqli_error($con)) . "');</script>";
    }
}
?>
