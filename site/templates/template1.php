<?php snippet('header'); ?>

<?php echo snippet('breadcrumbs'); ?>

<div class="post-lightbox">
    <div class="post-lightbox-close post-lightbox-close--right">Close (x)</div>
    <div class="post-lightbox-content">
        <div class="container"></div>
    </div>
</div>
<main class="main template1">
    <h1 class="heading"><?php echo $page->title(); ?></h1>

    <div class="container">
    <?php
    if ($page->children()->visible()->count() > 0) {
        foreach ($page->children()->visible() as $post) {
    ?>
        <div class="post">
            <div class="row">
                <div class="col-md-7">
                    <?php snippet('post-slider', ['post' => $post]); ?>
                </div>
                <div class="col-md-5">
                    <div class="post-content">
                        <div class="post-content__title"><?php echo $post->title(); ?></div>
                        <div class="post-content__description"><?php echo $post->description()->kirbytext(); ?></div>
                        <a class="btn post-content__btn"><?php echo $post->popup_btn(); ?></a>
                        <div class="post-content__text">
                            <?php echo $post->details()->kirbytext(); ?>
                        </div>
                        <div class="post-content__popup">
                            <div class="post-lightbox__title"><?php echo $post->title(); ?></div>
                            <?php
                            if ($post->popup_items()->isNotEmpty()) {
                                $popup_items = [];
                                foreach ($post->popup_items()->toStructure() as $item) {
                                    isset($popup_items[$item->popup_category()->value]) || $popup_items[$item->popup_category()->value] = [];
                                    $popup_items[$item->popup_category()->value][] = [
                                        'title'    => $item->popup_title()->value,
                                        'subtitle' => $item->popup_subtitle()->value,
                                    ];
                                }
                            ?>
                                <div class="post-lightbox-menu">
                                    <?php foreach ($popup_items as $item_key => $item_val) { ?>
                                        <div class="post-lightbox-menu__heading"><?php echo $item_key; ?></div>
                                        <div class="row">
                                            <?php foreach ($item_val as $val) { ?>
                                                <div class="col-md-4">
                                                    <div class="post-lightbox-menu__text">
                                                        <?php echo $val['title']; ?>
                                                        <small><?php echo $val['subtitle']; ?></small>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>

        <?php if ($page->banner_photo()->isNotEmpty()) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="template1-banner">
                        <img src="<?php echo url('resources/images/banner.jpg'); ?>" alt="" class="events-banner__img">
                        <div class="template1-banner-content">
                            <div class="template1-banner-content__title"><?php echo $page->banner_title(); ?></div>
                            <div class="template1-banner-content__description"><?php echo $page->banner_description()->kirbytext(); ?></div>
                            <a href="<?php echo $page->banner_link(); ?>" class="btn template1-banner-content__btn"><?php echo $page->banner_btn(); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<?php snippet('footer'); ?>