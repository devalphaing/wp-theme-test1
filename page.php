<body>
    <h1>Page.php called</h1>
    <?php
    get_header();
    ?>

    <?php the_post(); ?>

    <h1><?php the_title() ?></h1>

    <div class="button-menu">
        <a href="<?php echo site_url(); ?>">
            <?php the_title(); ?>
        </a>
    </div>
    <?php the_post_thumbnail(array(200, 200)); ?>

    <div class="about-content">
        <?php the_content(); ?>
    </div>

    <?php
    $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    print_r($imagePath); //by this we can get the path and using img tag we can show it in ui.
    ?>

    <?php the_excerpt(); ?>

    <h1>end of page.php</h1>

</body>