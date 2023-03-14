<div class="p-4 bg-white shadow rounded-custom">
  <h3>Fill out the form and we'll be in touch as soon as possible.</h3>
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
        <button type="submit" name="quote_submit" class="quote-form-btn" >Get in touch</button>
      </li>
    </ul>
</form>


</div>