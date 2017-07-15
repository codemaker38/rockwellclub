<?php
$title       = $page->title()->html() . ' - ' . $site->title()->html();
$description = $site->description()->html();
$image       = '';
?>

<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html(); ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">
    <meta property="og:url" content="<?php echo url::current(); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="og:site_name" content="<?php echo $site->title()->html(); ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:image:alt" content="<?php echo $title; ?>">
    <meta name="twitter:site" content="@LifeSciencePhil">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Lusitana:400,700|Yrsa:400,600" rel="stylesheet">
    <?php echo css('assets/css/app.css?v=' . rand()) ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
    var BASE_URL = '<?php echo $site->url(); ?>',
    SLUG         = '<?php echo $page->slug(); ?>';
    </script>
</head>

<body>
    <div class="lightbox">
        <div class="lightbox-close">Close (x)</div>
        <div class="lightbox-content">
            <div class="lightbox-placeholder"></div>
            <form action="" class="form lightbox-form">
                <h2 class="lightbox-form__heading">Member Log In</h2>
                <div class="form-group">
                    <input type="text" name="login_email" id="login_email" class="form-control lightbox-form__input" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="login_password" id="login_password" class="form-control lightbox-form__input" placeholder="Password">
                </div>
                <div class="form-group">
                    <button class="btn">LOG IN</button>
                </div>
            </form>
        </div>
    </div>
    <header class="header">
        <div class="visible-md visible-lg header-login">
            <div class="container">
                <a href="" class="header-login__link">Member Log In</a>
            </div>
        </div>
        <a href="<?php echo url(); ?>" class="header-logo">
            <img src="<?php echo $site->logo()->toFile()->url(); ?>" alt="" class="header-logo__img">
        </a>
        <?php snippet('menu'); ?>
    </header>

