<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Awesome App Landing</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --secondary: #10b981;
      --text: #e5e7eb;
      --text-secondary: #9ca3af;
      --bg: #111827;
      --bg-secondary: #1f2937;
      --card-bg: #1f2937;
      --card-hover: #374151;
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .light-mode {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --secondary: #10b981;
      --text: #111827;
      --text-secondary: #4b5563;
      --bg: #f9fafb;
      --bg-secondary: #ffffff;
      --card-bg: #ffffff;
      --card-hover: #f3f4f6;
    }

    * {
      margin: 0; 
      padding: 0; 
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg);
      color: var(--text);
      transition: var(--transition);
      overflow-x: hidden;
    }
    header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      padding: 100px 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    header::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      transform: rotate(30deg);
      pointer-events: none;
    }
    header h1 {
      font-size: 3.5rem;
      margin-bottom: 1.5rem;
      font-weight: 800;
      position: relative;
      background: linear-gradient(to right, #fff, #e0e7ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.8s ease forwards;
    }
    header p {
      font-size: 1.25rem;
      margin-bottom: 2.5rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      color: rgba(255,255,255,0.9);
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.8s ease 0.2s forwards;
    }
    .btn {
      padding: 14px 32px;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      background: white;
      color: var(--primary);
      cursor: pointer;
      font-weight: 600;
      transition: var(--transition);
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      position: relative;
      overflow: hidden;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.8s ease 0.4s forwards;
    }
    .btn::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(255,255,255,0.3), transparent);
      transform: translateY(-100%);
      transition: var(--transition);
    }
    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px rgba(0,0,0,0.2);
    }
    .btn:hover::after {
      transform: translateY(0);
    }
    .btn-secondary {
      background: transparent;
      color: white;
      border: 1px solid rgba(255,255,255,0.2);
      margin-left: 15px;
    }
    .btn-secondary:hover {
      background: rgba(255,255,255,0.1);
    }
    section {
      padding: 80px 20px;
      max-width: 1200px;
      margin: auto;
    }
    .section-title {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 60px;
      font-weight: 700;
      position: relative;
      display: inline-block;
      left: 50%;
      transform: translateX(-50%);
    }
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      border-radius: 2px;
    }
    .features {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 40px;
      justify-content: center;
    }
    .feature {
      background: var(--card-bg);
      padding: 30px;
      flex: 1 1 300px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      transition: var(--transition);
      border: 1px solid rgba(255,255,255,0.05);
      opacity: 0;
      transform: translateY(20px);
    }
    .feature.animate {
      animation: fadeInUp 0.6s ease forwards;
    }
    .feature:nth-child(1).animate {
      animation-delay: 0.1s;
    }
    .feature:nth-child(2).animate {
      animation-delay: 0.2s;
    }
    .feature:nth-child(3).animate {
      animation-delay: 0.3s;
    }
    .feature:hover {
      transform: translateY(-10px) !important;
      background: var(--card-hover);
      box-shadow: 0 15px 35px rgba(0,0,0,0.3);
    }
    .feature h3 {
      margin-bottom: 15px;
      color: var(--text);
      font-size: 1.5rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .feature p {
      color: var(--text-secondary);
      line-height: 1.6;
    }
    .feature-icon {
      font-size: 2rem;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    footer {
      text-align: center;
      padding: 60px 20px;
      background: var(--bg-secondary);
      color: var(--text-secondary);
      font-size: 0.9rem;
      border-top: 1px solid rgba(255,255,255,0.05);
    }
    .theme-toggle {
      position: fixed;
      top: 20px;
      right: 20px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--bg-secondary);
      border: none;
      color: var(--text);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      z-index: 100;
      transition: var(--transition);
    }
    .theme-toggle:hover {
      transform: scale(1.1);
    }
    .floating-shapes {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      pointer-events: none;
    }
    .shape {
      position: absolute;
      opacity: 0.1;
      border-radius: 50%;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      filter: blur(40px);
    }
    @keyframes float {
      0%, 100% {
        transform: translateY(0) rotate(0deg);
      }
      50% {
        transform: translateY(-20px) rotate(5deg);
      }
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      header h1 { font-size: 2.5rem; }
      header p { font-size: 1.1rem; }
      .section-title { font-size: 2rem; }
      .btn {
        padding: 12px 24px;
        display: block;
        width: 100%;
        max-width: 250px;
        margin: 0 auto 15px;
      }
      .btn-secondary {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <button class="theme-toggle" id="themeToggle">🌓</button>

  <header>
    <div class="floating-shapes" id="floatingShapes"></div>
    <h1>Welcome to AwesomeApp</h1>
    <p>The easiest way to manage your tasks, projects, and team in one place. Experience productivity like never before with our intuitive platform.</p>
    <div>
      <button class="btn" onclick="scrollToFeatures()">Explore Features</button>
      <button class="btn btn-secondary" onclick="alert('Coming soon!')">Watch Demo</button>
    </div>
  </header>

  <section id="features">
    <h2 class="section-title">Features</h2>
    <div class="features">
      <div class="feature">
        <h3><span class="feature-icon">🧠</span> Smart Organization</h3>
        <p>Automatically sort and prioritize your tasks using intelligent tagging and due dates. Our AI learns your workflow to optimize your productivity.</p>
      </div>
      <div class="feature">
        <h3><span class="feature-icon">📱</span> Mobile Friendly</h3>
        <p>Manage your workflow on the go with a fully responsive interface that adapts perfectly to any device size or orientation.</p>
      </div>
      <div class="feature">
        <h3><span class="feature-icon">⚡</span> Fast Performance</h3>
        <p>Optimized for speed and smooth UX across all devices. Experience instant loading and seamless transitions.</p>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 AwesomeApp. Built with ❤️ by YourTeam.
    <div style="margin-top: 20px; font-size: 0.8rem;">
      <a href="#" style="color: var(--text-secondary); margin: 0 10px;">Privacy Policy</a>
      <a href="#" style="color: var(--text-secondary); margin: 0 10px;">Terms of Service</a>
      <a href="#" style="color: var(--text-secondary); margin: 0 10px;">Contact Us</a>
    </div>
  </footer>

  <script>
    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    themeToggle.addEventListener('click', () => {
      document.body.classList.toggle('light-mode');
      themeToggle.textContent = document.body.classList.contains('light-mode') ? '🌙' : '🌓';
    });

    // Animate features on scroll
    const features = document.querySelectorAll('.feature');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
        }
      });
    }, { threshold: 0.1 });

    features.forEach(feature => {
      observer.observe(feature);
    });

    // Floating shapes animation
    const floatingShapes = document.getElementById('floatingShapes');
    for (let i = 0; i < 5; i++) {
      const shape = document.createElement('div');
      shape.classList.add('shape');
      shape.style.width = `${Math.random() * 300 + 100}px`;
      shape.style.height = shape.style.width;
      shape.style.left = `${Math.random() * 100}%`;
      shape.style.top = `${Math.random() * 100}%`;
      shape.style.animation = `float ${Math.random() * 10 + 10}s ease-in-out infinite`;
      shape.style.animationDelay = `${Math.random() * 5}s`;
      floatingShapes.appendChild(shape);
    }

    function scrollToFeatures() {
      document.getElementById('features').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</body>
</html>