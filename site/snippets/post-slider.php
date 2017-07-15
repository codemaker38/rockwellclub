<?php if ($slider = $post->children()->filterBy('title', 'Slider')->first()) { ?>
    <div class="post-slider post-slider">
    <?php foreach ($slider->children()->visible() as $slide) { ?>
        <div class="post-slider__item">
            <img class="post-slider__img" src="<?php echo $slide->photo()->toFile()->url(); ?>">
        </div>
    <?php } ?>
    </div>
<?php } ?>