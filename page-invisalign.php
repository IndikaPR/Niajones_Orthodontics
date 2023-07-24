<?php /* Template Name: Invisalign */ ?>
<?php get_header();
?>

<?php get_template_part('templates/sub-page', 'banner'); ?>

<section class="invisalign-section">
  <div class="container">
    <h3><?php the_field('description_topic_one'); ?></h3>
    <?php if (get_field('description_1')) : ?>
      <?php $name = nl2br(get_field('description_1')); ?>
      <p class=""><?php echo $name; ?></p>
    <?php endif; ?>

    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div class="full-image-parent">
          <?php getImage(get_field('description_image'), 'full-image'); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-7">
        <h3><?php the_field('description_topic_two'); ?></h3>
        <?php if (get_field('description_2')) : ?>
          <?php $name = nl2br(get_field('description_2')); ?>
          <p class=""><?php echo $name; ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="content-wrapper">
      <h2><?php the_field('description_topic_3'); ?></h2>
    </div>

    <div class="why-invesalign">
      <?php while (have_rows('why_invisalign')) : the_row(); ?>
        <div class="content-wrapper">
          <h3><?php the_sub_field('invisalign_topic'); ?></h3>
          <p><?php the_sub_field('invisalign_description'); ?></p>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php if (get_field('consultant_content')) : ?>
  <section class="consultant-section" id="">
    <div class="position-relative">
      <?php getImage(get_field('consultant_image'), 'full-image bg'); ?>
      <div class="container">
        <div class="row">
          <div class="sol-sm-12 col-lg-6">
            <div class="content-wrapper">
              <?php the_field('consultant_content'); ?>
              <div class="section-link">
                <?php if ($link = get_field('request_consultant')) : ?>
                  <a href="<?php echo $link['url']; ?>">
                    <?php echo $link['title']; ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($telephone = get_field('telephone_1', 'option')) : ?>
  <div class="fixed-call">
    <i class="fa-solid fa-phone"></i>
    <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
  </div>
<?php endif; ?>

<?php get_footer();
