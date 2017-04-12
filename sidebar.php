<form method="get" class="form-inline" action="/blog/">
  <div class="form-group form-group-sm">
    <div class="input-group col-sm-12">
      <div class="input-group-addon"><?= _e('Search') ?></div>
      <input type="text" value="" name="s" id="s" class="form-control">
    </div>
  </div>
  <button type="submit" id="searchsubmit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
</form>

<?php 
	if ( is_active_sidebar( 'sidebar-1' ) ){ 
		dynamic_sidebar( 'sidebar-1' ); 
	}; 
 ?>
<span class="fb-like" data-href="https://www.facebook.com/PCEUROPA/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></span>

<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
