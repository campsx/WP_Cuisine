<?php
get_header();
// if (have_posts()) {
//   while (have_posts()) {
//     the_post();
//     echo '<h2>' . get_the_title() . '</h2>';
//     the_post_thumbnail('medium');
//     the_content();
//   }
// } else {
//    echo 'error';
// }
//
// $loop = new WP_Query(['post_type' => 'events']);
//
// while ($loop->have_posts()) {
//   $loop->the_post();
//   the_title();
//   the_content();
// }
//
// dynamic_sidebar('sidebar-1');
?>
<section class="accueil">

    <div class="container">

        <div class="div_accueil" onclick="location.href='recettes.php'">
            <h1 class="title">Top des recettes</h1>

        </div>
        <div class="div_accueil">
            <h1 class="title">Recettes populaires</h1>

        </div>
        <div class="div_accueil">
            <h1 class="title">Recettes du moment</h1>
        </div>
        <div class="div_accueil">
            <h1 class="title">Les indémodables</h1>
        </div>

    </div>

</section>





<?php
get_footer();
?>