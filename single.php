<?php
get_header();
?>

<section class="accueil">

    <div class="container">
      <h1 class="title-page">Post : <?php wp_title(); ?></h1>

        <div class="div_accueil">
            <h2 class="title">Derniere recettes</h2>
            <?php
              if (have_posts()):
                while (have_posts()):
                  the_post();
            ?>
                  <div <?php post_class();?> id="post-<?php the_ID(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    content : <?php the_content(); ?>
                    type : <?php the_category(","); ?>
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
