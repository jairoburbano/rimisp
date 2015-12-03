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
$page = 'travel';
$subpage = 'accommodation';
$type = 'page';
$title = 'Accommodation';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <?php
query_posts(array('pagename' => 'accommodation', 'post_type' => 'page'));
if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="title clearfix">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="banner">
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_field('link_banner'); ?>" title="<?php the_field('creditos_banner'); ?>"><?php the_field('creditos_banner'); ?></a>
        </div>
        <div class="content">
            <?php the_content(); ?>
            <div id="map"></div>
            <div class="center" style="text-align:center;width: 300px;float: left;margin: auto;">
                <p>
                    Address:
                </p>
                <p>
                    Quinta Real Puebla hotel<br />
                    Calle 7 poniente 105<br />
                    72000 Colonia Puebla Centro<br />
                    Puebla, México<br />
                    +52 222 229 0909<br />
                    For more information, see <a href="http://www.quintareal.com/the-collection/puebla-en" title="Quinta Real" target="_blank">here</a>.</p>
            </div>
            <img class="alignright" src="<?php echo get_template_directory_uri(); ?>/img/hotel_def.jpg" alt="Hotel">
            <hr>
            <?php the_field('accommodation-content'); ?>
        </div>
        <?php endwhile; endif; ?>
    </article>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(19.042590, -98.200711);
        var thisLatlng = new google.maps.LatLng(19.042590, -98.200711);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        //var image = '<?php echo get_template_directory_uri(); ?>/img/marker.svg'; //imagen del marcador
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map
            //icon: image
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>