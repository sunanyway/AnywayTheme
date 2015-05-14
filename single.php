<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="info_of_post"><span class="author">Anyway</span> / <?php the_time('y-m-d') ?> / <?php the_views(); ?></div>
					
					<?php get_template_part( 'content', 'single' ); ?>
					

					<div class="single_copyright">
						除非注明，本站文章均为原创，转载请注明出处，谢谢：<br/>
						<strong>本文作者：</strong><a href="http://sunanyway.com/" target="_blank">Anyway</a><br/>
						<strong>本文地址：</strong><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank"><?php the_permalink(); ?></a>
					</div>

					<div id="wumiiDisplayDiv"></div>
					
					<!-- JiaThis Button BEGIN -->
					<div class="jiathis_style_24x24">
						<a class="jiathis_button_weixin"></a>
						<a class="jiathis_button_tsina"></a>
						<a class="jiathis_button_qzone"></a>
						<a class="jiathis_button_renren"></a>
						<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
						<a class="jiathis_counter_style"></a>
					</div>
					<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
					<!-- JiaThis Button END -->
					
					<?php comments_template( '', true ); ?>
					
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>