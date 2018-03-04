<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

<h1 class="subheader">Oh hey, fancy meeting you here</h1>
<div class="stat">Bam!</div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( 'group' ); ?> role="article">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </article>

    <?php endwhile; endif; ?>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
