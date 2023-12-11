<?php
include("../connections/dbconn.php");

// Check if the user is logged in with admin role
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../unauthorized_access.php");
    exit();
}

// Retrieve user information if needed
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title> -->
<!-- Add your styles or link to external stylesheets here -->
<!-- <link rel="stylesheet" href="../static/admindash.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<!-- </head>

<body>

    <div class="header">
        <div class="left-section">
            <button class="burger-menu" onclick="openNav()">&#9776;</button>
            <img src="/grantingsystem/images/sfaulogo.png" alt="Placeholder Image">
            <div class="flowless">
                <div>CNSC SFAU</div>
                <hr style="border: 2px #FF7E06 solid; width: 55%; margin: 10px 0;">
                <p>Scholarship Profiling Information System</p>
            </div>
        </div>

    </div>
    <div class="gridsystem">

        <section class="sidebar">

            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <div>
                <img src="../images/sfaulogo.png" alt="" style="width:auto;">
                <h2>CNSC SFAU</h2>
            </div>

            <a href="../logout.php" class="logout">Logout</a>
        </section>
        <main class="main"> -->
<!-- Add your main content here -->
<!-- <p>This is the admin dashboard content.</p>

        </main>

    </div> -->
<!-- <footer> -->
<!-- Add your footer content here -->
<!-- <p>&copy; 2023 Your Company</p>
    </footer> -->
<!-- Add your scripts or link to external scripts here -->
<script>
    // function openNav() {
    //     var sidebar = document.querySelector(".sidebar");
    //     sidebar.style.display = "block";
    // }

    // function closeNav() {
    //     var sidebar = document.querySelector(".sidebar");
    //     sidebar.style.display = "none";
    // }
    //         function openNav() {
    //             var sidebar = document.querySelector(".sidebar");
    //             sidebar.style.display = "block";
    //         }

    //         function closeNav() {
    //             var sidebar = document.querySelector(".sidebar");
    //             sidebar.style.display = "none";
    //         }
</script>
<!-- 
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../static/admindash.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <ms-tamvan class="cd-main-header">
        <h2>CAMARINES NORTE STATE COLLEGE SCHOLARSHIP AND FINANCIAL ASSISTANCE UNIT</h2>
        <img src="../images/sfaulogo.png" alt="sfaulogo">
        <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
    </ms-tamvan>
    <!-- .cd-main-header -->

    <main-tamvan class="cd-main-content">
        <nav class="cd-side-nav">
            <ul>
                <!-- <li class="cd-label">Main</li> -->
                <li> <!-- class="has-children overview" -->
                    <a href="../partials/dashboard.php" class="sidebar-link" data-page="dashboard">Dashboard</a>
                    <!-- <ul>
                        <li><a href="#0">All Data</a></li>
                        <li><a href="#0">Category 1</a></li>
                        <li><a href="#0">Category 2</a></li>
                    </ul> -->
                </li>
                <li class="has-children bookmarks">
                    <a href="#0" class="sidebar-link" data-page="profile">Profile</a>

                    <ul>
                        <li><a href="#0" class="sidebar-link" data-page="masterlist">Masterlist</a></li>
                        <li><a href="#0" class="sidebar-link" data-page="release">Release</a></li>
                        <li><a href="#0" class="sidebar-link" data-page="pendings">Pendings</a></li>
                        <li><a href="#0" class="sidebar-link" data-page="verification">Verification</a></li>
                    </ul>
                </li>
                <!-- <li class="has-children notifications active">
                    <a href="#0">Profile<span class="count">^</span></a>

                    <ul>
                        <li><a href="#0">Masterlist</a></li>
                        <li><a href="#0">Release</a></li>
                        <li><a href="#0">Pendings</a></li>
                        <li><a href="#0">Verification</a></li>
                    </ul>
                </li> -->

                <li> <!-- class="has-children comments" -->
                    <a href="#0" class="sidebar-link" data-page="reports">Reports</a>

                    <!-- <ul>
                        <li><a href="#0">All Comments</a></li>
                        <li><a href="#0">Edit Comment</a></li>
                        <li><a href="#0">Delete Comment</a></li>
                    </ul> -->
                </li>
            </ul>

            <ul>
                <!-- <li class="cd-label">Secondary</li> -->
                <li class="has-children bookmarks">
                    <a href="#0" class="sidebar-link" data-page="configuration">Configuration</a>

                    <ul>
                        <li><a href="#0" class="sidebar-link" data-page="archive">Archive</a></li>
                        <li><a href="#0" class="sidebar-link" data-page="user-management">User Management</a></li>
                    </ul>
                </li>
                <!-- <li class="has-children images">
                    <a href="#0">Images</a>

                    <ul>
                        <li><a href="#0">All Images</a></li>
                        <li><a href="#0">Edit Image</a></li>
                    </ul>
                </li>

                <li class="has-children users">
                    <a href="#0">Users</a>

                    <ul>
                        <li><a href="#0">All Users</a></li>
                        <li><a href="#0">Edit User</a></li>
                        <li><a href="#0">Add User</a></li>
                    </ul>
                </li> -->
            </ul>

            <ul>
                <!-- <li class="cd-label">Action</li> -->
                <li class="action-btn"><a href="../logout.php">
                        < Logout</a>
                </li>
            </ul>
        </nav>


    </main-tamvan>
    <div class="main-content">
        <!-- The content of your main column will be displayed here -->
    </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../controls/resposidebar.js"></script>
    <script>
        $(document).ready(function() {
            // Handle sidebar link clicks
            $('.sidebar-link').on('click', function(e) {
                e.preventDefault();
                var contentPage = $(this).data('page');
                loadContent(contentPage);
            });

            // Function to load content
            function loadContent(contentPage) {
                // Use AJAX to load content dynamically
                $.ajax({
                    url: '../partials/' + contentPage + '.php',
                    type: 'GET',
                    success: function(response) {
                        $('.main-content').html(response);
                    },
                    error: function(error) {
                        console.error('Error loading content:', error);
                    }
                });
            }
        });
    </script>



    <!-- <script src="https://googledrive.com/host/0B_1DArceSF8qRXJUS29uRXNpdmM" type="text/javascript"></script>
<script src="https://googledrive.com/host/B_1DArceSF8qWWRmRkQ2UkhrODQ" type="text/javascript"></script>  -->
    <!-- Resource jQuery -->
</body>