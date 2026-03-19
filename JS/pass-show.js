function togglePasswordVisibility() {
  const passwordInput = document.getElementById("pswrd");
  const icon = document.querySelector(".fas.fa-lock");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    icon.classList.remove("fa-lock");
    icon.classList.add("fa-unlock");
  } else {
    passwordInput.type = "password";
    icon.classList.remove("fa-unlock");
    icon.classList.add("fa-lock");
  }
}