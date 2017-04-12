<form class="form-inline" action="/blog/">
	<div class="row">
	  <div class="col-xs-8 padding-right-2">
		<input type="text" value="" name="s" id="s" class="form-control" placeholder="<?= _e('Search') ?>">
	  </div>
	  <div class="col-xs-2 padding-left-2">
		<button type="submit" id="searchsubmit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>  
	  </div>

	</div>
</form>


<?php 
	if ( is_active_sidebar( 'sidebar-1' ) ){ 
		dynamic_sidebar( 'sidebar-1' ); 
	}; 
 ?>



<script src="https://buttons.github.io/buttons.js" /></script>



<div class="row">
	<div class="col-md-5"><img class='img-thumbnail' src='<?php echo get_template_directory_uri(); ?>/images/doktorproblem.jpg'></div>
	<div class="col-md-6">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="L3ARU95826FXU">
		<button name="submit" type="submit" class="btn btn-info">Donate <?php _e( 'Author'); ?></button>
	</form>
		<a aria-label="Follow @pceuropa on GitHub" data-count-aria-label="# followers on GitHub" data-count-api="/users/pceuropa#followers" data-count-href="/pceuropa/followers" href="https://github.com/pceuropa" class="github-button">Follow @pceuropa</a>
	<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>	
	

	</div>
	
</div>

<span class="fb-like" data-href="https://www.facebook.com/PCEUROPA/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></span>


