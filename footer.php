<hr>

<footer>
	<p>&copy; Rafal Marguzewicz 2017 | <span class="fb-like" data-href="https://www.facebook.com/PCEUROPA/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></span></p>
</footer>

</div><!--/.container-->

<?php wp_footer(); ?>

<script type="text/javascript">

	  $('[data-toggle="offcanvas"]').click(function () {
		$('.row-offcanvas').toggleClass('active')
	  });


<?php include_once('piwik.php'); ?>
  
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.8&appId=1382449528492539";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>


</body>
</html>
