<?php include 'header.php'; ?>
<style>
  .services {
    background-color: #000; /* black background like your screenshot */
    padding: 2rem;
    color: #fff;
  }

  .services-list {
    list-style: none;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem 2rem;
    padding: 0;
    margin: 0;
  }

  .services-list li {
    display: flex;
    align-items: center;
    font-size: 1rem;
    font-weight: 500;
  }

  .services-list .check {
    color: #ff7425; /* neon green checkmark */
    margin-right: 0.5rem;
    font-weight: bold;
  }
  /* Make testimonial images smaller and circular */
.testimonial-s__slider-single .thumb img {
  width: 120px;              /* adjust size (smaller than before) */
  height: 120px;
  object-fit: cover;          /* keeps image centered and cropped */
  border-radius: 50%;         /* makes it circular */
  border: 4px solid #fff;     /* optional: white border around circle */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); /* soft shadow for depth */
  margin: 0 auto;             /* centers the image */
  display: block;
}

/* Optional: center the thumb area itself */
.testimonial-s__slider-single .thumb {
  text-align: center;
  position: relative;
}

</style>

      <div id="smooth-wrapper">
         <div id="smooth-content">
            <!-- ==== main start ==== -->
            <main>
               <!-- ==== banner start ==== -->
               <section class="banner">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="banner__content">
                              <h1 class="text-uppercase text-start fw-9 mb-0 title-anim">
                                 I AM 
                                 <span class="text-stroke">PASSIONATE</span>
                                 <span class="interval">
                                    <i class="icon-arrow-top-right"></i>
                                    WEB DEVELOPER
                                 </span>
                              </h1>
                              <div class="banner__content-inner">
                                 <p>We are a full-service website design, development and digital marketing company
                                    specializing in SEO, content marketing that grows brands.</p>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src="assets/img/banner.png" alt="Image"
                     class="banner-one-thumb d-none d-sm-block g-ban-one">
                 
                  <div class="banner-left-text banner-social-text d-none d-md-flex">
                     <a href="mailto:info@xpovio.com">mail : developerdiya1@gmail.com</a>
                     <a href="tel:99-2158-003-6980">Call : +91 95012-03992</a>
                  </div>
                  <div class="banner-right-text banner-social-text d-none d-md-flex">
                     <a href="https://www.instagram.com/" target="_blank">
                        instagram
                     </a>
                     <a href="https://www.pinterest.com/" target="_blank">
                        Linkedin
                     </a>
                     <a href="https://www.facebook.com/" target="_blank">
                        facebook
                     </a>
                  </div>
                
                  </a>
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / banner end ==== -->
               <!-- ==== agency start ==== -->
               <section class="section agency">
                  <div class="container">
                     <div class="row gaper align-items-center">
                        <div class="col-12 col-lg-6">
                           <div class="agency__thumb">
                              <img src="assets/img/diya.png" alt="Image" class="thumb-two fade-right">
                           </div>
                        </div>
                        <div class="col-12 col-lg-6">
                           <div class="agency__content section__content">
                              <span class="sub-title">
                                 WELCOME
                                 <i class="fa-solid fa-arrow-right"></i>
                              </span>
                              <h2 class="title title-anim">
                                Diya Creative Portfolio
                              </h2>
                                    <div class="paragraph">
                                       <p>I am a passionate Web Developer dedicated to building modern, responsive, 
                                          and high-performance websites that turn ideas into seamless digital experiences. 
                                          With expertise in front-end and back-end development, full-stack solutions, and
                                          UI/UX design, I create user-friendly, visually appealing, and optimized websites 
                                          help businesses and individuals stand out online. I believe in clean code, creative
                                             problem-solving, and delivering projects with precision and dedication, ensuring 
                                             every website not only looks great but performs flawlessly.</p>
                                    </div>
                             
                                    <div class="container">
                                       <ul class="services-list mt-3">
                                          <li><span class="check">✔</span> Branding & Design</li>
                                          <li><span class="check">✔</span> Digital Marketing</li>
                                          <li><span class="check">✔</span> Web Development</li>
                                          <li><span class="check">✔</span> Performance Marketing</li>
                                       </ul>
                                    </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src="assets/images//agency/dot-large.png" alt="Image" class="dot-large">
               </section>
               <!-- ==== / agency end ==== -->
               <!-- ==== portfolio start ==== -->
               <section class="section portfolio pb-0 fade-wrapper position-relative">
                  <div class="portfolio__text-slider">
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.html">
                              Developed
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.html">
                           Innovative
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.html">
                           Design
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.html">
                              Developed
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.html">
                              Innovative
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.html">
                            Design
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.html">
                              Developed
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row gaper">
                        <div class="col-12 col-sm-6 ">
                           <div class="portfolio__single portfolio__single-active topy-tilt fade-top">
                              <a href="https://alumni.ctgroup.co.in/">
                                 <img src="assets/img/project/pro1.png" alt="Image">
                              </a>
                              
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 ">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="https://cthalfmarathon.in/">
                                 <img src="assets/img/project/pro2.png" alt="Image">
                              </a>
                              
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 ">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="https://aryana.co.in/">
                                 <img src="assets/img/project/pro3.png" alt="Image">
                              </a>
                              
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 ">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="portfolio.html">
                                 <img src="assets/img/project/pro4.png" alt="Image">
                              </a>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / portfolio end ==== -->
               <!-- ==== offer start ==== -->
               <section class="section offer fade-wrapper light">
                  <div class="container">
                     <div class="row gaper">
                        <div class="col-12 col-lg-5">
                           <div class="offer__content section__content">
                              <span class="sub-title">
                                 WHAT WE OFFER
                                 <i class="fa-solid fa-arrow-right"></i>
                              </span>
                              <h2 class="title title-anim">
                                Empowering Your Business with Smart Web Solutions
                              </h2>
                              <div class="paragraph">
                                 <p>We bring innovative, results-driven web development strategies to help your business thrive online.
                                     Our services ensure seamless digital experiences, from responsive website design to efficient cloud-based
                                      solutions. At the end of the day, we focus on creating a streamlined, modern web presence
                                     that evolves with your business needs, ensuring performance, scalability, and long-term success.</p>
                              </div>
                              <div class="section__content-cta">
                                 <a href="our-services.php" class="btn btn--secondary">view all services</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-lg-7 col-xl-6 offset-xl-1">
                           <div class="offer__cta">
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    01
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.html">
                                     Website Maintenance & Support
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background="assets/img/offer1.png"></div>
                              </div>
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    02
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.html">
                                    Digital Strategy Consultation
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background="assets/img/offer2.png"></div>
                              </div>
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    03
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.html">
                                      Performance Optimization
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background="assets/img/offer1.png"></div>
                              </div>
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    04
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.html">
                                       API Integration & Backend Development
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background="assets/img/offer2.png"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src="assets/images/offer/star.png" alt="Image" class="star">
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / offer end ==== -->
               <!-- ==== testimonial start ==== -->
               <section class="section testimonial pt-0 position-relative">
                  <div class="testimonial__text-slider">
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.html">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.html">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.html">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.html">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.html">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.html">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.html">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                  </div>
                  <div class="container position-relative">
  <div class="row">
    <div class="col-12 col-xxl-10">
      <div class="testimonial-s__slider">

        <!-- Testimonial 1 -->
        <div class="testimonial-s__slider-single">
          <div class="row gaper align-items-center">
            <div class="col-12 col-lg-4 col-xxl-4">
              <div class="thumb">
                <img src="assets/images/testimonial/client-1.jpg" alt="Emily Carter">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="322" viewBox="0 0 44 322" fill="none" class="d-none d-lg-block">
                  <path d="M43 -0.000976562V151.999L2 192.999H43V321.999" stroke="#414141" />
                </svg>
              </div>
            </div>
            <div class="col-12 col-lg-7 offset-lg-1 col-xxl-7 offset-xxl-1">
              <div class="testimonial-s__content">
                <div class="quote"><i class="fa-solid fa-quote-right"></i></div>
                <div class="content">
                  <h4>“Working with this developer was a seamless experience. They built my business website in Laravel with perfect UI/UX, fast load speed, and mobile responsiveness. Truly professional and creative.”</h4>
                </div>
                <div class="content-cta">
                  <h5>Emily Carter</h5>
                  <p>Marketing Director, BrightNest Agency</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-s__slider-single">
          <div class="row gaper align-items-center">
            <div class="col-12 col-lg-4 col-xxl-4">
              <div class="thumb">
                <img src="assets/images/testimonial/client-2.jpg" alt="Rahul Verma">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="322" viewBox="0 0 44 322" fill="none" class="d-none d-lg-block">
                  <path d="M43 -0.000976562V151.999L2 192.999H43V321.999" stroke="#414141" />
                </svg>
              </div>
            </div>
            <div class="col-12 col-lg-7 offset-lg-1 col-xxl-7 offset-xxl-1">
              <div class="testimonial-s__content">
                <div class="quote"><i class="fa-solid fa-quote-right"></i></div>
                <div class="content">
                  <h4>“The team built our company portfolio site exactly how we imagined it. From animations to SEO optimization, everything was done to perfection. Great communication throughout the project.”</h4>
                </div>
                <div class="content-cta">
                  <h5>Rahul Verma</h5>
                  <p>Founder, WebEdge Technologies</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-s__slider-single">
          <div class="row gaper align-items-center">
            <div class="col-12 col-lg-4 col-xxl-4">
              <div class="thumb">
                <img src="assets/images/testimonial/client-3.jpg" alt="Sophia Nguyen">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="322" viewBox="0 0 44 322" fill="none" class="d-none d-lg-block">
                  <path d="M43 -0.000976562V151.999L2 192.999H43V321.999" stroke="#414141" />
                </svg>
              </div>
            </div>
            <div class="col-12 col-lg-7 offset-lg-1 col-xxl-7 offset-xxl-1">
              <div class="testimonial-s__content">
                <div class="quote"><i class="fa-solid fa-quote-right"></i></div>
                <div class="content">
                  <h4>“They delivered a visually stunning and functional web platform for our online course portal. Their problem-solving skills and Laravel expertise are truly outstanding.”</h4>
                </div>
                <div class="content-cta">
                  <h5>Sophia Nguyen</h5>
                  <p>Product Manager, Learnify</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Navigation Buttons -->
  <div class="slide-group justify-content-start">
    <a href="javascript:void(0)" aria-label="previous item" class="slide-btn prev-testimonial-three">
      <i class="fa-light fa-angle-left"></i>
    </a>
    <a href="javascript:void(0)" aria-label="next item" class="slide-btn next-testimonial-three">
      <i class="fa-light fa-angle-right"></i>
    </a>
  </div>
</div>

                 
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / testimonial end ==== -->
              
               <!-- ==== sponsor start ==== -->
               <div class=" pb-0 mb-5">
                  <div class="container-fluid">
                     <div class="row justify-content-center">
                        <div class="col-12">
                           <div class="sponsor__slider ">
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/one.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/two.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/three.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/four.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/five.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/six.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/one.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/two.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/three.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/four.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/five.png" alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src="assets/images/sponsor/six.png" alt="Image">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </div>
               <!-- ==== / sponsor end ==== -->
                          </main>
            <!-- ==== / main end ==== -->
          <?php include 'footer.php'; ?>