<form action="<?php echo home_url('/'); ?>" method="get">
    <input type="text" class="form-control" autocomplete="off"  placeholder="<?php _e("جستجو در سایت ...", "wpbootstrap"); ?>" value="<?php the_search_query(); ?>" name="s">
    <div class="input-group-append">
        <button class="search-btn-bottom" type="submit">
            <i class="fa fa-search"></i><?php _e("", "wpbootstrap"); ?>
        </button>
    </div>
</form>