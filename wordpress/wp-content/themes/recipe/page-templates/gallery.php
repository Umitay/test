<?php
/**
 * Template Name:  Gallery Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage recipe
 * @since recipe
 */

get_header(); ?>

<div class="container">


<?php 
$media_query = new WP_Query(
    array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
    )
);
$i=0;
foreach ($media_query->posts as $post) {
	
if($i == 0){
					echo '<div class="row" >';
				}
  echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                    <img class="img-responsive" src="'.wp_get_attachment_url($post->ID).'" alt="'.$post->post_title.'">
                
            </div>';
 
++$i;
					if($i>3){
					
						$i=0;
						echo '</div>';
					}
}
		
			?>

	</div>
	
<?php
get_footer();
