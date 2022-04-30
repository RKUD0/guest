<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <link href ="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href ="<?php echo get_template_directory_uri(); ?>/css/res-style.css" rel="stylesheet" >
    <link href ="<?php echo get_template_directory_uri(); ?>/test.css" rel="stylesheet" >


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css" type="text/css" media="all" />
<?php
wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
wp_enqueue_script('jquery');
wp_head();
?>
<script src="https://kit.fontawesome.com/00ba366826.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();?>
    <div class="header">
        <div class="slide" id="makeImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/topimg.jpg "   alt="">
            <img class="topimg2" src="<?php echo get_template_directory_uri(); ?>/assets/img/topimg2.jpg "    alt="">
        </div>
        <div class="slide-txt">
            Guest
        </div>
</div>


<div class="main-head">
            <div class="main-head-name">
                <div class="slide-txt2">
                    <a href="<?php echo home_url(); ?>">株式会社Guest</a> 
                </div>
            </div>
            <div class="main-head-nav">
                <ul>
                    <a href="<?php echo get_page_link( 7 );?>"> <li>お問い合わせ</li></a>
                </ul>
            </div>

</div>
