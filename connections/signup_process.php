<?php
// include("dbconn.php"); // Include your database connection script
// // Start the session at the beginning
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Retrieve form data
//   $firstname = $_POST["firstname"];
//   $middlename = $_POST["middlename"];
//   $lastname = $_POST["lastname"];
//   $email = $_POST["email"];
//   $password = $_POST["password"];
//   $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hash the password

//   // Insert user into the database
//   $sql = "INSERT INTO users (firstname, middlename, lastname, email, password, role) 
//           VALUES ('$firstname', '$middlename', '$lastname', '$email', '$hashed_password', 'scholar')";

//   if ($conn->query($sql) === TRUE) {
//     // Registration successful
//     // session_start();
//     $_SESSION['user_id'] = $conn->insert_id; // Get the ID of the newly inserted user
//     $_SESSION['firstname'] = $firstname; // You can set the firstname to be displayed on the dashboard
//     $_SESSION['role'] = $role;
//     $_SESSION['email'] = $email;
//     header("Location: ../auth/scholar_login.php");
//     exit();
//   } else {
//     // Registration failed
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
// }
// session_start();
include("../dbconfig.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();

  // Retrieve form data
  $first_name = $_POST["firstname"];
  $middle_name = $_POST["middlename"];
  $last_name = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hash the password

  // Define the user role (replace 'scholar' with the actual role variable)
  $role = 'scholar';

  // Reference to the 'users' node in Firebase
  $ref_table = 'users';

  // Check for email duplicates
  $emailExists = false;
  $usersSnapshot = $database->getReference($ref_table)->orderByChild('email')->equalTo($email)->getSnapshot();

  if ($usersSnapshot->hasChildren()) {
    $emailExists = true;
  }

  if (!$emailExists) {
    // Prepare data for Firebase
    $postData = [
      'fname' => $first_name,
      'midname' => $middle_name,
      'lname' => $last_name,
      'email' => $email,
      'pword' => $hashed_password,
      'role' => $role,
    ];

    // Push data to Firebase
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result->getKey()) {
      $_SESSION['user_id'] = $postRef_result->getKey(); // Get the key of the newly inserted user
      $_SESSION['firstname'] = $first_name; // You can set the firstname to be displayed on the dashboard
      $_SESSION['role'] = $role; // Assuming $role is defined somewhere in your code
      $_SESSION['email'] = $email;
      header("Location: ../auth/scholar_login.php");
      exit();
    } else {
      // Registration failed
      echo "Error: Registration failed.";
    }
  } else {
    // Email already exists
    echo "Error: Email already exists.";
  }
}
