<!-- Desktop Navigation Component -->
<!-- Desktop Navigation Component -->
<header class="hidden lg:block fixed w-full top-0 z-50 transition-colors duration-300" x-data="{ 
        scrolled: false, 
        logoDefault: '<?php echo esc_url( get_template_directory_uri() . "/assets/icons/pgls-federal-white-rgb.svg" ); ?>',
        logoScrolled: '<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod("custom_logo"), "full" )[0] ); ?>'
        }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 100 })"
    :class="{ 'bg-gradient-to-b from-[#F9F8F6]/95 to-[#F9F8F6]/70 mt-0 backdrop-blur-xl shadow-[0_4px_30px_rgba(0,0,0,0.1)] text-black': scrolled }">
    <div class="max-w-7xl mx-auto py-4 px-6 lg:px-0 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home">
                <img :src="scrolled ? logoScrolled : logoDefault" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"
                    class="h-12 w-auto transition-all duration-300 hover:scale-95" />
            </a>
        </div>


        <!-- Navigation -->
        <nav class="flex items-center space-x-6 text-base font-medium transition-colors duration-300"
            :class="scrolled ? 'text-black' : 'text-white'" x-data="{ open: false }"
            @keydown.escape.window="open = false">
        



        </nav>

        <!-- CTA Button -->
        <div>
            <a href="/contact" class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-2 font-medium text-base shadow-md 
          hover:bg-[#8AB738] 
          focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] 
          transition-colors duration-500 ease-in-out">
                Request Demo
            </a>

        </div>
    </div>
</header>