<?php get_header(); ?>

<div class="container">

<div class="row row-offcanvas row-offcanvas-right">

<div class="col-xs-12 col-sm-9">
<p class="pull-right visible-xs">
	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
</p>
<article>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>

	<dl class="dl-horizontal">
		<dt class="text-muted"><?php _e( 'Author'); ?>: </dt><dd><?php the_author(); ?></dd>
		<dt class="text-muted"><?php _e( 'Published'); ?>:</dt> <dd><time datetime="DD-MM-YYYY hh:mm"><?php the_date('d-m-Y') ?> <?php the_time('G:i') ?></time></dd>
		<dt class="text-muted"><?php _e( 'Categories'); ?>:</dt><dd><?php the_category(' &bull; '); ?> </footer></dd>
		<dt class="text-muted"><?php _e( 'Tags'); ?>:</dt><dd><?php the_tags('',' • ','<br />'); ?> </footer></dd>
		
	</dl>

	<hr />
	<?php the_content(); ?>
	<div class="clearfix"></div>
	<hr>

	<?php endwhile; else: ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'pceuropa' ); ?></h1>
	</header>

	<div class="entry-content">
	<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'pceuropa' ); ?></p>
	<?php get_search_form(); ?>
	</div><!-- .entry-content -->


	<?php endif; ?>
</article>

<?php comments_template(); ?>

</div>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
<?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>
