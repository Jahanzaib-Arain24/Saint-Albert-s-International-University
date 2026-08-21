<?php
$pageTitle = "About Us";
$currentPage = "about";
include 'includes/header.php';
?>

<!-- Page Banner -->
<div class="page-banner">
  <h1>About Us</h1>
  <p>Giving World-Class Education</p>
</div>

<div class="container">

  <!-- About Us Intro -->
  <div class="rector-section about-intro-section"
    style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
    <div class="about-image-wrapper"
      style="flex: 1.2; overflow: hidden; border-radius: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); min-width: 300px;">
      <img src="assets/images/university_hero_bg.png" alt="Saint Albert University Campus"
        style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="rector-message about-text-wrapper" style="flex: 2; min-width: 300px;">
      <h3 style="font-size: 1.8rem; color: var(--deep-red);">About Us</h3>
      <p style="margin-top: 16px; line-height: 1.7;">Saint Albert's International University is a center of academic
        excellence and character development, committed to raising a generation of knowledgeable, purpose-driven, and
        morally grounded individuals. Rooted in strong values and a passion for learning, we offer a dynamic educational
        experience that prepares students to succeed in their careers and make a meaningful impact in their communities.
      </p>
      <p style="margin-top: 16px; line-height: 1.7;">Our dedicated faculty, diverse programs, and supportive environment
        ensure that every student receives the guidance, inspiration, and tools needed to grow intellectually and
        personally. At Saint Albert's International University, we don't just educate minds—we shape futures.</p>
      <p style="margin-top: 16px; line-height: 1.7; font-weight: 600; color: var(--gold-dark);">Join us as we empower
        leaders for every generation.</p>
      <div style="margin-top: 24px; display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="apply" class="btn-primary">Register Now →</a>
        <a href="contact" class="btn-outline">Contact Us</a>
      </div>
    </div>
  </div>

  <!-- Mission & Vision, Administration, Academics — Tabbed Sections -->
  <div style="margin: 60px 0;">
    <style>
      .tabs-nav {
        display: flex;
        gap: 0;
        flex-wrap: nowrap;
        margin-bottom: 0;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .tabs-nav::-webkit-scrollbar {
        height: 6px;
      }

      .tabs-nav::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 10px;
      }

      .tabs-nav button {
        flex: 1;
        min-width: 250px;
        padding: 24px 20px;
        border: none;
        background: #f5f0e8;
        cursor: pointer;
        text-align: left;
        font-family: inherit;
        transition: 0.3s;
        border-bottom: 4px solid transparent;
        display: flex;
        align-items: center;
        gap: 16px;
        flex-shrink: 0;
      }

      .tabs-nav button.active {
        background: white;
        border-bottom: 4px solid var(--gold);
        box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.05);
      }

      .tabs-nav button:hover {
        background: #fff;
      }

      .tabs-nav button i {
        font-size: 1.8rem;
        color: var(--gold-dark);
      }

      .tabs-nav button .tab-label strong {
        display: block;
        font-size: 1.05rem;
        color: var(--deep-red);
        margin-bottom: 2px;
      }

      .tabs-nav button .tab-label span {
        font-size: 0.82rem;
        color: #777;
      }

      .tab-panel {
        display: none;
        background: white;
        padding: 40px;
        border-radius: 0 0 32px 32px;
        box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
        line-height: 1.8;
      }

      .tab-panel.active {
        display: block;
      }

      .tab-panel h3 {
        color: var(--deep-red);
        margin-bottom: 16px;
        font-size: 1.4rem;
      }

      .tab-panel p {
        margin-bottom: 16px;
      }

      @media (max-width: 780px) {
        .about-intro-section {
          flex-direction: column;
          text-align: center;
        }

        .about-text-wrapper {
          text-align: center;
        }

        .about-text-wrapper div {
          justify-content: center;
        }

        .tab-panel {
          padding: 24px 16px;
        }

        .tabs-nav button {
          min-width: 280px;
          padding: 16px;
        }
      }
    </style>

    <div class="tabs-nav">
      <button class="active" onclick="showTab('mission')">
        <i class="far fa-compass"></i>
        <div class="tab-label">
          <strong>Mission & Vision</strong>
          <span>Explore the Passion</span>
        </div>
      </button>
      <button onclick="showTab('admin')">
        <i class="fas fa-user-friends"></i>
        <div class="tab-label">
          <strong>Administration</strong>
          <span>The Provost and Other Strategic Leadership Team</span>
        </div>
      </button>
      <button onclick="showTab('academics')">
        <i class="fas fa-building"></i>
        <div class="tab-label">
          <strong>Academics</strong>
          <span>Our Courses And Programmes</span>
        </div>
      </button>
    </div>

    <!-- Mission & Vision Tab -->
    <div class="tab-panel active" id="tab-mission">
      <h3><i class="far fa-compass" style="color: var(--gold-dark);"></i> Our Mission</h3>
      <p><strong>Mission Statement &ndash; St. Albert's International University</strong></p>
      <p>St. Albert’s International University is committed to advancing faith, knowledge, and service by providing
        accessible, high-quality education to all, empowering them to grow, lead, and transform their world.</p>
      <p
        style="font-style: italic; color: #555; background: #fff8eb; padding: 15px; border-left: 4px solid var(--gold); border-radius: 8px; margin-top: 15px;">
        “The aim of education is not merely to accept knowledge, but to seek its causes and truth.” — St. Albert the
        Great</p>

      <h3 style="margin-top: 30px;"><i class="fas fa-eye" style="color: var(--gold-dark);"></i> Our Vision</h3>
      <p>Our vision at Saint Albert's International University is to be a leading institution known for academic
        excellence, moral integrity, and the development of transformational leaders. We strive to inspire and equip
        students to impact their communities and the world with knowledge, character, and purpose—shaped by values that
        stand the test of time.</p>
    </div>

    <!-- Administration Tab -->
    <div class="tab-panel" id="tab-admin">
      <h3><i class="fas fa-user-friends" style="color: var(--gold-dark);"></i> Administration</h3>
      <p>The administration of Saint Albert's International University is committed to excellence, integrity, and
        effective leadership. Our team ensures the smooth operation of the university, providing strategic direction and
        support to create a thriving environment for students, staff, and faculty.</p>
      <div style="margin-top: 20px;">
        <a href="staff" class="btn-primary">Meet Our Full Team →</a>
      </div>
    </div>

    <!-- Academics Tab -->
    <div class="tab-panel" id="tab-academics">
      <h3><i class="fas fa-building" style="color: var(--gold-dark);"></i> Academics</h3>
      <p>At Saint Albert University, our academic programs are designed to inspire critical thinking, creativity, and
        lifelong learning. We offer a well-rounded curriculum that combines intellectual growth with practical skills,
        preparing students for success in their careers and communities.</p>
      <div style="margin-top: 20px;">
        <a href="programs" class="btn-primary">View All Programs →</a>
      </div>
    </div>
  </div>

  <!-- 90% Self-Paced & 100% Distance Learning -->
  <div style="display: flex; flex-wrap: wrap; gap: 30px; margin: 50px 0;">
    <div class="info-card" style="flex: 1; min-width: 280px; text-align: center;">
      <div
        style="font-size: 3.5rem; font-weight: 800; color: var(--gold-dark); font-family: 'Century Gothic', sans-serif;">
        90%</div>
      <h3 style="margin: 12px 0 8px; color: var(--deep-red);">Self-Paced Learning</h3>
      <p>With our self-paced initiative, our students get an opportunity to learn at their own pace. They can decide the
        amount of time to be spent on any particular module.</p>
    </div>
    <div class="info-card" style="flex: 1; min-width: 280px; text-align: center;">
      <div
        style="font-size: 3.5rem; font-weight: 800; color: var(--gold-dark); font-family: 'Century Gothic', sans-serif;">
        100%</div>
      <h3 style="margin: 12px 0 8px; color: var(--deep-red);">Distance Learning</h3>
      <p>With our distance learning courses, the learner has the freedom to re-read a particular module which he/she is
        not clear about.</p>
    </div>
  </div>



</div>

<script>
  function showTab(tab) {
    // Hide all panels
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    // Remove active from all buttons
    document.querySelectorAll('.tabs-nav button').forEach(b => b.classList.remove('active'));

    // Show selected panel
    document.getElementById('tab-' + tab).classList.add('active');

    // Set active button
    const tabMap = { mission: 0, admin: 1, academics: 2 };
    document.querySelectorAll('.tabs-nav button')[tabMap[tab]].classList.add('active');
  }
</script>

<?php include 'includes/footer.php'; ?>
