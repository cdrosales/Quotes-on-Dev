<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <?php wp_head(); ?> 
     <meta charset="<?php bloginfo('charset');?>">
     <script src="https://kit.fontawesome.com/c744376fb1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>> 

<header>
    <a href="<?php echo get_home_url(); ?>">
    <img src="<?php echo get_template_directory_uri() . '/assets/qod-logo.svg'; ?>" class="logo"/>
    </a>
</header>

<title><?php bloginfo('title');?></title>
