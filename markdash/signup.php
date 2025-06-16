<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WorkMan | Sign Up</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f3f4f6, #ffffff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-container {
      background-color: white;
      padding: 2rem 3rem;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    .signup-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .signup-header h1 {
      font-size: 2rem;
      color: #111827;
      margin-bottom: 0.25rem;
    }

    .signup-header p {
      color: #6b7280;
      font-size: 0.95rem;
    }

    .form-group {
      margin-bottom: 1.25rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #374151;
    }

    input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #d1d5db;
      border-radius: 0.5rem;
      font-size: 1rem;
      transition: border-color 0.3s;
    }

    input:focus {
      outline: none;
      border-color: #2563eb;
    }

    .signup-btn {
      width: 100%;
      background-color: #2563eb;
      color: white;
      border: none;
      padding: 0.75rem;
      font-size: 1rem;
      border-radius: 0.5rem;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .signup-btn:hover {
      background-color: #1e40af;
    }

    .footer-text {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.9rem;
      color: #6b7280;
    }

    .footer-text a {
      color: #2563eb;
      text-decoration: none;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .signup-container {
        padding: 1.5rem 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <div class="signup-header">
      <h1>Join WorkMan</h1>
      <p>Employee management made easy</p>
    </div>
    <form action="backend/signup_controllerl.php" method="POST">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" placeholder="John Doe" required name="fullname"/>
      </div>
      <div class="form-group">
        <label for="email">Work Email</label>
        <input type="email" id="email" placeholder="john@company.com" required name="email" />
      </div>
      <div class="form-group">
        <label for="password">Create Password</label>
        <input type="password" id="password" placeholder="********" required name="pass" />
      </div>
       <div class="form-group">
        <label for="password2">Create Password</label>
        <input type="password" id="password2" placeholder="********" required name="confirmpass"/>
      </div>
      <button class="signup-btn" type="submit">Sign Up</button>
    </form>
    <div class="footer-text">
      Already have an account? <a href="#">Login here</a>
    </div>
  </div>
</body>
</html>
