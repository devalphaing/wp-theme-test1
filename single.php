<?php
get_header();
the_post();
?>

<div class="single-title-container">
    <?php the_title(); ?>
</div>

<div class="date">
    <?php echo get_the_date(); ?>
    <?php echo the_author(); ?>
</div>

<div class="img-container">
    <?php
    $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    // print_r($imagePath);//by this we can get the path and using img tag we can show it in ui.
    ?>
    <img src="<?php echo $imagePath[0]; ?>">
</div>

<div class="content-container">
    <?php the_content(); ?>
</div>

<div class="comment-container">
    <?php
        comments_template();
    ?>

</div>



<?php
get_footer();
?>