<h1>index.php called</h1>

<?php
get_header();

$cat = get_categories(
    array(
        'taxonomy' => 'category'
    )
);
echo "<pre>";
print_r($cat);
echo "</pre>"
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

<?php
get_sidebar();
?>

<div class="wp-query-container">
    <?php
    $wpnews = array(
        'post_type' => 'news',
        'post_status' => 'publish'
    );

    $newsquery = new WP_Query($wpnews);

    while ($newsquery->have_posts()) {
        $newsquery->the_post();
    ?>

        <div class="title-news"><?php the_title() ?></div>
        <div class="data-news">
            <?php the_content() ?>
            <div class="data-news"><?php echo get_the_date() ?></div>
        </div>


    <?php } ?>
</div>

<h1>index.php ended...</h1>