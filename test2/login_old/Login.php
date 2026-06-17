<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fff8e1;
      padding: 20px;
      text-align: center;
    }

    .login-box {
      background: #fffbea;
      border: 3px dashed #fbc02d;
      padding: 25px;
      border-radius: 10px;
      max-width: 400px;
      margin: auto;
    }

    input {
      width: 90%;
      margin: 10px 0;
      padding: 10px;
      border: 2px solid #ffe082;
      border-radius: 5px;
    }

    button {
      background: #fdd835;
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 5px;
      width: 100%;
      margin-top: 10px;
      font-weight: bold;
    }

    .message {
      margin-top: 10px;
      font-weight: bold;
      padding: 10px;
      border-radius: 5px;
      display: none;
    }

    .message.success {
      background-color: #e6ffed;
      color: #2e7d32;
      border: 1px solid #a5d6a7;
    }

    .message.error {
      background-color: #ffe6e6;
      color: #d32f2f;
      border: 1px solid #ef9a9a;
    }
  </style>
</head>
<body>

<div class="login-box">
  <h2>Login</h2>
  <form id="loginForm">
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Login</button>
    <div id="msg" class="message"></div>
  </form>
</div>

<script>
  document.getElementById("loginForm").addEventListener("submit", async function(e) {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(e.target).entries());

    const res = await fetch("login_api.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(data)
    });

    const msg = document.getElementById("msg");
    try {
      const result = await res.json();
      msg.textContent = result.message;
      msg.className = result.status === "success" ? "message success" : "message error";
      msg.style.display = "block";

      if (result.status === "success") {
        setTimeout(() => {
          window.location.href = "https://sunfra.com/farm/test2/index.php"; // redirect after login
        }, 1000);
      }
    } catch {
      msg.textContent = "Unexpected server error.";
      msg.className = "message error";
      msg.style.display = "block";
    }
  });
</script>

</body>
</html>
