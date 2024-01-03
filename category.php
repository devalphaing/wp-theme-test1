<h1>category.php called</h1>

<?php
get_header();
?>

<?php
while (have_posts()) {
    the_post();
?>
    <h1><?php the_title(); ?></h1><br>
    <?php 
        $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        // print_r($imagePath);//by this we can get the path and using img tag we can show it in ui.
    ?>
    <img src="<?php echo $imagePath[0]; ?>">
    <br>
    <a href="<?php the_permalink(); ?>"><input type="button" value="read more" name=""></a>

<?php } ?>

<?php
get_footer();
?>

<h1>category.php ended...</h1>