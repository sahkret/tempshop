<footer class="footer">
    <?php
    wp_nav_menu(
        array(
            'menu' => 'footer',
            'container' => '',
            'theme_location' => 'footer',
            //Insert ul classes for nav here - li classes go through dashboard->menus->css class
            'items_wrap' => '<ul id="" class="menu menu__footer d-flex navbar justify-content-center">%3$s</ul>'
            //a tags get no class, edit bootstrap css to .nav-item a - Icon markup goes straight into wp nav labels
        )
    )
    ?>

    <section class="footer__contact d-flex justify-content-between">

        <!--Sad I can't do this dynamically, but change company contact here vvvvvvvvvvv-->
        <article class="footer__contact--info pt-2 pl-3">
            <h2>Kontakt</h2>
            <a href="">
                <p>Firmanavn ApS</p>
            </a>
            <a href="">
                <p>Vejnavn 42B</p>
            </a>
            <a href="">
                <p>4760 Vordingborg</p>
            </a>
            <a href="">
                <p>Danmark</p>
            </a>
            <a href="https://datacvr.virk.dk/data/index.php?language=da&q=forside">
                <p>CVR nummer: 87654321</p>
            </a>
            <a href="tel:12345678">
                <p>Mobil nr: 1234 5678</p>
            </a>
            <a href="mailto: kontakt@mail.dk">
                <p>E-mail: kontakt@mail.dk</p>
            </a>
        </article>

        <article class="footer__contact--some align-self-center">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'some',
                    'container' => '',
                    'theme_location' => 'some',
                    //Insert ul classes for nav here - li classes go through dashboard->menus->css class
                    'items_wrap' => '<ul id="" class="menu menu__some d-flex navbar">%3$s</ul>'
                    //a tags get no class, edit bootstrap css to .nav-item a - Icon markup goes straight into wp nav labels
                )
            )
            ?>
        </article>
    </section>
<?php wp_footer();?>
</footer>
</body>
</html>