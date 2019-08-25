<div class="sidebar">

    <?php if (is_active_sidebar('true_side')) : ?>
        <?php dynamic_sidebar('true_side'); ?>
    <?php endif; ?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <?php
            $categories = get_terms([
                'taxonomy' => 'category',
                'hide_empty' => false,
                'parent' => 0,
            ]);
            if ($categories) {
                ?>
                <ul class="category-list">
                    <?php foreach ($categories as $category) : ?>
                    <li class="category-list__item">
                        <a href="<?php echo get_term_link($category) ?>" class="category-list__item__link">
                            <?php echo $category->name ?></a>
                        <?php $subcategories = get_terms([
                            'taxonomy' => 'category',
                            'hide_empty' => false,
                            'parent' => $category->term_id,
                        ]);
                        if ($subcategories) {
                            echo '<ul class="category-list__inner">';
                            foreach ($subcategories as $subcategory) :
                                echo '<li class="category-list__item">
                                    <a href="' . get_term_link($subcategory) . '" class="category-list__item__link">'
                                    . $subcategory->name . '</a></li>';
                            endforeach;
                            echo '</ul>';
                        } ?>
                    <?php endforeach; ?>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>
