<?php
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$facebook = get_field('facebook', 'option');
$twitter = get_field('twitter', 'option');
$linkedin = get_field('linkedin', 'option');
$google_plus = get_field('google+', 'option');
$logo = get_field('logo', 'option');
$locations = get_nav_menu_locations();
$menu_items = wp_get_nav_menu_items( $locations[ 'header-menu' ] );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
   <header>
       <span class="bg-gradient-to-r from-purple-800 to-teal-400 block h-1"></span>
       <div class="bg-black py-2">
           <div class="container mx-auto">
               <div class="grid grid-cols-2">
                   <div>
                       <a href="tel:<?= $phone ?>" class="text-white mr-5">
                       <span class="fa-stack text-xs" style="vertical-align: top;">
                          <i class="fa-regular fa-circle fa-stack-2x"></i>
                          <i class="fa-solid fa-phone fa-stack-1x"></i>
                        </span>
                           <span><?= $phone ?></span>
                       </a>
                       <a href="mailto:<?= $email ?>" class="text-white">
                       <span class="fa-stack text-xs" style="vertical-align: top;">
                          <i class="fa-regular fa-circle fa-stack-2x"></i>
                          <i class="fa-solid fa-envelope fa-stack-1x"></i>
                        </span>
                        <span><?= $email ?></span>
                       </a>
                   </div>
                   <div class="flex justify-end">
                       <a href="<?= $facebook ?>" class="mx-1">
                           <img class="rounded-full border-white border-2 h-6" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/facebooklogo.jpg' ?> " alt="">
                       </a>
                       <a href="<?= $twitter ?>" class="mx-1">
                           <img class="rounded-full border-white border-2 h-6" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/twitterlogo.jpg' ?> " alt="">
                       </a>
                       <a href="<?= $google_plus ?>" class="mx-1">
                           <img class="rounded-full border-white border-2 h-6" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/googlepluslogo.jpg' ?> " alt="">
                       </a>
                       <a href="<?= $linkedin ?>" class="mx-1">
                           <img class="rounded-full border-white border-2 h-6" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/linkedinlogo.jpg' ?> " alt="">
                       </a>
                   </div>
               </div>
           </div>
       </div>
       <div>
           <div class="container mx-auto py-3">
               <div class="grid grid-cols-12">
                   <div class="col-span-3">
                       <img class="h-14" src="<?= $logo['url'];?>" alt="<?= $logo['alt']; ?>">
                   </div>
                   <div class="col-span-9">
                       <ul class="flex justify-end h-full items-center font-light">
                       <?php
                       foreach ( (array) $menu_items as $key => $menu_item ):
                                if($menu_item->menu_item_parent == 0):
                       ?>
	                       <li x-data="{ open: false }" @mouseover="open = true" @mouseover.away="open = false">
                               <a class="text-lg px-5 py-6 hover:text-sky-400 hover:border-b-2 border-sky-400" href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a>
                               <ul x-show="open" class="absolute top-36 z-10">
                                   <?php foreach ( (array) $menu_items as $key => $sub_menu_item ): ?>
                                   <?php if($menu_item->ID == $sub_menu_item->menu_item_parent):?>
                                       <li class="text-lg px-5 hover:text-sky-400 bg-white text-black py-2.5 w-72 border-b"><a class="<?= $sub_menu_item->url ?>" href=""><?= $sub_menu_item->title ?></a></li>
                                   <?php endif;endforeach; ?>
                               </ul>
                           </li>
                       <?php endif;endforeach; ?>
                       </ul>
                   </div>
               </div>
           </div>
       </div>

   </header>
