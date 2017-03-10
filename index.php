<?php get_header(); ?>

<div class="container">

<div class="row row-offcanvas row-offcanvas-right">

	<article class="col-xs-12 col-sm-9">

		<p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sidebar >></span></button>
		</p>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a><br />
		<small><time datetime="DD-MM-YYYY hh:mm"><?php the_date('d-m-Y') ?> <?php the_time('G:i') ?></time>  | <?php the_category(' '); ?> </small></h2>

		<?php the_content(__('(wiecej...)')); ?>
		<hr>
		<div class="clearfix"></div>
		<?php endwhile; else: ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'pceuropa' ); ?></h1>
		</header>
		<?php wp_link_pages(); ?>
		
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'pceuropa' ); ?></p>
			<?php get_search_form(); ?>
		</div>


		<?php endif; ?> 
		<?php next_posts_link(); ?><?php previous_posts_link(); ?>
		
		<p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sidebar >></span></button>
		</p>
	
	</article>
	
	
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
<?php get_sidebar(); ?>
</div><!--/span-->
</div><!--/row-->

<?php get_footer(); ?>