<?php include('layout/head.php') ?>
  <div class="main-wrapper">
    <?php include('layout/header.php') ?>
    <?php include('includes/page-header.php') ?>

    <section class="support-content ptb-60">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-4 d-none d-md-block d-lg-block">

                        <div class="support-article-sidebar sticky-sidebar">
                            <div class="nav flex-column nav-pills support-article-tab bg-light rounded-custom p-5">
                                <ul class="scroll-animation">
                                    <li>
                                        <a href="#one" class="text-muted text-decoration-none py-2 d-block">Terms and Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#two" class="text-muted text-decoration-none py-2 d-block">Warranties</a>
                                    </li>
                                    <li>
                                        <a href="#three" class="text-muted text-decoration-none py-2 d-block">Use of Website</a>
                                    </li>
                                    <li>
                                        <a href="#four" class="text-muted text-decoration-none py-2 d-block">Limitation of Liability</a>
                                    </li>
                                    <li>
                                        <a href="#five" class="text-muted text-decoration-none py-2 d-block">Copyrights and Other Intellectual Property</a>
                                    </li>
                                    <li>
                                        <a href="#six" class="text-muted text-decoration-none py-2 d-block">Links to Other Third-Party Websites</a>
                                    </li>
                                    <li>
                                        <a href="#seven" class="text-muted text-decoration-none py-2 d-block">Modifications</a>
                                    </li>
                                    <li>
                                        <a href="#eight" class="text-muted text-decoration-none py-2 d-block">Waiver</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-light p-5 mt-4 rounded-custom quick-support">
                                <a href="contact-us.php" class="text-decoration-none text-muted d-flex align-items-center py-2">
                                    <div class="quick-support-icon rounded-circle bg-success-soft me-3">
                                        <i class="far fa-ballot-check text-success"></i>
                                    </div>
                                    <div class="contact-option-text">Quick Support Form</div>
                                </a>
                                <a href="mailto:<?php echo "{$contact['email']}"; ?>" class="text-decoration-none text-muted d-flex align-items-center py-2">
                                    <div class="quick-support-icon rounded-circle bg-primary-soft me-3">
                                        <i class="far fa-envelope text-primary"></i>
                                    </div>
                                    <div class="contact-option-text"><?php echo "{$contact['email']}"; ?></div>
                                </a>
                                <a href="<?php echo "{$contact['chat']}"; ?>" target="_blank" class="text-decoration-none text-muted d-flex align-items-center py-2">
                                    <div class="quick-support-icon rounded-circle bg-danger-soft me-3">
                                        <i class="far fa-comment-alt-lines text-danger"></i>
                                    </div>
                                    <div class="contact-option-text">Live Support Chat</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 p-lg-5">
                        <div class="support-article-wrap">

                            <div class="content-section" id="one">
                                <h3 class="h5 mb-4 fw-bold">Terms and Conditions</h3>
                                <p>When you access or use the Logix9 website, you are agreeing to the terms and conditions outlined below and accepting them in their entirety. These terms and conditions may be modified by Logix9 from time to time and will be posted on this website. We encourage you to carefully read and review these terms and conditions as they govern your access and use of the website. By accessing and using the website, you acknowledge your acceptance of these terms and conditions.</p>
                            </div>

                            <div class="content-section" id="two">
                                <h3 class="h5 mb-4 fw-bold">Warranties</h3>
                                <p>Logix9 makes every effort to ensure the accuracy of the information provided on its website. However, it does not guarantee or warrant the accuracy, completeness, or suitability of any content, including images, logos, documents, and other materials. The website and its contents are provided "as is" without any warranties, express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, or non-infringement. Users access and use the website and its contents at their own risk. Logix9 does not make any representations or endorsements regarding the website's contents and cannot be held responsible for any errors, omissions, or inaccuracies. Any warranties that cannot be excluded under applicable law are the sole exception.</p>
                            </div>

                            <div class="content-section" id="three">
                                <h3 class="h5 mb-4 fw-bold">Use of Website</h3>
                                <p>The Logix9 website content is intended solely for personal use by website users. Unless prior written consent is obtained from Logix9, it is strictly prohibited to copy (except for personal use), modify, distribute, transmit, display, perform, reproduce, transfer, resell, or republish any of the contents on this website. Logix9 retains the right to withhold such consent in its sole discretion.</p>
                            </div>

                            <div class="content-section" id="four">
                                <h3 class="h5 mb-4 fw-bold">Limitation of Liability</h3>
                                <p>Logix9 shall not be liable for any damages arising from the use or inability to use the website or its contents, including indirect, incidental, special, consequential or punitive damages, regardless of whether such damages arise under a contract, tort, or any other legal theory. This includes, but is not limited to, damages resulting from any performance failure, error, omission, interruption, defect, delay in operation or transmission, computer virus, loss of data, or loss of use related to this website or any website operated by a third party, or any contents of this website or any other website, even if Logix9 has been advised of the possibility of such damages.</p>
                            </div>

                            <div class="content-section" id="five">
                                <h3 class="h5 mb-4 fw-bold">Copyrights and Other Intellectual Property</h3>
                                <p>Logix9 holds the exclusive rights to all the contents present on its website, including guides, reports, case studies, graphics, icons, and overall website appearance, except where otherwise expressly noted. No part of this website may be copied, reproduced, distributed, transmitted, displayed, modified, or used for commercial purposes without the prior written consent of Logix9, which may be withheld in its sole discretion. Any unauthorized use of the contents of this website may result in legal action against the offender.</p>
                            </div>

                            <div class="content-section" id="six">
                                <h3 class="h5 mb-4 fw-bold">Links to Other Third-Party Websites</h3>
                                <p>Logix9 may provide links to other websites that are not owned or controlled by it. These links are provided solely for the convenience of users, and Logix9 does not endorse, guarantee or assume any responsibility for the contents, information, products or services offered on these websites or the operators of these websites. Users access and use these websites at their own risk. Logix9 also disclaims responsibility for the privacy policies and customer information practices of these third-party websites.</p>
                            </div>

                            <div class="content-section" id="seven">
                                <h3 class="h5 mb-4 fw-bold">Modifications</h3>
                                <p>Logix9 reserves the right to modify, change, or alter the contents of its website and these terms and conditions at any time without prior notice. As a user, it is your responsibility to review these terms and conditions regularly. Your continued use of the website after any modifications, changes, or alterations will signify your acceptance of such modifications, changes, or alterations.</p>
                            </div>

                            <div class="content-section" id="eight">
                                <h3 class="h5 mb-4 fw-bold">Waiver</h3>
                                <p>Logix9's waiver of any right or provision outlined in these Terms and Conditions does not constitute a waiver of any other rights or provisions. The waiver of any particular right or provision of these Terms and Conditions at a given time does not imply the waiver of the same right or provision at any other time.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="digi-contact bg-dark ptb-60 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="digi-contact-left">
                            <div>
                                <span class="span-arrow">Best Yout website</span>
                                <img src="assets/img/arro-right.svg" alt="arrow">
                            </div>
                            <h2 class="mb-3">
                                Get in touch <span class="text-orange">Today!</span>
                            </h2>
                            <p>
                                Seamlessly enable best-of-breed portals and out-of-the-box core
                                competencies cross-platform channels and granular infomediaries.
                            </p>
                            <ul class="d-flex list-unstyled d-flex flex-wrap list-two-col mb-0 mt-5">
                                <li class="pe-4">
                                    <div class="single-feature d-flex mt-0 p-4 bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm highlight-card rounded-custom">
                                        <div class="">
                                            <h3 class="display-5 fw-bold mb-4">
                                                <i class="fa-duotone fa-at fa-1x text-warning"></i>
                                            </h3>
                                            <h4 class="h5">Email Address</h4>
                                            <p class="fw-bold mb-0"><?php echo "{$contact['email']}"; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-feature d-flex mt-0 p-4 bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm highlight-card rounded-custom">
                                        <div class="">
                                            <h3 class="display-5 fw-bold mb-4">
                                                <i class="fa-duotone fa-phone-volume fa-1x text-warning"></i>
                                            </h3>
                                            <h4 class="h5">Phone</h4>
                                            <p class="fw-bold mb-0"><?php echo "{$contact['number']}"; ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="p-4 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
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
                    </div>
                </div>
            </div>
        </section>
    <?php include('layout/footer.php'); ?>
  </div>
  <?php include('layout/scripts.php'); ?>