<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PiedmontGlobal
 */

?>

<footer class="bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)] pt-20 text-white  overflow-hidden">
    <!-- Logo, Address, Footer Image -->
    <div class="flex flex-col md:flex-row items-start justify-between max-w-7xl mx-auto px-10 md:px-5 pt-8 gap-8">
        <!-- Logo and Address -->
        <div class="flex flex-col space-y-8 items-start">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Homepage">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/icons/pgls-federal-white-rgb.svg" ); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="h-10 object-contain md:h-16 w-auto mb-4" />
            </a>
            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed">
            1010 N. Glebe RD, STE 450 Arlington, VA 22201


            </p>

            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed">
                <a href="tel:+1 877 897 4858">
                +1 877 897 4858

                </a>
                <br>
                <a href="mailto:info@piedmontglobal.com">
                info@piedmontglobal.com

                </a>
            </p>
            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed">
                <?php
                $year = date('Y');
                echo '&copy; ' . $year . ' ' . get_bloginfo('name') . '. All rights reserved.';
                ?>
            </p>


        </div>

        <!-- Footer Image -->
        <div class="w-full md:w-auto md:flex-1 md:pl-12 ">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/footer.png'); ?>"
                alt="Footer Image" class="w-full relative left-0 md:left-[40%]" />
        </div>

    </div>
</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
</script>
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/22423917.js"></script>
</body>

</html>