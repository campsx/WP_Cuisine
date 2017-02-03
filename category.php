<?php
get_header();
?>

<section class="accueil">

  <div class="container">
    <h2 class="title-page">Catégorie <?php wp_title(); ?></h2>
      <section class="div_accueil recettes col-md-8">
        <h2 class="title">Dernières recettes</h2>
        <?php
            if (have_posts()):
        ?>
                <?php
                while (have_posts()):
                    the_post();
                ?>
                    <article class="<?php post_class();?>" id="post-<?php the_ID(); ?>">
                        <h3><a href="<?php the_permalink(); ?>">Recette : <?php the_title();?></a></h3>
                        <?php the_post_thumbnail('medium'); ?>
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
