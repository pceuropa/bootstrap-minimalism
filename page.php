<?php get_header(); ?>

<div class="container">
<div class="row row-offcanvas row-offcanvas-right">

<article class="col-xs-12 col-sm-9">
<?php require_once('nav.php');?>

<ol class="breadcrumb">
  <li><a href="/">PCEUROPA</a></li>
  <li><a href="<?php echo get_home_url(); ?>">Blog</a></li>
</ol>

<p class="pull-right visible-xs"><button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><?php _e( 'Sidebar'); ?></button></p>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		<div class="clearfix"></div>
		<hr>
		<?php endwhile; else: ?>
			<h1 class="entry-title"><?php _e( 'Page not found'); ?></h1>

		<div class="entry-content">
		<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'pceuropa' ); ?></p>
		<?php get_search_form(); ?>
		</div><!-- .entry-content -->

	<?php endif; ?>

	<p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><?php _e( 'Sidebar' ); ?> >></span></button>
		</p>
	<?php comments_template(); ?>

</article>
	
	<asside class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
		<div id="sidebar">
		<?php get_sidebar(); ?>
		</div>
	</asside>
</div><!--/row-offcanvas-->


</div><!--/.container-->

<?php get_footer(); ?>

</body>
</html>
