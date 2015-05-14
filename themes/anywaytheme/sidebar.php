<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
		
			<aside id="archives" class="widget">
				<h3 class="widget-title">加我</h3>
				<ul>
					<a href="http://sunanyway.com/?p=901" target="_blank"><img src="/wp-content/themes/twentyeleven/images/weixin.png" /></a>
					<a href="http://463169754.qzone.qq.com" target="_blank"><img src="/wp-content/themes/twentyeleven/images/qq.png" /></a>
					<a href="http://weibo.com/sunanyway" target="_blank"><img src="/wp-content/themes/twentyeleven/images/weibo.png" /></a>
					<a href="http://renren.com/sunanyway" target="_blank"><img src="/wp-content/themes/twentyeleven/images/renren.png" /></a>
					<a href="http://www.douban.com/people/sunanyway/" target="_blank"><img src="/wp-content/themes/twentyeleven/images/douban.png" /></a>
					<a href="http://www.zhihu.com/people/sunanyway" target="_blank"><img src="/wp-content/themes/twentyeleven/images/zhihu.png" /></a>
				</ul>
			</aside>
		
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	
				<!--
				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>
				-->
				
				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>