<?php
get_header();
?>

<section class="accueil">

  <div class="container">
    <h2 class="title-page">Catégorie <?php wp_title(); ?></h2>
      <div class="div_accueil">
        <h2 class="title">Dernières recettes</h2>
        <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
        ?>
                    <section class="" 
                        <?php post_class();?> id="post-<?php the_ID(); ?>">
                        <h3><a href="<?php the_permalink(); ?>">Recette : <?php the_title();?></a></h3>
                        <?php the_post_thumbnail('medium'); ?>
                        <p class><?php the_content(); ?>
                        <p class="text-right">Par : <?php the_author(); ?> </p>
                        <hr>
                    </div>
        <?php
                endwhile;
            else:
                echo "<h3>Pas d'article</h3>";
            endif;
        ?>
      </div>
  </div>

</section>



<?php
get_footer();
?>
