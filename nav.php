<div class="container">
<nav class="navbar navbar-inverse ">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src='<?php echo get_template_directory_uri(); ?>/images/logo_small.png'></a>
    </div>
    
    <?php
		wp_nav_menu( array(
		'menu'              => 'primary',
		'theme_location'    => 'primary',
		'depth'             => 3,
		'container'         => 'div',
		'container_class'   => 'collapse navbar-collapse',
		'container_id'      => 'bs-example-navbar-collapse-1',
		'menu_class'        => 'nav navbar-nav navbar-right',
		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		'walker'            => new wp_bootstrap_navwalker())
		);
	?> 
</nav>
</div>
