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
$page = 'theme';
$subpage = '';
$type = 'page';
$title = 'Themes';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <div class="title clearfix">
            <h1 class="half-cols"><?php the_title(); ?></h1>
        </div>
        <div class="banner">
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_field('link_banner'); ?>" title="<?php the_field('creditos_banner'); ?>"><?php the_field('creditos_banner'); ?></a>
        </div>
        <div class="content">
            <?php
query_posts(array('pagename' => 'themes', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif;?>
    </article>
</div>
<?php include 'footer.php'; ?>