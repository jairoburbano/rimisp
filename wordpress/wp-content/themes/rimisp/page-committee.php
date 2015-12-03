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
$page = 'committee';
$subpage = '';
$type = 'page';
$title = 'Committee';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <?php
query_posts(array('pagename' => 'overview/committee', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="banner">
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_field('link_banner'); ?>" title="<?php the_field('creditos_banner'); ?>"><?php the_field('creditos_banner'); ?></a>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
        <div class="team-content clearfix lato">
            <?php
query_posts(array(
    'post_type'=>'committee_post_type',
    'showposts'=>-1,
    'order' => 'ASC'
));
if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="team">
                <div class="team--text">
                    <h2 class="special"><?php the_title(); ?></h2>
                    <p><?php the_field('type_team'); ?></p>
                    <p>
                        <?php the_field('position_team'); ?>
                    </p>
                </div>
                <div class="team--resume">
                    <?php the_field('bio'); ?>
                </div>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>