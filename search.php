<?php get_header(); ?>


    <div id="main">
    
    <?php if(have_posts()) : ?>
    
    <h2 class="title"><?php the_search_query() ?></h2>    
    
    <?php while(have_posts()) : the_post(); ?>
    
        <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            
            <?php if( has_post_thumbnail() ) : ?>
            <div class="post-thumb">
                <a href="<?php the_permalink()?>"<?php the_post_thumbnail(); ?></a>
                </div>
            <?php endif ?>
            
            <?php the_content(''); ?>
            <ul class="meta">
                <li><?php the_time('F jS, Y') ?></li>
                <li>Posted in <?php the_category(', ') ?></li>
                <li><?php comments_number('No Comments', '1 Comment', '% Comments'); ?> </li>
            </ul>
        </div>
    <?php endwhile ?>
    
<?php get_sidebar(); ?>
    
    <div class="pagination">
        <ul>
            <li class="older"><?php next_posts_link('Older') ?> </li>
            <li class="newer"><?php previous_posts_link('Newer') ?> <li>
        </ul>
    </div>
    
    <?php else :?>
    
    <h2>No Dice..</h2>
    <p>Sorry, Nothing found under that criteria</p>
    <p><a href="<?= get_option('Home'); ?>">Back to homepage</a></p>
    
    <?php endif ?>
    
<?php get_footer(); ?>

