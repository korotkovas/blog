<?php get_header(); ?>
<!-- Prijungiam musu headerio linkus -->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<section class="post_blog_bg primary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
        	<div class="col-md-8">
        	<!-- isvedam postus -->
        	<?php if ( have_posts() ) : ?>
        		<!-- kol yra postai ciklas nesibaigs -->
				<?php while ( have_posts() ) : the_post(); ?>
        			<article class="blog_post">
					<h4> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h4>
						
						<div class="blog_category">
							<ul> 
								<li><?php the_category(', ');  ?></li>
								<li> <a href="#">Fresh releases </a> </li>
							</ul>
						</div>	
						
						<div class="blog_text">
							<ul>
								<li> | </li>
								<li>Post By : <?php the_author_posts_link(); ?></li>
								<li> | </li>
								<li>  On : <?php the_time('j F Y');?> </li>
							</ul>
						</div>
						
						<div class="blog_post_img">
							<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail(); ?> </a>
						</div>
						
						<?php the_excerpt();  ?>
					
						<a href="<?php the_permalink(); ?>"> Continue reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						
					
				</article>
        		<?php endwhile; ?>
        	<?php endif; ?>
						
				<?php wptuts_pagination(); ?>
				<!-- Cia buvo paginacija htmlo -->
			</div>	
			
				<!-- Cia buvo sidebaras -->
			<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>


