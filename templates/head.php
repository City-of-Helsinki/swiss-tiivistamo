<!doctype html>
<html class="no-js" <?php language_attributes();?> data-wpml=<?php
global $sitepress;
if ($sitepress->get_default_language() != ICL_LANGUAGE_CODE){
    echo $sitepress->get_current_language();
    }
?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//s3.amazonaws.com">
    <link rel="dns-prefetch" href="//use.fontawesome.com">

    <?php wp_head(); ?>

    <script>
    if (window.jQuery) {
        if(!window.$) $ = jQuery;
    }
    </script>

    <?php include(get_template_directory().'/templates/tracking.php'); ?>
</head>
<body <?php body_class(); ?>>

    <!--[if lt IE 8]>
        <div class="c-chromeframe">
            You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
        </div>
    <![endif]-->
