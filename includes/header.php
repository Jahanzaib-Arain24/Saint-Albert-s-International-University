<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title><?php echo isset($pageTitle) ? $pageTitle : "Saint Albert University"; ?> | Saint Albert University</title>
  <link rel="icon" type="image/png" href="assets/images/cropped.png">
  <!-- Font Awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* Force Century family everywhere */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    button,
    input,
    textarea,
    a,
    p,
    h1,
    h2,
    h3,
    h4,
    li,
    span,
    div {
      font-family: 'Century Schoolbook', 'Century Gothic', 'Century', 'Times New Roman', serif;
      font-weight: normal;
    }

    body {
      background: #FFFFFF;
      color: #1f2a2e;
      line-height: 1.45;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 36px;
    }

    /* Vibrant gold & deep red palette with 3D effects */
    :root {
      --gold: #D4AF37;
      --gold-dark: #B58B2A;
      --deep-red: #9B2A2F;
      --deep-red-dark: #7A1F23;
      --forest: #1E4A4F;
      --cream: #FFF8E7;
      --charcoal: #2C2C2C;
    }

    h1,
    h2,
    h3 {
      font-family: 'Century Schoolbook', 'Century', serif;
      font-weight: 700;
      letter-spacing: -0.2px;
    }

    h2 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
      color: var(--deep-red);
      position: relative;
      display: inline-block;
    }

    h2:after {
      content: '';
      position: absolute;
      bottom: -12px;
      left: 0;
      width: 70px;
      height: 3px;
      background: var(--gold);
    }

    .section-subhead {
      font-size: 1rem;
      color: #4f5e64;
      margin-top: 1.2rem;
      margin-bottom: 2rem;
      max-width: 700px;
    }

    /* navigation */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 0;
      flex-wrap: wrap;
      border-bottom: 2px solid rgba(212, 175, 55, 0.3);
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 18px;
    }

    .saiu-logo {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 120px;
      height: 120px;
    }

    .logo-text {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .logo-text .uni-top {
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--charcoal);
      letter-spacing: 1.5px;
      margin-bottom: -2px;
    }

    .logo-text .uni-main {
      font-size: 1.8rem;
      font-weight: 900;
      color: var(--deep-red);
      line-height: 1.1;
      font-family: 'Century Schoolbook', 'Century', serif;
    }

    .logo-text .motto {
      font-size: 0.85rem;
      letter-spacing: 1px;
      color: var(--gold-dark);
      font-style: italic;
      margin-top: 2px;
    }

    .nav-links {
      display: flex;
      gap: 32px;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 600;
      font-family: 'Century Gothic', 'Century', sans-serif;
      color: var(--forest);
      transition: 0.2s;
      font-size: 0.95rem;
    }

    .nav-links a:hover {
      color: var(--gold);
    }

    .nav-links a.active {
      color: var(--gold);
      border-bottom: 2px solid var(--gold);
      padding-bottom: 4px;
    }

    /* Mobile Menu Toggle */
    .menu-toggle {
      display: none;
      background: none;
      border: none;
      font-size: 2rem;
      color: var(--deep-red);
      cursor: pointer;
      padding: 5px;
      z-index: 1001;
    }

    @media (max-width: 1100px) {
      .nav-links {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 320px;
        height: 100vh;
        background: white;
        flex-direction: column;
        padding: 100px 40px;
        box-shadow: -10px 0 30px rgba(0, 0, 0, 0.1);
        transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1000;
        gap: 25px;
      }

      .nav-links.active {
        right: 0;
      }

      .menu-toggle {
        display: block;
      }

      .logo-text .uni-main {
        font-size: 1.4rem;
      }

      .logo-text .uni-top {
        font-size: 0.7rem;
      }
    }

    @media (max-width: 480px) {
      .logo-area {
        gap: 10px;
      }

      .saiu-logo {
        width: 60px;
        height: 60px;
      }

      .logo-text .uni-main {
        font-size: 1.1rem;
      }

      .logo-text .uni-top,
      .logo-text .motto {
        font-size: 0.65rem;
      }
    }

    .btn-outline {
      border: 2px solid var(--gold);
      background: transparent;
      padding: 8px 24px;
      border-radius: 40px;
      font-weight: 700;
      color: var(--deep-red);
      cursor: pointer;
      transition: 0.2s;
    }

    .btn-outline:hover {
      background: var(--gold);
      color: var(--charcoal) !important;
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(212, 175, 55, 0.3);
    }

    /* hero */
    .hero {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 50px 0 40px;
      gap: 40px;
    }

    .hero-left {
      flex: 1.2;
    }

    .hero-badge {
      background: var(--gold);
      display: inline-block;
      padding: 6px 20px;
      border-radius: 60px;
      font-weight: 700;
      font-size: 0.85rem;
      color: var(--deep-red);
      margin-bottom: 24px;
      box-shadow: 0 4px 10px rgba(212, 175, 55, 0.3);
    }

    .hero-left h1 {
      font-size: 3.2rem;
      line-height: 1.2;
      color: var(--deep-red);
      margin-bottom: 20px;
    }

    .hero-left h1 span {
      color: var(--gold);
      border-bottom: 3px solid var(--gold);
    }

    .hero-desc {
      font-size: 1rem;
      margin: 20px 0 28px;
      background: #F9F9F9;
      padding: 16px 24px;
      border-radius: 28px;
      line-height: 1.5;
      border-left: 4px solid var(--gold);
      text-align: justify;
      color: #222;
    }

    .btn-primary {
      background: var(--forest);
      border: none;
      padding: 12px 32px;
      border-radius: 40px;
      font-weight: 700;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 6px 12px rgba(30, 74, 79, 0.3);
      text-decoration: none;
      display: inline-block;
    }

    .btn-primary:hover {
      background: #0e3a3f;
      transform: translateY(-2px);
      box-shadow: 0 10px 18px rgba(30, 74, 79, 0.4);
    }

    .hero-right {
      flex: 1;
      background: linear-gradient(145deg, #FFF8F0, #FFF3E6);
      border-radius: 48px;
      padding: 32px 24px;
      text-align: center;
      box-shadow: 0 20px 30px rgba(155, 42, 47, 0.1);
      border: 1px solid rgba(212, 175, 55, 0.4);
    }

    .crest-icon {
      font-size: 4rem;
      color: var(--gold);
      margin-bottom: 8px;
    }

    .latin-motto {
      font-size: 1.4rem;
      font-weight: 600;
      font-style: italic;
      color: var(--deep-red);
      font-family: 'Century', serif;
    }

    /* stats row with 3D impact */
    .stats-row {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      background: white;
      border-radius: 60px;
      padding: 28px 40px;
      margin: 40px 0 60px;
      box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(212, 175, 55, 0.2);
      border: 1px solid rgba(212, 175, 55, 0.5);
      transform: translateY(0);
      transition: all 0.3s ease;
    }

    .stats-row:hover {
      transform: translateY(-4px);
      box-shadow: 0 28px 40px -12px rgba(0, 0, 0, 0.2);
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 800;
      color: var(--gold-dark);
      font-family: 'Century Gothic', 'Century', sans-serif;
      text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.05);
    }

    /* rector section with 3D card */
    .rector-section {
      background: #ffffff;
      border-radius: 48px;
      padding: 44px 48px;
      margin: 50px 0;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
      box-shadow: 0 25px 40px -12px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(212, 175, 55, 0.3);
      border-left: 8px solid var(--gold);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .rector-section:hover {
      transform: translateY(-5px);
      box-shadow: 0 32px 48px -15px rgba(0, 0, 0, 0.25);
    }

    .rector-avatar {
      width: 130px;
      height: 130px;
      background: linear-gradient(135deg, var(--deep-red), var(--deep-red-dark));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3.2rem;
      color: var(--gold);
      margin: 0 auto;
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2), inset 0 2px 4px rgba(255, 255, 255, 0.3);
    }

    /* Program cards with 3D golden effect */
    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
      gap: 32px;
      margin: 40px 0;
    }

    .program-card {
      background: white;
      border-radius: 32px;
      padding: 32px 24px;
      transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      box-shadow: 0 12px 24px -8px rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(212, 175, 55, 0.2);
      border-bottom: 4px solid var(--gold);
      position: relative;
    }

    .program-card:hover {
      transform: translateY(-8px) scale(1.01);
      box-shadow: 0 28px 36px -12px rgba(0, 0, 0, 0.25), 0 0 0 2px rgba(212, 175, 55, 0.5);
      border-bottom-color: var(--gold-dark);
    }

    .card-icon {
      font-size: 2.2rem;
      color: var(--gold-dark);
      margin-bottom: 18px;
      text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.05);
    }

    /* contact office with subtle 3D */
    .contact-office {
      background: linear-gradient(135deg, var(--forest), #0f3a3f);
      border-radius: 48px;
      padding: 48px 40px;
      margin: 60px 0;
      color: white;
      text-align: center;
      box-shadow: 0 25px 35px -12px rgba(0, 0, 0, 0.3);
      transition: transform 0.25s;
    }

    .contact-office:hover {
      transform: translateY(-4px);
    }

    .contact-office h2 {
      color: white;
    }

    .contact-office h2:after {
      background: var(--gold);
      left: 50%;
      transform: translateX(-50%);
    }

    .contact-details {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
      margin: 32px 0 24px;
      font-size: 1.1rem;
    }

    /* additional cards 3D */
    .info-card {
      flex: 1;
      background: #FFFFFF;
      border-radius: 32px;
      padding: 28px;
      border-top: 5px solid var(--gold);
      box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(212, 175, 55, 0.2);
      transition: all 0.25s;
    }

    .info-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 35px -12px rgba(0, 0, 0, 0.2);
      border-top-color: var(--gold-dark);
    }

    footer {
      background: var(--charcoal);
      color: #e9dfce;
      padding: 48px 0 28px;
      margin-top: 40px;
      border-radius: 40px 40px 0 0;
    }

    .social-icons i {
      font-size: 1.4rem;
      margin-right: 20px;
      color: var(--gold);
      transition: 0.2s;
    }

    .social-icons i:hover {
      transform: translateY(-3px);
      text-shadow: 0 2px 6px rgba(212, 175, 55, 0.5);
    }

    /* Page banner for inner pages */
    .page-banner {
      background: linear-gradient(135deg, var(--deep-red), var(--deep-red-dark));
      border-radius: 0 0 48px 48px;
      padding: 60px 40px;
      text-align: center;
      color: white;
      margin-bottom: 50px;
    }

    .page-banner h1 {
      color: white;
      font-size: 2.8rem;
      margin-bottom: 10px;
    }

    .page-banner p {
      color: var(--gold);
      font-size: 1.1rem;
      font-style: italic;
    }

    /* CTA group */
    .cta-group {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
    }

    @media (max-width: 780px) {
      .container {
        padding: 0 16px;
      }

      .hero {
        padding: 30px 0;
        text-align: center;
        gap: 30px;
      }

      .hero-left h1 {
        font-size: 2.2rem;
      }

      .cta-group {
        justify-content: center;
      }

      .hero-right {
        border-radius: 24px;
        padding: 40px 20px;
      }

      .stats-row {
        grid-template-columns: 1fr !important;
        border-radius: 24px;
        padding: 20px;
      }

      .rector-section {
        padding: 24px;
        flex-direction: column;
        text-align: center;
      }

      .rector-section h2:after {
        left: 50%;
        transform: translateX(-50%);
      }

      .page-banner {
        padding: 40px 20px;
        border-radius: 0 0 24px 24px;
      }

      .page-banner h1 {
        font-size: 2rem;
      }

      .nav-links {
        gap: 16px;
      }

      .info-card {
        min-width: 100%;
      }

      .card-grid {
        grid-template-columns: 1fr !important;
      }
    }

    @media (min-width: 1101px) {
      .nav-links {
        display: flex !important;
      }
    }
  </style>
  <script>
    function toggleMenu() {
      const nav = document.getElementById('navLinks');
      const toggle = document.getElementById('menuToggle');
      nav.classList.toggle('active');
      const icon = toggle.querySelector('i');
      if (nav.classList.contains('active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    }
  </script>
</head>

<body>
  <div class="container">
    <!-- Navigation -->
    <nav class="navbar">
      <a href="index" style="text-decoration: none;">
        <div class="logo-area">
          <div class="saiu-logo">
            <img src="assets/images/logo.png" alt="SAIU Logo" style="width: 100%; height: 100%; object-fit: contain;">
          </div>
          <div class="logo-text">
            <span class="uni-top">UNIVERSITAS INTERNATIONALIS</span>
            <span class="uni-main">SAINT ALBERT'S</span>
            <span class="motto">Quality · Tradition · Service</span>
          </div>
        </div>
      </a>

      <button class="menu-toggle" id="menuToggle" onclick="toggleMenu()" aria-label="Toggle Menu">
        <i class="fas fa-bars"></i>
      </button>

      <ul class="nav-links" id="navLinks">
        <li><a href="index" <?php if ($currentPage == 'home')
          echo 'class="active"'; ?>
            onclick="toggleMenu()">Home</a></li>
        <li><a href="about" <?php if ($currentPage == 'about')
          echo 'class="active"'; ?> onclick="toggleMenu()">About
            Us</a></li>
        <li><a href="staff" <?php if ($currentPage == 'staff')
          echo 'class="active"'; ?> onclick="toggleMenu()">Our
            Staff</a></li>
        <li><a href="programs" <?php if ($currentPage == 'programs')
          echo 'class="active"'; ?>
            onclick="toggleMenu()">Programs</a></li>
        <li><a href="contact" <?php if ($currentPage == 'contact')
          echo 'class="active"'; ?>
            onclick="toggleMenu()">Contact Us</a></li>
        <li><a href="apply" <?php if ($currentPage == 'apply')
          echo 'class="active btn-outline"';
        else
          echo 'class="btn-outline"'; ?> onclick="toggleMenu()">Apply Now</a></li>
      </ul>
    </nav>
  </div>
