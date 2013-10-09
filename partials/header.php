<?php echo $this->doctypeDeclaration(); ?>
<html<?php echo $this->htmlAttributes(); ?>>
<head>
    <title>scenic_photo</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <?php
    $site->addCss(BASE_URL.LIBRARY_DIR.'js/colorbox/themes/5/colorbox.css');
    $site->addCss(BASE_URL.THEME_DIR.THEME.'/ip_content.css');
    $site->addCss(BASE_URL.THEME_DIR.THEME.'/theme.css');
    echo $site->generateHead();
    ?>
</head>
<body>
<div class="main">
    <header>
        <div class="logo_container">
            <div class="logo_text">
                <h1><?php
                    echo $this->generateManagedLogo();
                    ?></h1>
                <h2><?php
                    echo $this->generateManagedString('slogan','h2','Simple. Contemporary. Website Template');
                    ?></h2>
            </div>
        </div>
        <nav>
            <div class="menu_container">
                <?php
                echo $this->generateMenu('top', 'menu1');
                ?>
            </div>
            <div class="clear"><!-- --></div>
        </nav>
    </header>