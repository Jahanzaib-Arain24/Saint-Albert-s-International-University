<?php
$pageTitle = "Admission";
$currentPage = "admission";
include 'includes/header.php';
?>

<!-- Page Banner -->
<div class="page-banner">
  <h1>Admission</h1>
</div>

<div class="container" style="margin: 80px auto;">
  
  <div style="display: flex; flex-wrap: wrap; gap: 40px; margin-bottom: 60px; align-items: center;">
    <div style="flex: 1; min-width: 300px;">
      <h2 style="font-size: 2.2rem; color: var(--deep-red); margin-bottom: 20px;">Benefits of Studying At Saint Albert's International University</h2>
      <p style="font-size: 1.2rem; color: #555; line-height: 1.8; margin-bottom: 20px;">
        Studying at Saint Albert's International University offers more than just education—it’s an opportunity to grow academically, spiritually, and personally. Students benefit from quality teaching, a supportive learning environment, strong moral values, and a community dedicated to their success and purpose-driven future.
      </p>
      <p style="font-size: 1.1rem; color: #666; line-height: 1.8; margin-bottom: 30px;">
        Saint Albert's International University offers its students the opportunity to complete their courses as quickly or as slowly as they want — depending on their abilities, and the time earmarked for such a program.
      </p>
      <a href="apply" class="btn-primary">Register Now</a>
    </div>

    <div style="flex: 1; min-width: 300px;">
      <div style="background: #f9f9f9; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-top: 5px solid var(--gold);">
        <h3 style="color: var(--deep-red); margin-bottom: 25px;"><i class="fas fa-map-marker-alt" style="color: var(--gold); margin-right: 10px;"></i> Contact Us Directly</h3>
        
        <p style="color: #444; line-height: 1.6; margin-bottom: 20px;">
          <strong>P.O. Box 4294</strong><br>
          Brownsville, Texas 78521,<br>
          United States of America
        </p>
        
        <hr style="border-top: 1px solid #ddd; margin: 20px 0;">
        
        <p style="color: #444; line-height: 1.6; margin-bottom: 20px;">
          <strong>Africa's Liaison Office</strong><br>
          P. O. Box 13773,<br>
          Barnawa Post Office,<br>
          Kaduna – Nigeria
        </p>

        <hr style="border-top: 1px solid #ddd; margin: 20px 0;">

        <div style="display: flex; gap: 15px; align-items: center; margin-bottom: 15px;">
          <i class="fas fa-phone-alt" style="font-size: 1.5rem; color: var(--gold);"></i>
          <span style="color: #444;">Whatsapp / Tel: <strong>+234 8059366151</strong></span>
        </div>

        <div style="display: flex; gap: 15px; align-items: center;">
          <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--gold);"></i>
          <span style="color: #444;"><strong>info@saiu.education</strong></span>
        </div>

        <p style="font-size: 0.95rem; color: #777; margin-top: 25px; text-align: justify; font-style: italic;">
          The institution focuses mostly on nontraditional students and all other people who are interested in quality higher education.
        </p>
      </div>
    </div>
  </div>

  <div class="prospectus-banner-section">
    <div class="prospectus-banner-content">
      <div class="prospectus-image">
        <img src="https://saintalbertcollege.org/wp-content/uploads/2022/06/pngegg-24-768x908.png" alt="Student" style="max-width: 100%; height: auto; border-radius: 20px;">
      </div>
      <div class="prospectus-text">
        <h2 style="font-size: 2.2rem; color: var(--gold); margin-bottom: 20px;">Our Student’s Prospectus</h2>
        <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px; color: #e0e0e0;">
          Read the course guide and keep track of your lessons/modules: Your course guide contains a structured approach built to shape minds, strengthen values, and prepare students to serve with excellence. Find out more detailed information and course specifics inside our online prospectus.
        </p>
        <a href="prospectus" class="btn-outline" style="border-color: var(--gold); color: white;">View Prospectus</a>
      </div>
    </div>
  </div>

  <style>
    .prospectus-banner-section {
      background: linear-gradient(135deg, #1c4547 0%, #0d2829 100%);
      border-radius: 30px;
      padding: 60px;
      color: white;
      margin-bottom: 80px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    .prospectus-banner-content {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
    }
    .prospectus-image { flex: 1; text-align: center; min-width: 250px; }
    .prospectus-text { flex: 2; min-width: 300px; }

    @media (max-width: 780px) {
      .programs-stats-row {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        padding: 24px 16px;
      }
      .programs-stats-row .stat-label strong {
        font-size: 1.5rem !important; /* Larger price font */
        display: block;
        margin-top: 5px;
      }
      .program-img {
        height: 180px;
      }
      .prospectus-banner-section {
        padding: 40px 20px;
      }
      .prospectus-banner-content {
        flex-direction: column;
        text-align: center;
      }
      .prospectus-text {
        min-width: 100%;
      }
      .prospectus-text h2 {
        font-size: 1.8rem !important;
      }
    }
  </style>

</div>

<?php include 'includes/footer.php'; ?>
