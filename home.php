<?php
  get_header();
?>
<section class="accueil">

    <div class="container">

      <div class="div_accueil">
          <h2 class="title">Derniere recettes</h2>
          <?php
            if (have_posts()):
              while (have_posts()):
                the_post();
          ?>
                <div <?php post_class();?> id="post-<?php the_ID(); ?>">
                  <h3><?php the_title();?></h3>
                  <?php the_post_thumbnail('medium'); ?>
                  <?php the_content(); ?>
                  <a href="<?php the_permalink(); ?>">Voir</a>
                </div>
          <?php
              endwhile;
            else:
              echo "<h3>Pas d'article</h3>";
            endif;
           ?>
      </div>
      <div class="div_accueil">
          <h2 class="title">Recettes du moment</h2>
      </div>
      <div class="div_accueil">
          <h2 class="title">Les indémodables</h2>
      </div>
  </div>

</section>

<?php get_footer();
