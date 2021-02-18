<?php
/*
Template Name: Archives
*/
get_header(); ?>



<section class="blog">
    <div class="container">
        <!-- Début de la Boucle. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
 
 echo '<div class="row blogarticle align-items-center">
       <div class="col-sm-12 col-lg-6">'?>
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
      echo '</div>' ?>


        <!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
        <!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
        <!-- Sinon, le bloc div reçoit la classe CSS "post". -->
        <?php if ( in_category('3') ) { ?>
        <div class="post-cat-three">
            <?php } else { ?>
            <div class="post col-sm-12 col-lg-6">
                <?php } ?>

                <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
                <div class="titlebox unbuntuItalic"><h2 class="blogtitle"><?php the_title(); ?></h2></div>

                <!-- Affiche la Date. -->
                <small class="date"><?php the_time('F jS, Y'); ?></small>

                <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
                <div class="entry">
                    <?php the_content(); ?>
                </div>

                <a class="link-article unbuntuItalic"href="<?php the_permalink(); ?>">Lire l'article complet ...</a>

                <!-- Affiche une liste des Catégories des Articles séparées par des virgules. -->
                <p class="postmetadata">Posted in <?php the_category(', '); 
                echo '</div>' ?></p>
            </div> <!-- Fin du premier bloc div -->

            <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
            <?php endwhile; else: ?>

            <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
            <!-- partie "else" indique que faire si ce n'est pas le cas. -->
            <p>Sorry, no posts matched your criteria.</p>

            <!-- Fin REELLE de La Boucle. -->
            <?php endif; ?>
        
    </div>
</section>
<?php get_footer(); ?>