<?php if ($image) { ?>
    <section class="banner" style="background-image: url('<?php echo $image; ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner__content">
                        <h1 class="banner__title"><?php echo $title; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>