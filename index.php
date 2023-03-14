<?php include('layout/head.php') ?>
    <?php //include('includes/loader.php') ?>
    <div class="main-wrapper">
      <?php include('layout/header.php') ?>
      <?php include('includes/home/hero-section.php') ?>
      <?php include('includes/home/states.php') ?>
      <?php include('includes/home/services.php') ?>
      <?php include('includes/home/we-test.php') ?>
      <?php include('includes/home/cta-subscribe1.php') ?>
      <section class="integration-section bg-light ptb-60">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 col-md-12">
              <div class="section-heading">
              <div>
                  <span class="span-arrow">Integration</span>
                  <img src="assets/img/arro-right.svg" alt="arrow">
              </div>
                <h2>We Collaborate with Top <span class="highlighted-text">Software Company</span></h2>
                <p>Dynamically pursue convergence rather than 24/7 process improvements develop end-to-end customer service action items.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-12">
              <div class="text-lg-end mb-5 mb-lg-0">
                <a href="javascript:void(0)" class="btn btn-dark">View All Integrations</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <?php include('includes/home/integration.php') ?>
            </div>
          </div>
        </div>
      </section>
      <?php include('includes/home/core-features.php') ?>
      <section class="brand-logo bg-dark ptb-60">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="section-heading text-start text-lg-center">
                <div>
                    <span class="span-arrow">Companies</span>
                    <img src="assets/img/arro-right.svg" class="img-fluid" alt="arrow">
                </div>          
                <h2><span class="highlighted-text"> Confidence </span> in Every Line of Code Logix9 Your QA Partner Trusted by <span class="highlighted-text"> Industry Leaders!</span></h2>
                <p>Over 500+ Companies Entrust Our Services. </p>
              </div>
            </div>
          </div>
          <div class="row">
            <?php include('includes/home/brand.php') ?>
          </div>
        </div>
      </section>
      <?php include('includes/home/features.php') ?>
      <?php include('includes/home/faq.php'); ?>
      <?php include('includes/home/cta-subscribe2.php'); ?>
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