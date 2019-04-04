<nav class="l-gnav c-gnav">
    <input type="checkbox" id="is-gnav-label" class="c-humberger__input">
    <label for="is-gnav-label" class="l-gnav__humberger c-humberger">
        <span class="c-humberger__line c-humberger__line--1"></span>
        <span class="c-humberger__line c-humberger__line--2"></span>
        <span class="c-humberger__line c-humberger__line--3"></span>
    </label>

    <div class="l-gnav__menu c-gnav__menu">
        <div class="c-gnav__items">
            <?php wp_nav_menu( array(
                'theme_location' => 'gnav',
                'container'      => '',
                'menu_class'     => 'c-gnav__item',
                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
            ) ); ?>

            <?php wp_nav_menu( array(
                'theme_location' => 'snsnav',
                'container'      => '',
                'menu_class'     => 'l-gnav__footer c-gnav__footer',
                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
            ) ); ?>
        </div>
    </div>
</nav>