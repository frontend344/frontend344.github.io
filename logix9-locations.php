<?php include('layout/head.php') ?>
  <div class="main-wrapper">
    <?php include('layout/header.php') ?>
    <?php include('includes/page-header.php') ?>

    <section class="office-address-section ptb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Our Office</h4>
                            <h2>Located Around the World</h2>
                            <p>Dynamically technically sound technologies with parallel task convergence quality vectors
                                through excellent relationships. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-1.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>Singapore</h5>
                                    <address>
                                        4636 Bombardier Way <br> Sr,Worthington, <br>California(CA), 94102
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-2.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>Los Angeles</h5>
                                    <address>
                                        794 Mcallister <br> St. Oak Harbor, <br>Washington(WA), 98277
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-3.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>New York</h5>
                                    <address>
                                        4219 Snowbird Lane <br> St Carthage, <br>New York(NY), 13619
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-5.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>Barlin City</h5>
                                    <address>
                                        Brandenburgische Straße <br> DE. Berlin Kreuzberg, <br>Berlin(CA), 10997
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

    <section class="request-demo ptb-60">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-12 ">
            <div class="p-4">
              <h3>Transform Your Software Testing Processes with Our Professional QA Consulting</h3>
              <p>We empower your software development with expert QA consulting services, for reliable and high-performing products that exceed customer expectations.</p>
              <blockquote class="blockquote">
                  <em>"I highly recommend this QA consulting service! Their expertise in software QA is unmatched, and they were instrumental in refining our testing strategy and optimizing our QA processes. Thanks to their valuable insights on testing infrastructure optimization and workload planning, we were able to achieve faster product releases and deliver a high-quality end product to our customers. The team was professional, knowledgeable, and a pleasure to work with. I would definitely work with them again for any future software QA needs."</em>
                </blockquote>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 order-0 order-lg-1">
            <?php include('./includes/request-demo.php'); ?>
          </div>
        </div>
      </div>
    </section>
    <?php include('layout/footer.php'); ?>
  </div>
  <?php include('layout/scripts.php'); ?>