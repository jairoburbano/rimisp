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
        <div class="slidefade clearfix">
            <ul class="slide slides">
                <li class="slide--item">
                    <div class="slide--item--text">
                        <a href="#" title="titulo boton">Learn about our themes</a>
                    </div>
                </li>
                <li class="slide--item">
                    <div class="slide--item--text">
                        <a href="#" title="titulo boton">Second Slide</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="slider clearfix">
            <ul class="slide slides">
                <li class="slide--item">
                    <div class="slide--item--image">
                        <img src="assets/banner.jpg" alt="Titulo banner">
                    </div>
                </li>
                <li class="slide--item">
                    <div class="slide--item--image">
                        <img src="assets/banner.jpg" alt="Titulo banner">
                    </div>
                </li>
            </ul>
            <ul class="custom-controls-container"></ul>
        </div>
    </section>
    <article>
        <div class="title"></div>
        <div class="content">
            <div class="content--half-cols">
                <p>
                    Increasing inequality is of growing global concern. This International Conference on ‘Territorial Inequality and Development’, which will be held in Puebla (Mexico) from 25th to 27th January 2016 and hosted by Rimisp - the Latin American Center for Rural Development, responds to this rising policy interest in the territorial dimensions of inequality. The Conference will bring together a diversity of invited people and of global experiences to address the importance and evolution of territorial inequality across the world. 
                </p>
            </div>
            <div class="content--half-cols">
                <p>
                    Specifically, it will review the trends, patterns and drivers of territorial inequality. It will also examine the territorial consequences of these drivers on poverty, growth, and the environment. Actions and interventions that reduce inequality created by these drivers, including how and where territorial policies and interventions from different regions in the world have been effective to date, will be shared and discussed.
                </p>
            </div>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>