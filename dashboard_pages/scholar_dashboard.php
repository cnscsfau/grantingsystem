<?php
// session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

// $role = $_SESSION['role'];
// $email = $_SESSION['email'];

// echo "<h2>Welcome, $email ($role)</h2>";

// // Add role-specific content here

// echo "<br><a href='../logout.php'>Logout</a>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grantee Dashboard</title>
    <!-- Add your CSS styles if needed -->
    <style>
        /* Add your CSS styles here */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background: linear-gradient(#90323D, #5E0B15);
            padding: 10px;
            text-align: center;
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            background-color: #750E21;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
        }

        nav a:hover {
            background-color: #555;
        }

        h2 {
            margin-top: 20px;
        }

        a.logout {
            color: #ff4d4d;
        }

        /* Sidebar styles */
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #750E21;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #E3651D;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-width: 600px) {
            .sidebar {
                padding-top: 15px;
                width: 100%;
            }

            .sidebar a {
                font-size: 16px;
            }

            .sidebar .closebtn {
                right: 10px;
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Your Website Name</h1>
    </header>

    <nav>
        <div class="open-btn" style="color:white;">&#9776;</div>
        <h2>Welcome, <?php session_start();
                        if (!isset($_SESSION['user_id'])) {
                            header("Location: login.php");
                            exit();
                        }

                        $role = $_SESSION['role'];
                        $email = $_SESSION['email'];
                        echo $email, '(' . $role . ')'; ?> </h2>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Home</a>
        <a href="#">Sales</a>
        <a href="#">Reports</a>
        <a href="../logout.php" class="logout">Logout</a>
    </div>

    <!-- Rest of your PHP content goes here -->

    <script>
        function openNav() {
            document.querySelector(".sidebar").style.width = "100%";
        }

        function closeNav() {
            document.querySelector(".sidebar").style.width = "0";
        }

        document.querySelector(".open-btn").addEventListener("click", openNav);
    </script>

</body>

</html>