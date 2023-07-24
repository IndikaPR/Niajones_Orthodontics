<?php /* Template Name: Omaha */ ?>
<?php get_header();
?>

<section class="sub-page-banner">
  <?php if ($image = get_the_post_thumbnail_url(get_the_ID())) : ?>
    <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" class="full-image">
  <?php endif; ?>
  <div class="container">
    <div class="content-wrapper omaha-banner">
      <?php the_field('omaha_banner'); ?>
    </div>
  </div>
</section>

<section class="omaha-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div class="full-image-parent">
          <?php getImage(get_field('omaha_image'), 'full-image'); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-7">
        <div class="content-wrapper">
          <?php the_field('about_omaha'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="omaha-services">
  <div class="container">
    <div class="content-wrapper">
      <div class="service-header">
        <?php the_field('service_header'); ?>
      </div>
    </div>
  </div>

  <div class="swiper" id="serviceSwiper">
    <div class="swiper-wrapper">
      <?php while (have_rows('omaha_services')) : the_row(); ?>
        <div class="swiper-slide">
          <div class="service-image">
            <?php getImage(get_sub_field('omaha_image'), 'full-image bg'); ?>
            <?php if ($link = get_sub_field('omaha_service_link')) : ?>
              <a class="full-link" href="<?php echo $link['url']; ?>"></a>
            <?php endif; ?>
            <div class="service-description">
              <h3><?php the_sub_field('omaha_service'); ?></h3>
              <p><?php the_sub_field('service_description'); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php if (get_field('start_content')) : ?>
  <section class="start-section" id="">
    <div class="position-relative">
      <?php getImage(get_field('start_image'), 'full-image bg'); ?>
      <div class="container">
        <div class="row">
          <div class="sol-sm-12 col-lg-5">
            <div class="content-wrapper position-relative">
              <?php the_field('start_content'); ?>
              <div class="section-link">
                <?php if ($link = get_field('appointment_link')) : ?>
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
