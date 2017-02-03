<?php

    get_header();

?>

    <section class="page">

        <div class="container">

            <div class="div_accueil col-md-12">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        ?>
                        <div <?php post_class();?> id="post-<?php the_ID(); ?>">
                            <h3><?php the_title();?></h3>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php the_content(); ?>
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