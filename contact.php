<?php
$pageTitle = "Contact Us";
$currentPage = "contact";
include 'includes/header.php';
?>

<!-- Page Banner -->
<div class="page-banner">
  <h1>Support & Contact</h1>
  <p>Get in touch with us — We're here to help</p>
</div>

<div class="container">

  <style>
    .contact-intro {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      margin: 40px 0 50px;
      align-items: flex-start;
    }

    .contact-intro-left {
      flex: 1;
      min-width: 280px;
    }

    .contact-intro-right {
      flex: 1;
      min-width: 280px;
    }

    .contact-info-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 24px;
      margin: 40px 0;
    }

    .contact-card {
      background: white;
      border-radius: 24px;
      padding: 32px 28px;
      box-shadow: 0 12px 24px -8px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(212, 175, 55, 0.15);
      border-left: 5px solid var(--gold);
      transition: all 0.3s ease;
      display: flex;
      gap: 20px;
      align-items: flex-start;
    }

    .contact-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 24px 36px -12px rgba(0, 0, 0, 0.2), 0 0 0 2px rgba(212, 175, 55, 0.4);
    }

    .contact-card-icon {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--deep-red), var(--deep-red-dark));
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      box-shadow: 0 6px 12px rgba(155, 42, 47, 0.2);
    }

    .contact-card-icon i {
      color: var(--gold);
      font-size: 1.3rem;
    }

    .contact-card h3 {
      font-size: 1.1rem;
      color: var(--deep-red);
      margin-bottom: 6px;
    }

    .contact-card p {
      color: #555;
      line-height: 1.6;
    }

    .social-links-grid {
      display: flex;
      gap: 16px;
      margin-top: 10px;
    }

    .social-link-btn {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--forest), #0f3a3f);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s;
      text-decoration: none;
    }

    .social-link-btn i {
      color: var(--gold);
      font-size: 1.2rem;
    }

    .social-link-btn:hover {
      transform: translateY(-4px) scale(1.1);
      box-shadow: 0 8px 16px rgba(30, 74, 79, 0.4);
    }

    /* Contact Form */
    .contact-form-wrapper {
      background: white;
      border-radius: 32px;
      padding: 40px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(212, 175, 55, 0.2);
      border-top: 8px solid var(--gold);
    }

    .contact-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .contact-form-group {
      margin-bottom: 16px;
    }

    .contact-form-group.full {
      grid-column: span 2;
    }

    .contact-form-group label {
      display: block;
      font-weight: 700;
      margin-bottom: 8px;
      color: var(--forest);
    }

    .contact-form-group input,
    .contact-form-group textarea {
      width: 100%;
      padding: 14px 18px;
      border: 1px solid #ddd;
      border-radius: 14px;
      font-family: inherit;
      font-size: 1rem;
      transition: 0.2s;
    }

    .contact-form-group input:focus,
    .contact-form-group textarea:focus {
      outline: none;
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
    }

    .btn-send {
      background: var(--deep-red);
      color: white;
      border: none;
      padding: 15px 40px;
      border-radius: 50px;
      font-size: 1.05rem;
      font-weight: 700;
      cursor: pointer;
      width: 100%;
      transition: 0.3s;
      margin-top: 10px;
    }

    .btn-send:hover {
      background: var(--deep-red-dark);
      transform: translateY(-2px);
      box-shadow: 0 8px 16px rgba(155, 42, 47, 0.3);
    }

    /* Map Embed */
    .map-section {
      border-radius: 32px;
      overflow: hidden;
      box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.15);
      margin: 50px 0;
      border: 3px solid rgba(212, 175, 55, 0.3);
    }

    .map-section iframe {
      width: 100%;
      height: 400px;
      border: none;
    }

    /* Security Captcha */
    .captcha-wrapper {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-top: 10px;
    }

    .captcha-question {
      display: inline-flex;
      align-items: center;
      background: #273c66;
      color: white;
      font-weight: 800;
      font-size: 1.1rem;
      padding: 10px 18px;
      border-radius: 10px;
      letter-spacing: 1px;
      white-space: nowrap;
    }

    .captcha-equals {
      font-size: 1.4rem;
      font-weight: 700;
      color: #555;
    }

    .captcha-input {
      width: 80px !important;
      text-align: center;
      font-size: 1.1rem;
      font-weight: 700;
      padding: 10px !important;
    }

    @media (max-width: 1024px) {
      .contact-info-cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 780px) {
      .contact-intro {
        flex-direction: column;
        text-align: center;
        gap: 20px;
      }

      .contact-info-cards {
        grid-template-columns: 1fr;
        gap: 15px;
      }

      .contact-form-grid {
        grid-template-columns: 1fr;
      }

      .contact-form-group.full {
        grid-column: span 1;
      }

      .contact-form-wrapper {
        padding: 24px 16px;
      }

      .btn-send {
        padding: 12px 24px;
      }

      .map-section iframe {
        height: 300px;
      }

      .captcha-wrapper {
        flex-wrap: wrap;
        justify-content: center;
      }
    }
  </style>

  <!-- Intro Section -->
  <div class="contact-intro">
    <div class="contact-intro-left">
      <h2 style="display: inline-block;">Contact</h2>
      <h3 style="font-size: 1.8rem; color: var(--charcoal); margin-top: 20px;">Get in touch with us</h3>
    </div>
    <div class="contact-intro-right">
      <p style="font-size: 1.05rem; line-height: 1.7; color: #555;">Let us know what you want to know. We want to help
        people learn, grow and achieve more in their life, career and ministry.</p>
    </div>
  </div>

  <!-- Contact Info Cards -->
  <div class="contact-info-cards">
    <div class="contact-card">
      <div class="contact-card-icon">
        <i class="fas fa-envelope"></i>
      </div>
      <div>
        <h3>Email</h3>
        <p>info@saiu.education</p>
      </div>
    </div>
    <div class="contact-card">
      <div class="contact-card-icon">
        <i class="fas fa-phone-alt"></i>
      </div>
      <div>
        <h3>Phone</h3>
        <p>+1 (956) 266-1813</p>
      </div>
    </div>
    <div class="contact-card">
      <div class="contact-card-icon">
        <i class="fas fa-map-marker-alt"></i>
      </div>
      <div>
        <h3>Visit Us</h3>
        <p>PO Box 1, Hoima<br>Kingdom of Bunyoro Kitara<br>Uganda</p>
      </div>
    </div>
    <div class="contact-card">
      <div class="contact-card-icon">
        <i class="fab fa-whatsapp"></i>
      </div>
      <div>
        <h3>WhatsApp</h3>
        <p>+1 (956) 266-1813</p>
      </div>
    </div>
  </div>

  <!-- Social Links -->
  <div style="text-align: center; margin: 30px 0;">
    <h3 style="color: var(--deep-red); margin-bottom: 16px;">Social Links</h3>
    <div class="social-links-grid" style="justify-content: center;">
      <a href="https://web.facebook.com/universityoftheology" target="_blank" class="social-link-btn"
        aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="social-link-btn" aria-label="Twitter">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="social-link-btn" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
  </div>

  <!-- Contact Form + Additional Info -->
  <div style="display: flex; flex-wrap: wrap; gap: 40px; margin: 50px 0;">
    <!-- Form -->
    <div style="flex: 2; min-width: 320px;">
      <div class="contact-form-wrapper">
        <h2 style="display: inline-block; margin-bottom: 24px;">Send Us a Message</h2>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
          <div
            style="background: #e7f3e8; border: 1px solid #d4edda; color: #155724; padding: 15px 20px; border-radius: 12px; margin-bottom: 25px; display: flex; align-items: center; gap: 10px; font-weight: bold; font-family: inherit;">
            <i class="fas fa-check-circle" style="color: #28a745; font-size: 1.2rem;"></i>
            <span>Message sent successfully!</span>
          </div>
        <?php endif; ?>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'captcha_error'): ?>
          <div
            style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 15px 20px; border-radius: 12px; margin-bottom: 25px; display: flex; align-items: center; gap: 10px; font-weight: bold; font-family: inherit;">
            <i class="fas fa-times-circle" style="color: #dc3545; font-size: 1.2rem;"></i>
            <span>Security verification failed. Please try again.</span>
          </div>
        <?php endif; ?>

        <form action="processes.php" method="POST" id="contactForm" onsubmit="return validateContactCaptcha()">
          <input type="hidden" name="form_type" value="contact">
          <div class="contact-form-grid">
            <div class="contact-form-group">
              <label><i class="fas fa-user"></i> Your Name <span
                  style="color: var(--deep-red); font-weight: 700;">*</span></label>
              <input type="text" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="contact-form-group">
              <label><i class="fas fa-envelope"></i> Your Email <span
                  style="color: var(--deep-red); font-weight: 700;">*</span></label>
              <input type="email" name="email" placeholder="example@saiu.education" required>
            </div>
            <div class="contact-form-group full">
              <label><i class="fas fa-tag"></i> Subject <span
                  style="color: var(--deep-red); font-weight: 700;">*</span></label>
              <input type="text" name="subject" placeholder="What is this regarding?" required>
            </div>
            <div class="contact-form-group full">
              <label><i class="fas fa-comment-dots"></i> Your Message <span
                  style="color: var(--deep-red); font-weight: 700;">*</span></label>
              <textarea name="message" rows="6" placeholder="Write your message here..." required></textarea>
            </div>
            <div class="contact-form-group full">
              <label><i class="fas fa-shield-alt"></i> Security Verification <span
                  style="color: var(--deep-red); font-weight: 700;">*</span></label>
              <div class="captcha-wrapper">
                <span class="captcha-question"><?php
                $a = rand(1, 9);
                $b = rand(1, 9);
                $_SESSION['contact_captcha_answer'] = $a + $b;
                echo "$a + $b";
                ?></span>
                <span class="captcha-equals">=</span>
                <input type="text" class="captcha-input" name="captcha_result" placeholder="?" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn-send">
            <i class="fas fa-paper-plane"></i> Send Message →
          </button>
        </form>
      </div>
    </div>

    <!-- USA Office Info -->
    <div style="flex: 1; min-width: 280px;">
      <div class="info-card" style="margin-bottom: 24px;">
        <i class="fas fa-flag-usa" style="font-size: 2rem; color: var(--gold-dark);"></i>
        <h3 style="margin: 16px 0 8px;">USA Office</h3>
        <p>412 South "C" Street<br>Harlingen, TX 78550<br>United States of America</p>
      </div>
      <div class="info-card" style="margin-bottom: 24px;">
        <i class="fas fa-crown" style="font-size: 2rem; color: var(--gold-dark);"></i>
        <h3 style="margin: 16px 0 8px;">Kingdom Office</h3>
        <p>PO Box 1, Hoima<br>Kingdom of Bunyoro Kitara<br>Uganda</p>
      </div>
      <div class="info-card">
        <i class="fas fa-clock" style="font-size: 2rem; color: var(--gold-dark);"></i>
        <h3 style="margin: 16px 0 8px;">Office Hours</h3>
        <p>Monday – Friday<br>9:00 AM – 5:00 PM (WAT)<br>Weekend: By Appointment</p>
      </div>
    </div>
  </div>

  <!-- Google Map -->
  <div class="map-section">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.1234!2d-97.6947!3d26.1906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866577e0e3e7b6e5%3A0x1234567890abcdef!2s412+S+C+St%2C+Harlingen%2C+TX+78550!5e0!3m2!1sen!2sus!4v1234567890"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- CTA -->
  <div class="contact-office">
    <h2>Ready to Start Your Journey?</h2>
    <p style="font-size: 1.1rem; max-width: 700px; margin: 16px auto;">Whether you're interested in our programs or have
      questions about the admissions process, we're always here to help.</p>
    <div style="margin-top: 24px; display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="apply" class="btn-primary" style="background: var(--gold); color: var(--deep-red);">Apply Now →</a>
      <a href="programs" class="btn-primary">View Programs →</a>
    </div>
  </div>

</div>

<script>
  function validateContactCaptcha() {
    return true;
  }
</script>

<?php include 'includes/footer.php'; ?>
