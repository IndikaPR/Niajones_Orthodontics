<footer class="main-footer" id="footer">
	<div class="container">
		<div class="logo-wrapper">
			<?php if ($logo = get_field('logo', 'option')) : ?>
				<a href="<?php echo site_url(); ?>">
					<?php getImage($logo, 'logo', get_bloginfo('name'), ''); ?>
				</a>
			<?php endif; ?>
		</div>
		<div class="footer-up">
			<div class="quick-links">
				<?php if (get_field('links_title', 'option')) : ?>
					<p class="footer-topics"><?php the_field('links_title', 'option'); ?></p>
				<?php endif; ?>
				<div class="menu-wrapper">
					<nav class="navbar navbar-expand-md p-0" id="menu">
						<div id="navbarCollapse">
							<?php
							$defaults = array(
								'menu'            => 'Footer Menu',
								'container'       => false,
								'menu_class'      => 'menu',
								'echo'            => true,
								'fallback_cb'     => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>',
								'depth'           => 0
							);
							wp_nav_menu($defaults);
							?>
						</div>
					</nav>
				</div>
			</div>
			<div class="first-office">
				<?php if (get_field('office_frist', 'option')) : ?>
					<p class="footer-topics"><?php the_field('office_frist', 'option'); ?></p>
				<?php endif; ?>
				<?php if ($telephone = get_field('telephone_1', 'option')) : ?>
					<div class="contact-row telephone">
						<i class="fa-solid fa-phone-volume phone"></i>
						<a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($email = get_field('email_1', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-regular fa-envelope"></i>
						<a href="mailto:<?php echo $email; ?>" class="email"><?php echo $email; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($address = get_field('address_1', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-solid fa-location-dot"></i>
						<p><?php echo nl2br($address); ?></p>
					</div>
				<?php endif; ?>
			</div>
			<div class="second-office">
				<?php if (get_field('office_second', 'option')) : ?>
					<p class="footer-topics"><?php the_field('office_second', 'option'); ?></p>
				<?php endif; ?>
				<?php if ($telephone = get_field('telephone_2', 'option')) : ?>
					<div class="contact-row telephone">
						<i class="fa-solid fa-phone-volume phone"></i>
						<a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($email = get_field('email_2', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-regular fa-envelope"></i>
						<a href="mailto:<?php echo $email; ?>" class="email"><?php echo $email; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($address = get_field('address_2', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-solid fa-location-dot"></i>
						<p><?php echo nl2br($address); ?></p>
					</div>
				<?php endif; ?>
			</div>
			<div class="office-hours">
				<?php if (get_field('office_hours_title', 'option')) : ?>
					<p class="footer-topics"><?php the_field('office_hours_title', 'option'); ?></p>
				<?php endif; ?>
				<?php while (have_rows('office_hours', 'option')) : the_row(); ?>
					<?php if (get_sub_field('office_day') && get_sub_field('office_time')) : ?>
						<div class="content-wrapper">
							<p class="footer-days"><?php the_sub_field('office_day'); ?> <span class="office-time"><?php the_sub_field('office_time'); ?></span></p>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>

		<div class="footer-down">
			<?php get_template_part('templates/social', 'media'); ?>

			<div class="copyrights">
				<p class="copyrights-text"><?php echo str_replace('[year]', date('Y'), get_field('copyrights_text', 'option')); ?></p>
				<p class="maya-wrapper"><a href="https://www.maya.lk/" target="_blank">Website By <img src="<?php echo THEME_IMAGES; ?>logo-2.png" alt="Maya.lk"></a></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>