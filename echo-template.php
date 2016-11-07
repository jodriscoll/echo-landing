<?php
  /*
  Template Name: Echo Landing Page Template
  */

  get_header(); 
?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      // inject the "Get in Touch" button within the <header>
      $('#header .rwd-menu').prepend('<a href="#get-in-touch" class="echo--header-git" id="js-git-click">Get in Touch</a>');
      
      // initiate the tabs with the #echo--tabs element
      // $('#echo--tabs').tabs();
      
      // establish the click to show for the tabs
      $('#echo--tabs a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
      });

      // scrolling functionality for the "Get in Touch" button
      $('#js-git-click').click(function(e) {
        e.preventDefault();
        // offset the top by 50px
        $('html, body').animate({
            scrollTop: $('#get-in-touch').offset().top - 5
        }, 1000);
      });
    });
  </script>

  <main class="echo--landing-page_main-wrapper clearfix">
    <!-- desc: custom Video that when clicked opens a modal windows, default an image -->
    <?php 
    // $echo--lp-modal = get_field('echo--lp-modal_background');

    // if ( !empty($echo--lp-modal) ) {
    //   echo '<div class="container-fluid echo--lp-modal" style="background-image: url(' . $echo--lp-modal['url'] . ');">';
    // } else {
    //   echo '<div class="container-fluid echo--lp-modal">';
    // } 
    ?>
    <div class="container-fluid echo--lp-modal">
      <div class="row">
        <h1>Introducing Echo, the future-first approach to growth planning.</h1>
        <?php # <h1><?php the_field('echo--lp-modal_h1')</h1> ?>
        <img data-toggle="modal" data-target="#basicModal" src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/icon--modal-play.png" alt="Click here to play the video" class="echo--lp-modal-video" id="echo--lp-modal-video" />
        <?php # <img src="" alt="<?php the_field('echo--lp-modal_img-alt')" class="echo--lp-modal-video" id="echo--lp-modal-video" /> ?>
      </div>
    </div>

    <!-- desc: 2 col image, 10 col content, with p, small, and two logos – on different rows -->
    <div class="container-fluid echo--featured">
      <div class="row">
        <div class="col-xs-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-3 text-center">
                <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logo--featured-echo.png" width="129" height="144" alt="Featured Logo Placeholder" class="echo--featured-logo" />
                <?php # <img src="" alt="<?php the_field('echo--featured_img-alt')" class="echo--featured-logo" /> ?>
              </div>
              <div class="col-xs-12 col-sm-9 echo--featured-content">
                <p>The challenge facing companies today is not ambition for transformation, but how to catalyze action. Echo is that catalyst.</p>
                <small>The future-first approach to growth planning, from:</small>
                <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logo--featured-capgemini-consulting.png" width="180" height="18" alt="Capgemini Placeholder" />
                <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logo--featured-fahrenheit212.png" width="87" height="11" alt="Fahrenheit-212 Placeholder" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- desc: white background, orange heading, hr, paragraph -->
    <div class="container-fluid echo--content-block white-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <section class="echo--content-section">
                  <h1>Prepare for the Competitor You Won’t See Coming</h1>
                  <hr />
                  <p>In a market rife with disruption, from start-ups upending incumbents to major players redefining long-standing industry lines, traditional growth strategies are drastically shortsighted.  New world strategy requires diverse expertise – growth, innovation, digital – working in unison.</p>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- desc: tech pattern, grey background -->
    <div class="container-fluid echo--tech-background">
      <div class="col-xs-12 echo--techpattern"></div>
    </div>

    <!-- desc: white background, orange heading, hr, paragraph -->
    <div class="container-fluid echo--content-block white-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <section class="echo--content-section">
                  <h1>Catalyze Action Around a Common Enemy</h1>
                  <hr />
                  <p>Echo is a future-first growth strategy that creates a comprehensive vision of your competitor-of-the-future. We bring this credible threat to life by defining its products and services, business model, organizational structure, and technologies, providing your company a common enemy to rally against.</p>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- desc: grey background, orange heading, hr, paragraph -->
    <div class="container-fluid echo--content-block grey-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <section class="echo--content-section">
                  <h1>Catalyze Action Around a Common Enemy</h1>
                  <hr />
                  <p>The Echo process defines a competitor that is not shackled to current market realities, and envision a future not limited by your company’s existing business or political constraints. Ultimately, we arm you to compete with this vision. We create a future state for your company, complete with a strategic plan of attack.</p>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- desc: white background, 3 tabs, single words, uppercase, orange bg on active, paragraph, image content -->
    <div class="container-fluid echo--content-block white-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="echo--tabs-block">
                  <ul class="nav nav-tabs echo--tabs" id="echo--tabs">
                    <li class="active"><a href="#approach">Approach</a></li>
                    <li><a href="#capabilities">Capabilities</a></li>
                    <li><a href="#timeline">Timeline</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="approach">
                      <p>Every activity is approached through four key vectors:</p>
                      <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/tabs--approach-placeholder.png" width="733" height="271" alt="Approach" />
                    </div>
                    <div class="tab-pane fade" id="capabilities">
                      <p>Our unique approach is purpose-built to meet the challenges of driving growth in a market rife with disruption.</p>
                      <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/tabs--capabilities-placeholder.png" width="731" height="272" alt="Capabilities" />
                    </div>
                    <div class="tab-pane fade" id="timeline">
                      <p>In a 12-week sprint, Echo will free your business from its current constraints to define the products and services, organizational structure, platform technologies, and business model of your fiercest future competitor - and devise a proactive plan of attack.</p>
                      <p>Knowing that market dynamics evolve, as do opportunities, we will also come together biannually to refresh the vision and realign initiatives.</p>
                      <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/tabs--timeline-placeholder.png" width="718" height="206" alt="Timeline" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- desc: grey background, orange heading, hr, logos not clickable -->
    <div class="container-fluid echo--content-block grey-bg echo--top-companies">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <section class="echo--content-section">
                  <h1>Catalyze Action Around a Common Enemy</h1>
                  <hr />
                  <div class="echo--content-section-logo-block">
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-diageo.png" width="125" height="70" alt="DIAGEO Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-coca-cola.png" width="125" height="70" alt="Coca-Cola Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-gucci-group-nv.png" width="125" height="70" alt="GUCCI Group Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-samsung.png" width="125" height="70" alt="SAMSUNG Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-nestle.png" width="125" height="70" alt="Nestle Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-cox.png" width="125" height="70" alt="COX Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-toyota.png" width="125" height="70" alt="Toyota Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-citi.png" width="125" height="70" alt="CITI Logo Placeholder" />
                    <img src="//www.fahrenheit-212.com/wp-content/themes/212F/echo--landing-page/images/logos--bw-marriott.png" width="125" height="70" alt="Marriott Logo Placeholder" />
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- desc: white background, orange heading, hr, client supplied form -->
    <div id="get-in-touch" class="container-fluid echo--content-block white-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <section class="echo--content-section">
                  <h1>Catalyze Action Around a Common Enemy</h1>
                  <hr />
                  <form class="echo--landing-page-form" id="lead_gen_form" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
                    <input name="oid" type="hidden" value="00D1a000000JXGH" /> 
                    <input name="retURL" type="hidden" value="http://www.fahrenheit-212.com/wp-content/uploads/2016/04/Natural-selection-fahrenheit-212.pdf" />
                    <label for="first_name">First Name</label>
                    <input id="first_name" maxlength="40" name="first_name" required="" size="20" type="text" />
                    <label for="last_name">Last Name</label>
                    <input id="last_name" maxlength="80" name="last_name" required="" size="20" type="text" />
                    <label for="email">Business Email</label>
                    <input id="email" maxlength="80" name="email" required="" size="20" type="text" />
                    <label for="phone">Phone Number</label>
                    <input id="phone" maxlength="40" name="phone" required="" size="20" type="text" />
                    <label for="company">Company Name</label>
                    <input id="company" maxlength="40" name="company" required="" size="20" type="text" />
                    <label for="title">Job Title</label>
                    <input id="title" maxlength="40" name="title" required="" size="20" type="text" />
                    <input id="Campaign_ID" name="Campaign_ID" type="hidden" value=" 7011a000000bKfV" /> 
                    <input id="lead_gen_submit" name="submit" type="submit" value="Get in Touch" />
                  </form>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- desc: modal window for youtube video -->
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/nWiIWyCeZso" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</main>

<?php get_footer(); ?>

