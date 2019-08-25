<?php ?>
<div class="search-form-wrap">
    <form class="search-form" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="text" name="s" id="s" placeholder="Поиск..." class="search-form__input">
        <button class="search-form__btn-search" type="submit" class="submit" id="searchsubmit"><i
                    class="icon icon-search"></i></button>
    </form>
</div>
