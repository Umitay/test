<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="navbar third-navbar" role="navigation">
	<div class="container">
	 <div class="jumbotron">
			<h1><?php single_cat_title( '', true )?></h1>
			<div class="panel"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- jumbotron-recipe-category-h1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2604632423420713"
     data-ad-slot="3127293013"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>

<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
		</div>
	</div>
</div>
<div class="container">
<!--section ItemList-->
	 <section itemtype="http://schema.org/ItemList" itemscope="">
	  <meta itemprop="mainContentOfPage" content="true"/>
	  <meta itemprop="name" content="Рецепты категорий <?php single_cat_title( '', true )?>" />
	  <meta itemprop="itemListOrder" content="Descending" />
	  

<!-- row of columns -->

	<div class="row" >
			<?php
			if ( have_posts() ) :
				// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'recipe-list'  );

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
	</div>

<!--/row-->
		         
	</section>
<!--/section ItemList-->
</div>
	<!-- /container -->

 <?php
//get_sidebar();
get_footer();
