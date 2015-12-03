<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		rimisp
 * @author		Jairo Burbano <jairo.aburbano@gmail.com>
 * @version		1.0.0
 */
$page = 'travel';
$subpage = 'practical-information';
$type = 'page';
$title = 'Practical Information';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <?php
query_posts(array('pagename' => 'practical-information', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="banner">
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_field('link_banner'); ?>" title="<?php the_field('creditos_banner'); ?>"><?php the_field('creditos_banner'); ?></a>
        </div>
        <div class="content more-space">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </article>
</div>
<?php include 'footer.php'; ?>