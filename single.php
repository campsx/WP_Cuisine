<?php
get_header();
?>

<section class="accueil">

    <div class="container">
        <h1 class="title-page">Recettes <?php wp_title(); ?></h1>
            <section class="div_accueil">
                <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                ?>          
                            <article class="<?php post_class();?>" id="post-<?php the_ID(); ?>">
                                <h2 class="title"><?php the_title();?></h2>
                            
                                <?php the_post_thumbnail('medium'); ?>
                                content : <?php the_content(); ?>
                                type : <?php the_category(","); ?>
                            </article>
          <?php
              endwhile;
            else:
              echo "<h3>Pas d'article</h3>";
            endif;
           ?>
      </section>
  </div>

</section>



<?php get_footer();