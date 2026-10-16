<?php
$page_data = [
    'meta_title' => isset($meta_title) ? $meta_title : 'About Us | VOXINNOV - Leading IT & Software Solutions Provider',
    'meta_description' => isset($meta_description) ? $meta_description : 'Learn about VOXINNOV\'s journey since 2007. Dynamic IT professionals delivering enterprise software, innovative digital architectures, and scalable technology solutions globally.',
    'meta_keywords' => isset($meta_keywords) ? $meta_keywords : 'about VOXINNOV, software development team Kerala, IT consulting company Cochin, IT entrepreneurs Kerala, enterprise software development, tech solutions provider India',
    'canonical_url' => isset($canonical_url) ? $canonical_url : base_url('about')
];
?>
<?= view('header', $page_data) ?>

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Hero area start -->
        <section class="hero__about">
          <div class="container g-0 line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="hero__about-content">
                  <h1 class="hero-title animation__word_come">We’re a full-service web and mobile development company, working globally with the largest brands.</h1>
                  <div class="hero__about-info">
                    <div class="hero__about-btn">
                      <div class="btn_wrapper">
                        <a href="<?php echo base_url(); ?>service" class="wc-btn-primary btn-hover btn-item"><span></span> Trends & <br>
                          technology
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                    <div class="hero__about-text title-anim">
                      <p>Think of the world's most iconica and successful brands easily findable, impactful.
                        Interactional and exceptional designs. Our story takes beginning in 2007</p>
                    </div>
                   <!-- <div class="hero__about-award">
                      <img src="<?php echo base_url();?>assets/imgs/about/award.png" alt="Best Studio Award">
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
           <!-- <div class="row hero__about-row">
              <div class="col-xxl-12">
                <div class="hero__about-video">
                  <video loop muted autoplay playsinline>
                    <source src="<?php echo base_url();?>assets/video/video.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>-->
          </div>
        </section>
        <!-- Hero area end -->


        <!-- Story area start -->
        <section class="story__area">
          <div class="container g-0 line pt-140">
            <span class="line-3"></span>
            <div class="sec-title-wrapper">
              <div class="from-text">from <span>2007</span></div>

              <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                  <h2 class="sec-sub-title title-anim">VOXINNOV</h2>
                  <h3 class="sec-title title-anim">Explore Your Dream Software</h3>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                  <div class="story__text">
                    <p>VOXINNOV was founded in 2007 by a group of entrepreneurs with extensive experience in the IT industry. As a multi-skilled software service provider with a highly competent workforce and a strong global presence, we offer years of expertise in cross-platform skills and quality-integrated methodologies. VOXINNOV employs a proficient global delivery model to provide value-based solutions and professional services to clients worldwide.</p>

                    <p>We deliver cost-effective and high-quality IT solutions that meet your needs within specified timelines. Our dedicated team of dynamic software professionals has years of experience in providing software solutions. Our design and development team can complete your project quickly, efficiently, and within your budget. At VOXINNOV, we ensure high quality by maintaining professionalism in developing solutions, working closely with you to achieve financial success by exceeding your expectations.</p>

                    <p>We adhere to the latest industry standards to achieve our goals, utilizing the best software practices, such as Service-Oriented Architecture (SOA), to help you meet your firm's objectives.</p>
                    </p>
                   
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <div class="story__img-wrapper">
                  <img src="<?php echo base_url();?>assets/imgs/story/1.jpg" alt="Story Thumbnail" class="w-100">
                </div>
              </div>
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="story__img-wrapper img-anim">
                  <img src="<?php echo base_url();?>assets/imgs/story/2.jpg" alt="Story Thumbnail" data-speed="auto">
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="story__img-wrapper">
                  <img src="<?php echo base_url();?>assets/imgs/story/3.jpg" alt="Story Thumbnail">
                  <img src="<?php echo base_url();?>assets/imgs/story/4.jpg" alt="Story Thumbnail">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Story area end -->


        <!-- Counter area start -->
        <section class="counter__area">
          <div class="container g-0 line pb-140 pt-140">
            <span class="line-3"></span>

            <div class="row">
              <div class="col-xxl-12">
                <div class="counter__wrapper-2 counter_animation">
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">25k</h2>
                    <p>Project <br>completed</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">8k</h2>
                    <p>Happy <br>customers</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">15</h2>
                    <p>Years <br>experiences</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">98</h2>
                    <p>Awards <br>achievement</p>
                    <span class="counter__border"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter area end -->


        <!-- Team area start -->
       <!-- <section class="team__area pt-140 pb-140" id="our_team">
          <div class="sec-title-wrapper">
            <h2 class="sec-sub-title title-anim">Our Team</h2>
            <h3 class="sec-title title-anim">How we work <br><br>
            Welcome! You’ve reached the right place. Our passionate, dedicated, and efficient team will turn your dream software into reality with ease. We pride ourselves on delivering high-quality solutions tailored to your needs. Let us bring your vision to life with our expertise and innovation.</h3>
            <h2 class="sec-sub-title title-anim"></h2>
          </div>


          <div class="swiper team__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide team__slide">
                <a href="">
                  <img src="<?php echo base_url();?>assets/imgs/team/1.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">VISHNU MOHAN</h4>
                    <h5 class="team__member-role">Director of Business Development</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="">
                  <img src="<?php echo base_url();?>assets/imgs/team/2.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">JIHSA BABY</h4>
                    <h5 class="team__member-role">Senior Software Engineer</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="">
                  <img src="<?php echo base_url();?>assets/imgs/team/3.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">ANJU TM</h4>
                    <h5 class="team__member-role">Human Resources</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="">
                  <img src="<?php echo base_url();?>assets/imgs/team/4.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Rahul Ramachandran</h4>
                    <h5 class="team__member-role">Senior NetWork Administrator </h5>
                  </div>
                </a>
              </div>
              <div class="swiper-slide team__slide">
                <a href="">
                  <img src="<?php echo base_url();?>assets/imgs/team/5.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Lakshmi Prathap</h4>
                    <h5 class="team__member-role">Legal Advisor </h5>
                  </div>
                </a>
              </div>
               <div class="swiper-slide team__slide">
                <a href="">
                  <img src="<?php echo base_url();?>assets/imgs/team/7.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Arun Divakaran</h4>
                    <h5 class="team__member-role">GraGraphic Designer</h5>
                  </div>
                </a>
              </div>

             
            </div>
          </div>
        </section>-->
        <!-- Team area end -->



        <!-- Brand area start -->
        <!--<section class="brand__area">
          <div class="container g-0 line pt-140 pb-140">
            <span class="line-3"></span>
            <div class="row g-0">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Internation Brands</h2>
                  <h3 class="sec-title title-anim">We are happy to work with global <br>
                    largest brands</h3>
                </div>
              </div>

              <div class="brand__list">
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/1.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/2.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/3.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/4.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/5.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/6.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/3.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/4.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/5.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/6.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/1.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="<?php echo base_url();?>assets/imgs/brand/2.png" alt="Brand Logo">
                </div>
              </div>
            </div>
          </div>
        </section>-->
        <!-- Brand area end -->


        <!-- Testimonial area start -->
        <section class="testimonial__area-2">
          <div class="container g-0 line pb-140">
            <span class="line-3"></span>

            <div class="row g-0">
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="testimonial__video">
                  <video autoplay muted loop>
                    <source src="<?php echo base_url();?>assets/video/testimonial.mp4" type="video/mp4">
                  </video>
                </div>
              </div>

              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                <div class="testimonial__slider-wrapper-2">
                  <div class="swiper testimonial__slider">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide testimonial__slide">
                        <div class="testimonial__inner-2">
                          <h2 class="testimonial__title-2">Amazing digital service</h2>
                          <p class="testimonial__text-2">We were there right at the beginning just when the concept
                            for
                            search
                            engine optimisation taking office and the full of internet. So wewe’ve grown to employ
                            than 50
                            talented specialists with diverse experiences and broad skill sets of huge markers.</p>
                          <h3 class="testimonial__author">Adam Syndera</h3>
                          <h4 class="testimonial__role">CEO, Agency</h4>
                        </div>
                      </div>

                      <div class="swiper-slide testimonial__slide">
                        <div class="testimonial__inner-2">
                          <h2 class="testimonial__title-2">Amazing digital service</h2>
                          <p class="testimonial__text-2">We were there right at the beginning just when the concept
                            for
                            search
                            engine optimisation taking office and the full of internet. So wewe’ve grown to employ
                            than 50
                            talented specialists with diverse experiences and broad skill sets of huge markers.</p>
                          <h3 class="testimonial__author">Adam Syndera</h3>
                          <h4 class="testimonial__role">CEO, Agency</h4>
                        </div>
                      </div>

                      <div class="swiper-slide testimonial__slide">
                        <div class="testimonial__inner-2">
                          <h2 class="testimonial__title-2">Amazing digital service</h2>
                          <p class="testimonial__text-2">We were there right at the beginning just when the concept
                            for
                            search
                            engine optimisation taking office and the full of internet. So wewe’ve grown to employ
                            than 50
                            talented specialists with diverse experiences and broad skill sets of huge markers.</p>
                          <h3 class="testimonial__author">Adam Syndera</h3>
                          <h4 class="testimonial__role">CEO, Agency</h4>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="testimonial__pagination">
                    <div class="prev-button"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="next-button"><i class="fa-solid fa-arrow-left"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Testimonial area end -->


        <!-- CTA area start -->
        <!--<section class="cta__area">
          <div class="container line pb-110 dark-p">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="cta__content">
                  <p class="cta__sub-title">Work with us</p>
                  <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                  <div class="btn_wrapper">
                    <a href="contact.html" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>-->
        <!-- CTA area end -->

      </main>



<?= view('footer') ?>
