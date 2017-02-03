<?php
get_header();
?>

<section class="accueil">

    <div class="container">
        <h1 class="title-page">Recettes <?php wp_title(); ?></h1>
        <section class="div_accueil col-md-7" style="padding:10px;">
            <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
            ?>          
                        <article class="text-left two-colonnes">
                            <div class="col-1">
                                <?php if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                else:
                                    echo '<img class="single-thumbnail" src="'. get_template_directory_uri() .'/img/no-image.jpg" alt="Pas d\'image pour cet article">';
                                endif;
                                ?>
                            </div>
                                <h2 class="title text-center"><?php the_title();?></h2>
                                <p class="text-center"><?php the_category(",")?> proposé par <?php the_author(); ?> </p>
                                <?php the_content(); ?>
                            <div class="col-2">
                                
                            </div>
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