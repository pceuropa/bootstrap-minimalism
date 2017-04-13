<footer class="footer">
      <div class="container">
      <div class="row">
      	<div class="col-md-5">
      	
      	
      	<div class="row">
      		<div class="col-md-4 text-center"><img class='img-thumbnail img-responsive' src='<?php echo get_template_directory_uri(); ?>/images/doktorproblem.jpg'><b>Rafal Marguzewicz</b></div>
      		<div class="col-md-6">
      		
      			<?= _e('Aktywista dla poprawy warunków na Świecie i w Polsce. Wspieram Open Source, Free Software i wiele innych.') ?> 
      			<br>
      			<a aria-label="Follow @pceuropa on GitHub" data-count-aria-label="# followers on GitHub" data-count-api="/users/pceuropa#followers" data-count-href="/pceuropa/followers" href="https://github.com/pceuropa" class="github-button">Follow @pceuropa</a>
      				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="L3ARU95826FXU">
		<button name="submit" type="submit" class="btn btn-info">Donate <?php _e( 'Author'); ?></button>
	</form>
      		</div>
      	</div>
      	
      	</div>
      	<div class="col-md-4"><div class="fb-page" data-href="https://www.facebook.com/PCEUROPA/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/PCEUROPA/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PCEUROPA/">PCEUROPA</a></blockquote></div></div>
      	<div class="col-md-3"></div>
      </div>
      
      </div>
</footer>
    
    
<?php wp_footer(); ?>

<script type="text/javascript">

	  $('[data-toggle="offcanvas"]').click(function () {
		$('.row-offcanvas').toggleClass('active')
	  });


<?php include_once('piwik.php'); ?>
  


</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=178615965992310";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="https://buttons.github.io/buttons.js" /></script>
