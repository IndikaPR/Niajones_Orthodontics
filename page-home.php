<?php /* Template Name: Home */ ?>
<?php get_header();
?>

<section class="banner-section" id="contact">
    <?php getImage(get_field('banner_background_image'), 'full-image bg'); ?>
    <div class="container" id="schedule">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="content-wrapper">
                    <?php the_field('banner_content'); ?>
                </div>
            </div>
            <div class="col-sm-12 col-lg-12">
                <div class="banner-contact">
                    <div class="location-1"><?php if ($telephone = get_field('telephone_2', 'option')) : ?>
                            <div class="content-wrapper">
                                <h5><?php echo get_field('location_first'); ?>:</h5>
                            </div>
                            <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="location-2">
                        <?php if ($telephone = get_field('telephone_1', 'option')) : ?>
                            <div class="content-wrapper">
                                <h5><?php echo get_field('location_second'); ?>:</h5>
                            </div>
                            <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (get_field('about_content')) : ?>
    <section class="about-section" id="welcome">
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('about_content'); ?>
            </div>

            <div class="section-link">
                <?php if ($link = get_field('about_link')) : ?>
                    <a href="<?php echo $link['url']; ?>">
                        <span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        <?php echo $link['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('approach_content')) : ?>
    <section class="approach-section" id="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 left">
                    <div class="approach-image">
                        <?php getImage(get_field('approach_image'), 'full-image bg'); ?>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 right">
                    <div class="content-wrapper">
                        <?php the_field('approach_content'); ?>
                    </div>
                    <div class="section-link">
                        <?php if ($link = get_field('approach_link')) : ?>
                            <a href="<?php echo $link['url']; ?>">
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                                <?php echo $link['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="swiper" id="testimonialsSwiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('approach_testimonials')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="stars">
                                        <?php
                                        $starRating = get_sub_field('star_rating');
                                        for ($i = 0; $i < $starRating; $i++) {
                                            echo '<div class="rating-star"><i class="fa-solid fa-star"></i></div>';
                                        }
                                        ?>
                                    </div>
                                    <?php if (get_sub_field('testimonial_content')) : ?>
                                        <?php $name = nl2br(get_sub_field('testimonial_content')); ?>
                                        <p class=""><?php echo $name; ?></p>
                                    <?php endif; ?>
                                    <p class="testimonial-name"><?php the_sub_field('testimonial_name'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('service_content')) : ?>
    <section class="service-section" id="what-they-say">
        <div class="container content-top">
            <div class="content-wrapper">
                <?php the_field('service_content'); ?>
            </div>
        </div>

        <div class="swiper" id="serviceSwiper">
            <div class="swiper-wrapper">
                <?php while (have_rows('services')) : the_row(); ?>
                    <div class="swiper-slide" style="margin-right: 36px;">
                        <div class="service-image">
                            <?php getImage(get_sub_field('service_image'), 'full-image bg'); ?>
                            <div class="service-name">
                                <p><?php the_sub_field('service_name'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="container">
            <div class="section-link">
                <?php if ($link = get_field('service_link')) : ?>
                    <a href="<?php echo $link['url']; ?>">
                        <span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        <?php echo $link['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if (get_field('contact_content')) : ?>
    <section class="contact-section" id="">
        <?php getImage(get_field('contact_background_image'), 'full-image bg'); ?>
        <div class="container">
            <div class="row">
                <div class="sol-sm-12 col-lg-8">
                    <div class="content-wrapper">
                        <?php the_field('contact_content'); ?>
                        <div class="section-link">
                            <?php if ($link = get_field('contact_link')) : ?>
                                <a href="<?php echo $link['url']; ?>">
                                    <span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                    <?php echo $link['title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('location_content')) : ?>
    <section class="location-section" id="contact">
        <div class="container" id="">
            <div class="content-wrapper">
                <?php the_field('location_content'); ?>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-lg-6 px-3">
                    <div class="location-image">
                        <?php getImage(get_field('location_image_1'), 'full-image bg'); ?>
                        <div class="location-content">
                            <div class="content-wrapper">
                                <h2><?php the_field('location_first'); ?></h2>
                            </div>
                            <?php if ($telephone = get_field('telephone_2', 'option')) : ?>
                                <div class="contact-row">
                                    <h6>PHONE:</h6>
                                    <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if ($address = get_field('address_2', 'option')) : ?>
                                <div class="contact-row">
                                    <h6>ADDRESS:</h6>
                                    <p><?php echo nl2br($address); ?></p>
                                </div>
                            <?php endif; ?>
                            <div class="section-link">
                                <?php if ($link = get_field('location_link_2')) : ?>
                                    <a href="<?php echo $link['url']; ?>">
                                        <span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                        <?php echo $link['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6 px-3">
                    <div class="location-image">
                        <?php getImage(get_field('location_image_2'), 'full-image bg'); ?>
                        <div class="location-content">
                            <div class="content-wrapper">
                                <h2><?php the_field('location_second'); ?></h2>
                            </div>
                            <?php if ($telephone = get_field('telephone_1', 'option')) : ?>
                                <div class="contact-row">
                                    <h6>PHONE:</h6>
                                    <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if ($address = get_field('address_1', 'option')) : ?>
                                <div class="contact-row">
                                    <h6>ADDRESS:</h6>
                                    <p><?php echo nl2br($address); ?></p>
                                </div>
                            <?php endif; ?>
                            <div class="section-link">
                                <?php if ($link = get_field('location_link_1')) : ?>
                                    <a href="<?php echo $link['url']; ?>">
                                        <span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
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


<?php if (get_field('started_content')) : ?>
    <section class="started-section" id="welcome">
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('started_content'); ?>
            </div>

            <div class="section-link">
                <?php if ($link = get_field('started_link')) : ?>
                    <a href="<?php echo $link['url']; ?>">
                        <span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        <?php echo $link['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('partners')) : ?>
    <section class="pertner-section" id="">
        <div class="container">
            <div class="swiper" id="partnersSwiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('partners')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="item">
                                <?php getImage(get_sub_field('partner_image'), 'full-image  bg'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="instagram-section" id="">
    <div class="instagram-images">
        <div class="instagram">
            <div class="instagram-image">
                <?php getImage(get_field('instagram_1'), 'full-image bg'); ?>
                <?php if ($link = get_field('instagram_link')) : ?>
                    <a class="full-link" href="<?php echo $link['url']; ?>"></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="instagram">
            <div class="instagram-image">
                <?php getImage(get_field('instagram_2'), 'full-image bg'); ?>
                <div class="content-wrapper">
                    <h6><?php the_field('instagram_text'); ?></h6>
                    <?php if ($link = get_field('instagram_link')) : ?>
                        <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                </div>
                <?php if ($link = get_field('instagram_link')) : ?>
                    <a class="full-link" href="<?php echo $link['url']; ?>"></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="instagram">
            <div class="instagram-image">
                <?php getImage(get_field('instagram_3'), 'full-image bg'); ?>
                <?php if ($link = get_field('instagram_link')) : ?>
                    <a class="full-link" href="<?php echo $link['url']; ?>"></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="instagram">
            <div class="instagram-image">
                <?php getImage(get_field('instagram_4'), 'full-image bg'); ?>
                <?php if ($link = get_field('instagram_link')) : ?>
                    <a class="full-link" href="<?php echo $link['url']; ?>"></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>