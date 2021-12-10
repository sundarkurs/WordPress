<?php

  get_header();

  while(have_posts()) {
    the_post();
     ?>

<?php pageBanner(); ?>

<section id="about">
      <div class="row about-intro">
        <div class="col-four">
          <h1 class="intro-header" data-aos="fade-up">About Our Company</h1>
        </div>
        <div class="col-eight">
          <p class="lead" data-aos="fade-up">
            Excepteur enim magna veniam labore veniam sint. Ex aliqua esse
            proident ullamco voluptate. Nisi nisi nisi aliqua eiusmod dolor
            dolor proident deserunt occaecat elit Lorem reprehenderit. Id culpa
            veniam ex aliqua magna elit pariatur do nulla. Excepteur enim magna
            veniam labore veniam sint.
          </p>
        </div>
      </div>
</section>

<section id="contact-form">
      <div class="row">
        <div class="col-twelve">
          <h1 class="intro-header" data-aos="fade-up">Your input</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-six tab-full" data-aos="fade-up">
          <form>
            <div>
              <label for="sampleInput">Your email</label>
              <input
                class="full-width"
                type="email"
                placeholder="test@mailbox.com"
                id="sampleInput"
              />
            </div>
            <div>
              <label for="sampleRecipientInput">Reason for contacting</label>
              <div class="ss-custom-select">
                <select class="full-width" id="sampleRecipientInput">
                  <option value="Option 1">Questions</option>
                  <option value="Option 2">Report</option>
                  <option value="Option 3">Others</option>
                </select>
              </div>
            </div>

            <label for="exampleMessage">Message</label>
            <textarea
              class="full-width"
              placeholder="Your message"
              id="exampleMessage"
            ></textarea>

            <label class="add-bottom">
              <input type="checkbox" />
              <span class="label-text">Send a copy to yourself</span>
            </label>

            <input class="button-primary" type="submit" value="Submit" />
          </form>
        </div>

        <div class="col-six tab-full"></div>
      </div>
      <!-- end row -->
    </section>

<?php }

get_footer();

?>