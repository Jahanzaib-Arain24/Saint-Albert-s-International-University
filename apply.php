<?php
$pageTitle = "Apply Now";
$currentPage = "apply";
include 'includes/header.php';
?>

<!-- Page Banner -->
<div class="page-banner">
  <h1>Application Portal</h1>
  <p>Begin Your Academic Journey With Saint Albert's International University</p>
</div>

<div class="container">
  <style>
    .form-card {
      background: white;
      border-radius: 30px;
      padding: 40px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(212, 175, 55, 0.2);
      border-top: 8px solid var(--gold);
      margin-bottom: 50px;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group.full {
      grid-column: span 2;
    }

    .form-group label {
      display: block;
      font-weight: 700;
      margin-bottom: 8px;
      color: var(--forest);
    }

    .form-group label .req {
      color: var(--deep-red);
      font-weight: 700;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #ddd;
      border-radius: 12px;
      font-family: inherit;
      font-size: 1rem;
      transition: 0.2s;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
    }

    .radio-group {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 8px;
    }

    .radio-group label {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: normal;
      padding: 12px 16px;
      border: 1px solid #e0e0e0;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.2s;
    }

    .radio-group label:hover {
      border-color: var(--gold);
      background: #fff9e8;
    }

    .radio-group input[type="radio"] {
      width: auto;
      accent-color: var(--deep-red);
    }

    .radio-group input[type="radio"]:checked+span {
      font-weight: 700;
      color: var(--deep-red);
    }

    .fees-notice {
      background: #fff9e8;
      border-left: 4px solid var(--gold);
      padding: 16px 20px;
      border-radius: 12px;
      margin: 10px 0;
      font-size: 0.92rem;
      line-height: 1.6;
    }

    .declaration-box {
      background: #f8f4ee;
      border: 1px solid rgba(212, 175, 55, 0.3);
      border-radius: 16px;
      padding: 20px;
      display: flex;
      align-items: flex-start;
      gap: 12px;
    }

    .declaration-box input[type="checkbox"] {
      width: auto;
      margin-top: 5px;
      accent-color: var(--deep-red);
    }

    .declaration-box label {
      font-weight: normal;
      font-size: 0.9rem;
      color: #444;
      line-height: 1.6;
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

    .btn-submit {
      background: var(--deep-red);
      color: white;
      border: none;
      padding: 15px 40px;
      border-radius: 50px;
      font-size: 1.1rem;
      font-weight: 700;
      cursor: pointer;
      width: 100%;
      transition: 0.3s;
      margin-top: 20px;
    }

    .btn-submit:hover {
      background: var(--deep-red-dark);
      transform: translateY(-2px);
    }

    @media (max-width: 1024px) {
      .form-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 780px) {
      .form-grid {
        display: flex !important;
        flex-direction: column !important;
        gap: 20px !important;
      }

      .form-group {
        grid-column: span 1 !important;
        width: 100% !important;
      }

      .form-card {
        padding: 24px 16px;
      }

      .radio-group label {
        padding: 10px;
        font-size: 0.9rem;
      }
    }
  </style>

  <div style="text-align: center; margin-bottom: 40px;">
    <h2>Online Application Form</h2>
    <div class="section-subhead" style="margin: 0 auto;">Please complete the form below to begin your academic journey
      with us.</div>
  </div>

  <div class="form-card">
    <h2 style="display: block; text-align: center; margin-bottom: 30px; color: var(--deep-red);">Application Form</h2>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
      <div
        style="background: #e7f3e8; border: 1px solid #c3e6cb; color: #155724; padding: 18px 24px; border-radius: 8px; margin-bottom: 30px; display: flex; flex-direction: column; gap: 5px; font-family: inherit; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
        <div style="display: flex; align-items: center; gap: 10px; font-weight: bold; font-size: 1.1rem;">
          <i class="fas fa-check-circle" style="color: #28a745;"></i>
          <span>Application Submitted!</span>
        </div>
        <p style="margin: 0; color: #155724; font-size: 0.95rem; font-weight: normal; margin-left: 28px;">
          Thank you for applying. We have received your application and sent a confirmation message to your email.
        </p>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'captcha_error'): ?>
      <div
        style="background: #fff6e8; border: 1px solid #ffeeba; color: #856404; padding: 18px 24px; border-radius: 8px; margin-bottom: 30px; display: flex; flex-direction: column; gap: 10px; font-family: inherit; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
        <div style="display: flex; align-items: center; gap: 10px; font-weight: bold; font-size: 1.1rem; color: #d97706;">
          <i class="fas fa-shield-alt"></i>
          <span>Captcha Verification Failed</span>
        </div>
        <p style="margin: 0; color: #d97706; font-size: 1rem; font-weight: normal;">
          The math problem answer was incorrect. Please try again to prove you are human.
        </p>
      </div>
    <?php endif; ?>

    <form action="processes.php" method="POST" id="applyForm" onsubmit="return validateCaptcha('apply')">
      <input type="hidden" name="form_type" value="apply">
      <div class="form-grid">
        <!-- Name -->
        <div class="form-group">
          <label><i class="fas fa-user"></i> First Name <span class="req">*</span></label>
          <input type="text" name="first_name" placeholder="First name" required>
        </div>
        <div class="form-group">
          <label><i class="fas fa-user"></i> Last Name <span class="req">*</span></label>
          <input type="text" name="last_name" placeholder="Last name" required>
        </div>

        <!-- DOB -->
        <div class="form-group">
          <label><i class="fas fa-calendar"></i> Date of Birth <span class="req">*</span></label>
          <input type="date" name="dob" required>
        </div>

        <!-- Country -->
        <div class="form-group">
          <label><i class="fas fa-flag"></i> Country of Origin</label>
          <select name="country">
            <option value="">Select Country</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Argentina">Argentina</option>
            <option value="Australia">Australia</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Brazil">Brazil</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="China">China</option>
            <option value="Colombia">Colombia</option>
            <option value="Congo, Democratic Republic of the">Congo, Democratic Republic</option>
            <option value="Egypt">Egypt</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Kenya">Kenya</option>
            <option value="Liberia">Liberia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Mexico">Mexico</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Philippines">Philippines</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="South Africa">South Africa</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Turkey">Turkey</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
          </select>
        </div>

        <!-- Address -->
        <div class="form-group full">
          <label><i class="fas fa-map-marker-alt"></i> Address <span class="req">*</span></label>
          <input type="text" name="address" placeholder="Street, City, State" required>
        </div>

        <div class="form-group full">
          <label><i class="fas fa-mail-bulk"></i> Postal Address</label>
          <input type="text" name="postal_address" placeholder="P.O. Box / Postal address (optional)">
        </div>

        <!-- Email -->
        <div class="form-group">
          <label><i class="fas fa-envelope"></i> Email <span class="req">*</span></label>
          <input type="email" name="email" placeholder="example@gmail.com" required>
        </div>

        <!-- Phone -->
        <div class="form-group">
          <label><i class="fas fa-phone-alt"></i> Phone Contact <span class="req">*</span></label>
          <input type="text" name="phone" placeholder="+1 (956) 266-1813" required>
        </div>

        <!-- WhatsApp -->
        <div class="form-group full">
          <label><i class="fab fa-whatsapp"></i> WhatsApp No <span class="req">*</span></label>
          <input type="text" name="whatsapp" placeholder="+1 (956) 266-1813" required>
        </div>

        <!-- Academic Qualifications -->
        <div class="form-group full">
          <label><i class="fas fa-book"></i> Academic Qualifications <span class="req">*</span></label>
          <textarea name="qualifications" rows="4" placeholder="List your previous schools, degrees, and qualifications"
            required></textarea>
        </div>

        <!-- Program Selection (Radio Buttons) -->
        <div class="form-group full">
          <label><i class="fas fa-graduation-cap"></i> What Program Are You Applying Into <span
              class="req">*</span></label>
          <div class="radio-group">
            <label><input type="radio" name="program" value="Certificate - $350 Per Course" required> <span>Certificate
                -
                $350 Per Course</span></label>
            <label><input type="radio" name="program" value="Diploma - $750 Per Course"> <span>Diploma - $750 Per
                Course</span></label>
            <label><input type="radio" name="program" value="Associate - $1,000 Per Course"> <span>Associate - $1,000
                Per
                Course</span></label>
            <label><input type="radio" name="program" value="Bachelor Degree - $1,500 Per Course"> <span>Bachelor Degree
                -
                $1,500 Per Course</span></label>
            <label><input type="radio" name="program" value="Master Degree - $2,500 Per Course"> <span>Master Degree -
                $2,500 Per Course</span></label>
            <label><input type="radio" name="program" value="Doctorate Degree - $3,500 Per Course"> <span>Doctorate
                Degree
                - $3,500 Per Course</span></label>
          </div>
        </div>

        <!-- Fees Payment Info -->
        <div class="form-group full">
          <div class="fees-notice">
            <strong><i class="fas fa-info-circle"></i> Fees Payment:</strong><br>
            Please Note All Fees Should Be Paid To: <strong>Dr. Jorge Alberto Gonzalez</strong>, 412 South "C" Street,
            Harlingen, TX 78550.<br>
            Email: <strong>fees@saintalbertcollege.org</strong>
          </div>
        </div>

        <!-- Job / Profession -->
        <div class="form-group full">
          <label><i class="fas fa-briefcase"></i> What is Your Job/Profession? <span class="req">*</span></label>
          <input type="text" name="job" placeholder="Enter your current occupation" required>
        </div>

        <!-- Official Declaration -->
        <div class="form-group full">
          <label><i class="fas fa-file-signature"></i> Official Declaration <span class="req">*</span></label>
          <div class="declaration-box">
            <input type="checkbox" name="declaration" required>
            <label>I accept a) That all the information given in this form are correct to the best of my knowledge. b)
              If admitted into the university program, I shall regard myself bound by the regulation of Saint Albert's
              University. c) If at any time, the university discovers that the information that I have given on this
              form is
              false or incorrect, I will be required to withdraw from the program or liable to dismissal or
              both.</label>
          </div>
        </div>

        <!-- Security Captcha -->
        <div class="form-group full">
          <label><i class="fas fa-shield-alt"></i> Security Verification <span class="req">*</span></label>
          <div class="captcha-wrapper">
            <span class="captcha-question"><?php
            $a = rand(1, 9);
            $b = rand(1, 9);
            $_SESSION['apply_captcha_answer'] = $a + $b;
            echo "$a + $b";
            ?></span>
            <span class="captcha-equals">=</span>
            <input type="text" class="captcha-input" name="captcha_result" placeholder="?" required>
          </div>
        </div>
      </div>

      <button type="submit" class="btn-submit">
        <i class="fas fa-paper-plane"></i> Submit Application →
      </button>
    </form>
  </div>

  <!-- Contact Info -->
  <div class="contact-office">
    <h2>Need Help With Your Application?</h2>
    <p style="font-size: 1.1rem; max-width: 700px; margin: 16px auto;">Our admissions team is available to guide you
      through the application process. Don't hesitate to reach out.</p>
    <div class="contact-details">
      <span><i class="fas fa-phone-alt"></i> +1 (956) 266-1813</span>
      <span><i class="fas fa-envelope"></i> info@saiu.education</span>
      <span><i class="fab fa-whatsapp"></i> +1 (956) 266-1813</span>
    </div>
    <div style="margin-top: 20px;">
      <a href="contact" class="btn-primary" style="background: var(--gold); color: var(--deep-red);">Contact Us
        →</a>
    </div>
  </div>

</div>

<script>
  function validateCaptcha(prefix) {
    return true;
  }
</script>

<?php include 'includes/footer.php'; ?>
