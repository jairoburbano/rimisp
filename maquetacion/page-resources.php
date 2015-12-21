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
                <div class="item-resource clearfix">
                    <div class="item-resource--title">
                        <h2>Example One</h2>
                    </div>
                    <div class="item-resource--text clearfix">
                        <p class="item-resource--text--icon"><a href="#" title="Titulo">Author</a></p>
                        <div class="button">
                            <a href="#" title="Title documente" class="btn btn__border">Download</a>
                        </div>
                    </div>
                </div>
                <div class="item-resource clearfix">
                    <div class="item-resource--title">
                        <h2>Example One</h2>
                    </div>
                    <div class="item-resource--text clearfix">
                        <p class="item-resource--text--icon"><span class="icon icon--author"></span>Author</p>
                        <p class="item-resource--text--icon"><span class="icon icon--theme"></span>Theme</p>
                        <p>
                            Nullam efficitur libero ac metus tempus tincidunt. Pellentesque aliquet, ante sed tempus gravida, nibh enim bibendum ligula, ultrices dapibus diam nunc quis leo. Proin vitae aliquet mauris. Proin et tempor magna. Nam quis volutpat libero…
                        </p>
                        <div class="button">
                            <a href="#" title="Title documente" class="btn btn__border">Download</a>
                        </div>
                    </div>
                </div>
                <div class="item-resource clearfix">
                    <div class="item-resource--title">
                        <h2>Example One</h2>
                    </div>
                    <div class="item-resource--text clearfix">
                        <p class="item-resource--text--icon"><span class="icon icon--author"></span>Author</p>
                        <p class="item-resource--text--icon"><span class="icon icon--theme"></span>Theme</p>
                        <p>
                            Nullam efficitur libero ac metus tempus tincidunt. Pellentesque aliquet, ante sed tempus gravida, nibh enim bibendum ligula, ultrices dapibus diam nunc quis leo. Proin vitae aliquet mauris. Proin et tempor magna. Nam quis volutpat libero…
                        </p>
                        <div class="button">
                            <a href="#" title="Title documente" class="btn btn__border">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar--title">
                    <h2>Search <span class="icon icon--search"></span></h2>
                </div>
                <div class="form-search">
                    <form action="">
                        <div class="input-group">
                            <input type="text" placeholder="Seach">
                        </div>
                        <div class="input-group">
                            <input type="submit" value="Seach" class="search">
                        </div>
                    </form>
                    <hr>
                    <h2>Advanced</h2>
                    <p class="lato">Author</p>
                    <div class="select">
                        <div class="select--title">Search Author</div>
                        <div class="select--items">
                            <a href="#" title="Author 1" class="select--items--item">Author 1</a>
                            <a href="#" title="Author 1" class="select--items--item">Author 2</a>
                            <a href="#" title="Author 1" class="select--items--item">Author 3</a>
                        </div>
                    </div>
                    <p class="lato">Theme</p>
                    <div class="select">
                        <div class="select--title">Search Theme</div>
                        <div class="select--items">
                            <a href="#" title="Author 1" class="select--items--item">Theme 1</a>
                            <a href="#" title="Author 1" class="select--items--item">Theme 2</a>
                            <a href="#" title="Author 1" class="select--items--item">Theme 3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<?php include 'footer.php'; ?>