<?php get_header(); ?>

<div class="container">



<div class="row row-offcanvas row-offcanvas-right">

<article class="col-xs-12 col-sm-9">
<?php require_once('nav.php');?>
		<p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><?php _e( 'Sidebar' ); ?> >></span></button>
		</p>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a><br />
		<small><time datetime="DD-MM-YYYY hh:mm"><?php the_date('d-m-Y') ?> <?php the_time('G:i') ?></time>  | <?php the_category(' '); ?> </small></h2>

		<?php the_content(__('Read more...')); ?>
		<hr>
		<div class="clearfix"></div>
		<?php endwhile; else: ?>
		
			<h1><?php _e( 'Page not found' ); ?></h1>
			<?php wp_link_pages(); ?>
			<?php get_search_form(); ?>

		<?php endif; ?> 
		
		<div class="well pull-left"><?php previous_posts_link(); ?></div>
		<span class="fb-like" data-href="https://www.facebook.com/PCEUROPA/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></span>
		<div class="well pull-right" ><?php next_posts_link(); ?></div>
<hr>

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

