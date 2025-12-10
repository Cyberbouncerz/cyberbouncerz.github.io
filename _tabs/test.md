---
layout: page
permalink: /test/
icon: fas fa-envelope
---

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>CyberBouncerz Intro & Site</title>
<style>
  /* Reset and Base */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background: #0a0a0a;
    color: #eee;
    overflow: hidden;
  }

  /* Binary Background */
  #binary-bg {
    position: fixed;
    inset: 0;
    font-family: monospace;
    font-size: 10px;
    color: rgba(0, 255, 136, 0.05);
    pointer-events: none;
    user-select: none;
    z-index: 0;
  }

  /* Terminal Intro Screen */
  #intro {
    position: fixed;
    inset: 0;
    background: radial-gradient(circle at center, #010101 0%, #0c0c0c 100%);
    color: #00ff88;
    font-family: monospace, monospace;
    font-size: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    white-space: pre-wrap;
    line-height: 1.5;
    text-shadow: 0 0 6px #00ff88, 0 0 12px #00ff88;
    overflow-y: auto;
    z-index: 999;
  }

  /* Computer + Desk Container */
  #computer {
    position: fixed;
    inset: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 1200px;
    opacity: 0;
    transform: scale(0.5) rotateX(15deg);
    transition: opacity 2s ease, transform 2s ease;
    z-index: 500;
  }

  #desk-container {
    position: relative;
    width: 90vw;
    max-width: 900px;
    height: 600px;
    background: url('/mnt/data/e231808a-7efd-43f1-a6f4-2e6693adf4f9.png') no-repeat center bottom;
    background-size: contain;
    filter: drop-shadow(0 0 10px #00ff88cc);
    border-radius: 12px;
  }

  /* Monitor screen iframe */
  #monitor-frame {
    position: absolute;
    top: 96px;    /* Adjust to monitor area top */
    left: 145px;  /* Adjust to monitor area left */
    width: 610px; /* Monitor width */
    height: 320px;/* Monitor height */
    border: 6px solid #4CAF50;
    border-radius: 10px;
    box-shadow: 0 0 30px #4CAF5080;
    background: white;
    overflow: hidden;
  }

  #monitor-frame iframe {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
  }
</style>
</head>
<body>

<!-- Binary effect background -->
<div id="binary-bg"></div>

<!-- Terminal intro screen -->
<div id="intro"><div id="terminal"></div></div>

<!-- Computer desk + monitor with embedded iframe -->
<div id="computer" aria-hidden="true">
  <div id="desk-container" role="img" aria-label="Desk with computer monitor">
    <div id="monitor-frame" aria-label="Website display on computer monitor">
      <iframe
        srcdoc='
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Our Services</title>
<style>
  body {
    background-color: #2c3e50;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    margin: 0; padding: 20px; color: #fff;
    overflow-x: auto; box-sizing: border-box;
  }
  .logo-container {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
  }
  .logo-container img {
    max-width: 150px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    animation: pulse-shift 2s ease-in-out infinite alternate;
  }
  @keyframes pulse-shift {
    0% { transform: scale(1) translateX(0); }
    100% { transform: scale(1.05) translateX(5px); }
  }
  h1 {
    font-size: 2.2em;
    text-align: center;
    margin-bottom: 25px;
    color: #4caf50;
  }
  .services-container {
    display: flex;
    gap: 20px;
    padding: 0 15px;
    justify-content: space-between;
  }
  .service-item {
    background: rgba(255,255,255,0.05);
    border-left: 5px solid #4caf50;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    flex: 1 1 30%;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.6s ease-out forwards, swivel-drop 2s ease-in-out infinite alternate;
    transition: box-shadow 0.3s ease;
  }
  @keyframes fadeInUp {
    to { opacity: 1; transform: translateY(0); }
  }
  @keyframes swivel-drop {
    0% { transform: rotateY(0deg) translateY(0); }
    25% { transform: rotateY(15deg) translateY(10px); }
    50% { transform: rotateY(-15deg) translateY(20px); }
    75% { transform: rotateY(15deg) translateY(10px); }
    100% { transform: rotateY(0deg) translateY(0); }
  }
  .service-item img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    animation: pulse-shift 2s ease-in-out infinite alternate;
  }
  .service-item h2 {
    color: #f1f1f1;
    margin-bottom: 10px;
  }
  .service-item p {
    color: #ccc;
    line-height: 1.6;
  }
  .faq-container {
    margin-top: 40px;
    padding: 0 15px;
  }
  .faq-container h3 {
    text-align: center;
    color: #4caf50;
    margin-bottom: 25px;
  }
  .faq-item {
    margin-bottom: 15px;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 4px;
    overflow: hidden;
  }
  .faq-question {
    background: rgba(255,255,255,0.05);
    color: #f1f1f1;
    cursor: pointer;
    padding: 10px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .faq-question::after {
    content: "+";
    font-size: 1.2em;
  }
  .faq-item.open .faq-question::after {
    content: "-";
  }
  .faq-answer {
    background: #34495e;
    color: #ccc;
    padding: 10px;
    line-height: 1.6;
    display: none;
  }
  .faq-item.open .faq-answer {
    display: block;
  }
  @media (max-width: 768px) {
    body { padding: 10px; }
    h1 { font-size: 1.8em; margin-bottom: 15px; }
    .services-container { flex-direction: column; gap: 15px; }
    .service-item {
      width: 100%;
      padding: 15px;
      animation: fadeInUp 0.6s ease-out forwards;
      transform: none;
    }
    .service-item h2 { font-size: 1.2em; }
    .service-item p { font-size: 0.9em; }
    .faq-container h3 { font-size: 1.5em; margin-bottom: 20px; }
    .faq-question { font-size: 1.1em; padding: 10px; }
    .faq-answer { font-size: 0.9em; }
    .logo-container img { max-width: 120px; }
  }
</style>
</head>
<body>
  <div class="logo-container">
    <img src="PNG file-2.png" alt="Logo" />
  </div>
  <h1>Our Services</h1>
  <section class="services-container">
    <div class="service-item">
      <img src="1742496723906.jpg" alt="Cybersecurity expert panel discussing digital safety" />
      <h2>Expert Panel</h2>
      <p>Connect with a team of cybersecurity experts covering a range of topics, from protecting your online presence to navigating the digital landscape, all here to answer your Questions and share practical insights.</p>
    </div>
    <div class="service-item">
      <img src="1742498458560.jpg" alt="Simple and clean user interface design" />
      <h2>User Friendly Interface</h2>
      <p>Our website features a simple and easy to use design, ensuring that users can effortlessly find the cybersecurity information they need with clear categories, and a user-friendly layout.</p>
    </div>
    <div class="service-item">
      <img src="1742497812008.jpg" alt="Clear and concise terms explanation" />
      <h2>User Friendly Terms</h2>
      <p>We explain cybersecurity without using complicated language so it is easy for everyone to understand. Aiming to simplify the world of digital security for a straightforward and inclusive experience.</p>
    </div>
  </section>
  <div class="faq-container">
    <h3>Frequently Asked Questions</h3>
    <div class="faq-item">
      <div class="faq-question">What is Cyber Bouncerz?</div>
      <div class="faq-answer">Cyber Bouncerz is a collective of accredited cybersecurity consultants ready to address any cybersecurity concerns.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">Who is Cyber Bouncerz aimed to help?</div>
      <div class="faq-answer">Cyber Bouncerz is designed to assist anyone in need of cybersecurity services.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">How can I contact Cyber Bouncerz?</div>
      <div class="faq-answer">You can reach out to Cyber Bouncerz by clicking on the "contact us" tab on our website.</div>
    </div>
  </div>
  <script>
    const faqQuestions = document.querySelectorAll(".faq-question");
    faqQuestions.forEach(q => q.addEventListener("click", () => {
      const parent = q.parentNode;
      parent.classList.toggle("open");
      const answer = q.nextElementSibling;
      answer.style.maxHeight = parent.classList.contains("open") ? answer.scrollHeight + "px" : null;
    }));
  </script>
</body>
</html>
'
      ></iframe>
    </div>
  </div>
</div>

<script>
  // Terminal lines to simulate "hacking"
  const terminalLines = [
    "Initializing system boot...",
    "Loading secure modules...",
    "Validating encryption layers...",
    "Handshake successful.",
    "Scanning local environment...",
    "Establishing secure tunnel...",
    "Integrity check: PASS",
    "Loading CyberBouncerz Framework...",
    "Running diagnostics...",
    " - Firewall integrity........OK",
    " - Endpoint status............OK",
    " - Data streams...............OK",
    "Deploying security layers...",
    "Generating session keys...",
    "Streaming binary packets: 01010101 10101010 11110000",
    "Preparing interface...",
    "Finalizing environment...",
    "Launching CyberBouncerz dashboard..."
  ];

  const terminal = document.getElementById("terminal");
  let currentLine = 0;

  function typeNextLine() {
    if (currentLine < terminalLines.length) {
      terminal.textContent += "> " + terminalLines[currentLine] + "\n";
      terminal.scrollTop = terminal.scrollHeight;
      currentLine++;
      setTimeout(typeNextLine, 120);
    } else {
      setTimeout(showComputer, 800);
    }
  }

  function showComputer() {
    const intro = document.getElementById("intro");
    const computer = document.getElementById("computer");

    intro.style.transition = "opacity 1.5s ease";
    intro.style.opacity = 0;

    computer.style.opacity = 1;
    computer.style.transform = "scale(1) rotateX(0deg)";

    setTimeout(() => {
      intro.style.display = "none";
      document.body.style.overflowY = "auto";
    }, 1500);
  }

  // Binary background effect
  const binaryBg = document.getElementById("binary-bg");
  const binaryDrops = Array.from({ length: 300 }, () => ({
    x: Math.random() * 100,
    y: Math.random() * 100,
    speed: 0.05 + Math.random() * 0.2
  }));

  function animateBinary() {
    binaryBg.innerHTML = "";
    for (const drop of binaryDrops) {
      drop.y += drop.speed;
      if (drop.y > 100) drop.y = 0;

      const span = document.createElement("span");
      span.style.position = "absolute";
      span.style.left = drop.x + "vw";
      span.style.top = drop.y + "vh";
      span.style.fontSize = "10px";
      span.style.color = "rgba(0,255,136,0.05)";
      span.textContent = Math.random() > 0.5 ? "0" : "1";
      binaryBg.appendChild(span);
    }
    requestAnimationFrame(animateBinary);
  }

  // Start animations
  typeNextLine();
  animateBinary();
</script>

</body>
</html>
