<?php
include("./connections/dbconn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/sfaulogo.png">
    <link rel="icon" type="image/png" href="./images/sfaulogo.png">
    <title>SFAU Profiling System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* 
        .header {
            justify-content: center;
        } */

        #content {
            text-align: center;
        }

        .section {
            max-width: 600px;
            /* Adjust the max-width as needed */
            width: 100%;
        }

        .section img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }

        .section h2 {
            margin-top: 20px;
            margin-bottom: 0;
        }

        .section div {
            margin-top: 20px;
        }

        .login-buttons {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-admin {
            background-color: #5e0b15;
            color: #fff;
            /* Text color for Admin */
        }

        .btn-scholar {
            background-color: #5e0b15;
            color: #fff;
            /* Text color for Scholar */
        }

        .btn-cashier {
            background-color: #5e0b15;
            color: #fff;
            /* Text color for Cashier */
        }

        .btn:hover {
            background-color: #90323d;
            color: #fff;
            /* Hover text color for all buttons */
        }

        @media screen and (min-width:310px) {
            .btn {
                display: inline-block;
                padding: 10px 20px;
                margin: 5px;
                text-decoration: none;
                font-weight: bold;
                text-align: center;
                cursor: pointer;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .btn-admin {
                background-color: #5e0b15;
                color: #fff;
                /* Text color for Admin */
            }

            .btn-scholar {
                background-color: #5e0b15;
                color: #fff;
                /* Text color for Scholar */
            }

            .btn-cashier {
                background-color: #5e0b15;
                color: #fff;
                /* Text color for Cashier */
            }

            .btn:hover {
                background-color: #90323d;
                color: #fff;
                /* Hover text color for all buttons */
            }

        }
    </style>
</head>

<body>
    <?php include("./partials/header.php"); ?>

    <div id="content">
        <div class="section">
            <img src="./images/sfaulogo.png" alt="Placeholder Image">
            <h2>"Make Education Accessible for All"</h2>
            <br>
            <div>
                <!-- Add the links to respective login pages -->
                <a href="/grantingsystem/auth/admin_login.php" class="btn btn-admin">Admin</a>
                <a href="/grantingsystem/auth/scholar_login.php" class="btn btn-scholar">Scholar</a>
                <a href="/grantingsystem/auth/cashier_login.php" class="btn btn-cashier">Cashier</a>
            </div>
        </div>
    </div>
</body>

</html>