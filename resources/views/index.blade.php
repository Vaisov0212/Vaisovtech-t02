<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>bosh sahifa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.2.1/css/flag-icons.min.css">

  <link href="{{asset('client/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('client/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('client/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('client/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Style
  * Template URL: https://bootstrapmade.com/style-bootstrap-portfolio-template/
  * Updated: Jul 02 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('client/assets/img/logo.webp')}}" alt=""> -->
        <!-- Uncomment the line below if you also wish to use an text logo -->
        <!-- <h1 class="sitename">Style</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">

        <div class="profile-img">
          <img src="{{asset('client/assets/img/profile/profile-square-1.webp')}}" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="index.html" class="logo d-flex align-items-center justify-content-center active">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="{{asset('client/assets/img/logo.webp')}}" alt=""> -->
          <h1 class="sitename">Vaisov Azamat</h1>
        </a>

        <div class="text-center">
          <a href="/lang/uz" class="mx-2 d-inline-block "><i class="fi fi-uz"></i></a>
          <a href="/lang/ru" class="mx-2 d-inline-block "><i class="fi fi-ru"></i></a>
          <a href="/lang/en" class="mx-2 d-inline-block "><i class="fi fi-gb"></i></a>
        </div>

        <ul>
          <li><a href="#hero">{{ __('home') }}</a></li>
          <li><a href="#about">{{ __('about') }}</a></li>
          <li><a href="#resume">{{ __('resume') }}</a></li>
          <li><a href="#portfolio">{{ __('portfolio') }}</a></li>
          <li><a href="#services">{{ __('services') }}</a></li>

          <li><a href="#contact">{{ __('contact') }}</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row g-0 align-items-center">

          <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
            <div class="content-wrapper">
              <h1 class="hero-title">creative <span class="typed" data-typed-items="{{ $hero->main; }}"></span></h1>
              <p class="lead">{{ $hero->subtitle; }}</p>

              <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                  <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $hero->project }}" data-purecounter-duration="2">0</span>
                  <span class="stat-label">Loyihalar</span>
                </div>
                <div class="stat-item">
                  <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $hero->experince }}" data-purecounter-duration="2">0</span>
                  <span class="stat-label">Yillik tajriba</span>
                </div>
                <div class="stat-item">
                  <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $hero->clients }}" data-purecounter-duration="2">0</span>
                  <span class="stat-label">Mijozlar</span>
                </div>
              </div>



              <div class="social-links" data-aos="fade-up" data-aos-delay="400">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-github"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 hero-image" data-aos="fade-left" data-aos-delay="200">
            <div class="image-container">
              <div class="floating-elements">
                <div class="floating-card card-1" data-aos="zoom-in" data-aos-delay="300">
                  <i class="bi bi-braces"></i>
                  <span>Yaxshi Dasturchi</span>
                </div>
                <div class="floating-card card-2" data-aos="zoom-in" data-aos-delay="400">
                  <i class="bi bi-code-slash"></i>
                  <span>Development</span>
                </div>
                <div class="floating-card card-3" data-aos="zoom-in" data-aos-delay="500">
                  <i class="bi bi-lightning"></i>
                  <span>Creative Ideas</span>
                </div>
              </div>
              <img src="{{asset('client/assets/img/profile/profile-square-1.webp')}}" alt="Portfolio Hero" class="img-fluid hero-main-image">
              <div class="image-overlay"></div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Biz haqimizda</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="profile-image-wrapper">
              <div class="profile-image">
                <img src="{{asset('client/assets/img/profile/profile-square-1.webp')}}" alt="Profile" class="img-fluid">
              </div>
              <div class="signature-section">
                <img src="{{asset('client/assets/img/misc/signature-1.webp')}}" alt="Signature" class="signature">
                <p class="quote">Building meaningful digital experiences through creative code.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <div class="intro">
                <h2>Salom! Men Vaisov Azamat,</h2>
                <p> 27 yoshdaman, back-end dasturchi sifatida PHP va Laravel bilan ishlayman. 2015-yildan IT sohasiga qiziqib, 2021-yildan professional faoliyatni boshladim.

Men samarali, barqaror va xavfsiz web yechimlar yaratishga intilaman. Har bir loyiha foydalanuvchi va biznes uchun qulay va foydali yechimlar yaratadi. Yangi texnologiyalarni o‘rganish va loyihalarni optimallashtirish – mening ishga bo‘lgan ishtiyoqimni oshiradi.</p>
              </div>

              <div class="skills-grid">
                <div class="skill-item" data-aos="zoom-in" data-aos-delay="400">
                  <div class="skill-icon">
                    <i class="bi bi-braces"></i>
                  </div>
                  <h4>PHP</h4>
                  <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar</p>
                </div>
                <div class="skill-item" data-aos="zoom-in" data-aos-delay="450">
                  <div class="skill-icon">
                    <i class="bi bi-code-slash"></i>
                  </div>
                  <h4>Laravel</h4>
                  <p>Sed porttitor lectus nibh. Cras ultricies ligula sed magna</p>
                </div>
                <div class="skill-item" data-aos="zoom-in" data-aos-delay="500">
                  <div class="skill-icon">
                    <i class="bi bi-database-check"></i>
                  </div>
                  <h4>SQL</h4>
                  <p>Vestibulum ac diam sit amet quam vehicula elementum</p>
                </div>
              </div>

              <div class="journey-timeline" data-aos="fade-up" data-aos-delay="300">
                <div class="timeline-item">
                  <div class="year">2019</div>
                  <div class="description">Graduated with B.A. in Digital Design from Creative University</div>
                </div>
                <div class="timeline-item">
                  <div class="year">2020</div>
                  <div class="description">Joined InnovateTech as Junior Frontend Developer</div>
                </div>
                <div class="timeline-item">
                  <div class="year">2023</div>
                  <div class="description">Launched freelance career specializing in creative web solutions</div>
                </div>
              </div>

              <div class="cta-section" data-aos="fade-up" data-aos-delay="400">
                <div class="fun-fact">
                  <span class="emoji">☕</span>
                  <span class="text">Coffee-fueled designer based in Portland</span>
                </div>
                <div class="action-buttons">
                  <a href="#portfolio" class="btn btn-primary">View My Work</a>
                  <a href="#" class="btn btn-outline">Download Resume</a>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8">
            <div class="skills-grid">
              <div class="row g-4">
                <div class="col-md-6" data-aos="flip-left" data-aos-delay="200">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="bi bi-code-slash"></i>
                      <h3>Frontend Development</h3>
                    </div>
                    <div class="skills-animation">
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">HTML/CSS</span>
                          <span class="skill-percentage">95%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">JavaScript</span>
                          <span class="skill-percentage">88%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Vue.js</span>
                          <span class="skill-percentage">82%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Frontend Card -->
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="300">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="bi bi-server"></i>
                      <h3>Backend Development</h3>
                    </div>
                    <div class="skills-animation">
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">PHP</span>
                          <span class="skill-percentage">78%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Laravel</span>
                          <span class="skill-percentage">75%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">MySQL</span>
                          <span class="skill-percentage">72%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Backend Card -->
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="400">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="bi bi-layers-half"></i>
                      <h3>Design &amp; Tools</h3>
                    </div>
                    <div class="skills-animation">
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Figma</span>
                          <span class="skill-percentage">85%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Photoshop</span>
                          <span class="skill-percentage">70%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Illustrator</span>
                          <span class="skill-percentage">68%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Design Card -->
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="500">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="bi bi-shield-fill-check"></i>
                      <h3>Cloud &amp; DevOps</h3>
                    </div>
                    <div class="skills-animation">
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">AWS</span>
                          <span class="skill-percentage">76%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Docker</span>
                          <span class="skill-percentage">73%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Git</span>
                          <span class="skill-percentage">90%</span>
                        </div>
                        <div class="skill-bar progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End DevOps Card -->
                </div>
              </div>
            </div><!-- End Skills Grid -->
          </div>

          <div class="col-lg-4">
            <div class="skills-summary" data-aos="fade-left" data-aos-delay="200">
              <h3>Professional Expertise</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

              <div class="summary-stats">
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                  <div class="stat-circle">
                    <i class="bi bi-trophy"></i>
                  </div>
                  <div class="stat-info">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">Years Experience</span>
                  </div>
                </div>

                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                  <div class="stat-circle">
                    <i class="bi bi-diagram-3"></i>
                  </div>
                  <div class="stat-info">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Projects Completed</span>
                  </div>
                </div>

                <div class="stat-item" data-aos="zoom-in" data-aos-delay="500">
                  <div class="stat-circle">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="stat-info">
                    <span class="stat-number">30+</span>
                    <span class="stat-label">Happy Clients</span>
                  </div>
                </div>
              </div>

              <div class="skills-badges" data-aos="fade-up" data-aos-delay="600">
                <h4>Certifications</h4>
                <div class="badge-list">
                  <div class="skill-badge">AWS Certified</div>
                  <div class="skill-badge">Laravel Expert</div>
                  <div class="skill-badge">Vue.js Developer</div>
                  <div class="skill-badge">UI/UX Design</div>
                </div>
              </div>
            </div><!-- End Skills Summary -->
          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Resume</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="experience-section">
              <div class="section-header">
                <h2><i class="bi bi-briefcase"></i> Professional Journey</h2>
                <p class="section-subtitle">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas vestibulum tortor quam.</p>
              </div>

              <div class="experience-cards">
                <div class="experience-card" data-aos="zoom-in" data-aos-delay="300">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Technical Director</h3>
                      <h4>Proin Corporation</h4>
                    </div>
                    <span class="duration">2022 - Present</span>
                  </div>
                  <div class="card-body">
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra veniam sit amet lacus cursus.</p>
                    <ul class="achievements">
                      <li>Managed cross-functional teams of 15+ professionals</li>
                      <li>Implemented agile methodologies resulting in 40% efficiency gain</li>
                      <li>Led digital transformation initiatives worth $2M+</li>
                    </ul>
                  </div>
                </div>

                <div class="experience-card" data-aos="zoom-in" data-aos-delay="400">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Senior Development Manager</h3>
                      <h4>Consectetur Solutions Inc</h4>
                    </div>
                    <span class="duration">2018 - 2022</span>
                  </div>
                  <div class="card-body">
                    <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim donec pede justo fringilla vel.</p>
                  </div>
                </div>

                <div class="experience-card" data-aos="zoom-in" data-aos-delay="500">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Product Development Specialist</h3>
                      <h4>Adipiscing Technologies</h4>
                    </div>
                    <span class="duration">2015 - 2018</span>
                  </div>
                  <div class="card-body">
                    <p>Nam quam nunc blandit vel luctus pulvinar hendrerit id lorem maecenas nec odio et ante tincidunt tempus donec vitae sapien ut.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="education-section">
              <div class="section-header">
                <h2><i class="bi bi-mortarboard"></i> Academic Excellence</h2>
                <p class="section-subtitle">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo ligula eget dolor aenean massa.</p>
              </div>

              <div class="education-timeline">
                <div class="timeline-track"></div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="300">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Master of Computer Science</h3>
                      <span class="year">2015 - 2017</span>
                    </div>
                    <h4 class="institution">Tempus University</h4>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus donec quam felis ultricies nec.</p>
                  </div>
                </div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="400">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Bachelor of Information Technology</h3>
                      <span class="year">2011 - 2015</span>
                    </div>
                    <h4 class="institution">Rhoncus Institute of Technology</h4>
                    <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi aenean vulputate.</p>
                  </div>
                </div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="500">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Certificate in Digital Innovation</h3>
                      <span class="year">2020</span>
                    </div>
                    <h4 class="institution">Ligula Academy</h4>
                    <p>Etiam sit amet orci eget eros faucibus tincidunt duis leo sed fringilla mauris sit amet nibh donec sodales sagittis magna.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-stack"></i>
              </div>
              <h3>Digital Solutions</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3>Secure Systems</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <h3>Growth Strategy</h3>
              <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-cpu"></i>
              </div>
              <h3>AI Integration</h3>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 5 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-cloud-arrow-up"></i>
              </div>
              <h3>Cloud Services</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 6 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-gear"></i>
              </div>
              <h3>Process Automation</h3>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">
              <i class="bi bi-grid-3x3"></i> All Projects
            </li>
            <li data-filter=".filter-ui">
              UI/UX
            </li>
            <li data-filter=".filter-development">
              Development
            </li>
            <li data-filter=".filter-photography">
              Photography
            </li>
            <li data-filter=".filter-marketing">
              Marketing
            </li>
          </ul>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-1.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">UI/UX Design</div>
                      <h3 class="entry-title">Mobile Banking App</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-1.webp')}}" class="glightbox" data-gallery="portfolio-gallery-ui" data-glightbox="title: Mobile Banking App; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-10.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Development</div>
                      <h3 class="entry-title">E-Learning Platform</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-10.webp')}}" class="glightbox" data-gallery="portfolio-gallery-development" data-glightbox="title: E-Learning Platform; description: Nulla vitae elit libero, a pharetra augue mollis interdum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-7.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Photography</div>
                      <h3 class="entry-title">Urban Architecture</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-7.webp')}}" class="glightbox" data-gallery="portfolio-gallery-photography" data-glightbox="title: Urban Architecture; description: Sed ut perspiciatis unde omnis iste natus error sit voluptatem.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-4.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Social Media Campaign</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-4.webp')}}" class="glightbox" data-gallery="portfolio-gallery-marketing" data-glightbox="title: Social Media Campaign; description: Quis autem vel eum iure reprehenderit qui in ea voluptate.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-2.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">UI/UX Design</div>
                      <h3 class="entry-title">Smart Home Interface</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-2.webp')}}" class="glightbox" data-gallery="portfolio-gallery-ui" data-glightbox="title: Smart Home Interface; description: At vero eos et accusamus et iusto odio dignissimos ducimus.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-11.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Development</div>
                      <h3 class="entry-title">Cloud Management System</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-11.webp')}}" class="glightbox" data-gallery="portfolio-gallery-development" data-glightbox="title: Cloud Management System; description: Temporibus autem quibusdam et aut officiis debitis.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-8.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Photography</div>
                      <h3 class="entry-title">Nature Collection</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-8.webp')}}" class="glightbox" data-gallery="portfolio-gallery-photography" data-glightbox="title: Nature Collection; description: Integer posuere erat a ante venenatis dapibus posuere velit aliquet.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('client/assets/img/portfolio/portfolio-5.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="{{asset('client/assets/img/portfolio/portfolio-5.webp')}}" class="glightbox" data-gallery="portfolio-gallery-marketing" data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Bog'lanish</h2>
        <p>xizmatlar va takliflar bo'lsa biz bilan bog'lanishinggiz mumkin !</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Bog'lanish uchun ma'lumotlar</h3>
              <p>Bizning hizmatlarimizdan foydalanishinggiz uchun biz bilan bog'laning</p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Manzil</h4>
                  <p>O'zbekiston, Xorazm viloyati </p>
                  <p>Hazorasp tumani</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Telefon:</h4>
                  <p>+998 91 421 71 30</p>
                  <p>+998 90 090 46 45</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email</h4>
                  <p>karvak117@mail.ru</p>
                  <p>karvak117@gmail.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Xabar qoldirish</h3>
              <p>Bizning xizmatlarimizdan foydalanish uchun habar qoldirishinggiz mumkin.</p>

              <form action="{{ route('contact_create') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @method('POST')
                @csrf
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Ism Familya" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Mavzu" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Xabar to'liq matni" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                        @if ($errors->any())
                        <div class="alert alert-sm alert-warning">
                        <u>
                                @foreach ($errors->all() as $err )
                                <li>{{ $err }}</li>
                                @endforeach
                        </u>
                         </div>
                        @endif
                    @if (session('success'))
                        <div class="alert alert-success">Your message has been sent. Thank you!</div>
                    @endif
                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Style</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  {{-- <script src="{{asset('client/assets/vendor/php-email-form/validate.js')}}"></script> --}}
  <script src="{{asset('client/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('client/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('client/assets/vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('client/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('client/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('client/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('client/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('client/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('client/assets/js/main.js')}}"></script>

</body>

</html>
