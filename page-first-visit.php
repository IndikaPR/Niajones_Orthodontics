<?php /* Template Name: FirstVisit */ ?>
<?php get_header();
?>


<?php get_template_part('templates/sub-page', 'banner'); ?>

<section class="step-section">
  <div class="container">
    <div class="row row-top">
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div class="full-image-parent">
          <?php getImage(get_field('step_image_1'), 'full-image'); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-7">
        <h3><?php the_field('step_one'); ?></h3>
        <?php $content = nl2br(get_field('step_one_content')); ?>
        <?php if ($content) : ?>
          <p><?php echo $content; ?></p>
        <?php endif; ?>
        <h3><?php the_field('step_two'); ?></h3>
        <?php $content = nl2br(get_field('step_two_content')); ?>
        <?php if ($content) : ?>
          <p><?php echo $content; ?></p>
        <?php endif; ?>
        <h3><?php the_field('step_three'); ?></h3>
        <?php $content = nl2br(get_field('step_three_content')); ?>
        <?php if ($content) : ?>
          <p><?php echo $content; ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div class="row row-bottom">
      <div class="col-sm-12 col-md-12 col-lg-7">
        <h3><?php the_field('step_four'); ?></h3>
        <?php $content = nl2br(get_field('step_four_content')); ?>
        <?php if ($content) : ?>
          <p><?php echo $content; ?></p>
        <?php endif; ?>
        <h3><?php the_field('step_five'); ?></h3>
        <?php $content = nl2br(get_field('step_five_content_1')); ?>
        <?php if ($content) : ?>
          <p><?php echo $content; ?></p>
        <?php endif; ?>
        <?php $content = nl2br(get_field('step_five_content_2')); ?>
        <?php if ($content) : ?>
          <p><?php echo $content; ?></p>
        <?php endif; ?>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div class="full-image-parent">
          <?php getImage(get_field('step_image_2'), 'full-image'); ?>
        </div>
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