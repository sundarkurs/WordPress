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

      <div class="row about-features">
        <div class="features-list block-1-3 block-m-1-2 block-mob-full group">
          <div class="bgrid feature" data-aos="fade-up">
            <span class="icon"><i class="icon-window"></i></span>

            <div class="service-content">
              <h3>Consulting</h3>

              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit.
              </p>
            </div>
          </div>

          <div class="bgrid feature" data-aos="fade-up">
            <span class="icon"><i class="icon-image"></i></span>

            <div class="service-content">
              <h3>Architecture</h3>

              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit.
              </p>
            </div>
          </div>

          <div class="bgrid feature" data-aos="fade-up">
            <span class="icon"><i class="icon-paint-brush"></i></span>

            <div class="service-content">
              <h3>Site Planning</h3>

              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit.
              </p>
            </div>
          </div>

          <div class="bgrid feature" data-aos="fade-up">
            <span class="icon"><i class="icon-file"></i></span>

            <div class="service-content">
              <h3>Professional service</h3>

              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit.
              </p>
            </div>
          </div>

          <div class="bgrid feature" data-aos="fade-up">
            <span class="icon"><i class="icon-sliders"></i></span>

            <div class="service-content">
              <h3>Transparency</h3>

              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit.
              </p>
            </div>
          </div>

          <div class="bgrid feature" data-aos="fade-up">
            <span class="icon"><i class="icon-gift"></i></span>

            <div class="service-content">
              <h3>Genuine</h3>

              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="testimonials">
      <div class="row">
        <div class="col-twelve">
          <h1 class="intro-header" data-aos="fade-up">
            What They Say About Us.
          </h1>
        </div>
      </div>

      <div class="row owl-wrap">
        <div id="testimonial-slider" data-aos="fade-up">
          <div class="slides owl-carousel">
            <div>
              <p>
                Your work is going to fill a large part of your life, and the
                only way to be truly satisfied is to do what you believe is
                great work. And the only way to do great work is to love what
                you do. If you haven't found it yet, keep looking. Don't settle.
                As with all matters of the heart, you'll know when you find it.
              </p>

              <div class="testimonial-author">
                <img src="images/avatars/user-02.jpg" alt="Author image" />
                <div class="author-info">
                  Some One
                  <span class="position">CEO, Something.</span>
                </div>
              </div>
            </div>

            <div>
              <p>
                This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                amet mauris.
              </p>

              <div class="testimonial-author">
                <img src="images/avatars/user-03.jpg" alt="Author image" />
                <div class="author-info">
                  Random One
                  <span>Engineer, Somewhere.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php } get_footer(); ?>