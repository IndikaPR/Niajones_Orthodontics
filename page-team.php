<?php /* Template Name: Team */ ?>
<?php get_header();
?>

<section class="sub-page-banner" id="contact">
  <?php getImage(get_field('team_banner_image'), 'full-image bg'); ?>
  <div class="container" id="schedule">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="content-wrapper">
          <?php the_field('team_banner_content'); ?>
        </div>
      </div>
</section>

<?php if (get_field('team_content')) : ?>
  <section class="team-section" id="welcome">
    <div class="container">
      <div class="content-wrapper">
        <?php the_field('team_content'); ?>
      </div>

      <div class="row">
        <?php while (have_rows('team_members')) : the_row(); ?>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="member-image">
              <?php getImage(get_sub_field('member_image'), 'full-image'); ?>
              <div class="image-content">
                <h5><?php the_sub_field('member_name'); ?></h5>
                <h6><?php the_sub_field('member_position'); ?></h6>
              </div>
            </div>
            <?php if (get_sub_field('member_information')) : ?>
              <?php $name = nl2br(get_sub_field('member_information')); ?>
              <div class="content-wrapper">
                <p class=""><?php echo $name; ?></p>
              </div>
            <?php endif; ?>
            <p class="testimonial-name"><?php the_sub_field('testimonial_name'); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>



<?php get_footer();
