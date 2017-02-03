<?php
get_header();
?>

<section class="accueil">

    <div class="container">
        <h1 class="title-page">Recettes <?php wp_title(); ?></h1>
        <section class="div_accueil" style="padding:10px;">
            <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
            ?>          
                        <article class="text-left" <?php the_ID();?> >
                            <h2 class="title text-center"><?php the_title();?></h2>
                            <p class="text-center"><?php the_category(",")?> proposé par <?php the_author(); ?> </p>
                            <?php the_content(); ?>
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