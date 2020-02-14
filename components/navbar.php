<nav class="uk-navbar-container uk-navbar-transparent uk-visible@l" uk-navbar uk-sticky>
    <div class="uk-navbar-center">
          <ul class="uk-navbar-nav">
            <?php  wp_nav_menu_no_ul(); ?>
          </ul>
      </div>
    </div>
</nav>


<nav class="uk-navbar uk-navbar-container uk-hidden@m" uk-sticky>
  <a class="uk-navbar-item uk-logo" href="/">
    <img  width="100px"  src="<?php bloginfo('template_url'); ?>/assets/images/logo-black.svg" alt="<?php the_title(); ?>">
  </a>
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" href="#">
          <span uk-navbar-toggle-icon uk-toggle="target: #offcanvas-overlay"></span>
        </a>
    </div>
</nav>

<div id="offcanvas-overlay" uk-offcanvas="flip: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <ul class="uk-nav uk-nav-default">
          <?php wp_nav_menu( array('theme_location' => 'mobile') ); ?>s
        </ul>
    </div>
</div>