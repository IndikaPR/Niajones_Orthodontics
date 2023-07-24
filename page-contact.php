<?php /* Template Name: Contact */ ?>
<?php get_header();
?>

<?php get_template_part('templates/sub-page', 'banner'); ?>

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

<?php if ($telephone = get_field('telephone_1', 'option')) : ?>
  <div class="fixed-call">
    <i class="fa-solid fa-phone"></i>
    <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
  </div>
<?php endif; ?>



<?php get_footer(); ?>