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




<div class="row">
	<div class="col-md-5"></div>
	<div class="col-md-6">
	
		
		
		
	<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>	
	

	</div>
	
</div>



