<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<a href="http://sunanyway.com"><button type="button" class="button white">回到首页</button></a><br/>
				<a href="http://sunanyway.com/about/">关于我</a> | 加我 ↓↓↓<br/>
				<a href="http://sunanyway.com/about/" target="_blank"><img src="/wp-content/themes/twentyeleven/images/weixin.png" /></a>
				<a href="http://weibo.com/sunanyway" target="_blank"><img src="/wp-content/themes/twentyeleven/images/weibo.png" /></a>
				<a href="http://renren.com/sunanyway" target="_blank"><img src="/wp-content/themes/twentyeleven/images/renren.png" /></a>
				<a href="http://www.douban.com/people/sunanyway/" target="_blank"><img src="/wp-content/themes/twentyeleven/images/douban.png" /></a>
				<a href="http://www.zhihu.com/people/sunanyway" target="_blank"><img src="/wp-content/themes/twentyeleven/images/zhihu.png" /></a>
				<br/>
				Powered by <a href="http://wordpress.org/" target="_blank">Wordpress</a> | Theme by <a target="_blank" href="http://sunanyway.com">Anyway</a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- jquery -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>

<!-- 导航悬浮 -->
<!-- 
<script>
$(function(){
    $(window).scroll(function(){
		if($(window).scrollTop()>=260){
			$(".access2").fadeIn();
		}else{
			$(".access2").fadeOut();
		} 
	});
})
</script>
-->

</body>
</html>