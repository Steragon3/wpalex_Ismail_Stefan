<header>
    <div class="navbar" id="navbar">
        <div class="logo">Alex Mayer</div>

        <nav>
            <button id="burger-button" class="hamburger hamburger--squeeze" type="button"
            aria-label="Menu" aria-controls="menu-header-menu" aria-expanded="false">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <?php

            wp_nav_menu( array( 'theme_location' => 'main-navigation' ) );

            $post = get_post();
            $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
            $hero_text = get_post_custom_values("heading")[0];
            ?>
            <!-- <ul id ="navigation" class="nav-links">
                <li><a href="#"><span class="active">Start</span></a></li>
                <li><a href="#leistungen"><span>Leistungen</span></a></li>
                <li><a href="#"><span>Blog</span></a></li>
                <li><a href="#"><span>Über </span>mich</a></li>
                <li><a href="#"><span>Kontakt</span></a></li>
            </ul> -->
        </nav>
    </div>
    <section class="hero" style="background: url('<?php echo $thumb; ?>'); background-size: cover;">
        <div>
            <h1>
                <mark><?= $hero_text; ?></mark>
            </h1>
            <button class="hero-btn">Angebot einholen</button>
        </div>
    </section>
</header>