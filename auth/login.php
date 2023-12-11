<!-- <h2>Login</h2>
<form action="./connections/login_process.php" method="post">
    <label for="email">email:</label>
    <input type="text" name="email" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <label for="role">Role:</label>
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="cashier">Cashier</option>
        <option value="grantee">Grantee</option>
    </select><br>
    <button type="submit">Login</button>
</form> -->

<?php
// include("../connections/dbconn.php");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
//     $result = $conn->query($query);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $role = $row['role'];

//         // Redirect based on role
//         switch ($role) {
//             case 'admin':
//                 header("Location: admin_dashboard.php");
//                 exit();
//             case 'scholar':
//                 header("Location: scholar_dashboard.php");
//                 exit();
//             case 'cashier':
//                 header("Location: cashier_dashboard.php");
//                 exit();
//             default:
//                 // Handle other roles or unexpected cases
//                 break;
//         }
//     } else {
//         // Handle invalid login credentials
//         echo "Invalid email or password";
//     }
// }

// Include your login form HTML here
?>