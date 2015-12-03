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
$page = 'resources';
$subpage = '';
$type = 'page';
$title = 'Resources';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <div class="title clearfix">
            <h1>Resources</h1>
        </div>
        <div class="content">
            <div class="items">
                <?php
                query_posts(array(
                    'post_type'=>'resource_post_type',
                    'tax_query'	=> array(
                        array(
                            'taxonomy'  => 'type_post',
                            'field'     => 'slug',
                            'terms'     => 'resource_tax', // exclude media posts in the news-cat custom taxonomy
                        ),
                    ),
                    'showposts'=>-1,
                    'order' => 'ASC'
                ));
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="item-resource clearfix">
                    <div class="item-resource--title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="item-resource--text clearfix">
                        <p class="item-resource--text--icon"><span class="icon icon--author"></span><?php echo  get_the_term_list( $post->ID, 'authorresource') ?> </p>
                        <p class="item-resource--text--icon"><span class="icon icon--theme"></span><?php echo  get_the_term_list( $post->ID, 'theme-resource') ?> </p>
                        <?php the_content(); ?>
                        <div class="button">
                            <a href="<?php the_field('paper'); ?>" title="<?php the_field('paper__title'); ?>" class="btn btn__border" download>Download</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
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
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>