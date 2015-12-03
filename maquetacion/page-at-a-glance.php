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
$title = 'At a glance';
include 'header.php'; ?>
<div class="wrap container">
    <article>
        <div class="title clearfix">
            <h1>At a glance</h1>
        </div>
        <div class="content clearfix">
           <div class="custom-button clearfix">
               <div class="three-cols">
                   <a href="#" title="Day One" class="btn btn__border">Day One</a>
               </div>
               <div class="three-cols">
                   <a href="#" title="Day Two" class="btn btn__border">Day Two</a>
               </div>
               <div class="three-cols">
                   <a href="#" title="Day Three" class="btn btn__border">Day Three</a>
               </div>
           </div>
            <table class="glance" cellpadding="0" cellspacing="0">
                <tr>
                    <th>Schedule</th>
                    <th>Activity</th>
                </tr>
                <tr>
                    <td>09:00</td>
                    <td>Activity one</td>
                </tr>
                <tr>
                    <td>10:00</td>
                    <td>Activity two</td>
                </tr>
                <tr>
                    <td>09:00</td>
                    <td>Activity one</td>
                </tr>
                <tr>
                    <td>10:00</td>
                    <td>Activity two</td>
                </tr>
            </table>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>