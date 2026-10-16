<?php
$page_data = [
    'meta_title' => isset($meta_title) ? $meta_title : 'VOXINNOV | Custom Software & Web Development Company Cochin, Kerala',
    'meta_description' => isset($meta_description) ? $meta_description : 'VOXINNOV is a premier software development and digital solutions company founded in 2007. We craft bespoke web applications, mobile apps, enterprise software, and branding solutions.',
    'meta_keywords' => isset($meta_keywords) ? $meta_keywords : 'VOXINNOV, software development company Cochin, web development Kerala, custom software solutions, mobile app development Cochin, IT company Kakkanad, responsive web design, digital transformation Kerala',
    'canonical_url' => isset($canonical_url) ? $canonical_url : base_url()
];
?>
<?= view('header', $page_data) ?>


  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Hero area start -->
        <section class="hero__area-2">
          <canvas id="hero-dots" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none;"></canvas>
          <div class="hero__inner-2">
            <div class="sec-title-wrapper">
              <h2 class="sec-title-3 bg-shape">Crafting <br>Your </h2>
              <h2 class="sec-title-3">Dreams Into <br>Code</h2>
            </div>
            <div class="hero__text-2">
              <p>Established in 2007, VOXINNOV combines the expertise of veteran IT entrepreneurs to deliver innovative and impactful tech solutions.</p>
              <div class="hero__button btn_wrapper">
                <a href="<?php echo base_url(); ?>contact" class="wc-btn-pink btn-hover btn-item"><span></span>
                  Explore your<br>Dream Software <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="hero2-shape">
            <img src="<?php echo base_url();?>assets/imgs/bg/arrow-long.png" alt="BG Shape">
          </div>
        </section>
        <!-- Hero area end -->


        <!-- Feature area start -->
        <section class="feature__area-2 pt-130">
          <div class="feature__top">
            <div class="container">
              <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                  <div class="sec-title-wrapper">
                    <h2 class="sec-title title-anim">Transforming your imagination into software solutions with our experts</h2>
                  </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                  <div class="feature__text text-anim">
                    <p>We continuously redefine the future by crafting the next generation of products, brands, and services from a hybrid perspective. What seems unthinkable today becomes inevitable tomorrow.!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="feature__btm">
            <div class="container">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="feature__list animation__feature2">
                    <div class="feature__item">
                      <img src="<?php echo base_url();?>assets/imgs/feature/icon/1.png" alt="Feature Icon">
                      <h3 class="feature__title">Branding</h3>
                      <p>Transforming ideas into unique brands, we craft compelling identities that create memorable impacts and forge enduring legacies for success.</p>
                    </div>
                    <div class="feature__item">
                      <img src="<?php echo base_url();?>assets/imgs/feature/icon/2.png" alt="Feature Icon">
                      <h3 class="feature__title">Efficiency</h3>
                      <p>Transforming visions into powerful and distinctive identities, we build brands that leave a lasting impression and create enduring legacies.</p>
                    </div>
                    <div class="feature__item">
                      <img class="" src="<?php echo base_url();?>assets/imgs/feature/icon/3.png" alt="Feature Icon">
                      <h3 class="feature__title">Thinking</h3>
                      <p>Creative typography plays a crucial role in effectively executing this trend, especially when using bolder and more impactful typefaces.</p>
                    </div>
                    <div class="feature__item">
                      <img src="<?php echo base_url();?>assets/imgs/feature/icon/4.png" alt="Feature Icon">
                      <h3 class="feature__title">Execution</h3>
                      <p>Converting concepts into captivating and unique identities, we craft brands that make a significant impact and forge lasting legacies.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Feature area end -->

        <!-- Portfolio area start -->
        <section class="portfolio__area-2" id="our_works">
          <div class="container g-0 line pt-100 pb-140">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper text-anim">
                  <h2 class="sec-title-3 title-anim">Selected <span>Projects</span></h2>
                  <p class="sec-text">Worked with global brands & agency at the
                    intersection of flat design and digital
                    technology.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper portfolio__slider-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="https://www.imprintsacademy.com/" target="_blank"><img src="<?php echo base_url();?>assets/imgs/portfolio/2/1.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="https://www.imprintsacademy.com/" target="_blank">Imprints <span>Academy</span></a>
                    </h2>
                    <p>Imprints academy is the brainchild of two academicians who have embarked on an entrepreneurial journey with the vision of imprinting knowledge and confidence to the aspiring nurses who are in pursuit of a brighter future.</p>
                    <div class="btn-common-wrap">
                      <a href="https://www.imprintsacademy.com/" target="_blank" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="https://www.travelagentinkerala.com/" target="_blank"><img src="<?php echo base_url();?>assets/imgs/portfolio/2/2.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"><a href="https://www.travelagentinkerala.com/" target="_blank">Rithu <span>DMC</span></a>
                    </h2>
                    <p>Rithu DMC is a premier travel agency dedicated to exploring Kerala's stunning landscapes and rich culture. Offering personalized travel packages, guided tours, and expert local advice, the site ensures a seamless and memorable experience for travelers. From serene backwaters to vibrant cities, they craft unforgettable Kerala adventures.</p>
                    <div class="btn-common-wrap">
                      <a href="https://www.travelagentinkerala.com/" target="_blank">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="https://www.joanceholidays.com/" target="_blank"><img src="<?php echo base_url();?>assets/imgs/portfolio/2/3.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="https://www.joanceholidays.com/" target="_blank">Joance 
                        <span>Holidays</span></a></h2>
                    <p>offers enchanting vacation packages centered around picturesque lakeside locations. With a focus on tranquility and natural beauty, the site provides well-curated itineraries and comfortable accommodations. Ideal for those seeking relaxation or outdoor activities, DamViewHolidays.com ensures a memorable escape into serene and scenic environments.
</p>
                    <div class="btn-common-wrap">
                      <a href="https://www.joanceholidays.com/" target="_blank" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="http://roseresidency.com/" target="_blank"><img src="<?php echo base_url();?>assets/imgs/portfolio/2/4.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="http://roseresidency.com/" target="_blank">Rose
                        <span>Residency</span></a></h2>
                    <p>RoseResidency offers luxurious and comfortable accommodations in a serene environment. With a focus on exceptional service and modern amenities, the site provides a perfect blend of elegance and convenience. Ideal for both business and leisure travelers, RoseResidency.com ensures a memorable stay with personalized hospitality and stylish, well-appointed rooms.</p>
                    <div class="btn-common-wrap">
                      <a href="http://roseresidency.com/" target="_blank" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="https://www.madilinahouse.com/" target="_blank"><img src="<?php echo base_url();?>assets/imgs/portfolio/2/5.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="https://www.madilinahouse.com/" target="_blank">Madilina <span>House</span></a>
                    </h2>
                    <p>Madilina House is a charming destination for travelers seeking a cozy and inviting stay. Featuring elegant rooms and personalized service, the site offers a warm and homely atmosphere. Ideal for relaxation or exploring local attractions, Madilina House ensures a comfortable and memorable experience with attention to detail and guest satisfaction.</p>
                    <div class="btn-common-wrap">
                      <a href="https://www.madilinahouse.com/" target="_blank" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="portfolio__slider-2-pagination--">
              <div class="swiper-pagination circle-pagination right"></div>
            </div>
          </div>
        </section>
        <!-- Portfolio area end -->


        <!-- About area start -->
        <section class="about__area-2">
          <div class="container pt-130 pb-110">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim">We design and develop
                    outstanding Digital <br> Products
                    and digital-first Brands.</h2>
                </div>
                <div class="sec-text-wrapper">
                  <div class="sec-text text-anim">
                    <p>We help brands stand out through powerful, elegant visual design. Our design philosophy is shaped
                      by our experience growing up at our father’s bookbindery. Surrounded by the highest-quality
                      materials and turn-of-the-century machines, we observed the art of true craftsmanship firsthand.
                    </p>
                  </div>
                  <div class="sec-btn btn_wrapper">
                    <a class="wc-btn-pink btn-hover btn-item" href="<?php echo base_url(); ?>about"><span></span> Explore Us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="about__img-2 pb-130">
            <img src="<?php echo base_url();?>assets/imgs/about/2/1.jpg" alt="About Image" data-speed="0.2">
          </div>

          <div class="container pb-140">
            <div class="row">
              <div class="col-xxl-12">
                <h2 class="brand__title-2 title-anim">We worked with global largest brands
                </h2>
                <div class="brand__list-2">
                  <div class="brand__item-2 fade_bottom">
                    <img src="<?php echo base_url();?>assets/imgs/brand/1.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item-2 fade_bottom">
                    <img src="<?php echo base_url();?>assets/imgs/brand/2.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item-2 fade_bottom">
                    <img src="<?php echo base_url();?>assets/imgs/brand/3.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item-2 fade_bottom">
                    <img src="<?php echo base_url();?>assets/imgs/brand/4.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item-2 fade_bottom">
                    <img src="<?php echo base_url();?>assets/imgs/brand/5.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item-2 fade_bottom">
                    <img src="<?php echo base_url();?>assets/imgs/brand/6.png" alt="Brand Logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- About area end -->


        <!-- Service area start -->
        <section class="service__area-2 pt-130 pb-110">
          <div class="container">
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-text text-anim">
                  <p>We are passionate to create connected brands and services, and campaigns to enable stable and
                    successful relationships between businesses and customers.</p>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim">We grow your brands through
                    bold service
                    we’re providing</h2>
                </div>
              </div>
            </div>

            <div class="row pt-140">
              <div class="col-xxl-12">
                <div class="service__list-2 animation__service-2">
                  <div class="service__item-2">
                    <div>
                      <img src="<?php echo base_url();?>assets/imgs/service/2/1.png" alt="Service Icon">
                      <h3 class="service__title-2">Branding <br>Design</h3>
                      <p>We help brands shine with stunning, elegant visual design, expertly guided by our distinct, innovative design philosophy
                      </p>
                      <ul>
                        <li>+ Brand Identity</li>
                        <li>+ Brand Voice</li>
                        <li>+ Target Audience</li>
                        <li>+ Brand Values</li>
                      </ul>
                    </div>
                  </div>
                  <div class="service__item-2">
                    <div>
                      <img src="<?php echo base_url();?>assets/imgs/service/2/2.png" alt="Service Icon">
                      <h3 class="service__title-2 ">UI/UX <br>Design</h3>
                      <p>Crafting intuitive, engaging user experiences with innovative UI/UX design, making brands stand out and delight users.
                      </p>
                      <ul>
                        <li>+ User-Centered Design</li>
                        <li>+ Consistency</li>
                        <li>+ Accessibility</li>
                        <li>+ Responsiveness</li>
                      </ul>
                    </div>
                  </div>
                 <div class="service__item-2">
                    <div>
                      <img src="<?php echo base_url();?>assets/imgs/service/2/3.png" alt="Service Icon">
                      <h3 class="service__title-2 ">Application <br>Development</h3>
                      <p>Turning ideas into powerful, user-friendly applications with cutting-edge development solutions, enhancing user experiences and engagement
                      </p>
                      <ul>
                        <li>+ User-Centric Design</li>
                        <li>+ Scalability</li>
                        <li>+ Performance</li>
                        <li>+ Security</li>
                      </ul>
                    </div>
                  </div>
                  <div class="service__item-2">
                    <div>
                      <img src="<?php echo base_url();?>assets/imgs/service/2/4.png" alt="Service Icon">
                      <h3 class="service__title-2">Data <br>Center</h3>
                      <p>Secure, scalable dedicated server solutions powering your data center with reliability, efficiency, and top-notch performance
                      </p>
                      <ul>
                        <li>+ Security</li>
                        <li>+ Performance</li>
                        <li>+ Data Backup</li>
                        <li>+ 24/7Support</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-12">
                <div class="service__btn-2 btn_wrapper">
                  <a href="<?php echo base_url(); ?>service" class="wc-btn-pink btn-hover btn-item"><span></span> View <br>all services
                    <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Service area end -->


      </main>



<?= view('footer') ?>
