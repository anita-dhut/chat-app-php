# 💬 Chit Chat — Public Chat Application

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

> A secure, full-stack public chat application with user authentication, session management, and real-time messaging — built with PHP & MySQL.

---

## ✨ Features

- 🔐 **User Registration & Login** — secure sign-up and authentication system
- 🔒 **Session Management** — users stay logged in securely across pages
- 💬 **Real-time Chat Interface** — send and receive messages instantly
- 🛡️ **Data Confidentiality** — messages stored securely in MySQL database
- 📋 **Feedback Form** — users can submit feedback via contact page
- 🚪 **Logout Functionality** — clean session termination
- 📱 **Responsive UI** — works across devices

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Frontend | HTML5, CSS3, JavaScript, Bootstrap |
| Backend | PHP |
| Database | MySQL |
| Server | XAMPP (Apache) |
| IDE | VS Code |

---

## 📁 Project Structure

```
chat-app-php/
├── Assets/          # Static assets
├── CSS/             # Stylesheets
├── DB/              # Database SQL file
├── JS/              # JavaScript files
├── PHP/             # PHP backend files
├── screenshots/     # App screenshots
├── index.html       # Landing page
├── login.php        # Login logic
├── signup2.php      # Registration logic
├── chat.php         # Main chat interface
├── send.php         # Message sending logic
├── welcome.php      # Dashboard after login
└── logout.php       # Session termination
```

---

## ⚙️ How to Run Locally

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) installed (Apache + MySQL)
- Any modern browser

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/anita-dhut/chat-app-php.git
   ```

2. **Move to XAMPP's htdocs folder**
   ```bash
   # Windows
   C:/xampp/htdocs/chat-app-php

   # Mac/Linux
   /opt/lampp/htdocs/chat-app-php
   ```

3. **Start XAMPP** — start Apache and MySQL services

4. **Set up the database**
   - Open [phpMyAdmin](http://localhost/phpmyadmin)
   - Create a new database (e.g., `chatapp`)
   - Click **Import** and upload the SQL file from the `DB/` folder

5. **Run the app**
   - Open your browser and go to:
   ```
   http://localhost/chat-app-php
   ```

---

## 💡 Key Highlights

- Implements **secure session-based authentication** to protect user data
- **Optimized message handling** with efficient MySQL queries
- Clean, **responsive UI** built from scratch using HTML, CSS & Bootstrap
- Includes **feedback and contact** functionality for complete user experience
- Structured codebase with **separation of concerns** (HTML, CSS, JS, PHP in separate folders)

---

## 🙋‍♀️ Author

**Anita Dhut**
- 🌐 [GitHub](https://github.com/anita-dhut)
- 💼 [LinkedIn](https://www.linkedin.com/in/anitadhut/)
- 📧 anitadhut12@gmail.com

---

*⭐ If you found this project helpful, consider giving it a star!*
