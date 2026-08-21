<?php
$pageTitle = "Programs";
$currentPage = "programs";
include 'includes/header.php';
?>

<!-- Page Banner -->
<div class="page-banner">
  <h1>Our Academic Programs</h1>
  <p>Certificates · Diplomas · Associates · Bachelors · Masters · Doctorates</p>
</div>

<div class="container">

  <!-- Degree Levels -->
  <div style="margin: 40px 0; text-align: center;">
    <h2>Degree Levels Offered</h2>
    <div class="section-subhead" style="margin: 0 auto 40px auto; text-align: center;">Saint Albert's University offers
      programs at every level of higher education</div>

    <div class="stats-row programs-stats-row">
      <div class="stat-item">
        <div class="stat-number" style="font-size: 1.4rem;"><i class="fas fa-scroll"></i></div>
        <div class="stat-label">Certificate<br><strong>$350</strong></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" style="font-size: 1.4rem;"><i class="fas fa-file-alt"></i></div>
        <div class="stat-label">Diploma<br><strong>$750</strong></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" style="font-size: 1.4rem;"><i class="fas fa-award"></i></div>
        <div class="stat-label">Associate<br><strong>$1,000</strong></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" style="font-size: 1.4rem;"><i class="fas fa-graduation-cap"></i></div>
        <div class="stat-label">Bachelor's<br><strong>$1,500</strong></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" style="font-size: 1.4rem;"><i class="fas fa-user-graduate"></i></div>
        <div class="stat-label">Master's<br><strong>$2,500</strong></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" style="font-size: 1.4rem;"><i class="fas fa-hat-wizard"></i></div>
        <div class="stat-label">Doctorate<br><strong>$3,500</strong></div>
      </div>
    </div>
  </div>

  <!-- All Programs -->
  <div style="margin: 60px 0;">
    <div style="text-align: center;">
      <h2 style="font-size: 2.2rem; color: var(--gold-dark);">Programs & Courses</h2>
      <div class="section-subhead" style="margin: 0 auto 40px auto; text-align: center;">At St. Albert’s International
        University, we offer Certificates, Associates, Bachelor’s, Masters and Doctorates in the following disciplines:
      </div>
    </div>

    <style>
      .program-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-bottom: 5px solid var(--gold);
        display: flex;
        flex-direction: column;
        padding: 0 !important;
      }

      .program-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
      }

      .program-img {
        width: 100%;
        height: 240px;
        object-fit: cover;
      }

      .program-content {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
      }

      .program-content h3 {
        color: var(--deep-red);
        font-size: 1.25rem;
        margin-bottom: 12px;
        line-height: 1.4;
      }

      .program-content p {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
      }

      .program-content .btn-outline {
        align-self: flex-start;
        padding: 8px 24px;
        font-size: 0.9rem;
      }

      .programs-stats-row {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
        text-align: center;
        padding: 40px 20px;
        border-radius: 32px;
      }

      .programs-stats-row .stat-label {
        margin-top: 8px;
        font-size: 0.9rem;
      }

      @media (max-width: 1024px) {
        .programs-stats-row {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      @media (max-width: 780px) {
        .programs-stats-row {
          grid-template-columns: repeat(1, 1fr) !important;
          gap: 20px;
          padding: 24px 16px;
        }

        .programs-stats-row .stat-label strong {
          font-size: 1.8rem !important;
          /* Larger price font for mobile */
          display: block;
          margin-top: 5px;
          color: var(--deep-red);
        }

        .programs-stats-row .stat-label {
          font-size: 1.1rem;
        }

        .program-img {
          height: 200px;
        }

        .program-content {
          padding: 20px;
        }

        .program-content h3 {
          font-size: 1.25rem;
        }
      }
    </style>

    <div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/pexels-lagosfoodbank-8069548-scaled.jpg"
          class="program-img" alt="Logistics and Supply chain Management">
        <div class="program-content">
          <h3>Logistics and Supply chain Management</h3>
          <p>Master the art of global logistics, supply chain optimization, and inventory management for modern
            enterprises.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Public-Administration-1-scaled.jpg"
          class="program-img" alt="Chaplaincy in Pastoral Care & Counseling">
        <div class="program-content">
          <h3>Chaplaincy in Pastoral Care & Counseling</h3>
          <p>Develop expertise in pastoral ministry, spiritual counseling, and chaplaincy services for communities and
            institutions.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Leadership-scaled.jpg" class="program-img"
          alt="Leadership">
        <div class="program-content">
          <h3>Leadership</h3>
          <p>Build visionary leadership skills for corporate, religious, and community settings through practical and
            ethical training.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img
          src="https://saintalbertcollege.org/wp-content/uploads/2025/05/pexels-marcia-salido-346903577-14145536-scaled.jpg"
          class="program-img" alt="Philosophy">
        <div class="program-content">
          <h3>Philosophy</h3>
          <p>Explore the foundations of thought, ethics, and human understanding through classical and modern
            philosophical frameworks.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Theology-scaled.jpg" class="program-img"
          alt="Theology">
        <div class="program-content">
          <h3>Theology</h3>
          <p>Deepen your understanding of theological studies, religious thought, and spiritual leadership for ministry
            and academia.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Mass-Communication-scaled.jpg"
          class="program-img" alt="Mass Communication">
        <div class="program-content">
          <h3>Mass Communication</h3>
          <p>Study media, journalism, public relations, and digital communication for a modern media landscape.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Public-Administration-scaled.jpg"
          class="program-img" alt="Public Administration">
        <div class="program-content">
          <h3>Public Administration</h3>
          <p>Prepare for leadership in government, public sector management, and policy-making at local and
            international levels.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Tourism-and-Hotel-Management-scaled.jpg"
          class="program-img" alt="Tourism and Hotel Management">
        <div class="program-content">
          <h3>Tourism and Hotel Management</h3>
          <p>Learn hospitality management, tourism operations, and customer service for the global travel and leisure
            industry.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Production-scaled.jpg" class="program-img"
          alt="Production and Operation Management">
        <div class="program-content">
          <h3>Production and Operation Management</h3>
          <p>Focus on manufacturing, quality control, and operational efficiency for modern production systems and
            industries.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/education-scaled.jpg" class="program-img"
          alt="Education">
        <div class="program-content">
          <h3>Education</h3>
          <p>Become a certified educator with training in teaching methods, curriculum development, and educational
            leadership.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Business-Administration-scaled.jpg"
          class="program-img" alt="Business Administration">
        <div class="program-content">
          <h3>Business Administration</h3>
          <p>Comprehensive training in management, finance, marketing, human resources, and strategic business planning.
          </p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Secretarial-Management-scaled.jpg"
          class="program-img" alt="Secretarial Management">
        <div class="program-content">
          <h3>Secretarial Management</h3>
          <p>Develop advanced administrative skills, office communication, and professional organizational management
            capabilities.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/pexels-shvets-production-7176026-scaled.jpg"
          class="program-img" alt="Psychology">
        <div class="program-content">
          <h3>Psychology</h3>
          <p>Study human behavior, mental health, and counseling techniques to help individuals and communities thrive.
          </p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/economic-scaled.jpg" class="program-img"
          alt="Economics">
        <div class="program-content">
          <h3>Economics</h3>
          <p>Study micro and macroeconomics, economic policy, international trade, and development economics.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Management-scaled.jpg" class="program-img"
          alt="Management">
        <div class="program-content">
          <h3>Management</h3>
          <p>Develop skills in organizational management, project planning, team leadership, and decision-making.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/marketing-scaled.jpg" class="program-img"
          alt="Marketing">
        <div class="program-content">
          <h3>Marketing</h3>
          <p>Learn modern marketing strategies, digital marketing, brand management, and consumer behavior analysis.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2025/05/Spirituality-scaled.jpg" class="program-img"
          alt="Spirituality">
        <div class="program-content">
          <h3>Spirituality</h3>
          <p>Explore spiritual growth, contemplative practices, and the integration of spirituality into daily life and
            leadership.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

      <div class="program-card">
        <img src="assets/images/music education.png" class="program-img" alt="Music Education">
        <div class="program-content">
          <h3>Music Education</h3>
          <p>Develop your musical talents and pedagogical skills to inspire through sound, covering theory, performance,
            and teaching methods.</p>
          <a href="apply" class="btn-outline">Register Now</a>
        </div>
      </div>

    </div>
  </div>

  <!-- Dual Buttons -->
  <div
    style="text-align: center; margin: 40px 0 80px 0; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
    <a href="apply" class="btn-primary" style="padding: 16px 40px; font-size: 1.1rem; border-radius: 50px;">Register
      Now</a>
    <a href="contact" class="btn-outline"
      style="padding: 16px 40px; font-size: 1.1rem; border-radius: 50px; background: transparent; color: var(--deep-red); border: 2px solid var(--deep-red);">Make
      More Enquiries</a>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
