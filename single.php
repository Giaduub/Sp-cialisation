<?php get_header(); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-6">
<div class="main single">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();?>
<div class="post">
<h1 class="post-title"><?php the_title(); ?></h1>
<?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));?>
<p class="post-info">
Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
</p>
<div class="post-content">
<?php the_content(); ?>
</div>
<div class="post-comments">
<?php comments_template(); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div></div></div></div>
<?php get_footer(); ?>