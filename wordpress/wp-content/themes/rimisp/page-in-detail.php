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
$page = 'program';
$subpage = 'in-detail';
$type = 'page';
$title = 'In Detail';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <?php
        query_posts(array('pagename' => 'program/in-detail', 'post_type' => 'page'));
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
        <div class="content clearfix">
            <div class="custom-button clearfix">
                <?php
                query_posts(array('pagename' => 'program/in-detail/day-one', 'post_type' => 'page'));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="three-cols">
                    <a href="<?php echo get_template_directory_uri(); ?>/program/in-detail/day-one" title="<?php the_title(); ?>" class="btn btn__border"><?php the_title(); ?></a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php
                query_posts(array('pagename' => 'program/in-detail/day-two', 'post_type' => 'page'));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="three-cols">
                    <a href="<?php echo get_template_directory_uri(); ?>/program/in-detail/day-two" title="<?php the_title(); ?>" class="btn btn__border"><?php the_title(); ?></a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php
                query_posts(array('pagename' => 'program/in-detail/day-three', 'post_type' => 'page'));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="three-cols">
                    <a href="<?php echo get_template_directory_uri(); ?>/program/in-detail/day-three" title="<?php the_title(); ?>" class="btn btn__border"><?php the_title(); ?></a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
            <?php
            query_posts(array('pagename' => 'program/in-detail', 'post_type' => 'page'));
            if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="contenido">
                <?php the_content(); ?>
            </div><!--.contenido-->
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>