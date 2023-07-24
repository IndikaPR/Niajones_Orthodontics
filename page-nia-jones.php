<?php /* Template Name: NiaJones */ ?>
<?php get_header();
?>

<?php get_template_part('templates/sub-page', 'banner'); ?>

<section class="nia-jones-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div class="full-image-parent">
          <?php getImage(get_field('nia_jones_image'), 'full-image'); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-7">
        <div class="content-wrapper">
          <?php the_field('about_nia_jones'); ?>
        </div>
      </div>
    </div>

    <p class="simple-text"><?php the_field('simple_text'); ?></p>

    <div class="full-image-parent image-family">
      <?php getImage(get_field('nia_jones_family'), 'full-image'); ?>
    </div>

    <div class="sections">
      <?php while (have_rows('section_contents')) : the_row(); ?>
        <div class="content-wrapper section-details">
          <?php the_sub_field('section_content'); ?>
        </div>
      <?php endwhile; ?>
    </div>
</section>

<?php if ($telephone = get_field('telephone_1', 'option')) : ?>
  <div class="fixed-call">
    <i class="fa-solid fa-phone"></i>
    <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
  </div>
<?php endif; ?>


<?php get_footer(); ?>