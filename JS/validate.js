function validateForm() {
    // Get the values of the username, email, password, and confirm password fields
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("pswrd").value;
    var confirmPassword = document.getElementById("confirm-password").value;
  
    // Define regular expressions to match the username and password requirements
    var usernameRegex = /^[a-zA-Z0-9]{5,}$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
  
    // Check if the username is valid
    if (!usernameRegex.test(username)) {
      alert("Username must be at least 5 characters and only contain letters and numbers.");
      return false;
    }
  
    // Check if the email is valid
    if (!email.includes("@")) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    // Check if the password is valid
    if (!passwordRegex.test(password)) {
      alert("Password must contain at least one number and one uppercase and lowercase letter, and be at least 8 characters long.");
      return false;
    }
  
    // Check if the password and confirm password fields match
    if (password != confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
  
    // Check if the user has agreed to the terms and conditions
    if (!document.getElementById("remember").checked) {
      alert("Please agree to the terms and conditions.");
      return false;
    }
  
    // If all validation passes, return true to submit the form
    return true;
  }
  