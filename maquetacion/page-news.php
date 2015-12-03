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
$subpage = 'news';
$type = 'page';
$title = 'News';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <div class="title clearfix">
            <h1>News</h1>
        </div>
        <div class="content">
            <div class="item-news">
                <div class="item-news--image">
                    <a href="single.php">
                        <img src="assets/banner.jpg" alt="Titulo">
                    </a>
                </div>
                <div class="item-news--text">
                   <p class="date">21 August, 2015</p>
                    <h2><a href="single.php">Name of Activity one</a></h2>
                    <p>
                        Nullam efficitur libero ac metus tempus tincidunt. Pellentesque aliquet, ante sed tempus gravida, nibh enim bibendum ligula, ultrices dapibus diam nunc quis leo. Proin vitae aliquet mauris. Proin et tempor magna. Nam quis volutpat libero…
                    </p>
                </div>
            </div>
            <div class="item-news">
                <div class="item-news--image">
                    <a href="single.php">
                        <img src="assets/banner.jpg" alt="Titulo">
                    </a>
                </div>
                <div class="item-news--text">
                   <p class="date">21 August, 2015</p>
                    <h2><a href="single.php">Name of Activity one</a></h2>
                    <p>
                        Nullam efficitur libero ac metus tempus tincidunt. Pellentesque aliquet, ante sed tempus gravida, nibh enim bibendum ligula, ultrices dapibus diam nunc quis leo. Proin vitae aliquet mauris. Proin et tempor magna. Nam quis volutpat libero…
                    </p>
                </div>
            </div>
            <div class="item-news">
                <div class="item-news--image">
                    <a href="single.php">
                        <img src="assets/banner.jpg" alt="Titulo">
                    </a>
                </div>
                <div class="item-news--text">
                   <p class="date">21 August, 2015</p>
                    <h2><a href="single.php">Name of Activity one</a></h2>
                    <p>
                        Nullam efficitur libero ac metus tempus tincidunt. Pellentesque aliquet, ante sed tempus gravida, nibh enim bibendum ligula, ultrices dapibus diam nunc quis leo. Proin vitae aliquet mauris. Proin et tempor magna. Nam quis volutpat libero…
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>