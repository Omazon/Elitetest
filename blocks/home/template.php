<?php

$welcome_title = get_field('welcome_title');
$welcome_subtitle = get_field('welcome_subtitle');

$welcome_section_1_title = get_field('welcome_section_1_title');
$welcome_section_1_image = get_field('welcome_section_1_image');
$welcome_section_1_text = get_field('welcome_section_1_text');

$welcome_section_2_title = get_field('welcome_section_2_title');
$welcome_section_2_image = get_field('welcome_section_2_image');
$welcome_section_2_text = get_field('welcome_section_2_text');

$welcome_section_3_title = get_field('welcome_section_3_title');
$welcome_section_3_image = get_field('welcome_section_3_image');
$welcome_section_3_text = get_field('welcome_section_3_text');

$our_service_title = get_field('our_service_title');
$our_service_subtitle = get_field('our_service_subtitle');
$services = get_field('services');

$works_title = get_field('works_title');
$works_subtitle = get_field('works_subtitle');
$works_images = get_field('works_images');

$portfolio_title = get_field('portfolio_title');
$portfolio_subtitle = get_field('portfolio_subtitle');
$portfolio_images = get_field('portfolio_images');

$call_to_action_phone = get_field('phone', 'option');
$call_to_action_text = get_field('call_to_action_text');

if(is_admin()):
    echo '<img src="'.get_stylesheet_directory_uri().'/includes/images/elitetest.png">';
else:
?>
 <section id="welcome" class="container mx-auto my-16">
     <div class="text-neutral-700 font-light text-center" data-aos="fade-right">
         <h3 class="text-4xl">Welcome to Morocho's Home Improvement Inc.</h3>
         <p>Morocho's Home Improvement Inc. offers Affordable Excellence in Home Remodeling</p>
     </div>
     <div class="items-center justify-center">
     <div x-data="{ openTab: 1 }" class="p-8">
         <div class="max-w-6xl mx-auto">
             <div class="mb-4 flex max-w-md mx-auto">
                 <button x-on:click="openTab = 1" :class="{ 'bg-sky-400 text-white': openTab === 1 }" class="border border-r-0 rounded-l flex-1 py-2 px-4 focus:outline-none focus:shadow-outline-blue transition-all duration-300"><?= $welcome_section_1_title ?></button>
                 <button x-on:click="openTab = 2" :class="{ 'bg-sky-400 text-white': openTab === 2 }" class="border flex-1 py-2 px-4 focus:outline-none focus:shadow-outline-blue transition-all duration-300"><?= $welcome_section_2_title ?></button>
                 <button x-on:click="openTab = 3" :class="{ 'bg-sky-400 text-white': openTab === 3 }" class="border border-l-0 rounded-r flex-1 py-2 px-4 focus:outline-none focus:shadow-outline-blue transition-all duration-300"><?= $welcome_section_3_title ?></button>
             </div>

             <div x-show="openTab === 1" class="transition-all duration-300">
                 <div class="grid md:grid-cols-2 gap-5">
                     <img src="<?= $welcome_section_1_image ?>" class="rounded" alt="">
                     <div class="text-gray-700">
                         <?= $welcome_section_1_text ?>
                     </div>
                 </div>
             </div>

             <div x-show="openTab === 2" class="transition-all duration-300">
                 <div class="grid md:grid-cols-2 gap-5">
                     <div class="text-gray-700">
                         <?= $welcome_section_2_text ?>
                     </div>
                     <img src="<?= $welcome_section_2_image ?>" class="rounded" alt="">
                 </div>
             </div>

             <div x-show="openTab === 3" class="transition-all duration-300 ">
                 <div class="grid md:grid-cols-2 gap-5">
                     <img src="<?= $welcome_section_3_image ?>" class="rounded" alt="">
                     <div class="text-gray-70">
                         <?= $welcome_section_3_text ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </section>
<section id="services" class="py-16 bg-no-repeat bg-cover bg-fixed" style="background-image:url('<?php echo get_stylesheet_directory_uri() . '/includes/images/image_bg_1.png'?>');">
    <div class="container mx-auto rounded-md bg-black p-3 text-white">
        <h3 class="text-center text-4xl" data-aos="fade-up"><?= $our_service_title ?></h3>
        <p class="text-center" data-aos="fade-down"><?= $our_service_subtitle ?></p>
        <div class="grid grid-cols-4 gap-5 mt-7">
            <?php foreach ($services as $service): ?>
            <div data-aos="fade-in">
                <div class="flex">
                    <div>
                        <span class="fa-stack text-2xl mx-3 text-purple-500" style="vertical-align: top;">
                          <i class="fa-regular fa-circle fa-stack-2x"></i>
                          <i class="fa-solid fa-screwdriver-wrench fa-stack-1x"></i>
                        </span>
                    </div>
                    <div>
                        <h6 class="text-2xl">
                            <?= $service['title'] ?>
                        </h6>
                        <?= $service['content'] ?>
                        <a href="<?= $service['link'] ?>">
                            Read more
                            <span class="fa-stack text-xs mx-2 text-white font-light" style="vertical-align: top;">
                              <i class="fa-regular fa-circle fa-stack-2x"></i>
                              <i class="fa-solid fa-chevron-right fa-stack-1x"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="latest" class="mt-16">
    <div class="text-neutral-700 font-light text-center container mx-auto">
        <h3 class="text-4xl" data-aos="fade-up"><?= $works_title ?></h3>
        <p class="py-3" data-aos="fade-down"><?= $works_subtitle ?></p>
        <div class="owl-carousel latest-carousel">
            <?php foreach ($works_images as $image): ?>
            <div class="relative">
                <div class="absolute bg-black opacity-0 hover:opacity-50 w-full h-full transition-opacity flex justify-center items-center">
                    <a href="<?= $image['image'] ?>" data-lightbox="latest">
                        <span class="fa-stack text-2xl mx-2 text-white" style="vertical-align: top;">
                          <i class="fa-regular fa-circle fa-stack-2x"></i>
                          <i class="fa-solid fa-plus fa-stack-1x"></i>
                        </span>
                    </a>
                    <a href="<?= $image['link'] ?>">
                        <span class="fa-stack text-2xl mx-2 text-white" style="vertical-align: top;">
                          <i class="fa-regular fa-circle fa-stack-2x"></i>
                          <i class="fa-solid fa-link fa-stack-1x"></i>
                        </span>
                    </a>
                </div>
                <img class="rounded" src="<?= $image['image'] ?>" alt="">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="portfolio" class="mt-16 bg-indigo-800 py-16">
    <div class="text-white font-light text-center container mx-auto">
        <h3 class="text-4xl" data-aos="fade-right"><?= $portfolio_title ?></h3>
        <p class="py-3" data-aos="fade-left"><?= $portfolio_subtitle ?></p>
        <div class="owl-carousel portfolio-carousel">
            <div class="grid grid-cols-3 gap-10">
		        <?php
		        $counter =1;
                $total = 1;
		        $lastIndex = count($portfolio_images);
		        foreach ($portfolio_images as $image):?>
                    <img class="rounded" src="<?= $image['image'] ?>" alt="">
			        <?php
			        if($counter == 6){
				        if($total != $lastIndex){
					        echo '</div>
                          <div class="grid grid-cols-3 gap-10">';
				        }
				        $counter = 0;
			        }
			        $counter++;
                    $total++;
		        endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="my-16">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-12 gap-10 items-center">
            <div class="col-span-9">
                <h3 class="text-4xl font-light" data-aos="zoom-in"><?= $call_to_action_text ?></h3>
            </div>
            <div class="col-span-3">
                <a href="tel:<?= $call_to_action_phone ?>" class="text-lg text-white font-light bg-green-500 border border-green-500 hover:bg-white hover:text-green-500 p-5 rounded transition-all" data-aos="zoom-out"><?= $call_to_action_phone ?></a>
            </div>
        </div>
    </div>
</section>
<span class="bg-gradient-to-r from-purple-800 to-teal-400 block h-1"></span>
<?php endif;?>