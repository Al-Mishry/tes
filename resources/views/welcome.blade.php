<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Awesome App Landing</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f9fafb;
      color: #1f2937;
    }
    header {
      background: linear-gradient(to right, #6366f1, #3b82f6);
      color: white;
      padding: 80px 20px;
      text-align: center;
    }
    header h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }
    header p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
    }
    .btn {
      padding: 12px 24px;
      font-size: 1rem;
      border: none;
      border-radius: 6px;
      background: white;
      color: #3b82f6;
      cursor: pointer;
      font-weight: 600;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background: #e0e7ff;
    }
    section {
      padding: 60px 20px;
      max-width: 1000px;
      margin: auto;
    }
    .features {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 40px;
    }
    .feature {
      background: white;
      padding: 20px;
      flex: 1 1 250px;
      border-radius: 8px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }
    .feature:hover {
      transform: translateY(-5px);
    }
    .feature h3 {
      margin-bottom: 10px;
      color: #111827;
    }
    .feature p {
      color: #4b5563;
    }
    footer {
      text-align: center;
      padding: 40px 20px;
      background: #f3f4f6;
      color: #6b7280;
      font-size: 0.9rem;
    }

    @media (max-width: 600px) {
      header h1 { font-size: 2.2rem; }
      header p { font-size: 1rem; }
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to AwesomeApp</h1>
    <p>The easiest way to manage your tasks, projects, and team in one place.</p>
    <button class="btn" onclick="scrollToFeatures()">Explore Features</button>
  </header>

  <section id="features">
    <h2 style="text-align:center; font-size:2rem; font-weight:700;">Features</h2>
    <div class="features">
      <div class="feature">
        <h3>🧠 Smart Organization</h3>
        <p>Automatically sort and prioritize your tasks using intelligent tagging and due dates.</p>
      </div>
      <div class="feature">
        <h3>📱 Mobile Friendly</h3>
        <p>Manage your workflow on the go with a fully responsive interface.</p>
      </div>
      <div class="feature">
        <h3>⚡ Fast Performance</h3>
        <p>Optimized for speed and smooth UX across all devices.</p>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 AwesomeApp. Built with ❤️ by YourTeam.
  </footer>

  <script>
    function scrollToFeatures() {
      document.getElementById('features').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</body>
</html>
