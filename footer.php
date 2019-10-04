<footer id="contact" class="page-footer-wrapper">
	<div class="container">
		<div class="col-lg-12">
			<div class="page-footer">
				<ul class="contact-details">
					<li><?php the_field('address', 'option'); ?></li>
					<li>Phone: <?php the_field('telephone', 'option'); ?></li>
					<li>Email: <?php the_field('email', 'option'); ?></li>
				</ul>
				

				<dl class="registration_numbers">
					<dt>Company Number:</dt>
					<dd><?php the_field('company_number', 'option'); ?></dd>
					<dt>Chairty Number:</dt>
					<dd><?php the_field('charity_number', 'option'); ?></dd>
				</dl>
				 
			</div>
		
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>