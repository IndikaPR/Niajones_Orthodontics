<?php /* Template Name: Contact */ ?>
<?php get_header();
?>

<section class="sub-page-banner" id="contact">
  <?php getImage(get_field('contact_banner_image'), 'full-image bg'); ?>
  <div class="container" id="schedule">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="content-wrapper">
          <?php the_field('contact_banner_content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sub-page-form">
  <div class="container">
    <div class="content-wrapper">
      <?php the_field('form_content'); ?>
    </div>
    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <div class="full-image-parent">
          <?php getImage(get_field('form_image'), 'full-image'); ?>
          <div class="image-content">
            <?php the_field('form_image_content'); ?>
          </div>
        </div>
      </div>

      <?php if ($formID = get_field('schedule_form')) : ?>
        <div class="col-sm-12 col-lg-6">
          <div class="contact-form">
            <?php echo do_shortcode('[forminator_form id="' . $formID . '"]'); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
  </div>
</section>



<?php get_footer(); ?>