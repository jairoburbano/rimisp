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
        <div class="content">
            <?php
query_posts(array(
    'post_type'=>'resource_post_type',
    'tax_query'	=> array(
        array(
            'taxonomy'  => 'type_post',
            'field'     => 'slug',
            'terms'     => 'in_detail_tax', // exclude media posts in the news-cat custom taxonomy
        ),
    ),
    'showposts'=>-1,
    'order' => 'DESC'
));
if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="clearfix"><!--item-resource -->
                    <div><!-- class="item-resource--title"-->
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="clearfix"><!--item-resource--text -->
                        <p><!--<span class="icon icon--author"></span>--><?php echo  get_the_term_list( $post->ID, 'authorresource') ?> </p><!-- class="item-resource--text--icon"-->
<!--                        <p class="item-resource--text--icon"><span class="icon icon--theme"></span><?php //echo  get_the_term_list( $post->ID, 'theme-resource') ?> </p>-->
                        <?php the_content(); ?>
                        <!--<div class="button">
                            <a href="<?php //the_field('paper'); ?>" title="<?php //the_field('paper__title'); ?>" class="btn btn__border" download>Download</a>
                        </div>-->
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>