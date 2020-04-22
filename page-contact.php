<?php get_header(); ?>


			<div id="content" class=" align-self-center">

				<div id="inner-content  "  class="">
							<!-- m-all t-2of3 d-5of7  ARe Classes i deleted from below -->
						<main id="main" class=" cf" role="main" itemscope 
						
						itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								<div class="jimross">

									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
									
									<header class="article-header">
										
										<h1 class="upperC   text-center">
											<?php the_title(); ?>
										</h1>
										
										<!-- <h1 class="h2 entry-title text-center "><a class=" upperC"href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1> -->
										
										
										
										<div class="">
											
											<div class="mb-3 ">
												<p class="mx-auto h3">Email:</p>
												<a  class="h1" href="<?php the_field('email_address', 'option'); ?>" > <?php the_field('email_address', 'option'); ?></a> 
											</div>
											
											<div class="mb-3">
												<p class="mx-auto 32">Mobile:</p>
												<a class="h1"  href="tel:<?php the_field('mobile_number', 'option'); ?>"> <?php the_field('mobile_number', 'option');  ?></a>
											</div>
											<div>
												<p class=" h3">Landline:</p>
												<div class="btm-margin">
													<a class="h1"href="tel:<?php the_field('landline_number', 'option'); ?>"> <?php the_field('landline_number', 'option');  ?></a>
												</div>
											</div>
										
								</div>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								

							</article>

							<?php endwhile; ?>

						

            
									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<!-- Where the sidbebar would go -->

				</div>

			</div>


<?php get_footer(); ?>
