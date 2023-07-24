<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<?php get_template_part('templates/sub-page', 'banner'); ?>

<section class="blog-section">
  <div class="container">
    <div class="row">
      <?php
      $args = array(
        'post_type'      => 'post', // Use 'post' to query default posts
        'posts_per_page' => 3,
      );
      $loop = new WP_Query($args);
      while ($loop->have_posts()) {
        $loop->the_post();
      ?>
        <div class="col-lg-4">
          <div class="entry-content">
            <?php get_template_part('templates/blog', 'item'); ?>
          </div>
        </div>
      <?php
      }
      wp_reset_postdata(); // Reset the post data after the loop
      ?>
    </div>
  </div>
</section>

<?php get_footer();
