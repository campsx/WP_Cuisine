<?php
  get_header();
?>
<section class="accueil">

    <div class="container">

      <div class="div_accueil col-md-8">
          <div id="title">
              <h2 class="title">Recherche</h2>
          </div>
          <?php
            if (have_posts()):
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
              echo "
                    <article class=\"an_article\">
                        <h3>Rien trouver</h3>
                     </article>";
            endif;
           ?>
      </div>

      <?php get_sidebar(); ?>
  </div>
</section>

<?php get_footer(); ?>
