<?php     
// Check if form is submitted
if (isset($_POST['email']) && isset($_POST['pswrd'])) {
    // Sanitize input data
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['pswrd']);
  
    // Connect to database
    include_once "./php/config.php";
  
    // Retrieve user information from database
    $query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);
  
    // Check if user exists
    if ($result->num_rows == 1) {
      // Start session and store username
      session_start();
      $row = $result->fetch_assoc();
      $_SESSION['username'] = $row['username'];
  
      // Redirect user to account page
      header('Location: welcome.php');
      exit();
    } else {
      // Display error message
      echo "<script>alert('Invalid email or password')</script>";
      header('Location: failed.html');
    }
    exit();
  }
  
?>  