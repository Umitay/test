<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

		</footer><!-- #colophon -->
	</div><!-- #page -->
Copyright © 2015-2016 ur-recipe.com - Любимые рецепты.
При копировании материалов сайта обязательно ставьте открытую для индексации ссылку ur-recipe.com.
Полное копирование статей допускается только по письменному разрешению автора этого блога. 
	<?php wp_footer(); //Получить разрешение можно по ссылке. ?>
	<script type="text/javascript">
	jQuery('#wpadminbar').css('top',parseInt(window.innerHeight-45)+'px');
	
    </script>
    	
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65206900-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>