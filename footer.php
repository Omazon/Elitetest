<?php

$footer = get_field('footer', 'options');
$contact_us = get_field('contact_us', 'options');
$find_us = get_field('find_us', 'options');
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'orderby' => 'date',
	'order' => 'DESC'
);
$latest_post = get_posts($args);

$latest_tweet = get_field('latest_tweet', 'options');
$join_facebook = get_field('join_facebook', 'options');
$google_maps = get_field('google_maps', 'options');

$about_us = get_field('about_us', 'options');
$contact_us = get_field('contact_us', 'options');
$find_us = get_field('find_us', 'options');

$facebook = get_field('facebook', 'option');
$twitter = get_field('twitter', 'option');
$linkedin = get_field('linkedin', 'option');
$google_plus = get_field('google+', 'option');


?>
<footer class="mt-16">
    <section class="container mx-auto mb-5">
        <div class="grid grid-cols-4 gap-10">
            <div>
                <h5 class="text-xl font-light mb-5">From The Blog</h5>
                <?php foreach ($latest_post as $post):?>
                <div class="grid md:grid-cols-4 mt-5">
                    <div class="col-span-1">
                        <img class="rounded max-w-20" src="<?= get_the_post_thumbnail_url($post->ID) ?>" alt="">
                    </div>
                    <div class="col-span-3">
                        <a href="" class="hover:text-sky-400"><strong><?= $post->post_title ?></strong></a>
                        <p class="italic text-neutral-400"><?= get_the_date('F d, Y', $post->ID) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div>
                <h5 class="text-xl font-light mb-5">Latest Tweets</h5>
                <?= $latest_tweet ?>
            </div>
            <div>
                <h5 class="text-xl font-light mb-5">Join Us on Facebook</h5>
                <?= $join_facebook ?>
            </div>
            <div>
                <h5 class="text-xl font-light mb-5">Google Maps</h5>
                <?= $google_maps ?>
            </div>
    </section>
    <hr>
    <section class="container mx-auto my-5">
        <div class="grid grid-cols-4">
            <div class="font-light">
                <h5 class="text-xl mb-5">About Us</h5>
                <p><?= $about_us ?></p>
            </div>
            <div class="font-light flex flex-col gap-4">
                <h5 class="text-xl mb-5">Contact Us</h5>
                <a href="tel:<?= $contact_us['phone_1'] ?>">
                    <span class="fa-stack text-xs text-purple-500" style="vertical-align: top;">
                      <i class="fa-regular fa-circle fa-stack-2x"></i>
                      <i class="fa-solid fa-phone fa-stack-1x"></i>
                    </span>
                    <span><?= $contact_us['phone_1'] ?></span>
                </a>
                <a href="tel:<?= $contact_us['phone_2'] ?>">
                    <span class="fa-stack text-xs text-purple-500" style="vertical-align: top;">
                      <i class="fa-regular fa-circle fa-stack-2x"></i>
                      <i class="fa-solid fa-phone fa-stack-1x"></i>
                    </span>
                    <span><?= $contact_us['phone_2'] ?></span>
                </a>
                <a href="mailto:<?= $contact_us['email'] ?>">
                    <span class="fa-stack text-xs text-purple-500" style="vertical-align: top;">
                      <i class="fa-regular fa-circle fa-stack-2x"></i>
                      <i class="fa-solid fa-envelope fa-stack-1x"></i>
                    </span>
                    <span><?= $contact_us['email'] ?></span>
                </a>
            </div>
            <div class="font-light">
                <h5 class="text-xl mb-5">Find Us</h5>
                <div>
                     <span class="fa-stack text-xs text-purple-500" style="vertical-align: top;">
                      <i class="fa-regular fa-circle fa-stack-2x"></i>
                      <i class="fa-solid fa-location-dot fa-stack-1x"></i>
                    </span>
                    <span>
                    <?= $find_us['address'] ?>
                    </span>
                </div>
                <a class="border hover:border-purple-500 hover:text-purple-500 inline-block p-3 mt-5" href="<?= $find_us['link_map'] ?>">Open in Google Maps</a>
            </div>
            <div class="font-light">
                <h5 class="text-xl mb-5">Stay Connected</h5>
                <div class="flex">
                    <a href="<?= $facebook ?>" class="mx-1">
                        <img class="rounded-full border-white border-2" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/facebooklogo.jpg' ?> " alt="">
                    </a>
                    <a href="<?= $twitter ?>" class="mx-1">
                        <img class="rounded-full border-white border-2" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/twitterlogo.jpg' ?> " alt="">
                    </a>
                    <a href="<?= $google_plus ?>" class="mx-1">
                        <img class="rounded-full border-white border-2" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/googlepluslogo.jpg' ?> " alt="">
                    </a>
                    <a href="<?= $linkedin ?>" class="mx-1">
                        <img class="rounded-full border-white border-2" src="<?= get_stylesheet_directory_uri() . '/includes/images/social/linkedinlogo.jpg' ?> " alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-black text-center py-5 text-white">
        <span>© <?= date('Y') ?> Morocho's Home Improvement Inc. All Rights Reserved.</span>
    </section>
</footer>
</div>


<?php wp_footer(); ?>

</body>
</html>

