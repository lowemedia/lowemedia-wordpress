<nav>
    <ul id="pages">
        <li><a href='<?php echo get_option('home'); ?>'>Home</a></li>
        <?php wp_list_pages('title_li='); ?>
    </ul>
    <ul id="categories">
        <?php wp_list_categories('show_count=0&title_li=&hide_empty=0&exclude=1'); ?>
    </ul>
</nav>
