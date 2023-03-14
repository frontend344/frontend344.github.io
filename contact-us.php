<?php include('layout/head.php') ?>
  <div class="main-wrapper">
    <?php include('layout/header.php') ?>
    <?php include('includes/page-header.php') ?>


    <section class="contact-promo ptb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fad fa-comment-alt-lines fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Chat with us</h5>
                                <p>We've got live Social Experts waiting to help you <strong>monday to friday</strong> from
                                    <strong>9am to 5pm EST.</strong>
                                </p>
                            </div>
                            <a href="<?php echo "{$contact['chat']}"; ?>" class="btn btn-dark mt-auto">Chat with us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fad fa-envelope fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Email Us</h5>
                                <p>Simple drop us an email at <strong><?php echo "{$contact['email']}"; ?></strong>
                                    and you'll receive a reply within 24 hours</p>
                            </div>
                            <a href="mailto:<?php echo "{$contact['email']}"; ?>" class="btn btn-primary mt-auto">Email Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fad fa-phone fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Give us a call</h5>
                                <p>Give us a ring.Our Experts are standing by <strong>monday to friday</strong> from
                                    <strong>9am to 5pm EST.</strong>
                                </p>
                            </div>
                            <a href="tel:<?php echo "{$contact['number']}"; ?>" class="btn btn-info mt-auto"><?php echo "{$contact['number']}"; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-60" style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-heading mb-0">
                            <div>
                                <span class="span-arrow">Contact with us</span>
                                <img src="assets/img/arro-right.svg" class="img-fluid" alt="arrow">
                            </div>
                            <h2>Connect with Logix9 for Expert Sales and <span class="highlighted-text">Marketing Support</span></h2>
                            <p>Get in touch with Logix9's Sales and Marketing Department to learn more about how we can collaborate to promote client-focused convergence and customer directed alignments via standardized infrastructures.</p>
                        </div>
<div id="requestQuoteForm__result"></div>
<form class="requestQuoteForm" id="requestQuoteForm" novalidate="novalidate">
    <ul class="requestQuoteForm__list">
      <li class="requestQuoteForm__item">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa-duotone fa-user"></i>
            </div>
          </div>
          <input type="text" class="form-control quote-form-input" name="name" placeholder="Full Name*">
        </div>
      </li>
      <li class="requestQuoteForm__item">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa-duotone fa-envelopes"></i>
            </div>
          </div>
          <input type="email" class="form-control quote-form-input" name="email" placeholder="Email Address*">
        </div>
      </li>
      <li class="requestQuoteForm__item">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa-duotone fa-phone-volume"></i>
            </div>
          </div>
          <input type="text" class="form-control quote-form-input phone-international" name="phone" placeholder="Phone Number*" required>
        </div>
      </li>
      <li class="requestQuoteForm__item">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa-duotone fa-building"></i>
            </div>
          </div>
          <input type="text" class="form-control quote-form-input" name="company" placeholder="Company Name">
        </div>
      </li>
      <li class="requestQuoteForm__item">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa-duotone fa-earth-americas"></i>
            </div>
          </div>
          <!-- <input type="text" class="form-control quote-form-input" name="country" placeholder="Country*"> -->
          <!-- <div class="selectWrap"> -->
            <select class="quote-form-input quote-form-select" name="country" id="country">
              <option value="" selected="" disabled="">Select Country*</option>
              <?php foreach($countryList as $list): ?>
              <option value="<?php echo "{$list['code']}"; ?>"><?php echo "{$list['name']}"; ?></option>
              <?php endforeach; ?>
            </select>
          <!-- </div> -->
        </div>
      </li>
      <li class="requestQuoteForm__item">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa-duotone fa-brackets-curly"></i>
            </div>
          </div>
          <!-- <input type="text" class="form-control quote-form-input" name="project_type" placeholder="Project Type*"> -->
          <!-- <div class="selectWrap"> -->
            <select class="quote-form-input quote-form-select" name="project" id="project">
              <option value="" selected="" disabled="">Project Type*</option>
              <option value="graphic-designing">Graphic Designing</option>
              <option value="explainer-videos">Explainer Videos</option>
              <option value="web-design-development">Web Design & Development</option>
              <option value="e-commerce-solutions">E-commerce Solutions</option>
              <option value="mobile-applications">Mobile Applications</option>
              <option value="digital-marketing">Digital Marketing</option>
            </select>
          <!-- </div> -->
        </div>
      </li>
      <li class="requestQuoteForm__item full-width">
        <textarea class="form-control quote-form-input quote-form-msg" name="" id="" placeholder="Tell us more about your project, needs and budget"></textarea>
      </li>
      <li class="requestQuoteForm__item full-width">
        <button type="submit" name="quote_submit" class="quote-form-btn" >Send Message</button>
      </li>
    </ul>
</form>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <img src="assets/img/illustration/contact-with-us.jpg" class="img-fluid" alt="contact with us">
                    </div>
                </div>
            </div>
        </section>
    <?php include('layout/footer.php'); ?>
  </div>
  <?php include('layout/scripts.php'); ?>