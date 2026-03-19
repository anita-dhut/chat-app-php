<?php
// Start the session
session_start();

// Connect to the database
include_once "./php/config.php";

// Get the form data
$username = $_SESSION["username"];
$message = mysqli_real_escape_string($conn, $_POST["message"]);

// Insert the message into the database
$sql = "INSERT INTO chat_messages (username, message, timestamp) VALUES ('$username', '$message', NOW())";
if (mysqli_query($conn, $sql)) {
    header('Location: chat.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// Close the database connection
mysqli_close($conn);
?>
