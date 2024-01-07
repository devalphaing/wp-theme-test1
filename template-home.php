<h1>Home template</h1>

<?php
/* 
Template Name: home
*/

get_header();
?>

<?php 
    $newscat = get_terms([
        'taxonomy' => 'newscategory',
        'gide_empty' => false
    ]);

    foreach($newscat as $index => $data){
        echo $index;
        echo $data->name;
        echo '<br>';
        print_r($data);
        echo '<br>';
    }
    // print_r($newscat);
?>

<?php
get_footer();

?>

<h1>Home template ended</h1>