<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Mama_Llama
 * @since 1.0.0
 */

get_header(); ?>


    <div class="bg-no-repeat bg-scroll bg-cover relative background-size" style="background: linear-gradient(to left,
            rgba(181, 122, 85, 0.90),
            rgba(181, 122, 85, 0.4)
            ), url('<?php the_field('header_background'); ?>') left center; background-repeat: no-repeat; background-size: cover;">
        <div class="xl:grid xl:grid-cols-12 mx-20 ">
            <div class="xl:col-span-6">
                <div class="content-middle-small-only text-white text-left p-5 xl:pt-72">
                    <h1 class="uppercase text-white text-5xl md:text-6xl font-black"><?php the_field('main_title'); ?></h1>
                </div>
            </div>

            <div class="hidden xl:block xl:col-span-6 bg-tan my-10 p-10 rounded-xl shadow-xl">
                <h3 class="uppercase text-4xl font-black "><?php the_field('form_title'); ?></h3>
                <p class="pb-5"><?php the_field('form_subtitle'); ?></p>
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="bg-tan p-5 xl:hidden">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-start-2 md:col-span-7">
                <h3 class="uppercase text-2xl font-black "><?php the_field('form_title'); ?></h3>
                <p class="pb-5"><?php the_field('form_subtitle'); ?></p>
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Show for mobile ONLY -->
    <div class="bg-no-repeat bg-scroll bg-cover relative md:hidden" style="background: linear-gradient(to left,
            rgba(226, 218, 199, 0.40),
            rgba(226, 218, 199, 0.40)
            ), url('<?php the_field('flowers_background'); ?>') left center; background-repeat: no-repeat; background-size: cover;
            ">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 p-5 my-20 text-white">
                <h2 class="uppercase text-4xl md:text-6xl font-black"><?php the_field('photo_booth_title'); ?></h2>
                <p class="text-lg"><?php the_field('photo_booth_description'); ?></p>

                <?php if (have_rows('service_1')): ?>
                    <?php while (have_rows('service_1')): the_row(); ?>
                        <div class="inline mr-5">
                            <?php if (get_sub_field('button_link')): ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('service_2')): ?>
                    <?php while (have_rows('service_2')): the_row(); ?>
                        <div class="inline mr-5">
                            <?php if (get_sub_field('button_link')): ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('service_3')): ?>
                    <?php while (have_rows('service_3')): the_row(); ?>
                        <div class="inline mr-5">
                            <?php if (get_sub_field('button_link')): ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('service_4')): ?>
                    <?php while (have_rows('service_4')): the_row(); ?>
                        <div class="inline mr-5">
                            <?php if (get_sub_field('button_link')): ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- Show for tablet UP -->
    <div class="bg-no-repeat bg-scroll bg-cover relative hidden md:block" style="background: linear-gradient(to left,
            rgba(226, 218, 199, 0.90),
            rgba(226, 218, 199, 0.90)
            ), url('<?php the_field('flowers_background'); ?>') left center; background-repeat: no-repeat; background-size: cover;
            ">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 p-5 my-20 text-black">
                    <h2 class="uppercase text-4xl md:text-6xl font-black"><?php the_field('photo_booth_title'); ?></h2>
                    <p class="text-lg"><?php the_field('photo_booth_description'); ?></p>
                    <?php if (have_rows('service_1')): ?>
                        <?php while (have_rows('service_1')): the_row(); ?>
                            <div class="inline mr-5">
                                <?php if (get_sub_field('button_link')): ?>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('service_2')): ?>
                        <?php while (have_rows('service_2')): the_row(); ?>
                            <div class="inline mr-5">
                                <?php if (get_sub_field('button_link')): ?>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('service_3')): ?>
                        <?php while (have_rows('service_3')): the_row(); ?>
                            <div class="inline mr-5">
                                <?php if (get_sub_field('button_link')): ?>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('service_3')): ?>
                        <?php while (have_rows('service_4')): the_row(); ?>
                            <div class="inline mr-5">
                                <?php if (get_sub_field('button_link')): ?>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();