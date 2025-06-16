<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WorkMan | Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #f9fafb;
      color: #111827;
    }

    header {
      background-color: #ffffff;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: #2563eb;
    }

    nav a {
      margin-left: 1.5rem;
      text-decoration: none;
      color: #374151;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #2563eb;
    }

    .notification-banner {
      background-color: #e0f2fe;
      color: #0369a1;
      padding: 0.75rem 2rem;
      text-align: center;
      font-size: 0.95rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .notification-banner span {
      flex: 1;
    }

    .notification-banner button {
      background: none;
      border: none;
      color: #0369a1;
      font-size: 1rem;
      cursor: pointer;
      padding: 0 0.5rem;
    }

    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 6rem 2rem;
      background: linear-gradient(135deg, #eef2ff, #ffffff);
    }

    .hero h1 {
      font-size: 2.75rem;
      font-weight: 700;
      max-width: 800px;
      margin: 0;
    }

    .hero p {
      font-size: 1.125rem;
      color: #4b5563;
      margin-top: 1rem;
      max-width: 600px;
    }

    .hero button {
      margin-top: 2rem;
      background-color: #2563eb;
      color: white;
      border: none;
      padding: 0.75rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .hero button:hover {
      background-color: #1e40af;
    }

    .features {
      padding: 4rem 2rem;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .feature {
      background-color: white;
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
      text-align: center;
      transition: transform 0.2s;
    }

    .feature:hover {
      transform: translateY(-4px);
    }

    .feature h3 {
      margin-bottom: 0.5rem;
      font-size: 1.25rem;
      color: #111827;
    }

    .feature p {
      color: #6b7280;
    }

    footer {
      text-align: center;
      padding: 2rem;
      background-color: #f3f4f6;
      color: #6b7280;
      font-size: 0.875rem;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }

      nav a {
        margin-left: 1rem;
        font-size: 0.95rem;
      }
    }
  </style>
</head>

<body>

  <header>
    <div class="logo">WorkMan</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Features</a>
      <a href="#">Pricing</a>
      <a href="#">Login</a>
    </nav>
  </header>

  <?php
  if (isset($_GET['acc'])) {
  echo "<center><h1>Account Created</h1></center>";
  }


  ?>

  <section class="hero">
    <h1>Effortless Workforce Management Starts Here</h1>
    <p>Streamline HR, attendance, scheduling, and performance – all in one platform built for modern teams.</p>
    <button onclick="window.location.href='signup.html'">Get Started</button>
  </section>

  <section class="features">
    <div class="feature">
      <h3>Smart Attendance</h3>
      <p>Automated, geo-based check-ins with real-time reports for managers.</p>
    </div>
    <div class="feature">
      <h3>Shift Scheduling</h3>
      <p>Intuitive tools to manage team availability, shifts, and time-off.</p>
    </div>
    <div class="feature">
      <h3>Insights & Reports</h3>
      <p>Visualize productivity, trends, and key workforce metrics effortlessly.</p>
    </div>
  </section>

  <footer>
    &copy; 2025 WorkMan. Built for better teams.
  </footer>

</body>

</html>