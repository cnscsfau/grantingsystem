<?php
include("dbconn.php");
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "SELECT * FROM users WHERE email='$email' AND role='$role'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $user = $result->fetch_assoc();
  $is_match = password_verify($password, $user['password']);

  if (!$is_match) {
    echo "Invalid Password";
  } else {
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['role'] = $user['role'];

    switch ($role) {
      case 'admin':
        header("Location: ../pages/dashboard.html"); //dashboard_pages/admin_dashboard.php
        break;
      case 'cashier':
        header("Location: ../dashboard_pages/cashier_dashboard.php");
        break;
      case 'scholar':
        header("Location: ../dashboard_pages/scholar_dashboard.php");
        break;
      default:
        echo "Invalid role";
        break;
    }
  }
} else {
  echo "Invalid login credentials";
}

// $conn->close();
