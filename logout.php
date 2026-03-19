<?php
// Start the session
session_start();

// Clear the chat history for the current user
if (isset($_SESSION['username'])) {
  include_once "./php/config.php";
  $user_id = $_SESSION['username'];
  $sql = "DELETE FROM chat_messages WHERE username='" . $_SESSION['username'] . "'";
  mysqli_query($conn, $sql);
  
  mysqli_close($conn);
}

// Destroy the session and redirect the user to the login page
session_unset();
session_destroy();
header("Location: index.html");
exit();
?>