<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
$post = get_post(318); 
?>

<div class="container">
	 <div class="jumbotron">
			<h1><?php echo $post->post_title?></h1>
			<div class="panel">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- jumbotron-recipe-hp-h1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2604632423420713"
     data-ad-slot="9173826618"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
			</div>
			<?php  echo $post->post_content?>

		
		</div>


<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
<!--section ItemList-->
	 <section itemtype="http://schema.org/ItemList" itemscope="">
	  <meta itemprop="mainContentOfPage" content="true"/>
	  
	  <h2 itemprop="name">Все рецепты блюд</h2>
	  <meta itemprop="itemListOrder" content="Descending" />
	  

<!-- row of columns -->
	

		<?php
			$i=0;
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

				if($i == 0){
					echo '<div class="row" >';
				}
				
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					
					get_template_part( 'content', 'recipe-list'  );
					++$i;
					if($i>3){
					
						$i=0;
						echo '</div>';
					}
				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>


<!--/row-->
		         
	</section>
<!--/section ItemList-->
</div>
	<!-- /container -->

 <?php
//get_sidebar();
get_footer();
