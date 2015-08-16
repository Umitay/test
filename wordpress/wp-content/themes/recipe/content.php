<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
$category = get_the_category(); 
?>

    <div id="item" itemtype="http://schema.org/Recipe" itemscope="">
		<meta itemprop="recipeCategory" content="<?php echo $category[0]->cat_name;?>">
		<meta itemprop="description" content="<?php echo get_the_excerpt();?>">
		<meta itemprop="dateModified" content="<?php the_time('Y-m-j');?>">
		<div class="page-header"><h1 itemprop="name"><?php the_title();?></h1></div>
		
		<!-- row -->		 
		<div class="row">
		  <div class="col-xs-6 col-md-4">
		  <div class="thumbnail" id="output_field" style="height: 180px; background-color:#F1FCEC;" itemprop="image"> 
		     <?php the_post_thumbnail('full');?>	</div>
		<script src="https://apis.google.com/js/plusone.js"></script>
		<g:plus action="share"></g:plus>
		  </div>
		  <div class="col-xs-6 col-md-8">
		 	<div><?php echo get_the_excerpt();?></div>
		 	<?php $custom_fields = get_post_custom();?>
		 	<?php if(isset($custom_fields['totalTime'])){
		 	$totalTime = str_ireplace(" мин", "M", $custom_fields['totalTime'][0]);
		 	
		 	$totalTime = str_ireplace(" часа", "H", $custom_fields['totalTime'][0]);
		 		?>
		  	<div>Время приготовления: <time itemprop="totalTime" content="PT<?=$totalTime?>"><?=$custom_fields['totalTime'][0]?></time></div>
		 	<?php }?>
		 	<?php if(isset($custom_fields['recipeYield'])){?>
		 	<div>Количество порций: <span itemprop="recipeYield" content="<?=$custom_fields['recipeYield'][0]?>" ><?=$custom_fields['recipeYield'][0]?></span></div>
		 	<?php }?>
		 	<div><?php the_tags( ); ?></div>
		 	<div>Категорий: <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></div>
			<div>Опубликовано:  <time datetime="<?php the_time('Y-m-j');?>" itemprop="datePublished"><?php the_time('j.m.Y');?></time></div>
		 	<div itemprop="author" itemscope="" itemtype="http://schema.org/Person">
		 	Автор:  		<a href="//plus.google.com/u/0/110204310495545191121"><span itemprop="name">Умитай Турдыкулова</span></a>
     		</div>
			
		 </div>
		</div>
		<!-- / row -->
		<div class="bg-warning ads"></div>
		<!--  row -->
		<div class="row">
				<div class="col-xs-6 col-md-8">
					<div>
						<h2>Как приготовить</h2>
						<div itemprop="recipeInstructions">
						<?php the_content(); ?>
						</div>
					</div>
				</div>
				  <div class="col-xs-6 col-md-4">
					<div itemprop="ingredients">
						<h2>Ингредиенты</h2>
						 <?php if(isset($custom_fields['ingredients']) && !empty($custom_fields['ingredients'])){
						 	  	foreach ($custom_fields['ingredients'] as $ingredient){
						 	  	 	$e = explode(":", $ingredient);
						 	  	 ?>
							      <div class="row" itemprop="recipeIngredient">
								      <div class="col-xs-6 col-md-7"><?php echo $e[0]?>:</div>
								      <div class="col-xs-6 col-md-5"><?php echo $e[1]?> </div>
								   </div> 
						  <?php  } 
						 	 } ?>
						
					</div>
				</div>
			
		</div>
		<!-- / row -->
	</div>
	<!-- /itemscope  -->
