
<?php
$terms = get_terms("authorresource");
$count = count($terms);
$letter = 'A';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>A</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'B';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>B</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'C';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>C</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'D';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>D</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'E';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>E</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'F';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>F</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'G';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>G</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'H';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>H</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'I';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>I</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'J';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>J</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'K';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>K</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'L';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>L</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'M';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>M</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'N';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>N</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'O';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>O</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'P';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>P</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'Q';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>Q</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'R';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>R</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'S';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>S</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'T';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>T</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'U';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>U</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'V';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>V</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'W';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>W</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'X';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>X</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'Y';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>Y</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
$letter = 'Z';
if ( $count > 0 ){
    $ul = "<div class='letter-dropdown'><span class='letter-dropdown-button'>Z</span><ul class='letter-dropdown-list'>";
    foreach ( $terms as $term ) {
        if ( preg_match("/^$letter/i",$term->name) ) {
            echo $ul;
            $ul = '';  // only display once
            echo '<li><a href="' . get_term_link($term) . '">'. $term->name . '</a></li>';
        }
    }
    if ( $ul == '') {
        echo "</ul></div>";
    }
}
?>