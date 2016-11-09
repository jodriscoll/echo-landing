<?php
  /*
  Template Name: Echo Landing Page Template
  */

  get_header(); 
?>

  <?php the_field('echo_lp_scripts') ?>

  <main class="echo--landing-page_main-wrapper clearfix">

    <?php 
      $hero_bg_image = get_field('echo_lp_hero_background_image');

      if ( !empty($hero_bg_image) ) {
        echo '<div class="container-fluid echo--lp-modal" style="background-image: url(' . $hero_bg_image['url'] . ');">';
      } else {
        echo '<div class="container-fluid echo--lp-modal default">';
      } 
    ?>
      <div class="row">
        <h1><?php the_field('echo_lp_hero_heading') ?></h1>
        <?php # <h1><?php the_field('echo--lp-modal_h1')</h1> ?>
        <?php $hero_modal_trigger = wp_get_attachment_image_src(get_field('echo_lp_hero_modal_trigger'), 'full'); ?>
        <img data-toggle="modal" data-target="#basicModal" src="<?php echo $hero_modal_trigger[0]; ?>" alt="<?php echo get_the_title(get_field('echo_lp_hero_modal_trigger')) ?>" class="echo--lp-modal-video" id="echo--lp-modal-video" />
      </div>
    </div>

    <div class="container-fluid echo--featured">
      <div class="row">
        <div class="col-xs-12">
          <div class="container">
            <div class="row equal-height">
              <div class="col-xs-12 col-sm-3 col-sm-offset-1 text-center">
                <?php $featured_image = wp_get_attachment_image_src(get_field('echo_lp_featured_image'), 'full'); ?>
                <img src="<?php echo $featured_image[0]; ?>" alt="<?php echo get_the_title(get_field('echo_lp_featured_image')) ?>" />
              </div>
              <div class="col-xs-12 col-sm-7 echo--featured-content">
                <p><?php the_field('echo_lp_featured_content_paragraph') ?></p>
                <small><?php the_field('echo_lp_featured_content_small') ?></small>
                <?php $featured_logo = wp_get_attachment_image_src(get_field('echo_lp_featured_logos'), 'full'); ?>
                <img src="<?php echo $featured_logo[0]; ?>" alt="<?php echo get_the_title(get_field('echo_lp_featured_logos')) ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid echo--content-block white-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <section class="echo--content-section">
                  <h1><?php the_field('echo_lp_content_row_a_white_bg_heading') ?></h1>
                  <hr />
                  <p><?php the_field('echo_lp_content_row_a_white_bg_paragraph') ?></p>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid echo--tech-background">
      <?php 
        $tech_pattern_bg = get_field('echo_lp_tech_bg_background_image');

        if ( !empty($tech_pattern_bg) ) {
          echo '<div class="col-xs-12 echo--tech-background-image" style="background-image: url(' . $tech_pattern_bg['url'] . ');">';
        } else {
          echo '<div class="col-xs-12 echo--tech-background-image default">';
        } 
      ?>
      </div>
    </div>

    <div class="container-fluid echo--content-block white-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <section class="echo--content-section">
                  <h1><?php the_field('echo_lp_content_row_b_white_bg_heading') ?></h1>
                  <hr />
                  <p><?php the_field('echo_lp_content_row_b_white_bg_paragraph') ?></p>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid echo--content-block grey-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <section class="echo--content-section">
                  <h1><?php the_field('echo_lp_content_row_a_grey_bg_heading') ?></h1>
                  <hr />
                  <p><?php the_field('echo_lp_content_row_a_grey_bg_paragraph') ?></p>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
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

    <div class="container-fluid echo--content-block grey-bg echo--top-companies">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <section class="echo--content-section">
                  <h1><?php the_field('echo_lp_logos_row_grey_bg_heading') ?></h1>
                  <hr />
                  <div class="echo--content-section-logo-block">
                    <?php the_field('echo_lp_logo_row_grey_bg_logos_block') ?>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="get-in-touch" class="container-fluid echo--content-block white-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <section class="echo--content-section">
                  <h1><?php the_field('echo_lp_leads_form_row_white_bg_heading') ?></h1>
                  <hr />
                  <?php the_field('echo_lp_leads_form_row_white_bg_form_block') ?>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><?php the_field('echo_lp_modal_close_button_text') ?></button>
      <?php the_field('echo_lp_modal_embed_code') ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
