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

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(to left,
  rgba(181, 122, 85, 0.90),
  rgba(181, 122, 85, 0.3)
), url('http://mothers-day-2022.local/wp-content/uploads/2022/04/Mothers-Day-Header-Cropped.jpg') left center; background-repeat: no-repeat; background-size: cover;
 height: 60rem;">

    <div class="relative h-5/6 pt-64">
        <div class="p-4">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-7">
                    <div class="relative ">
                        <div class="content-middle-medium">
                            <h1 class="uppercase text-white text-5xl md:text-6xl font-black">Join us for mothers day at
                                Foothills
                                Church</h1>

                            <div class="inline mr-5">
                                <a href="#">
                                    <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        Join us In Maryville
                                    </button>
                                </a>
                            </div>
                            <div class="inline">
                                <a href="#">
                                    <button class="mx-auto lg:mx-0 shadow-xl uppercase bg-orange-light text-white font-black rounded-md py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        Join us In Bearden
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-5">
                    <div class="hidden md:block">
                        <div class="grid grid-cols-12">
                            <div class="col-start-2 col-span-8 bg-tan p-7 rounded-xl shadow-xl">
                                <h3 class="uppercase text-2xl font-black pb-5">TELL US WHY YOUR MOM IS THE BEST AND YOU
                                    CAN WIN your mom 3 months of flowers!</h3>
                                <?php if (have_posts()) : while (have_posts()) : the_post();
                                    the_content();
                                endwhile;
                                else: ?>
                                    <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-tan p-5 md:hidden">
        <div class="col-span-12">
            <h3 class="uppercase text-2xl font-black pb-5">TELL US WHY YOUR MOM IS THE BEST AND YOU CAN WIN your mom 3 months of flowers!</h3>
            <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>

<?php
get_footer();