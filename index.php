<?php /* Template Name: Nina template */ ?>

<?php get_header() ?>



<div id='site-content'>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<h2><?php the_title() ?></h2>
		<div class="content">
			<?php the_content() ?>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Nothing new here.</p>
<?php endif ?>
 
    
    
    
    
</div> <!-- site content -->


<?php get_footer() ?>