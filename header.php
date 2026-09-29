<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!---
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css/destyle.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    --->
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <div class="inner">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <div class="gnav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url(home_url('/About/')); ?>">About</a></li>
                    <li><a href="<?php echo esc_url(home_url('/Contact/')); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>