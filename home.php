<?php /* Template Name: Forstasida */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id='site-content'>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>

		<div class="content">
			<?php the_content() ?>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Nothing new here.</p>
<?php endif ?>
 
    
    
    
    
</div> <!-- site content -->


<?php get_footer() ?>