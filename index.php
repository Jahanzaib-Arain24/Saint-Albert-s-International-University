<?php
$pageTitle = "Home";
$currentPage = "home";
include 'includes/header.php';
?>

<div class="container">
  <!-- Hero Section -->
  <div class="hero">
    <div class="hero-left">
      <div class="hero-badge"><i class="fas fa-certificate"></i> Enrol Now And Get Certified</div>
      <h1>Welcome To <span>Saint Albert's International University</span></h1>
      <div class="hero-desc">
        SAIU was bestowed with the Royal Charter of Incorporation on 5th day of April, 2026 by His Majesty Omukama
        Rukirabasaja Agutamba Dr. Solomon Gafabusa Iguru I, the King of Bunyoro Kitara Kingdom (Republic of Uganda). The
        SAIU is accredited by The Ministry of Education and Sports of Bunyoro Kitara Kingdom to award degrees.
      </div>
      <div class="cta-group">
        <a href="prospectus" class="btn-primary">Discover More</a>
        <a href="apply" class="btn-outline">Apply Now</a>
      </div>
    </div>
    <div class="hero-right"
      style="padding: 0; background: transparent; box-shadow: none; border: none; display: flex; align-items: stretch;">
      <div
        style="background: #fff8eb; padding: 40px; border-radius: 40px; text-align: center; border: 1px solid rgba(223,177,75,0.3); box-shadow: 0 20px 50px rgba(0,0,0,0.06); width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">

        <h3
          style="color: var(--gold-dark); font-size: 0.95rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; font-weight: 700;">
          Message Of Chief Patron</h3>

        <div style="margin-bottom: 25px; position: relative;">
          <div
            style="width: 100%; max-width: 280px; aspect-ratio: 1/1; border-radius: 20px; overflow: hidden; border: 5px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1); margin: 0 auto;">
            <img src="assets/images/king-bunyoro.jpg" alt="His Majesty Omukama"
              style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>

        <p
          style="color: #222; font-size: 0.95rem; line-height: 1.8; font-style: italic; margin-bottom: 15px; position: relative; padding: 0 10px; font-family: 'Georgia', serif; text-align: center;">
          "Warmest congratulations to the faculty and students of Saint Albert International University as you continue
          your noble mission of illuminating and nurturing faith for a better world. May this sacred institution always
          be a beacon of theological wisdom and compassion, guiding humanity towards, truth, unity and spiritual
          enlightenment."
        </p>
        <div
          style="font-weight: bold; color: var(--deep-red); font-size: 0.85rem; line-height: 1.4; text-transform: uppercase; letter-spacing: 0.5px;">
          HRM RAOMUKAMA DR. SOLOMON GAFABUSA IGURU DRUHANGAARO<br>The King of Bunyoro Kitara Kingdom
        </div>
      </div>
    </div>
  </div>

  <!-- Stats Row -->
  <div class="stats-row" style="margin-bottom: 60px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
    <div class="stat-item" style="padding: 30px;">
      <div class="stat-number">100%</div>
      <h3 style="margin: 10px 0; font-size: 1.2rem; color: var(--deep-red);">Certified Knowledge</h3>
      <div style="font-size: 0.95rem; color: #666; font-weight: normal; margin-top: 5px;">Our graduates will be awarded
        Certificates, Associates, Bachelor’s, Masters and Doctorates.</div>
    </div>
    <div class="stat-item" style="padding: 30px;">
      <div class="stat-number">90%</div>
      <h3 style="margin: 10px 0; font-size: 1.2rem; color: var(--deep-red);">Self-paced</h3>
      <div style="font-size: 0.95rem; color: #666; font-weight: normal; margin-top: 5px;">Students can determine their
        learning curve and study at their own pace.</div>
    </div>
    <div class="stat-item" style="padding: 30px;">
      <div class="stat-number">100%</div>
      <h3 style="margin: 10px 0; font-size: 1.2rem; color: var(--deep-red);">Online Friendly</h3>
      <div style="font-size: 0.95rem; color: #666; font-weight: normal; margin-top: 5px;">Students can learn from
        anywhere in the world.</div>
    </div>
  </div>

  <style>
    .feature-list-card {
      display: flex;
      flex-direction: column;
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease;
    }

    .feature-list-card:hover {
      transform: translateY(-5px);
    }

    .fl-img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .fl-content {
      padding: 30px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .fl-content h3 {
      font-size: 1.4rem;
      color: var(--deep-red);
      margin-bottom: 12px;
    }

    .fl-content p {
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
      flex-grow: 1;
    }
  </style>

  <!-- Features Grid -->
  <div class="features-grid-main">
    <div class="feature-list-card">
      <img
        src="https://saintalbertcollege.org/wp-content/uploads/2025/05/positive-young-indian-woman-student-260nw-2385200433.webp"
        alt="Why Study at Saint Albert's university?" class="fl-img">
      <div class="fl-content">
        <h3>Why Study at Saint Albert's university?</h3>
        <p>Each program at Saint Albert University is built to shape minds, strengthen values, and prepare students to
          serve with excellence.</p>
        <div><a href="about" class="btn-outline" style="padding: 8px 24px;">Read More</a></div>
      </div>
    </div>

    <div class="feature-list-card">
      <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/pexels-jakubzerdzicki-29277702-scaled.jpg"
        alt="Tuition & Fees" class="fl-img">
      <div class="fl-content">
        <h3>Tuition & Fees</h3>
        <p>We have the most flexible tution and fees payment plan to encourage all and sundry.</p>
        <div><a href="programs" class="btn-outline" style="padding: 8px 24px;">Read More</a></div>
      </div>
    </div>

    <div class="feature-list-card">
      <img src="https://saintalbertcollege.org/wp-content/uploads/2019/12/feature_image2.jpg"
        alt="Discover Your Potential" class="fl-img">
      <div class="fl-content">
        <h3>Discover Your Potential</h3>
        <p>Our education programs prepare future teachers to inspire the next generation, blending academic excellence
          with strong moral and spiritual foundations.</p>
        <div><a href="admission" class="btn-outline" style="padding: 8px 24px;">Read More</a></div>
      </div>
    </div>

    <div class="feature-list-card">
      <img src="https://saintalbertcollege.org/wp-content/uploads/2022/06/ist-reg.jpg" alt="Joining Us?" class="fl-img">
      <div class="fl-content">
        <h3>Joining Us?</h3>
        <p>Apply now to study at Saint Alberts university. Get info on entry requirements now!</p>
        <div><a href="apply" class="btn-outline" style="padding: 8px 24px;">Apply Now</a></div>
      </div>
    </div>
  </div>

  <style>
    .features-grid-main {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin: 40px 0;
    }

    @media (max-width: 1024px) {
      .features-grid-main {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {
      .features-grid-main {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <!-- Degrees Banner -->
  <div class="contact-office"
    style="background: var(--gold); background-image: linear-gradient(135deg, var(--gold) 0%, #fdf5d3 100%); margin: 80px 0; border: none;">
    <h2 style="color: var(--deep-red);">Enrol Now And Get Certified</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 30px;">

      <div
        style="background: white; border-radius: 15px; padding: 20px; text-align: center; width: 220px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <i class="fas fa-award" style="font-size: 2.5rem; color: var(--gold-dark); margin-bottom: 15px;"></i>
        <h4 style="font-size: 1.1rem; color: var(--deep-red);">Doctorate Degrees</h4>
      </div>

      <div
        style="background: white; border-radius: 15px; padding: 20px; text-align: center; width: 220px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: var(--gold-dark); margin-bottom: 15px;"></i>
        <h4 style="font-size: 1.1rem; color: var(--deep-red);">Master Degrees</h4>
      </div>

      <div
        style="background: white; border-radius: 15px; padding: 20px; text-align: center; width: 220px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <i class="fas fa-user-graduate" style="font-size: 2.5rem; color: var(--gold-dark); margin-bottom: 15px;"></i>
        <h4 style="font-size: 1.1rem; color: var(--deep-red);">Bachelor Degrees</h4>
      </div>

      <div
        style="background: white; border-radius: 15px; padding: 20px; text-align: center; width: 220px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <i class="fas fa-file-alt" style="font-size: 2.5rem; color: var(--gold-dark); margin-bottom: 15px;"></i>
        <h4 style="font-size: 1.1rem; color: var(--deep-red);">Certificates & Diplomas</h4>
      </div>

    </div>
    <div style="margin-top: 30px;">
      <a href="prospectus" class="btn-primary" style="background: var(--deep-red); color: white;">View
        Prospectus</a>
    </div>
  </div>

  <div class="inu-section-wrapper">
    <div style="margin-bottom: 30px;">
      <img src="assets/images/INUlogo.png" alt="INU Logo"
        style="width: 120px; background: white; padding: 10px; border-radius: 12px; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
    </div>
    <h2 class="inu-title">International Network of Universities (INU)</h2>
    <p
      style="max-width: 900px; margin: 0 auto 50px; font-size: 0.95rem; line-height: 1.8; opacity: 0.9; font-weight: normal; font-style: italic;">
      The institutions of higher education, recognizing the vital importance of international academic cooperation in
      advancing knowledge, promoting cross-cultural understanding, and addressing global challenges through education
      and research, established the International Network of Universities (INU), a permanent international academic
      collaboration framework.
    </p>
    <h3 style="color: var(--gold); font-size: 1.8rem; margin-bottom: 40px; position: relative; display: inline-block;">
      Members
      <span style="display: block; width: 60px; height: 3px; background: var(--gold); margin: 10px auto 0;"></span>
    </h3>
    <style>
      .inu-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 20px;
      }

      .inu-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 30px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        height: 100%;
        /* Ensure card takes full height of link wrapper */
        min-height: 240px;
        /* Standardize height */
      }

      .inu-card:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-5px);
        border-color: var(--gold);
      }

      .inu-card img {
        max-width: 200px;
        height: auto;
        max-height: 100px;
        object-fit: contain;
        margin-bottom: 20px;
        filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.3));
      }

      .inu-card span {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--gold);
        line-height: 1.4;
      }

      @media (max-width: 900px) {
        .inu-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 600px) {
        .inu-grid {
          grid-template-columns: 1fr;
        }

        .inu-section-wrapper {
          padding: 40px 20px !important;
          border-radius: 30px !important;
          margin: 40px 0 !important;
        }

        .inu-title {
          font-size: 1.5rem !important;
          line-height: 1.3;
        }
      }

      .inu-section-wrapper {
        background: linear-gradient(135deg, #0f3a3f, #9B2A2F);
        border-radius: 48px;
        padding: 60px 40px;
        margin: 80px 0;
        color: white;
        text-align: center;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        border: 4px solid var(--gold);
      }

      .inu-title {
        color: var(--gold);
        font-size: 2.4rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        font-family: 'Century Schoolbook', serif;
        letter-spacing: 1px;
      }
    </style>
    <div class="inu-grid">
      <!-- Member 1 -->
      <a href="https://pass.university/" target="_blank" style="text-decoration: none; color: inherit;">
        <div class="inu-card">
          <img src="assets/images/The National University of Penal, Administrative and Security Sciences.png" alt="TNUPASS">
          <span>The National University of Penal, Administrative and Security Sciences</span>
        </div>
      </a>
      <!-- Member 2 -->
      <a href="https://www.angkor.edu.kh/" target="_blank" style="text-decoration: none; color: inherit;">
        <div class="inu-card">
          <img src="assets/images/Ankhor University.png" alt="Ankhor University">
          <span>Ankhor University</span>
        </div>
      </a>
      <!-- Member 3 -->
      <a href="https://www.cup-university.com/" target="_blank" style="text-decoration: none; color: inherit;">
        <div class="inu-card">
          <img src="assets/images/Cameroon University of Polytechonolgy.png" alt="CUP">
          <span>Cameroon University of Polytechonolgy</span>
        </div>
      </a>
      <!-- Member 4 -->
      <a href="https://unech.edu.mx/" target="_blank" style="text-decoration: none; color: inherit;">
        <div class="inu-card">
          <img src="assets/images/Universidad de Estudios y Capacitacion Humana.png" alt="UECH">
          <span>Universidad de Estudios y Capacitacion Humana</span>
        </div>
      </a>
      <!-- Member 5 -->
      <a href="https://cityuniversity.education/" target="_blank" style="text-decoration: none; color: inherit;">
        <div class="inu-card">
          <img src="assets/images/City University.png" alt="City University">
          <span>City University</span>
        </div>
      </a>
      <!-- Member 6 -->
      <a href="https://stmonicauniv.org/" target="_blank" style="text-decoration: none; color: inherit;">
        <div class="inu-card">
          <img src="assets/images/Saint Monica University.webp" alt="Saint Monica University">
          <span>Saint Monica University</span>
        </div>
      </a>
      <!-- Member 7: BQS -->
      <a href="https://www.b-ac.info/" target="_blank" style="text-decoration: none; color: inherit; cursor: default;">
        <div class="inu-card">
          <img src="assets/images/BQS.png" alt="BQS">
          <span>BQS</span>
        </div>
      </a>
      <!-- Member 8: IRB TPC -->
      <a href="https://globalirbo.com/" target="_blank" style="text-decoration: none; color: inherit; cursor: default;">
        <div class="inu-card">
          <img src="assets/images/International Reciprocity Board Of Therapeutic Professional Counselors Certification.png"
            alt="IRB TPC">
          <span>International Reciprocity Board Of Therapeutic Professional Counselors Certification</span>
        </div>
      </a>
      <!-- Member 9: Qahe -->
      <a href="https://www.qahe.org/" target="_blank" style="text-decoration: none; color: inherit; cursor: default;">
        <div class="inu-card">
          <img src="assets/images/International Qahe Association Accredited.png" alt="Qahe">
          <span>International Qahe Association Accredited</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Rector Message & Action -->
  <div style="display: flex; flex-wrap: wrap; gap: 40px; margin: 80px 0; align-items: center;">
    <div style="flex: 1; min-width: 300px;">
      <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/pexels-pavel-danilyuk-7942534-750x465.jpg"
        alt="Message from the Rector"
        style="width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
    </div>
    <div style="flex: 1; min-width: 300px;">
      <h3 style="color: var(--gold-dark); font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">Message
        from the Rector</h3>
      <h2 style="font-size: 2rem; margin: 10px 0; color: var(--deep-red);">Dr. Jorge Alberto Gonzalez, Ph.D.</h2>
      <p style="font-size: 1.1rem; color: #555; line-height: 1.6; margin-bottom: 24px;">At St. Albert's International
        University, we offer diverse range of undergraduate and post graduate programmes that are designed to equip our
        students with skills that are relevant to the 21st century.</p>
      <a href="rector" class="btn-outline">Read More</a>
    </div>
  </div>

  <div class="start-learning-section">
    <div class="start-learning-text">
      <h2 style="font-size: 2.8rem; margin-bottom: 25px; color: var(--deep-red); line-height: 1.2;">Start Learning With
        Saint Albert's University Today!</h2>
      <p style="font-size: 1.15rem; line-height: 1.7; margin-bottom: 20px; color: #555;">Begin your journey to
        excellence
        at Saint Albert University—where knowledge meets purpose. Our programs are designed to equip you with the
        skills, values, and confidence to thrive in today’s world. Whether you're starting your academic path or
        building on your goals, this is the place to grow, lead, and make a difference.</p>
      <p style="font-size: 1.2rem; font-weight: bold; margin-bottom: 35px; color: var(--gold-dark);">Your future begins
        here.</p>
      <div><a href="apply" class="btn-primary"
          style="padding: 14px 35px; font-size: 1.1rem; border-radius: 40px; display: inline-block;">Start Now</a></div>
    </div>
    <div class="start-learning-image">
      <div
        style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.12); flex-grow: 1; display: flex; border: 8px solid white; height: 100%;">
        <img src="assets/images/pexels.png"
          style="width: 100%; height: 100%; object-fit: cover; border-radius: 12px; display: block; image-rendering: high-quality; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
      </div>
    </div>
  </div>

  <style>
    .start-learning-section {
      display: flex;
      flex-wrap: wrap;
      gap: 80px;
      margin: 80px 0;
      align-items: stretch;
    }

    .start-learning-text {
      flex: 1.15;
      min-width: 300px;
      padding-right: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .start-learning-image {
      flex: 1;
      min-width: 300px;
      display: flex;
    }

    @media (max-width: 900px) {
      .start-learning-section {
        flex-direction: column;
        gap: 40px;
      }

      .start-learning-image {
        order: 1;
        height: 350px;
      }

      .start-learning-text {
        order: 2;
        padding-right: 0;
        text-align: center;
      }

      .start-learning-text h2 {
        font-size: 2rem !important;
      }
    }
  </style>

  <!-- Contact Our Office -->
  <div style="display: flex; flex-wrap: wrap; gap: 40px; margin: 80px 0; align-items: center;">
    <div style="flex: 1; min-width: 300px;">
      <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/pexels-brettjordan-5426402-scaled.jpg"
        alt="Contact Us" style="width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
    </div>
    <div style="flex: 1; min-width: 300px;">
      <h2 style="font-size: 2.4rem; color: var(--deep-red); margin-bottom: 20px;">Contact Our Office</h2>
      <p style="font-size: 1.1rem; color: #555; line-height: 1.6; margin-bottom: 30px;">Whether you’re an alumni, a
        recent student or you want to become a student, we are always ready to help you. You may call, email or Whatsapp
        and someone is always there to reply you within the working hours.</p>
      <div style="margin-bottom: 20px;">
        <i class="fas fa-phone-alt" style="color: var(--gold-dark); width: 30px; font-size: 1.2rem;"></i> <strong>+1
          (956) 266-1813</strong>
      </div>
      <div style="margin-bottom: 20px;">
        <i class="fab fa-whatsapp" style="color: var(--gold-dark); width: 30px; font-size: 1.2rem;"></i> <strong>+1
          (956) 266-1813</strong>
      </div>
      <div style="margin-bottom: 30px;">
        <i class="fas fa-envelope" style="color: var(--gold-dark); width: 30px; font-size: 1.2rem;"></i>
        <strong>info@saiu.education</strong>
      </div>
      <a href="contact" class="btn-primary">Send us a Message</a>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
