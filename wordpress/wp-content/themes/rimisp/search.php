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
$page = 'search';
$subpage = '';
$type = 'page';
$title = 'Search';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <div class="title clearfix">
            <h1><?php _e( 'Under Resources', 'locale' ); ?>: "<?php the_search_query(); ?>"</h1>
        </div>
        <div class="content">
            <div class="content-letter">
                <?php include 'letters.php'; ?>
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
            <div class="items">
                <?php
                if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="item-resource clearfix">
                    <div class="item-resource--title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="item-resource--text clearfix">
                        <p class="item-resource--text--icon"><span class="icon icon--author"></span><?php echo  get_the_term_list( $post->ID, 'authorresource') ?> </p>
                        <p class="item-resource--text--icon"><span class="icon icon--theme"></span><?php echo  get_the_term_list( $post->ID, 'theme-resource') ?> </p>
                        <div class="button">
                            <a href="<?php the_field('paper'); ?>" title="<?php the_field('paper_title'); ?>" class="btn btn__border" download>Download</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>