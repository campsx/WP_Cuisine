<?php
get_header();
?>

<section class="accueil">

  <div class="container">
    <h2 class="title-page">Catégorie <?php wp_title(); ?></h2>
      <section class="div_accueil recettes col-md-8">
          <div id="title">
              <h2 class="title"><?php wp_title(); ?></h2>
          </div>
        <?php
            if (have_posts()):
        ?>
                <?php
                while (have_posts()):
                    the_post();
                ?>
                    <article class="an_article" id="post-<?php the_ID(); ?>">
                        <h3><a href="<?php the_permalink(); ?>">Recette : <?php the_title();?></a></h3>
                        <?php the_post_thumbnail('medium'); ?>
                        <?php echo displayDifficulty( get_post_custom_values('niveau')[0] );?>
                        <p><?php the_excerpt(); ?></p>
                        <p class="text-right">Par : <?php the_author(); ?> </p>
                        <hr>
                    </article>
        <?php
                endwhile;
            else:
                echo "<h3>Pas d'article</h3>";
            endif;
        ?>
      </section>
      <?php get_sidebar();?>
  </div>

</section>



<?php
get_footer();
?>
