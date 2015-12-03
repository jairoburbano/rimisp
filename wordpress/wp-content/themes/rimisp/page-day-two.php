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
$subpage = 'at-a-glance';
$type = 'page';
$title = 'Tuesday, January 26';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <?php
        query_posts(array('pagename' => 'program/at-a-glance', 'post_type' => 'page'));
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="clearfix" style="position: relative;">
            <p style="font-size: 17px; font-weight: bold;">Changes may still be made to the program. The final program will be published January 7, 2016.</p>
            <a href="<?php the_field('download_link'); ?>" title="Download the program" class="btn-download">Download the program</a>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
        <div class="content clearfix">
            <div class="custom-button clearfix">
                <?php
                query_posts(array('pagename' => 'program/at-a-glance', 'post_type' => 'page'));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="three-cols" style="width:25%;">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn__border">Sunday, January 24</a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php
                query_posts(array('pagename' => 'program/at-a-glance/day-one', 'post_type' => 'page'));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="three-cols" style="width:25%;">
                    <a href="<?php echo get_template_directory_uri(); ?>/program/at-a-glance/day-one" title="<?php the_title(); ?>" class="btn btn__border"><?php the_title(); ?></a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php
                query_posts(array('pagename' => 'program/at-a-glance/day-two', 'post_type' => 'page'));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="three-cols" style="width:25%;">
                    <a href="<?php echo get_template_directory_uri(); ?>/program/at-a-glance/day-two" title="<?php the_title(); ?>" class="btn btn__border active"><?php the_title(); ?></a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php
                query_posts(array('pagename' => 'program/at-a-glance/day-three', 'post_type' => 'page'));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="three-cols" style="width:25%;">
                    <a href="<?php echo get_template_directory_uri(); ?>/program/at-a-glance/day-three" title="<?php the_title(); ?>" class="btn btn__border"><?php the_title(); ?></a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>

            <?php
            query_posts(array('pagename' => 'program/at-a-glance/day-two', 'post_type' => 'page'));
            if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="days">
                <p class="days__title">
                    <span class="number">26</span>
                    <span class="month">January</span>
                    <span class="subject">Day 2</span>
                </p>
                <div class="days__content">
                    <?php the_content(); ?>
                </div><!--.days__content-->
            </div><!--.days-->
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>