<!-- admin_login.php -->
<?php
// include("../connections/dbconn.php");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Sanitize user inputs
//   $email = mysqli_real_escape_string($conn, $_POST['email']);
//   $password = mysqli_real_escape_string($conn, $_POST['password']);

//   // Hash the password (use a secure hashing algorithm like bcrypt)
//   $hashed_password = password_hash($password, PASSWORD_BCRYPT);

//   // Use prepared statement with placeholders
//   $query = "SELECT * FROM users WHERE email=? AND role='cashier'";
//   $stmt = $conn->prepare($query);
//   $stmt->bind_param("s", $email);
//   $stmt->execute();
//   $result = $stmt->get_result();

//   if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();

//     // Verify the hashed password
//     if (password_verify($password, $row['password'])) {
//       // Password is correct, redirect to admin_dashboard.php
//       session_start();
//       $_SESSION['user_id'] = $row['id'];
//       $_SESSION['role'] = 'cashier';
//       header("Location: ../dashboard_pages/cashier_dashboard.php");
//       exit();
//     } else {
//       // Handle incorrect password
//       echo "Invalid password!";
//     }
//   } else {
//     // Handle unauthorized access or redirect to a different page
//     echo "Unauthorized access!";
//   }

//   // Close the prepared statement
//   $stmt->close();
// }
?>

<!-- <body>
  <?php //include("../partials/header.php"); 
  ?>
  <form action="cashier_login.php" method="post">
    <input type="hidden" name="role" value="cashier">
    <input type="text" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
</body> -->

<?php //include("../partials/header.php"); 
?>
<!-- scholar_login.php -->
<!-- <form action="/grantingsystem/connections/login_process.php" method="post">
  <input type="hidden" name="role" value="scholar"> -->
<!-- Include other login form fields (email, password) -->
<!-- <label for="email">email:</label>
  <input type="text" name="email" required><br>
  <label for="password">Password:</label>
  <input type="password" name="password" required><br>
  <button type="submit">Login</button>
  <a href="./auth/signup.php" class="mx-auto d-block"><u>Sign up?</u></a>
</form> -->
<?php //include("./auth/signup.php"); 
?>
<!-- admin_login.php -->
<?php
// include(__DIR__ . "dbconfig.php");


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Sanitize user inputs
//   $email = mysqli_real_escape_string($conn, $_POST['email']);
//   $password = mysqli_real_escape_string($conn, $_POST['password']);

//   // Hash the password (use a secure hashing algorithm like bcrypt)
//   $hashed_password = password_hash($password, PASSWORD_BCRYPT);

//   // Use prepared statement with placeholders
//   $query = "SELECT * FROM users WHERE email=? AND role='cashier'";
//   $stmt = $conn->prepare($query);
//   $stmt->bind_param("s", $email);
//   $stmt->execute();
//   $result = $stmt->get_result();

//   if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();

//     // Verify the hashed password
//     if (password_verify($password, $row['password'])) {
//       // Password is correct, redirect to admin_dashboard.php
//       session_start();
//       $_SESSION['user_id'] = $row['id'];
//       $_SESSION['role'] = 'cashier';
//       header("Location: ../dashboard_pages/cashier_dashboard.php"); //dashboard_pages/admin_dashboard.php
//       exit();
//     } else {
//       // Handle incorrect password
//       echo "Invalid password!";
//     }
//   } else {
//     // Handle unauthorized access or redirect to a different page
//     echo "Unauthorized access!";
//   }

//   // Close the prepared statement
//   $stmt->close();
// }
include("../dbconfig.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();

  // Sanitize user inputs
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Use Firebase to check if the user exists and is approved
  $query = $database->getReference('users')
    ->orderByChild('email')
    ->equalTo($email)
    ->getValue();

  if ($query) {
    // User found in Firebase
    $uid = key($query);
    $user = current($query);

    // Verify the hashed password
    if (password_verify($password, $user['pword']) && $user['role'] === 'cashier') {
      $_SESSION['user_id'] = $uid;
      $_SESSION['role'] = 'cashier';

      // Redirect to specific pages based on user role
      if ($user['role'] === 'cashier') {
        header("Location: ../dashboard_pages/cashier_dashboard.php");
        exit();
      } else {
        // Redirect to a default page for other roles
        header("Location: ../index.php");
        exit();
      }
    } else {
      // Handle incorrect password
      echo "Invalid password!";
    }
  } else {
    // Handle unauthorized access or redirect to a different page
    echo "Unauthorized access!";
  }
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/sfaulogo.png">
  <link rel="icon" type="image/png" href="../images/sfaulogo.png">
  <title>Cashier Login System</title>
  <!-- Add Bootstrap CSS link -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <style>
    body {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      background: #f2f2f2;
      /* Change the background color as needed */
      z-index: 1000;
      /* Adjust the z-index based on your layout */
    }

    .container-fluid {
      display: flex;
      justify-content: center;
    }

    .row {
      width: 100%;
      max-width: 1200px;
      /* Adjust the max-width as needed */
    }

    /* Optional: Add padding to the navbar if needed */
    /* .navbar-main {
      padding: 10px 0;
    } */

    /* Optional: Adjust the styles of the navbar items */
    .navbox {
      display: flex;
      align-items: center;
    }

    .navbox img {
      margin-right: 10px;
    }

    .font-weight-bolder {
      font-size: 18px;
      /* Adjust the font size as needed */
      color: #333;
      /* Adjust the text color as needed */
    }

    .password-container {
      position: relative;
    }

    .password-container>input {
      padding-right: 30px;
      /* Adjust the padding to leave space for the eye icon */
    }

    .password-container>.eye-icon {
      position: absolute;
      top: 50%;
      right: 5px;
      transform: translateY(-50%);
      cursor: pointer;
    }

    /* .titleholder {
      width: 100%;
      height: 15rem;

      display: flex;
      gap: 16px;

      justify-content: center;
      align-items: center;

    }

    .titleholder>div>img {

      width: 100%;
      height: 100%;
      padding-top: 20px;
    }

    .titleholder>div>h2 {
      text-align: center;

    }


    .titleholder>div>p {
      text-align: center;
    }

    .password_container>form>input>.eye-icon {
      position: relative;
      width: 20px;
      height: 20px;
      cursor: pointer;
    }

    .user-type {
      margin-bottom: 10px;
    } */

    @media(min-width:320px) {
      .titleholder {
        font-size: small;
        margin-left: 15px;
      }

      .cashierform {
        justify-content: center;
        align-items: center;
        margin-top: 5%;
        /* margin-left: 45px;
        margin-right: 45px; */
      }

      .password_container>form>input {
        margin: 2px;
        padding: 1px;
      }

      input[type=password] {
        padding: 5px 15px;
        margin: 3px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      .submitbtn {
        background: linear-gradient(180deg, rgba(148.75, 6.20, 6.20, 0.81) 81%, rgba(250.75, 5.22, 5.22, 0.69) 100%);
        color: whitesmoke;
        justify-content: center;
        align-items: center;
        border: 3px solid blue;
        /* padding: 12px 25px; */
        font-size: 14px;
      }
    }

    @media (max-width: 767px) {
      .cashierform {
        margin-top: 20px;
        margin-left: 10%;
        margin-right: 10%;
      }

      /* .password_container>form>input {
        margin: auto;
        padding: 15px;
      }

      input[type=text],
      input[type=password] {
        padding: 10px;
        margin: 8px 0;
      } */

      .submitbtn {
        padding: 12px 16px;
        font-size: 14px;
      }
    }

    /* Media Query for Larger Screens */
    @media(min-width: 768px) {
      /* .cashierform {
        
      } */

      .cashierform>form {
        margin-left: 35%;
        margin-right: 35%;
      }

      .submitbtn {
        padding: 14px 20px;
        font-size: 16px;
      }

      /* .header {
        width: 100%;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto;
      }

      .left-section {
        display: grid;
        grid-template-columns: repeat(2, 0.3fr);
        grid-template-rows: auto;
        gap: 1px;
        text-align: left;
        color: #f0f0f0;
      } */
    }

    .titleholder {
      display: flex;
      flex-direction: column;
      gap: 16px;
      align-items: center;
      justify-content: center;
    }

    .titleholder>div>img {
      width: 100%;
      max-width: 200px;
      /* Adjust the max-width for the logo as needed */
      height: auto;
    }

    .cashierform {
      margin-top: 20px;
      margin-left: 10%;
      margin-right: 10%;
      text-align: center;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .submitbtn {
      background: linear-gradient(180deg, rgba(148.75, 6.20, 6.20, 0.81) 81%, rgba(250.75, 5.22, 5.22, 0.69) 100%);
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    .submitbtn:hover {
      background: #5E0B15;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="row align-items-center"> <!-- Centering using Bootstrap grid -->
        <div class="col-md-6"> <!-- Adjust the column size based on your design -->
          <nav aria-label="breadcrumb">
            <div class="navbox">
              <img src="../images/sfaulogo.png" class="navbar-brand-img h-50 ms-md-auto pe-md-3 d-flex align-items-center" alt="main_logo">
              <h6 class="font-weight-bolder mb-0">CAMARINES NORTE STATE COLLEGE SCHOLARSHIP AND FINANCIAL ASSISTANCE UNIT</h6>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- <section class="titleholder">
      <div><img src="../images/CNSC_Logo.png" alt="cnsclogo"></div>
      <div>
        <h2>CAMARINES NORTE STATE COLLEGE</h2>
        <h3>Scholarship Financial and Assistance Unit (SFAU): </h3>
        <p>Scholarship Profiling Information System </p>
      </div>
    </section> -->
    <section class="titleholder">
      <div><img src="../images/CNSC_Logo.png" alt="cnsclogo"></div>
      <div>
        <h2>CAMARINES NORTE STATE COLLEGE</h2>
        <h3>Scholarship Financial and Assistance Unit (SFAU): </h3>
        <p>Scholarship Profiling Information System </p>
      </div>
    </section>
    <div class="cashierform">
      <form action="cashier_login.php" method="post">
        <input type="hidden" name="role" value="cashier">
        <!-- Include other login form fields (email, password) -->
        <input type="text" name="email" placeholder="Email" required><br>
        <div class="password-container">
          <input type="password" id="password" name="password" placeholder="Password" required>
          <span class="eye-icon" onclick="togglePasswordVisibility()">
            <img src="../images/hide.png" alt="Closed Eye" style="width: 15px; height: 15px; margin-top: 5px;">
          </span>
        </div>
        <div><button class="submitbtn" type="submit">Login</button></div>
      </form>
    </div>
    <script>
      function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.querySelector('.eye-icon');

        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          eyeIcon.innerHTML = '<img src="../images/view.png" alt="Open Eye" style="width: 15px; height: 15px;margin-top: 5px;">'; // Open eye
        } else {
          passwordInput.type = 'password';
          eyeIcon.innerHTML = '<img src="../images/hide.png" alt="Closed Eye" style="width: 15px; height: 15px;margin-top: 5px;">'; // Closed eye
        }
      }
    </script>
</body>