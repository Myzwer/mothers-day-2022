<?php
/**
 * Template Name: Photos
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Mama_Llama
 * @since 1.0.0
 */

get_header(); ?>

    <!-- Start Header-->
    <div class="bg-no-repeat bg-scroll bg-cover relative background-size" style="background: linear-gradient(to left,
            rgba(181, 122, 85, 0.90),
            rgba(181, 122, 85, 0.4)
            ), url('<?php the_field('header_background'); ?>') center top; background-repeat: no-repeat; background-size: cover; height: 70vh;">
        <div class="visible text-left relative pt-10 px-3 z-5">

            <h1 class=" pt-24 uppercase text-white text-4xl lg:text-8xl font-black leading-ish"><?php the_field('header_title'); ?></h1>
            <p class="capitalize text-white font-bold text-lg lg:text-2xl pr-10"><?php the_field('header_subtitle'); ?></p>
            <a href="/">
                <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md md:my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Back to Homepage
                </button>
            </a>
        </div>
    </div>
    <!-- End Header -->

    <div class="bg-white">
        <div class="p-4 md:p-10 lg:max-w-4xl lg:text-center lg:mx-auto max-w-2xl">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 p-5">
                    <h2 class="text-2xl text-center mb-2 uppercase"><?php the_field('instructions_title'); ?></h2>
                </div>

                <div class="col-span-12 md:col-span-6 mb-7">
                    <h3 class="text-4xl mb-5 text-center mx-2">1</h3>
                    <hr>
                    <h4 class="text-2xl mt-3 capitalize text-center md:text-left mx-2 font-black"><?php the_field('step_1_title'); ?></h4>
                    <p class="mx-2 text-center md:text-left"><?php the_field('step_1_description'); ?></p>
                </div>

                <div class="col-span-12 md:col-span-6 mb-7">
                    <h3 class="text-4xl mb-5 text-center mx-2">2</h3>
                    <hr>
                    <h4 class="text-2xl mt-3 capitalize text-center md:text-left mx-2 font-black"><?php the_field('step_2_title'); ?></h4>
                    <p class="mx-2 text-center md:text-left"><?php the_field('step_2_description'); ?></p>
                    <div class="mx-2 text-left text-3xl">
                        <a href="https://www.facebook.com/foothillschurchTN" aria-label="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/foothillschurchtn/?hl=en" aria-label="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="text-center text-xl font-bold"><?php the_field('available'); ?></h3>
        <div class="tab">
            <div class="p-4 md:p-10 lg:max-w-6xl lg:text-center lg:mx-auto max-w-2xl">
                <div class="grid grid-cols-12 gap-4">
                    <?php
                    // Start the Repeater Loop
                    if (have_rows('photos')):
                        // Card Start
                        // Begin looping data
                        while (have_rows('photos')) : the_row();
                            ?>
                            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                <img class="shadow-lg" src="<?php the_sub_field('image'); ?>"
                                     alt="Mother's Day at Foothills Church Familly Photo">
                                <a href="<?php the_sub_field('image'); ?>" download>
                                    <div class="text-left pt-2"><i class="fas fa-download"></i> Click to Download</div>
                                </a>
                            </div>
                        <?php
                        endwhile;
                    else :
                        ?>
                    <?php
                    endif;
                    ?>

                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="/">
                <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md md:my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Back to Homepage
                </button>
            </a>
        </div>
    </div>


<?php
get_footer();
