<?php
/**
 * Single de posts.
 *
 * @package		rimisp
 * @author		Jairo Burbano <jairo.aburbano@gmail.com>
 * @version		1.0.0
 */
get_header(); ?>
<div class="wrap container">
    <article>
       <?php
if(have_posts()) : while(have_posts()) : the_post();
            ?>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="banner">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </article>
</div>
<?php include 'footer.php'; ?>