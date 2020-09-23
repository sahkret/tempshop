<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>
<body>

<header>

    <?php
    if(function_exists('the_custom_logo')){

        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);

    }
    ?>
    <img class="" src="<?php echo $logo[0] ?>" alt="logo">

    <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                //Insert ul classes for nav here - li classes go through dashboard->menus->css class
                'items_wrap' => '<ul id="" class="">%3$s</ul>'
                //a tags get no class, edit bootstrap css to .nav-item a - Icon markup goes straight into wp nav labels
            )
        )
    ?>
</header>