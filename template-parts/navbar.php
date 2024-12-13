<nav class="navbar navbar-expand-lg" style="background-color: #0394fc; padding-left: 15%; padding-right: 10%;">
    <div class="container-fluid">
        <!-- Site Logo -->
        <a class="navbar-brand" href="<?php echo home_url(); ?>" style="font-weight: bold; color: white;">
            <?php bloginfo( 'name' ); ?>
        </a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="text-align: left;">
                <?php
                // Dynamic WordPress menu
                wp_nav_menu( array(
                    'theme_location' => 'primary', // Register your menu location
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 2, // Limit to 2 levels
                    'fallback_cb' => false,
                    'link_before' => '<a class="nav-link" style="font-weight: bold; color: white; text-decoration: none;">', // Remove underline
                    'link_after' => '</a>',
                ) );
                ?>
            </ul>

            <!-- Search Icon on the right -->
            <!-- Search Icon aligned to the right -->
            <form class="d-flex ms-auto" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s" style="border-radius: 20px; padding-left: 10px;">
                <button class="btn btn-outline-light" type="submit" style="border-radius: 20px;">
                    <i class="bi bi-search"></i> <!-- Bootstrap search icon -->
                </button>
            </form>
        </div>
    </div>
</nav>
