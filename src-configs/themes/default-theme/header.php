<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

       <header class="absolute z-10 top-[100px] left-[50%] translate-x-[-50%] w-full max-w-[834px]">
            <nav id="main-mav" class="bg-[#CDFAB3] mx-auto rounded-[32px] p-[8px_14px_8px_28px] flex justify-between items-center gap-[31px]">
                <a href="#" class="flex-initial">
                    <?php render_img_by_src(IMG_URL . 'logo-homestayplus.png') ?>
                </a>
                <ul id="primary-menu" class="flex-1 flex justify-between items-center">
                    <li><a href="#">About us </a></li>
                    <li><a href="#">Student </i></a></li>
                    <li><a href="#">Hosts </i></a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
                <div class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></div>
                <a class="bg-[#303549] text-main py-[15px] px-[12px] block rounded-[30px] min-w-[116px] text-center" href="#">
                    Contact 
                </a>
                <a href="#" class="flex items-center justify-between rounded-[30px] min-w-[116px] py-[15px] px-[12px] border border-[#303549] min-w-[88px]">
                    Login 
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

            </nav>
        </header>
        <main id="page-body">

