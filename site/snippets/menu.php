<ul class="header-menu">
    <?php foreach ($site->children()->visible() as $child) { ?>
        <li class="header-menu__item">
            <a href="<?php echo $child->url(); ?>" class="header-menu__link <?php echo $child->slug() == $page->slug() ? 'header-menu__link--active' : ''; ?>"><?php echo $child->title(); ?></a>
        </li>
    <?php } ?>
</ul>