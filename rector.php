<?php
$pageTitle = "Message from the Rector";
$currentPage = "rector";
include 'includes/header.php';
?>

<!-- Page Banner -->
<div class="page-banner">
  <h1>Message from the Rector</h1>
</div>

<div class="container" style="margin: 80px auto;">
  <div class="rector-row" style="display: flex; gap: 50px; flex-wrap: wrap; align-items: flex-start;">
    
    <div class="rector-sidebar" style="flex: 1; min-width: 300px;">
      <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/pexels-pavel-danilyuk-7942534-750x465.jpg" alt="Message from the Rector" style="width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <div style="background: #f9f9f9; padding: 40px; border-radius: 20px; border-left: 5px solid var(--deep-red);">
        <h4 style="color: var(--deep-red); margin-bottom: 5px; font-size: 1.4rem;">Dr. Jorge Alberto Gonzalez, Ph.D.</h4>
        <p style="color: var(--gold-dark); margin-bottom: 20px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">Rector</p>
        <p style="color: #666; line-height: 1.6;">
          An esteemed academician and strategic leader dedicated to guiding Saint Albert's International University towards academic excellence and moral integrity.
        </p>
      </div>
    </div>

    <div class="rector-main" style="flex: 2; min-width: 300px; padding: 20px; background: white; border-radius: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
      
      <h3 style="color: var(--deep-red); font-size: 2rem; margin-bottom: 25px;">Welcome to Saint Albert's</h3>
      
      <p style="line-height: 1.9; color: #444; margin-bottom: 20px; font-size: 1.1rem;">
        <strong>Dear Student,</strong>
      </p>
      
      <p style="line-height: 1.9; color: #555; margin-bottom: 20px; text-align: justify; font-size: 1.1rem;">
        You are warmly welcome to Saint Albert's International University—a place where purpose meets learning, and education becomes a tool for transformation. At Saint Albert's, we believe that true education goes beyond textbooks; it shapes character, deepens understanding, and prepares individuals to make a lasting impact in their world.
      </p>
      
      <p style="line-height: 1.9; color: #555; margin-bottom: 20px; text-align: justify; font-size: 1.1rem;">
        Our mission is rooted in the belief that knowledge should serve both the mind and the heart. Whether your calling is in ministry, education, business, leadership, or service, Saint Albert's exists to equip you with the wisdom, skills, and values you need to thrive. We are committed to developing students who lead with integrity, think critically, and live purposefully.
      </p>
      
      <p style="line-height: 1.9; color: #555; margin-bottom: 20px; text-align: justify; font-size: 1.1rem;">
        At Saint Albert's, academic excellence meets spiritual depth. Our curriculum is designed to stretch your thinking, strengthen your values, and sharpen your vision. Through our diverse programs and dedicated faculty, you will be guided on a journey of intellectual growth, moral development, and practical preparation for life and leadership.
      </p>
      
      <p style="line-height: 1.9; color: #555; margin-bottom: 20px; text-align: justify; font-size: 1.1rem;">
        We offer flexible study options and a supportive learning environment, making it possible for students from all walks of life to pursue their educational goals. Whether on campus or through distance learning, you will be part of a vibrant academic community grounded in faith, truth, and excellence.
      </p>
      
      <p style="line-height: 1.9; color: #555; margin-bottom: 30px; text-align: justify; font-size: 1.1rem;">
        Saint Albert's is more than just an educational institution. It is a place where futures are shaped, leaders are built, and dreams are nurtured. We invite you to join us, grow with us, and begin the journey toward becoming all that you are meant to be.
      </p>

      <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee;">
        <p style="margin-bottom: 5px; color: #444; font-size: 1.1rem;">Warm regards,</p>
        <p style="font-weight: bold; color: var(--deep-red); font-size: 1.2rem; margin-bottom: 5px;">Dr. Jorge Alberto Gonzalez, Ph.D.</p>
        <p style="color: #666; font-size: 1rem;"><i class="fas fa-envelope" style="color: var(--gold-dark); margin-right: 8px;"></i> <a href="mailto:rector@saiu.education" style="color: inherit; text-decoration: none;">rector@saiu.education</a></p>
      </div>

    </div>

  </div>
  <style>
    @media (max-width: 780px) {
      .rector-row {
        flex-direction: column;
      }
      .rector-sidebar, .rector-main {
        min-width: 100% !important;
      }
      .rector-main {
        padding: 0 !important;
        box-shadow: none !important;
      }
      .rector-main h3 {
        font-size: 1.6rem;
      }
    }
  </style>
</div>

<?php include 'includes/footer.php'; ?>

