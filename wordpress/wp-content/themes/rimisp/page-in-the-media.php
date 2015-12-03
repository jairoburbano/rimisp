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
$page = 'press-room';
$subpage = 'in-the-media';
$type = 'page';
$title = 'In the media';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="content">
            <?php
query_posts(array(
    'post_type'=>'news_post_type',
    'tax_query'	=> array(
        array(
            'taxonomy'  => 'press-room',
            'field'     => 'slug',
            'terms'     => 'in_the_media_tax', // exclude media posts in the news-cat custom taxonomy
        ),
    ),
    'showposts'=>-1,
    'order' => 'DESC'
));
if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="item-news">
                <div class="item-news--image">
                    <a href="single.php">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <div class="item-news--text">
                    <p class="date"><?php the_date(); //the_date(j F, y); ?></p>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>