<!-- da header -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="/images/atenea.jpg">

    <?php wp_head(); // this loads the stuff loaded in the kiwi_theme_styles function AKA the font and css ?>
</head>

<body>

    <header>

        <?php   // this loads the logo, dynamically
        if (function_exists('custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
        }
        ?>

        <a href="#" id="logo">
            <img src="https://espaciolaatenea.org/blog/wp-content/uploads/2020/05/Logoweb_atenea.jpg" alt="logo atenea">
        </a>

        <div class="titling">
            <div>— Espacio <div>Vecinal <div>La Atenea —</div>
                </div>
            </div>
        </div>

        <aside>
            <div class="redes">
                <div class="container">
                    <a href="https://twitter.com/espaciolaatenea">
                        <img src="https://cdn-icons-png.flaticon.com/128/733/733635.png" alt="twitter">
                    </a>
                    <a href="https://www.facebook.com/EspacioLaAtenea">
                        <img src="https://cdn-icons-png.flaticon.com/128/1384/1384005.png" alt="facebook">
                    </a>

                </div>

                <div class="container">
                    <!-- aqui los enlaces a redes sociales -->
                    <a href="https://www.instagram.com/espaciolaatenea/">
                        <img src="https://cdn-icons-png.flaticon.com/128/1384/1384031.png" alt="instagram">
                    </a>
                    <a href="mailto:hola@espaciolaatenea.org">
                        <img src="https://cdn-icons-png.flaticon.com/128/2099/2099199.png" alt="email">
                    </a>

                </div>

            </div>
        </aside>
    </header>

    <main>

        <section id="menu">
            <nav>

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => false,
                        'theme_location' => 'primary',
                        'items_wrap' => '<div>%3$s</div>'
                    )
                )
                    ?>
            </nav>