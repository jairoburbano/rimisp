<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
   <input type="hidden" name="post_type" value="resource_post_type" />
    <div class="input-group">
        <input type="text" placeholder="Search" name="s">
    </div>
    <div class="input-group">
        <input type="submit" value="Search" class="search">
        <span class="icon icon--search"></span>
    </div>
</form>