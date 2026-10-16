<?php
$page_data = [
    'meta_title' => isset($meta_title) ? $meta_title : 'Contact Us | VOXINNOV - Kakkanad, Cochin, Kerala',
    'meta_description' => isset($meta_description) ? $meta_description : 'Contact VOXINNOV for your software and web development projects. Visit our office at BCG Tower, Kakkanad, Cochin, or reach us at info@voxinnov.com or +(91) 833-000-1050.',
    'meta_keywords' => isset($meta_keywords) ? $meta_keywords : 'contact VOXINNOV, IT company Kakkanad address, software company near CSEZ Cochin, hire web developers Kerala, software development inquiry, VOXINNOV phone number, VOXINNOV email',
    'canonical_url' => isset($canonical_url) ? $canonical_url : base_url('contact')
];
?>
<?= view('header', $page_data) ?>


  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Contact area start -->
        <section class="contact__area-6">
          <div class="container g-0 line pt-120 pb-110">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="contact__text">
                  <p>We're excited to connect with you! Please feel free to reach out to us with any inquiries, suggestions, or feedback.</p>
                </div>
              </div>
            </div>
            <div class="row contact__btm">
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="contact__info">
                  <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>say hello</h3>
                  <ul>
                    <li><a href="tel:+(91)8330001050">+(91) 833 - 000 - 1050</a></li>
                    <li><a href="mailto:info@voxinnov.com">info@voxinnov.com</a></li>
                    <li><span><!--Govardhana Building, #GDA2C, 2nd Floor, <br>--> 6G, BCG Tower, Seaport Airport Road, Kakkanad, Cochin 682037 . Opp CSEZ</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                <div class="contact__form">
                  <?php if (isset($_GET['status'])): ?>
                    <?php if ($_GET['status'] === 'success'): ?>
                      <div style="margin-bottom:20px; padding:15px; border-radius:6px; background:#1f8a3b; color:#fff;">
                        Thank you! Your message has been sent successfully. We'll get back to you soon.
                      </div>
                    <?php else: ?>
                      <div style="margin-bottom:20px; padding:15px; border-radius:6px; background:#c0392b; color:#fff;">
                        Sorry, something went wrong sending your message. Please try again or email us directly at <a href="mailto:info@voxinnov.com" style="color:#fff; text-decoration:underline;">info@voxinnov.com</a>.
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                  <form action="<?php echo base_url();?>assets/mail.php" method="POST">
                    <div class="row g-3">
                      <div class="col-xxl-6 col-xl-6 col-12">
                        <input type="text" name="name" placeholder="Name *">
                      </div>
                      <div class="col-xxl-6 col-xl-6 col-12">
                        <input type="email" name="email" placeholder="Email *">
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col-xxl-6 col-xl-6 col-12">
                        <input type="tel" name="phone" placeholder="Phone">
                      </div>
                      <div class="col-xxl-6 col-xl-6 col-12">
                        <input type="text" name="subject" placeholder="Subject *">
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col-12">
                        <textarea name="message" placeholder="Messages *"></textarea>
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="btn_wrapper">
                          <button class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i
                              class="fa-solid fa-arrow-right"></i></button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact area end -->

      </main>


<?= view('footer') ?>
