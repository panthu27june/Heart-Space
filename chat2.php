<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="x-icon" href="https://i.ibb.co/Sw6myQGM/Screenshot-2025-04-28-105042.png">
    <title>Chat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/chat.css">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
  .header{
    /* background: linear-gradient(to right, #00b4db, #8a2be2); */
    /* background: linear-gradient(to right, #6a00f4, #00c9ff, #ffeb00, #ff7300, #ff0000); */
    background-color: #F2F9FF;
    /* background-color: burlywood; */
    /* background-color: aqua; */
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5px;
    border-radius: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }
  
  .logo{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap:20px;
  }
  
  b{
    color: #EE4B2B;
  }
  
  .pages{
    font-size: 30px;
    display: flex;
    gap: 30px;
  }
  
  a{
    color: black;
    padding: 5px;
  }
  
  a:link{
    color: black;
    text-decoration: none;
  }
a:hover{
    /* background: linear-gradient(to right, #ff007f, #3b5998); */
    /* background: linear-gradient(to right, #ff3366, #6a0dad); */
    background-color: skyblue;
    border-radius: 10px;
    color: #EE4B2B;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  a:active{
    color: white;
    text-decoration: none;
  }

  .footer {
  background-color: gray;
  color: #fff;
  padding: 10px 190px 10px 190px;
  border-radius: 25px;
  border: 2px solid #ffffff20;
  margin: 20px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
  text-align: center;
  font-family: 'Poppins', sans-serif;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
  max-width: 1100px;
}

div.uh a:hover{
    background-color: gray;
    color: black;
  }

.footer .lo img {
  width: 145px;
  height: 95px;
  border-radius: 15px;
  box-shadow: 0 0 10px #ee4b2b88;
}

.footer h1 {
  font-size: 24px;
  color: #EE4B2B;
  margin-bottom: 8px;
}

.footer h2 {
  font-size: 14px;
  color: #cccccc;
  font-weight: normal;
  margin-bottom: 15px;
  font-style: italic;
}

.footer .pa h2:first-child,
.footer .pr h2:first-child {
  font-size: 16px;
  font-weight: bold;
  color: black;
  font-style: normal;
}

.footer a {
  color: #ffffff;
  text-decoration: none;
  display: inline-block;
  margin: 5px 0;
  font-size: 14px;
  transition: all 0.3s ease;
  /* background-color: #2e2e2e; */
  padding: 6px 12px;
  border-radius: 15px;
}

/* .footer a:hover {
  background-color: #EE4B2B;
  color: #fff;
  box-shadow: 0 0 8px #EE4B2B;
} */

/* Responsive Layout */
@media (max-width: 768px) {
  .footer {
    flex-direction: column;
    text-align: center;
    align-items: center;
  }

  .footer .lo,
  .footer .pa,
  .footer .pr {
    width: 100%;
  }

  .footer h1 {
    font-size: 20px;
  }

  .footer h2 {
    font-size: 13px;
  }

  .footer a {
    font-size: 13px;
    padding: 5px 10px;
  }
}

    </style>
</head>
<body>
    <div>
        <div class="header">
            <div class="logo">
                <img src="https://i.ibb.co/Sw6myQGM/Screenshot-2025-04-28-105042.png" alt="HeartSpace Error" height="95px" width="145px" style="border-radius: 15px;">
                <div class="title">
                    <h1 style="text-decoration: underline; text-decoration-color: black;"><b>HEART</b> SPACE</h1>
                </div>
            </div>

            <div class="pages">
                <a href="index.html" class="iconpages"><img class="iconimg" src="https://i.ibb.co/KcN5ZYhK/Home.png">Home</a>
                <a href="voice2.html" class="iconpages"><img class="iconimg" src="https://i.ibb.co/GwCM8tj/Voice.png">Voice</a>
                <a href="text2.html" class="iconpages"><img class="iconimg" src="https://i.ibb.co/4nzK5bh5/Text.png">Text</a>
                <a href="chat2.php" class="iconpages"><img class="iconimg" src="https://i.ibb.co/4g4YKpmJ/Chat.png">Chat</a>
            </div>

            <div class="register">
                <div class="signup">
                    <button onclick="document.location='signup.php'" class="logout">
                        <!-- <img class="iconimg" src="https://i.ibb.co/TBdgHQdB/Lock.png" alt="Signup Icon Error">SIGN UP -->
                        Sign Up
                    </button>
                </div>
                <div class="signup">
                    <button onclick="document.location='login.php'" class="logout">
                        <!-- <img class="iconimg" src="https://i.ibb.co/vFRzQWr/Unlock.png" alt="Login Icon Error">LOGIN -->
                         Login
                    </button>
                </div>
            </div>
            </div>
        </div>

        <div class="chat-container">
            <div class="chat-sidebar">
                <h3>HeartSpace AI Assistant</h3>
                <p>Welcome to HeartSpace AI Chat. I'm here to listen, provide support, and have meaningful conversations.</p>
                
                <div class="chat-info">
                    <h4>I can help with:</h4>
                    <ul>
                        <li>Emotional support and reflection</li>
                        <li>Creative writing and poetry</li>
                        <li>Mindfulness and self-care ideas</li>
                        <li>Thought-provoking conversations</li>
                    </ul>
                    
                    <div class="chat-disclaimer">
                        <p><strong>Please note:</strong> I'm an AI assistant, not a replacement for professional mental health services.</p>
                    </div>
                </div>
                
                <button id="newChatButton" class="sidebar-button">
                    <i data-feather="plus-circle"></i> New Conversation
                </button>
                
                <div class="chat-history">
                    <h4>Recent Conversations</h4>
                    <div id="chatHistoryList">
                        <!-- Chat history will appear here if logged in -->
                        <?php if (!isset($_SESSION['id'])): ?>
                        <p class="login-prompt">Log in to save your conversations</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="chat-main">
                <div class="chat-header">
                    <h2>HeartSpace AI Chat</h2>
                    <div class="chat-actions">
                        <button id="clearChatButton" title="Clear chat">
                            <i data-feather="trash-2"></i>
                        </button>
                    </div>
                </div>
                
                <div id="chatMessages" class="chat-messages">
                    <div class="message ai-message">
                        <div class="message-avatar">
                            <svg class="heartspace-avatar" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#EE4B2B" />
                                <path d="M20 10 L26 18 L32 10 L30 24 L20 30 L10 24 L8 10 L14 18 Z" fill="#FFF5D7" />
                            </svg>
                        </div>
                        <div class="message-content">
                            <div class="message-sender">HeartSpace AI</div>
                            <!-- <div class="message-text">
                                <p>Hello! I'm the HeartSpace AI assistant. How are you feeling today? I'm here to chat, listen, or just keep you company.</p>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="chat-input-container">
                    <form id="chatForm">
                        <textarea id="messageInput" placeholder="Type your message here..." rows="2"></textarea>
                        <button type="submit" id="sendButton">
                            <i data-feather="send"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
        <div class="lo">
          
          <img src="https://i.ibb.co/Sw6myQGM/Screenshot-2025-04-28-105042.png" alt="HeartSpace Error" height="95px" width="145px" style="border-radius: 15px;">
        </div>
        <div>
        <div class="title">
                    <h1 style="text-decoration: underline; color: black;"><b>HEART</b> SPACE<h1>
                      <h2 style="color:white;">
                        Your Heart, Finally Unmuted in the Universe.
                      </h2>
                </div>
          </div>
        <div class="pa">
          <div>
            <h2>
              Resources
            </h2>
          </div>
          <div class="uh">
            <a href="index.html" class="h">Home</a> <br>
            <a href="voice2.html" class="v">Voice</a> <br>
            <a href="text2.html" class="te">Text</a> <br>
            <a href="chat2.php" class="c">Chat</a>
          </div>
        </div>
        <div class="pr">
  <div>
    <div>
      <h2>
        Media
      </h2>
    </div>
    <div class="uh">
      <h2>
      <a href="https://prezi.com/view/OxHbC5bgJvt9LUesxJBE/" target="_blank" class="h" style="display: flex; align-items: center; gap: 8px;">
        <img src="https://img.icons8.com/?size=100&id=8JgRjpFgiV6g&format=png&color=000000" alt="Presentation Icon" width="20" height="20">
        Presentation
      </a>
    </h2>
    </div>
    
  </div>
  <div class="uh">
    <h2>
      <a href="Heart Space.pdf" target="_blank" class="h" style="display: flex; align-items: center; gap: 8px;">
        <img src="https://img.icons8.com/?size=100&id=53380&format=png&color=000000" alt="Project Report Icon" width="20" height="20">
        Project Report
      </a>
    </h2>
  </div>
</div>

      </div>
    </div>
    
    <script src="script.js"></script>
    <script src="assets/js/chat.js"></script>
    <script>
        // Initialize Feather icons
        feather.replace();
    </script>
</body>
</html>
