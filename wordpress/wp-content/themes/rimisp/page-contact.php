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
$page = 'contact';
$subpage = '';
$type = 'page';
$title = 'Contact';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <?php
query_posts(array('pagename' => 'contact', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="banner">
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_field('link_banner'); ?>" title="<?php the_field('creditos_banner'); ?>"><?php the_field('creditos_banner'); ?></a>
        </div>
        <div class="content-text">
            <?php the_content(); ?>
        </div>
        <div class="content contact">
            <div class="three-cols contact">
                <div class="content-cols clearfix">
                    <div class="content-cols--half">
                        <strong>Conference Agenda and Papers</strong>
                        <p style="margin:0;">Julio Berdegué</p>
                        <p>Felicity Proctor</p>
                        <a href="mailto:conference@rimisp.org" title="contact us">conference@rimisp.org</a>
                    </div>
                </div>
            </div>
            <div class="three-cols contact">
                <div class="content-cols clearfix">
                    <div class="content-cols--half">
                        <strong>Organization and Logistics Coordinator</strong>
                        <p>Alicia Athié</p>
                        <a href="tel:+5215528930584" title="Contact Us">+52 1 55 2893 0584</a>
                        <a href="mailto:mexconf@rimisp.org" title="contact us">mexconf@rimisp.org</a>
                    </div>
                </div>
            </div>
            <div class="three-cols contact">
                <div class="content-cols clearfix">
                    <div class="content-cols--half">
                        <strong>Media Partnership and Press</strong>
                        <p>Marta Ramón</p>
                        <a href="tel:+56222364557" title="Contact Us">+56 2 2236 4557</a>
                        <a href="mailto:mramon@rimisp.org" title="contact us">mramon@rimisp.org</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </article>
</div>
<?php include 'footer.php'; ?>