@extends('layouts.default')

@section('title', 'Mainfit - Kesehatan & Keseimbangan Diri')

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1>Transform Your <span>Digital Future</span></h1>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.</p>
              <div class="hero-actions justify-content-center justify-content-lg-start">
                <a href="#services" class="btn-primary scrollto">Start Journey</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/illustration/illustration-28.webp" class="img-fluid floating" alt="">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row align-items-center">

          <!-- Image Column -->
          <div class="col-lg-6">
            <div class="about-image">
              <img src="assets/img/about/about-portrait-4.webp" alt="About" class="img-fluid">
            </div>
          </div>

          <!-- Content Column -->
          <div class="col-lg-6">
            <div class="content">
              <h2>Crafting Excellence Through Innovation and Dedication</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

              <!-- Stats Row -->
              <div class="stats-row">
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>Projects Completed</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>Years Experience</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter"></span>%</h3>
                  <p>Client Satisfaction</p>
                </div>
              </div><!-- End Stats Row -->

              <!-- CTA Button -->
              <div class="cta-wrapper">
                <a href="#" class="btn-cta">
                  <span>Discover Our Story</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-palette"></i>
              </div>
              <h3>Creative Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
              <a href="service-details.html" class="service-link">
                Learn More
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <h3>Web Development</h3>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
              <a href="service-details.html" class="service-link">
                Learn More
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-megaphone"></i>
              </div>
              <h3>Digital Marketing</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <a href="service-details.html" class="service-link">
                Learn More
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <h3>Business Strategy</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
              <a href="service-details.html" class="service-link">
                Learn More
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3>Security Solutions</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
              <a href="service-details.html" class="service-link">
                Learn More
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-headset"></i>
              </div>
              <h3>24/7 Support</h3>
              <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
              <a href="service-details.html" class="service-link">
                Learn More
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div><!-- End Service Card -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="features-grid">
          <div class="features-card">
            <div class="icon-wrapper">
              <i class="bi bi-laptop"></i>
            </div>
            <h3>Streamlined Workflow Solution</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
            </p>
            <div class="features-list">
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Integrated development environment</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Cloud-based collaborative tools</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Automated testing procedures</span>
              </div>
            </div>
            <div class="image-container">
              <img src="assets/img/illustration/illustration-14.webp" alt="Streamlined Workflow" class="img-fluid">
            </div>
          </div>

          <div class="features-card">
            <div class="icon-wrapper">
              <i class="bi bi-graph-up"></i>
            </div>
            <h3>Performance Analytics</h3>
            <p>
              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.
            </p>
            <div class="features-list">
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Real-time data visualization</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Custom report generation</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Predictive analysis models</span>
              </div>
            </div>
            <div class="image-container">
              <img src="assets/img/illustration/illustration-6.webp" alt="Performance Analytics" class="img-fluid">
            </div>
          </div>

          <div class="features-card">
            <div class="icon-wrapper">
              <i class="bi bi-shield-lock"></i>
            </div>
            <h3>Enterprise Security Framework</h3>
            <p>
              Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.
            </p>
            <div class="features-list">
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Multi-factor authentication</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>End-to-end encryption standard</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Automated security audits</span>
              </div>
            </div>
            <div class="image-container">
              <img src="assets/img/illustration/illustration-7.webp" alt="Security Framework" class="img-fluid">
            </div>
          </div>

          <div class="features-card">
            <div class="icon-wrapper">
              <i class="bi bi-people"></i>
            </div>
            <h3>Collaborative Team Environment</h3>
            <p>
              Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta.
            </p>
            <div class="features-list">
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Shared workspace functionality</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Real-time communication tools</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Progress tracking dashboards</span>
              </div>
            </div>
            <div class="image-container">
              <img src="assets/img/illustration/illustration-8.webp" alt="Team Environment" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Features Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <!-- Testimonial Slide 1 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-f-12.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit sed eiusmod tempor.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Jessica Martinez</h5>
                  <span>UX Designer</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 2 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-m-8.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>David Rodriguez</h5>
                  <span>Software Engineer</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 3 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-f-6.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Amanda Wilson</h5>
                  <span>Creative Director</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 4 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-m-12.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Ryan Thompson</h5>
                  <span>Business Analyst</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 5 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-f-10.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Rachel Chen</h5>
                  <span>Project Manager</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

          </div>

          <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center g-4">

          <div class="col-lg-4 col-md-6">
            <div class="pricing-card starter">
              <div class="plan-header">
                <h3 class="plan-name">Starter</h3>
                <p class="plan-description">Perfect for individuals and small projects getting started.</p>
              </div>
              <div class="pricing-display">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">19</span>
                  <span class="period">/mo</span>
                </div>
              </div>
              <div class="features-list">
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>5 Projects</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>10GB Storage</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Email Support</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Basic Analytics</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>SSL Certificate</span>
                </div>
              </div>
              <a href="#" class="btn-plan">Get Started</a>
            </div>
          </div><!-- End Starter Plan -->

          <div class="col-lg-4 col-md-6">
            <div class="pricing-card professional featured">
              <div class="plan-header">
                <div class="featured-badge">Most Popular</div>
                <h3 class="plan-name">Professional</h3>
                <p class="plan-description">Ideal for growing businesses and teams that need more power.</p>
              </div>
              <div class="pricing-display">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">49</span>
                  <span class="period">/mo</span>
                </div>
              </div>
              <div class="features-list">
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>25 Projects</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>100GB Storage</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Priority Support</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Advanced Analytics</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Team Collaboration</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Custom Integrations</span>
                </div>
              </div>
              <a href="#" class="btn-plan">Start Free Trial</a>
            </div>
          </div><!-- End Professional Plan -->

          <div class="col-lg-4 col-md-6">
            <div class="pricing-card enterprise">
              <div class="plan-header">
                <h3 class="plan-name">Enterprise</h3>
                <p class="plan-description">Comprehensive solution for large organizations with specific needs.</p>
              </div>
              <div class="pricing-display">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">99</span>
                  <span class="period">/mo</span>
                </div>
              </div>
              <div class="features-list">
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Unlimited Projects</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>1TB Storage</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>24/7 Phone Support</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Enterprise Analytics</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Advanced Security</span>
                </div>
                <div class="feature">
                  <i class="bi bi-check2"></i>
                  <span>Dedicated Account Manager</span>
                </div>
              </div>
              <a href="#" class="btn-plan">Contact Sales</a>
            </div>
          </div><!-- End Enterprise Plan -->

        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-lg-8 text-center">
            <div class="pricing-footer">
              <p class="guarantee-text">30-day money-back guarantee • No setup fees • Cancel anytime</p>
              <p class="contact-text">Need a custom plan? <a href="#">Contact our sales team</a></p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-9">

            <div class="faq-wrapper">

              <div class="faq-item faq-active">
                <div class="faq-header">
                  <span class="faq-number">01</span>
                  <h4>Donec sollicitudin molestie malesuada proin eget tortor?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <span class="faq-number">02</span>
                  <h4>Sed porttitor lectus nibh vivamus magna justo?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <span class="faq-number">03</span>
                  <h4>Pellentesque habitant morbi tristique senectus?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <span class="faq-number">04</span>
                  <h4>Lorem ipsum dolor sit amet consectetur adipiscing?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <span class="faq-number">05</span>
                  <h4>Curabitur aliquet quam id dui posuere blandit?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-7 order-lg-1 order-2">
            <div class="contact-form-container">
              <div class="form-intro">
                <h2>Let's Start a Conversation</h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" name="name" class="form-input" id="userName" placeholder="Your Name" required="">
                      <label for="userName" class="field-label">Name</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="email" class="form-input" name="email" id="userEmail" placeholder="Your Email" required="">
                      <label for="userEmail" class="field-label">Email</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="tel" class="form-input" name="phone" id="userPhone" placeholder="Your Phone">
                      <label for="userPhone" class="field-label">Phone</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" class="form-input" name="subject" id="messageSubject" placeholder="Subject" required="">
                      <label for="messageSubject" class="field-label">Subject</label>
                    </div>
                  </div>
                </div>

                <div class="form-field message-field">
                  <textarea class="form-input message-input" name="message" id="userMessage" rows="5" placeholder="Tell us about your project" required=""></textarea>
                  <label for="userMessage" class="field-label">Message</label>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <button type="submit" class="send-button">
                  Send Message
                  <span class="button-arrow">→</span>
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-5 order-lg-2 order-1">
            <div class="contact-sidebar">
              <div class="contact-header">
                <h3>Get in Touch</h3>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.</p>
              </div>

              <div class="contact-methods">
                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Address</span>
                    <p>892 Park Avenue, Manhattan<br>New York, NY 10075</p>
                  </div>
                </div>

                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Email</span>
                    <p>hello@businessdemo.com</p>
                  </div>
                </div>

                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Phone</span>
                    <p>+1 (555) 789-2468</p>
                  </div>
                </div>

                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Hours</span>
                    <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM</p>
                  </div>
                </div>
              </div>

              <div class="connect-section">
                <span class="connect-label">Connect with us</span>
                <div class="social-links">
                  <a href="#" class="social-link">
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-instagram"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-facebook"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

@endsection
