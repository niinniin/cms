    <?php get_header() ?>
    <div id="site-content">
        <div id='site-sidebar'>
            <?php dynamic_sidebar( 'mat-sidebar' ); ?>  
        </div>

        <div id='site-content-right'>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post() ?>
            <h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
            <div class="content">
              <?php the_content() ?>
            </div>
            <?php endwhile ?>
            <?php else : ?>
            <p>Nothing new here.</p>
            <?php endif ?></div> <!-- site content -->


    </div>
    <?php get_footer() ?>

