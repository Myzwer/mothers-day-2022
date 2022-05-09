<?php
/**
 * Template Name: Privacy Policy
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Mama_Llama
 * @since 1.0.0
 */

get_header(); ?>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
  rgba(0, 0, 0, 0.45),
  rgba(0, 0, 0, 0.45)
), url('https://images.unsplash.com/photo-1552861067-ada40cee5c8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1752&q=80') center center;
 height: 60vh;">
        <div class="content-middle text-white text-center">
            <h1 class="text-5xl mb-5">PRIVACY POLICY</h1>
        </div>
    </div>


    <div class="m-4 md:m-10 lg:max-w-4xl lg:mx-auto privacy-policy ">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 p-5">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>


<?php get_footer();
