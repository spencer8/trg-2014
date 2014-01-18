<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 */
?>
</div><!--End role=main-->

<footer class="footer" role="contentinfo">
<?php
// The Query
$the_query = new WP_Query( 'pagename=home' );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post(); 
?>

	<h2 class="ghead"><span><?php the_field('address'); ?></span></h2>
	<div class="wrap">
		<div class="left">
			<?php if(get_field('social')): ?>
			<ul class="nav-social">
				<?php while(has_sub_field("social")): ?>
					
					<li><a href='<?php the_sub_field('link'); ?>' class='symbol' title="circle<?php the_sub_field('icon'); ?>"><?php the_sub_field('text'); ?></a></li>

				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<!-- Begin MailChimp Signup Form -->
			<form action="http://theroguegentlemen.us3.list-manage.com/subscribe/post?u=49524beb8916ee6cc01d486b7&amp;id=7d19ad6822" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate inline-form" target="_blank" novalidate>
			    <fieldset>
				    <div class="inline-container">
                        <input type="email" placeholder="your e-mail..." value="" name="EMAIL" class="required email" id="mce-EMAIL"> 
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;"><input type="text" name="b_49524beb8916ee6cc01d486b7_7d19ad6822" value=""></div>
                        <input type="submit" title="Subscribe to our mailing list" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					</div>
			    </fieldset>
			</form>
			<!--End mc_embed_signup-->			
		</div>
		<div class="right">
			<p>
				<?php the_field('hours'); ?>
			</p>
			<p>
				<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br>
				<?php the_field('phone'); ?>
			</p>
		</div>
		<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo("name"); ?>. All rights reserved.</p>
	</div>

<?php

	}

} else {
?>
	<h2 class="ghead"><span>618 N Jackson Street, Richmond VA</span></h2>
	<div class="wrap">
		<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo("name"); ?>. All rights reserved.</p>
	</div>
<?php
}
/* Restore original Post Data */
wp_reset_postdata();

?>


		
</footer>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20271174-1', 'team-eight.com');
  ga('send', 'pageview');
</script>
</body>
</html>