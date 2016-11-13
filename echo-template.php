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
        <?php $hero_modal_trigger = wp_get_attachment_image_src(get_field('echo_lp_hero_modal_trigger'), 'full'); ?>
        <img data-toggle="modal" data-target="#basicModal" src="<?php echo $hero_modal_trigger[0]; ?>" alt="<?php echo get_the_title(get_field('echo_lp_hero_modal_trigger')) ?>" class="echo--lp-modal-video" id="echo--lp-modal-video" />
      </div>
    </div>

    <div class="container-fluid echo--featured">
      <div class="row">
        <div class="col-xs-12">
          <div class="container">
            <div class="row equal-height">
              <div class="col-xs-12 col-sm-3 col-sm-offset-1 text-center echo--featured-logo">
                <?php $featured_image = wp_get_attachment_image_src(get_field('echo_lp_featured_image'), 'full'); ?>
                <img src="<?php echo $featured_image[0]; ?>" alt="<?php echo get_the_title(get_field('echo_lp_featured_image')) ?>"  alt="Featured Logo" height="200" width="auto" />
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
          echo '<div class="row echo--tech-background-image" style="background-image: url(' . $tech_pattern_bg['url'] . ');">';
        } else {
          echo '<div class="row echo--tech-background-image default">';
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
    
    <div class="container-fluid echo--content-block echo--tabs-container white-bg">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="echo--tabs-block">

            <?php if( have_rows( 'echo_lp_tabs_titles' ) ): ?>
                <ul class="nav nav-tabs echo--tabs" id="echo--tabs">
              <?php while( have_rows( 'echo_lp_tabs_titles' ) ): the_row(); ?>
                  <li role="presentation"><a href="#tab-first" role="tab" data-toggle="tab"><?php the_sub_field( 'echo_lp_tabs_titles_title' ); ?></a></li>
              <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <?php if( have_rows( 'echo_lp_tab_contents' ) ): ?>
                <div class="tab-content" id="echo--tabs-content">
              <?php while( have_rows( 'echo_lp_tab_contents' ) ): the_row(); ?>
                  <div class="tab-pane fade">
                    <?php the_sub_field( 'echo_lp_tab_contents__introduction_paragraph' ); ?>
                    <div class="columns row">
                      <?php the_sub_field( 'echo_lp_tab_contents__custom_content_block' ); ?>
                    </div>
                  </div>
              <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid echo--content-block echo--top-companies grey-bg">
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
