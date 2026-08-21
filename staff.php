<?php
$pageTitle = "Our Staff";
$currentPage = "staff";
include 'includes/header.php';
?>

<!-- Page Banner -->
<div class="page-banner">
  <h1>Our Staff</h1>
  <p>Our Faculty Members — Meet the Leadership Team</p>
</div>

<div class="container">

  <style>
    .staff-section-title {
      text-align: center;
      margin: 50px 0 30px;
    }

    .staff-section-title h2 {
      display: inline-block;
    }

    .staff-section-title .section-subhead {
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }

    .staff-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin: 40px 0;
    }

    .staff-card {
      background: white;
      border-radius: 28px;
      padding: 32px 24px;
      text-align: center;
      box-shadow: 0 12px 24px -8px rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(212, 175, 55, 0.2);
      border-bottom: 4px solid var(--gold);
      transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      position: relative;
      overflow: hidden;
    }

    .staff-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 6px;
      background: linear-gradient(90deg, var(--deep-red), var(--gold), var(--forest));
      opacity: 0;
      transition: opacity 0.3s;
    }

    .staff-card:hover {
      transform: translateY(-8px) scale(1.01);
      box-shadow: 0 28px 36px -12px rgba(0, 0, 0, 0.25), 0 0 0 2px rgba(212, 175, 55, 0.5);
    }

    .staff-card:hover::before {
      opacity: 1;
    }

    .staff-avatar {
      width: 100px;
      height: 100px;
      background: linear-gradient(135deg, var(--deep-red), var(--deep-red-dark));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      box-shadow: 0 10px 20px rgba(155, 42, 47, 0.25), inset 0 2px 4px rgba(255, 255, 255, 0.3);
    }

    .staff-avatar i {
      color: var(--gold);
      font-size: 2.4rem;
    }

    .staff-card h3 {
      color: var(--deep-red);
      font-size: 1.2rem;
      margin-bottom: 6px;
    }

    .staff-degree {
      color: var(--gold-dark);
      font-weight: 700;
      font-size: 0.9rem;
      margin-bottom: 10px;
      letter-spacing: 0.5px;
    }

    .staff-divider {
      width: 50px;
      height: 3px;
      background: var(--gold);
      margin: 12px auto;
      border-radius: 10px;
    }

    .staff-role {
      color: var(--forest);
      font-weight: 600;
      font-size: 1rem;
    }

    .staff-role-badge {
      display: inline-block;
      padding: 6px 18px;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: 700;
      margin-top: 10px;
    }

    .badge-admin {
      background: linear-gradient(135deg, var(--deep-red), var(--deep-red-dark));
      color: var(--gold);
    }

    .badge-instructor {
      background: linear-gradient(135deg, var(--forest), #0f3a3f);
      color: var(--gold);
    }

    @media (max-width: 1024px) {
      .staff-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 780px) {
      .staff-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }
      .staff-section-title h2 {
        font-size: 1.8rem;
      }
      .staff-section-title .section-subhead {
        font-size: 0.9rem;
        padding: 0 10px;
      }
      .staff-card {
        padding: 24px 16px;
      }
    }
  </style>

  <!-- Administration Section -->
  <div class="staff-section-title">
    <h2>Administration</h2>
    <p class="section-subhead">Meet the strategic leadership team guiding Saint Albert's International University
      towards
      academic excellence and moral integrity.</p>
  </div>

  <div class="staff-grid">
    <!-- Chancellor -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-crown"></i>
      </div>
      <h3>Dr. Moses George</h3>
      <div class="staff-degree">Ph.D</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Chancellor</div>
      <span class="staff-role-badge badge-admin">Administration</span>
    </div>

    <!-- Rector -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-university"></i>
      </div>
      <h3>Dr. Jorge Alberto Gonzalez</h3>
      <div class="staff-degree">Ph.D.</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Rector</div>
      <span class="staff-role-badge badge-admin">Administration</span>
    </div>

    <!-- Registrar -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-clipboard-list"></i>
      </div>
      <h3>Dr. Yolanda Torres</h3>
      <div class="staff-degree">Ph.D</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Registrar</div>
      <span class="staff-role-badge badge-admin">Administration</span>
    </div>
  </div>

  <!-- Faculty Section -->
  <div class="staff-section-title" style="margin-top: 60px;">
    <h2>Academic Faculty</h2>
    <p class="section-subhead">Our dedicated instructors bring expertise, passion, and years of academic experience to
      every classroom.</p>
  </div>

  <div class="staff-grid">
    <!-- Dr. Esther Bruce -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
      <h3>Dr. Esther Bruce</h3>
      <div class="staff-degree">Ph.D. Spirituality</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Instructor</div>
      <span class="staff-role-badge badge-instructor">Faculty</span>
    </div>

    <!-- Dr. Yolanda Torrez -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
      <h3>Dr. Yolanda Torrez</h3>
      <div class="staff-degree">Ph.D. English</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Instructor</div>
      <span class="staff-role-badge badge-instructor">Faculty</span>
    </div>

    <!-- Dr. Francisco Fernandez -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
      <h3>Dr. Francisco Fernandez</h3>
      <div class="staff-degree">Ph.D. Psychology & Sociology</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Instructor</div>
      <span class="staff-role-badge badge-instructor">Faculty</span>
    </div>

    <!-- Dr. Jorge Gonzalez -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
      <h3>Dr. Jorge Gonzalez</h3>
      <div class="staff-degree">Ph.D. Theology and Pastoral Care</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Instructor</div>
      <span class="staff-role-badge badge-instructor">Faculty</span>
    </div>

    <!-- Dr. Jose Gonzalez -->
    <div class="staff-card">
      <div class="staff-avatar">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
      <h3>Dr. Jose Gonzalez</h3>
      <div class="staff-degree">Ph.D. Business Administration</div>
      <div class="staff-divider"></div>
      <div class="staff-role">Instructor</div>
      <span class="staff-role-badge badge-instructor">Faculty</span>
    </div>
  </div>

  <!-- CTA -->
  <div class="contact-office">
    <h2>Join Our Team</h2>
    <p style="font-size: 1.1rem; max-width: 700px; margin: 16px auto;">Saint Albert's International University is always
      looking for passionate educators committed to excellence. If you're interested in becoming part of our team, reach
      out to us.</p>
    <div style="margin-top: 24px; display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="contact" class="btn-primary" style="background: var(--gold); color: var(--deep-red);">Contact Us
        →</a>
      <a href="apply" class="btn-primary">Apply Now →</a>
    </div>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
