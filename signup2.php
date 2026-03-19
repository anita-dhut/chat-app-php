<?php
// Check if form is submitted

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pswrd']) && isset($_POST['confirm-password'])) {
  // Sanitize input data
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['pswrd']);
  $confirm_password = htmlspecialchars($_POST['confirm-password']);

  // Validate input data
  if ($password !== $confirm_password) {
    echo "Passwords do not match";
  } else {
    // Connect to database
	include_once "./php/config.php";

    // Check if email is already registered
    $query = "SELECT * FROM signup WHERE email='$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      echo "<script>alert('Email is already registered')</script>";
	  header('Location: register1.html');
    } else {
      // Insert user information into database
      $query = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";
      $conn->query($query);

      // Start session and store username
      session_start();
      $_SESSION['username'] = $username;

      // Redirect user to account page
      header('Location: done.html');
      exit();
    }
  }
}
?>