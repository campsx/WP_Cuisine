<?php
  get_header();
?>
<section class="accueil">

    <div class="container">

      <div class="div_accueil col-md-8">
          <h2 class="title">Recherche</h2>
          <?php
            if (have_posts()):
              while (have_posts()):
                the_post();
          ?>
            <article class="<?php post_class();?>" id="post-<?php the_ID(); ?>">
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
              echo "<h3>Rien trouver</h3>";
            endif;
           ?>
      </div>

      <?php get_sidebar(); ?>
  </div>
</section>

<?php get_footer(); ?>
