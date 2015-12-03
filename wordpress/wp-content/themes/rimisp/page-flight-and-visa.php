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
$subpage = 'flight-and-visa';
$type = 'page';
$title = 'Flight and Visa';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <?php
query_posts(array('pagename' => 'flight-and-visa', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="banner">
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_field('link_banner'); ?>" title="<?php the_field('creditos_banner'); ?>"><?php the_field('creditos_banner'); ?></a>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </article>
</div>
<?php include 'footer.php'; ?>