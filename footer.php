		<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		<div class="footer-border">

			<div class="footer-style">
				
				<div id="inner-footer" class="wrapp cf">
					
					<nav role="navigation">
						<?php wp_nav_menu(array(
							'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					
					
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					
					
					<div>
						
						<?php 

$link = get_field('ofsted' ,'options');
if( $link ): ?>
								<a class="footer-style " href="<?php echo esc_url( $link ); ?>">Ofsted report</a>
								<?php endif; ?>
								
								<div>
									<?php 
								$link = get_field('charity_link','options');
								if( $link ): ?>
									<a class="footer-style" href="<?php echo esc_url( $link ); ?>">Charity information</a>
									<?php endif; ?>
									
									<a  class="float-right" style="color: red" href="https://www.jimrossphoto.com" > Proudly made by Jim Ross Studio <?php  the_field(''); ?>  </a>
									
								</div>		
								
								
							</div>
							
						</div>
					</div>
				</div>
				</footer>
				
					

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
