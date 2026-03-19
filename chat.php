<?php

// Start the session
session_start();
// Redirect to login page if username is not set in the session
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// Connect to the database
include_once "./php/config.php";
// Retrieve the messages from the database
$sql = "SELECT * FROM chat_messages";
$result = mysqli_query($conn, $sql);
// Define a function to format the message text
function formatMessage($message) {
    // Replace line breaks with HTML line breaks
    $message = nl2br(htmlspecialchars($message)); 
    // Add some styling
    $message = "<div class='message'>$message</div>";
    return $message;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChitChat - Public Chat</title>
    <link rel="stylesheet" href="./Assets/style.css" >
    <link rel="stylesheet" href="./CSS/chat1.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
</head>
<body>
<Header Class="Site-Header">          
		  <Div Class="Site-Identity">
			  <H1><A Href="Index.html">
				<span><img class="logo" src="./images/bubble-chat.png" alt="LOGO-IMG" srcset="">
				</span> ChitChat</A></H1>
		  </Div>
		  <Nav Class="Site-Navigation">
			  <Ul Class="Nav">
				  <!-- <Li><A Href="Index.html">Home</A></Li>
				  <Li><A Href="about.html">About</A></Li>
				  <Li><A Href="#">Feedback</A></Li>-->
				  <Li><button type="button" id="refresh-btn">Refresh<i class="bi bi-arrow-clockwise"></i></button></Li> 
				  <Li>    
    <button type="button" id="logout-btn" onclick="return confirm('Are you sure you want to logout?')"><A href="logout.php">Logout</A><i class="bi bi-box-arrow-left"></i></button>
              </Li>
			  </Ul>
		  </Nav>
	  </Header>
    <main>
  <div class="chat-container">
    <div class="header">
      <h2>Welcome, <span style="text-transform: uppercase; font-weight: bold; color: purple"><?php echo $_SESSION["username"]; ?></span> !</h2>
      <p class="catchy-line">Join the conversation!</p>
      <div class="background-dropdown">
    <label for="background-select">Select Background:</label>
    <select id="background-select">
        <option value="white" style="background-color: white; color: black;">White</option>
        <option value="lightblue" style="background-color: lightblue; color: white;">Light Blue</option>
        <option value="lightgray" style="background-color: lightgray; color: black;">Light Gray</option>
        <option value="lightgreen" style="background-color: lightgreen; color: black;">Light Green</option>
        <option value="pink" style="background-color: pink; color: black;">Pink</option>
        <option value="purple" style="background-color: purple; color: white;">Purple</option>
    </select>
</div>
    </div>
    <div class="chatbox">
      <?php
        // Display the messages
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $username = $row["username"];
            $message = $row["message"];
            $time = date('H:i:s', strtotime($row['timestamp'])); // format the time
            // Add some styling to differentiate the user's messages
            if ($username == $_SESSION["username"]) {
              $username = "<img src='./Images\user.png' class='user-icon'><span class='me'> $username</span>";
              $message = "<div class='my-message'>" . formatMessage($message) . "<span class='time'>$time</span></div>";
            } else {
              $username = "<img src='./Images\user1.png' class='user-icon'><span class='other'>$username</span>";
              $message = "<div class='other-message'>" . formatMessage($message) . "<span class='time'>$time</span></div>";
            }
            echo "<div class='message-container'>$username: $message</div>";
          }
        } else {
          echo "<div class='message-container'>No messages yet</div>";
        }
      ?>
    </div>
    <div class="input-box">
      <form action="send.php" method="post">
        <input type="text" name="message" placeholder="Type your message here...">
        <button type="submit">Send</button>
      </form>
    </div>
  </div>
</main>


<footer class="footer">
    <div class="copy">&copy; CHITCHAT DEVELOPERS</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="Index.html">Home</a>
        <a href="about.html">About</a>
        <a href="feedback.html">Contact</a>
      </div>
      <div class="links">
        <span>Social Links</span>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </footer>	
</body>
<script src="./JS/bgchat.js"></script>
<script>
  const refreshBtn = document.getElementById('refresh-btn');
refreshBtn.addEventListener('click', function() {
  location.reload();
});
</script>
</html>