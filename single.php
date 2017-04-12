<?php get_header(); ?>

<div class="container">
<div class="row row-offcanvas row-offcanvas-right">

<article class="col-xs-12 col-sm-9">
<?php require_once('nav.php');?>

<ol class="breadcrumb">
  <li><a href="/">PCEUROPA</a></li>
  <li><a href="<?php echo get_home_url(); ?>">Blog</a></li>
  <li><?= categoryLink() ?></li>
  <li class="active"><?php _e( 'Post'); ?></li>
</ol>

<p class="pull-right visible-xs"><button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><?php _e( 'Sidebar'); ?></button></p>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
			<b><?php _e( 'Author'); ?></b>: <?php the_author(); ?> <br/>
			<b><?php _e( 'Published'); ?></b>:<time datetime="DD-MM-YYYY hh:mm"><?php the_date('d-m-Y') ?> <?php the_time('G:i') ?></time><br/>
			<b><?php _e( 'Categories'); ?></b>:<?php the_category(' &bull; '); ?> <br/>
			<b><?php _e( 'Tags'); ?></b>:<?php the_tags('',' • ','<br />'); ?> <br/>

		<hr />
		<?php the_content(); ?>
		<div class="clearfix"></div>
		<hr>

		<?php endwhile; else: ?>
		
			<h1 class="entry-title"><?php _e( 'Page not found'); ?></h1>
			<?php get_search_form(); ?>

	<?php endif; ?>

	<p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><?php _e( 'Sidebar' ); ?> >></button>
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
