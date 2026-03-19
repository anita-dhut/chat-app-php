<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Your Account</title>
    <link rel="stylesheet" href="./Assets/style.css">
    <link rel="stylesheet" type="text/css" href="./CSS/welcome.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
</head>
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
            <Li><A Href="#">Feedback</A></Li>
            <Li><A Href="#">Login</A></i></Li> -->
            <Li>
            <button type="button" id="logout-btn" onclick="return confirm('Are you sure you want to logout?')"><A href="logout.php">Logout</A><i class="bi bi-box-arrow-left"></i></button></Li>
        </Ul>
    </Nav>
</Header>
<main>
  <div class="content_wel">
    <h1>Welcome, <span class="username"><?php echo $_SESSION['username']; ?></span>!</h1>
    <p>"Enter our world of chat - Where every topic is on the table!"</p>
    <div class="buttons">
      <button class="btn"><a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a></button>
      <button class="btn"><a href="chat.php">Chat Here</a></button>
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
</html>
