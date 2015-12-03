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
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="wrap container">
    <section class="slide-content">
        <div class="slider clearfix">
            <ul class="slide slides">
                <?php
query_posts(array(
    'post_type'=>'banner',
    'showposts'=>5,
    'order' => 'ASC'
));
if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <li class="slide--item">
                    <div class="slide--item--image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <ul class="custom-controls-container"></ul>
        </div>
        <div class="slidefade clearfix">
            <ul class="slide slides">
                <?php
query_posts(array(
    'post_type'=>'banner',
    'showposts'=>5,
    'order' => 'ASC'
));
if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <li class="slide--item">
                    <div class="slide--item--text">
                        <a href="<?php the_field('link'); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="creditos">
                        <a href="<?php the_field('link_creditos'); ?>" title="<?php the_field('creditos'); ?>"><?php the_field('creditos'); ?></a>
                    </div>
                </li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </section>
    <article>
        <?php
query_posts(array('pagename' => 'home', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title mtop">
            <h1><?php the_title(); ?></h1></div>
        <?php endwhile; endif;?>
        <div class="content">
            <?php
query_posts(array(
    'post_type'=>'resource_post_type',
    'showposts'=>1
));
if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="sidebar">
                <div class="sidebar--title">
                    <h2>Documents</h2>
                </div>
                <div class="form-search">
                    <?php get_search_form(); ?> 
                    <hr>
                    <h2>Advanced</h2>
                    <p class="lato">Author</p>
                    <div class="select">
                        <div class="select--title">Search Author</div>
                        <div class="select--items">
                            <?php
$args = array( 'hide_empty=0' );

$terms = get_terms( 'authorresource', $args );
foreach ( $terms as $term ) {
    $term_list .= '<a href="' . esc_url( get_term_link( $term ) ) . '" class="select--items--item" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a>';
}
echo $term_list;
                            ?>
                        </div>
                    </div>
                    <p class="lato">Theme</p>
                    <div class="select">
                        <div class="select--title">Search Theme</div>
                        <div class="select--items">

                            <?php
$terms_two = get_terms( 'theme-resource', $args );
foreach ( $terms_two as $term_two ) {
    $term_list_two .= '<a href="' . esc_url( get_term_link( $term_two ) ) . '" class="select--items--item" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term_two->name ) ) . '">' . $term_two->name . '</a>';
}
echo $term_list_two;
                            ?>
                        </div>
                    </div>
                </div>
            </div><!--.sidebar-->
            <?php endwhile; endif;?>
            <?php
query_posts(array('pagename' => 'home', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="content--third-cols">
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif;?>

        </div>
    </article>
</div>
<?php include 'footer.php'; ?>