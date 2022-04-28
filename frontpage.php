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
 height: 80vh;">
        <div class="content-middle text-white text-left p-5">
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

    <div class="bg-tan p-5 md:hidden">
        <div class="col-span-12">
            <h3 class="uppercase text-2xl font-black ">Win your mom 3 months of free flowers!</h3>
            <p class="pb-5">Fill out the form below and tell us why your mom is the best and you can win her 2 months
                worth of fresh flowers from a place!</p>
            <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(to left,
  rgba(226, 218, 199, 0.40),
  rgba(226, 218, 199, 0.40)
), url('http://mothers-day-2022.local/wp-content/uploads/2022/04/Mothers-Day-Background.jpg') left center; background-repeat: no-repeat; background-size: cover;
">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 p-5 my-20 text-white">
                <h2 class="uppercase text-4xl md:text-6xl font-black">Mother's Day Photo Booth</h2>
                <p class = "text-lg">Do you need the perfect family photo this for Mother’s Day? Sunday, May 8th we’re excited to offer a special photo booth staffed by one of our photographers so your family can take a picture with mom. Check this website the following day to download your family photo.</p>
            </div>
        </div>
<?php
get_footer();