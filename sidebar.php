<div id="nav">
    <h1><a href="<?= get_option('home'); ?>"> <?php bloginfo('name'); ?></a></h1>
    
    <ul id="pages">
        <li><a href="<?= get_option('home'); ?>">Home</a></li>
        <?php wp_list_pages('title_li=' ); ?>
    </ul>
    
    <h2>Categories</h2>
</div>