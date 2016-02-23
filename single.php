<?php get_header(); ?>


    <div id="main">
    
    <?php if(have_posts()) : ?>
    
     
    
    <?php while(have_posts()) : the_post(); ?>
    
        <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            
            <?php if( has_post_thumbnail() ) : ?>
            <div class="post-thumb">
                <a href="<?php the_permalink()?>"<?php the_post_thumbnail(); ?></a>
                </div>
            <?php endif ?>
            
            <?php the_content(''); ?>
           
        </div>
    <?php endwhile ?>
    
<?php get_sidebar(); ?>
    
   
    <?php endif ?>
    
<?php get_footer(); ?>

