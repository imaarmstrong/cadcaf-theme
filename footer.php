<footer id="contact" class="page-footer-wrapper">
	<div class="container">
		<div class="col-lg-12">
			<div class="page-footer">
				<ul class="contact-details">
					<li><?php the_field('address', 'option'); ?></li>
					<li>Phone: <a href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></li>
					<li>Email: <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
				</ul>
				

				<dl class="registration_numbers">
					<dt>Company Number:</dt>
					<dd><?php the_field('company_number', 'option'); ?></dd>
					<dt>Charity Number:</dt>
					<dd><?php the_field('charity_number', 'option'); ?></dd>
				</dl>


				<?php 
					wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class' => 'footer-menu',
					)); 
				?>

				 
			</div>
		
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>