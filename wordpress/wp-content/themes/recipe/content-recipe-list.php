<?php
/**
 * The template for displaying posts in the Gallery post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="col-sm-6 col-lg-3" itemprop="itemListElement" >
<div class="thumbnail">
    <a href="<?php the_permalink();?>">
         
        <?php the_post_thumbnail('full','class=imgstyle itemprop="image"');?>
    </a>
    <div class="caption">
        <h3 itemprop="name"><a itemprop="url" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?> </a></h3>
        <p itemprop="summary"><?php the_excerpt();?></p>
        <p><?php the_tags();?></p>
    </div>
</div>
</div>