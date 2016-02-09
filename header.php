<?php 
$postid = get_the_ID();

if ( $postid == '145' ) { 

/** MOBILE VERSION **/
if ( wp_is_mobile() && $postid == 145 ) {
echo file_get_contents('http://lifeunfold.com/m'); 
exit();
}
/** MOBILE VERSION **/

}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" >
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

	<?php if ( ! function_exists( '_wp_render_title_tag' ) ) { function theme_slug_render_title() { ?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php } add_action( 'wp_head', 'theme_slug_render_title' ); } ?>

	<?php if(get_option('mvp_favicon')) { ?><link rel="shortcut icon" href="<?php echo esc_url(get_option('mvp_favicon')); ?>" /><?php } ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumb' ); ?>
	<meta property="og:image" content="<?php echo esc_url( $thumb['0'] ); ?>" />
	<?php } ?>

	<?php if ( is_single() ) { ?>
	<meta property="og:type" content="article" />
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<meta property="og:description" content="<?php global $post; echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	<link rel="author" href="<?php the_author_meta('googleplus'); ?>"/>
<?php endwhile; endif; ?>
<?php } else { ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php } ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
	<script>
/**
* Function that tracks a click on an outbound link in Google Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label.
*/
var trackOutboundLink = function(url) {
	ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
		function () {
			document.location = url;
		}
	});
}
</script>

<?php 
$postid = get_the_ID();

if ( $postid == '9815' ) { 
echo "<style>.foot-soc{display:none !important;}</style>";
} 
?>
<style>
#site, .main-nav-drop, .fly-but-wrap}
</style>
<!--<script type='text/javascript' src='http://pl157190.puhtml.com/77/73/e4/7773e4b5a30060d0f893be6d7be26545.js'></script>-->
</head>

<body <?php body_class(''); ?>>




	<!-- Facebook plugin -->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Facebook plugin close-->

	<div id="site" style="top:0 !important">
		<?php get_template_part('fly-menu'); ?>
		<div id="site-out">
			<div id="site-in">
			</div><!--site-in-->
			<div id="site-fixed">
				<header>
					<div id="main-nav-wrap">
						<div class="main-nav-out">
							<div class="main-nav-in">
								<div id="main-nav-contain" class="relative">
									<div class="main-nav-contain-out">
										<div id="main-nav-logo" class="left relative">
											<?php if(get_option('mvp_logo')) { ?>
											<a itemprop="url" href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_option('mvp_logo_small')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
											<?php } else { ?>
											<?php $mvp_skin_layout = get_option('mvp_skin_layout'); if ($mvp_skin_layout == "Entertainment") { ?>
											<a itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-small-alt.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
											<?php } else { ?>
											<a itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-small.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
											<?php } ?>
											<?php } ?>
											<?php if( is_home() || is_page_template('page-home.php') ) { ?>
											<h1 class="home-header"><?php bloginfo( 'name' ); ?></h1>
											<?php } ?>
										</div><!--main-nav-logo-->
										<div class="main-nav-contain-in">
											<div id="main-nav-right" class="left relative">
												<?php if(get_option('mvp_nav_layout') == 'Trending Topics') { ?>
												<?php get_template_part('trending'); ?>
												<?php } else { ?>
												<div class="small-nav-wrap" class="left relative">
													<?php wp_nav_menu(array('theme_location' => 'nav-menu')); ?>
												</div><!--small-nav-wrap-->
												<?php } ?>
											</div><!--main-nav-right-->
										</div><!--main-nav-contain-in-->
									</div><!--main-nav-contain-out-->
								</div><!--main-nav-contain-->
							</div><!--main-nav-in-->
						</div><!--main-nav-out-->
					</div><!--main-nav-wrap-->
				</header>
				<div id="content-out" class="relative">
					<div id="content-in" class="relative">
						<?php if ( is_page_template('page-home.php') ) { ?>
						<?php $mvp_feat_posts = get_option('mvp_feat_posts'); if ($mvp_feat_posts == "true") { ?>
						<div id="head-main-top" class="left relative">
							<?php $mvp_feat_layout = get_option('mvp_feat_layout'); if( $mvp_feat_layout == "Featured 2" ) { ?>
							<div id="feat-main2" class="left relative">
								<?php 
								/*global $post; $tmp_post = $post; $feat_main_query = get_posts(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '1' )); foreach( $feat_main_query as $post ) : setup_postdata($post); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) {*/
									/*random796 'orderby' => 'rand'*/
									global $post; $tmp_post = $post; $feat_main_query = get_posts(array('cat' => '796', 'posts_per_page' => '1' )); foreach( $feat_main_query as $post ) : setup_postdata($post); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
									<div class="feat-main2-img left relative">
									    <?php /*$queryStr = $_SERVER['QUERY_STRING']; 
                                          if ( $queryStr == '220' ) {
										?>
										<img  srcset="http://lifeunfold.com/wp-content/uploads/2015/12/featured_.jpg" src="http://lifeunfold.com/wp-content/uploads/2015/12/featured_.jpg" class="unlazy reg-img wp-post-image" alt="life_wall_winter" sizes="(max-width: 2560px) 100vw, 2560px" height="1600" width="2560">
										<?php } */?>
										<?php /*if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
										<?php the_post_thumbnail('', array( 'class' => 'unlazy reg-img' )); ?>
										<?php the_post_thumbnail('post-thumb', array( 'class' => 'unlazy mob-img' )); ?>
										<?php } */?>
<img srcset="http://lifeunfold.com/wp-content/uploads/2015/12/featured_.jpg" src="http://lifeunfold.com/wp-content/uploads/2015/12/featured_.jpg" class="unlazy reg-img wp-post-image" alt="life_wall_winter" sizes="(max-width: 2560px) 100vw, 2560px" height="1600" width="2560">
									</div><!--feat-main2-img-->
									<div class="feat-main2-nav">
										<div class="sec-marg-out relative">
											<div class="sec-marg-in">
												<div class="head-main-out">
													<div class="feat-logo-wrap left relative" itemscope itemtype="http://schema.org/Organization">
														<?php if(get_option('mvp_logo')) { ?>
														<a  itemprop="url" href="<?php echo home_url(); ?>"><img class="change_cur" itemprop="logo" src="<?php echo esc_url(get_option('mvp_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>

														<?php } else { ?>
														<?php $mvp_skin_layout = get_option('mvp_skin_layout'); if ($mvp_skin_layout == "Entertainment") { ?>
														<a itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-large2-alt.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
														<?php } else { ?>
														<a itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-large2.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
														<?php } ?>
														<?php } ?>
													</div><!--feat-logo-wrap-->
													<div class="head-main-in">
														<div class="feat-nav-right left relative">
															<?php if(get_option('mvp_nav_layout') == 'Trending Topics') { ?>
															<?php get_template_part('trending'); ?>
															<?php } else { ?>
															<div class="small-nav-wrap" class="left relative">
																<?php wp_nav_menu(array('theme_location' => 'nav-menu')); ?>
															</div><!--small-nav-wrap-->
															<?php } ?>
														</div><!--feat-nav-right-->
													</div><!--head-main-in-->
												</div><!--head-main-out-->
											</div><!--sec-marg-in-->
										</div><!--sec-marg-out-->
									</div><!--feat-main2-nav-->
									<div class="feat-main2-text">
										<div class="sec-marg-out relative">
											<div class="sec-marg-in">
												<?php /*global $post; $tmp_post = $post; $feat_main_query = get_posts(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '1' )); foreach( $feat_main_query as $post ) : setup_postdata($post); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) {*/

													global $post; $tmp_post = $post; $feat_main_query = get_posts(array( 'cat' => '796', 'posts_per_page' => '1' )); foreach( $feat_main_query as $post ) : setup_postdata($post); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { 
														?>
													<!--<a href="<?php the_permalink(); ?>" rel="bookmark">
													<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
														<h2><?php echo get_post_meta($post->ID, "mvp_featured_headline", true); ?></h2>
													<?php else: ?>
														<h2 class="standard-headline"><?php the_title(); ?></h2>
													<?php endif; ?>
													<p><?php echo excerpt(13); ?></p>
												</a>-->
												<?php } endforeach; wp_reset_postdata(); $post = $tmp_post; ?>
												<span class="latest_text" style="margin-bottom: -15px !important;border-color: #51C8EF !important;text-align: center;width: 155px;">Latest Articles</a></span>
												<div class="feat-sub2-wrap left relative">

													<?php if (isset($do_not_duplicate)) { global $post; $tmp_post = $post; $feat_sub = get_posts(array('cat' => '-796','posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate )); foreach( $feat_sub as $post ) : setup_postdata($post); ?>
													<div class="feat-sub2 left relative">
														<div class="feat-sub2-out">
															<a href="<?php the_permalink(); ?>" rel="bookmark">
																<div class="feat-sub2-img left relative">
																	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
																	<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy' )); ?>
																	<?php } ?>
																</div><!--feat-sub2-img-->
																<div class="feat-sub2-in">
																	<div class="feat-sub2-text left realtive">
																		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo substr(the_title('', '', FALSE), 0, 33); ?>...</a>
																		<span style="float: left; display: block; position: absolute; bottom: 0;"><a style="color: rgb(255, 255, 255); font-size: 0.65em;font-style: italic;"><?php the_author();?></a>  
																		</span>
																</div><!--feat-sub2-text-->
															</div><!--feat-sub2-in-->
														</a>
													</div><!--feat-sub2-out-->
												</div><!--feat-sub2-->
												
											<?php endforeach; $post = $tmp_post; } ?>
											<?php echo do_shortcode('[lifevideoss]'); ?>
										</div><!--feat-sub2-->
									</div><!--sec-marg-in-->
								</div><!--sec-marg-out-->
							</div><!--feat-main2-text-->
							<?php } endforeach; wp_reset_postdata(); $post = $tmp_post; ?>
						</div><!--feat-main2-->
						<?php } else { ?>
						<div id="feat-main1" class="left relative">
							<div class="sec-marg-out relative">
								<div class="sec-marg-in">
									<div class="head-main-out">
										<div class="head-left-wrap left relative">
											<div id="main-logo-wrap" class="left relative" itemscope itemtype="http://schema.org/Organization">
												<?php if(get_option('mvp_logo')) { ?>
												<a itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo esc_url(get_option('mvp_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
												<?php } else { ?>
												<?php $mvp_skin_layout = get_option('mvp_skin_layout'); if ($mvp_skin_layout == "Entertainment") { ?>
												<a itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-large2-alt.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
												<?php } else { ?>
												<a itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-large.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
												<?php } ?>
												<?php } ?>
											</div><!--main-logo-wrap-->
											<div class="head-latest-wrap left relative">
												<span class="head-latest-head left"><?php echo get_option('mvp_latest_head'); ?></span>
												<?php if(get_option('mvp_featured_ad')) { ?>
												<ul class="head-latest-list left relative">
													<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '3'  )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
													<?php } endwhile; wp_reset_postdata(); ?>
													<?php if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); ?>
													<li>
														<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
														<a href="<?php the_permalink(); ?>" rel="bookmark">
															<div class="head-latest-out">
																<div class="head-latest-img left relative">
																	<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy')); ?>
																</div><!--head-latest-img-->
																<div class="head-latest-in">
																	<div class="head-latest-text left relative">
																		<h2><?php the_title(); ?></h2>
																		<p><?php echo excerpt(10); ?></p>
																	</div><!--head-latest-text-->
																</div><!--head-latest-in-->
															</div><!--head-latest-out-->
														</a>
														<?php } else { ?>
														<a href="<?php the_permalink(); ?>" rel="bookmark">
															<div class="head-latest-text left relative">
																<h2><?php the_title(); ?></h2>
																<p><?php echo excerpt(10); ?></p>
															</div><!--head-latest-text-->
														</a>
														<?php } ?>
													</li>
												<?php endwhile; wp_reset_postdata(); } else { ?>
												<?php $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); ?>
												<li>
													<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
													<a href="<?php the_permalink(); ?>" rel="bookmark">
														<div class="head-latest-out">
															<div class="head-latest-img left relative">
																<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy')); ?>
															</div><!--head-latest-img-->
															<div class="head-latest-in">
																<div class="head-latest-text left relative">
																	<h2><?php the_title(); ?></h2>
																	<p><?php echo excerpt(10); ?></p>
																</div><!--head-latest-text-->
															</div><!--head-latest-in-->
														</div><!--head-latest-out-->
													</a>
													<?php } else { ?>
													<a href="<?php the_permalink(); ?>" rel="bookmark">
														<div class="head-latest-text left relative">
															<h2><?php the_title(); ?></h2>
															<p><?php echo excerpt(10); ?></p>
														</div><!--head-latest-text-->
													</a>
													<?php } ?>
												</li>
											<?php endwhile; wp_reset_postdata(); } ?>
										</ul>
										<?php } else { ?>
										<ul class="head-latest-list left relative">
											<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '4'  )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
											<?php } endwhile; wp_reset_postdata(); ?>
											<?php if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); ?>
											<li>
												<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<a href="<?php the_permalink(); ?>" rel="bookmark">
													<div class="head-latest-out">
														<div class="head-latest-img left relative">
															<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy')); ?>
														</div><!--head-latest-img-->
														<div class="head-latest-in">
															<div class="head-latest-text left relative">
																<h2><?php the_title(); ?></h2>
																<p><?php echo excerpt(10); ?></p>
															</div><!--head-latest-text-->
														</div><!--head-latest-in-->
													</div><!--head-latest-out-->
												</a>
												<?php } else { ?>
												<a href="<?php the_permalink(); ?>" rel="bookmark">
													<div class="head-latest-text left relative">
														<h2><?php the_title(); ?></h2>
														<p><?php echo excerpt(10); ?></p>
													</div><!--head-latest-text-->
												</a>
												<?php } ?>
											</li>
										<?php endwhile; wp_reset_postdata(); } else { ?>
										<?php $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); ?>
										<li>
											<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
											<a href="<?php the_permalink(); ?>" rel="bookmark">
												<div class="head-latest-out">
													<div class="head-latest-img left relative">
														<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy')); ?>
													</div><!--head-latest-img-->
													<div class="head-latest-in">
														<div class="head-latest-text left relative">
															<h2><?php the_title(); ?></h2>
															<p><?php echo excerpt(10); ?></p>
														</div><!--head-latest-text-->
													</div><!--head-latest-in-->
												</div><!--head-latest-out-->
											</a>
											<?php } else { ?>
											<a href="<?php the_permalink(); ?>" rel="bookmark">
												<div class="head-latest-text left relative">
													<h2><?php the_title(); ?></h2>
													<p><?php echo excerpt(10); ?></p>
												</div><!--head-latest-text-->
											</a>
											<?php } ?>
										</li>
									<?php endwhile; wp_reset_postdata(); } ?>
								</ul>
								<?php } ?>
							</div><!--head-latest-wrap-->
							<div class="head-latest-scroll">
								<span><?php _e( 'Scroll for more', 'mvp-text' ); ?></span><i class="fa fa-caret-down"></i>
							</div><!--head-latest-scroll-->
						</div><!--head-left-wrap-->
						<div class="head-main-in">
							<div class="head-right-wrap left relative">
								<?php if(get_option('mvp_nav_layout') == 'Trending Topics') { ?>
								<?php get_template_part('trending'); ?>
								<?php } else { ?>
								<div class="small-nav-wrap" class="left relative">
									<?php wp_nav_menu(array('theme_location' => 'nav-menu')); ?>
								</div><!--small-nav-wrap-->
								<?php } ?>
								<div id="feat-main-wrap" class="left relative">
									<div class="feat-main-top-wrap left relative">
										<?php $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '1'  )); while($recent->have_posts()) : $recent->the_post(); ?>
										<div class="feat-main-top left relative">
											<a href="<?php the_permalink(); ?>" rel="bookmark">
												<div class="feat-main-top-img left relative">
													<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
													<?php the_post_thumbnail('post-thumb', array( 'class' => 'unlazy reg-img' )); ?>
													<?php the_post_thumbnail('medium-thumb', array( 'class' => 'unlazy mob-img' )); ?>
													<?php } ?>
												</div><!--feat-main-top-img-->
												<div class="feat-main-top-text">
													<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
													<h2><?php echo get_post_meta($post->ID, "mvp_featured_headline", true); ?></h2>
												<?php else: ?>
												<h2 class="standard-headline"><?php the_title(); ?></h2>
											<?php endif; ?>
											<p><?php echo excerpt(11); ?></p>
										</div><!--feat-main-top-text-->
										<?php global $numpages; if(get_post_meta($post->ID, "mvp_video_embed", true)) { ?>
										<div class="feat-video">
											<i class="fa fa-video-camera fa-2"></i>
										</div><!--feat-video-->
										<?php } else if ( $numpages > 1 ) { ?>
										<div class="feat-gallery">
											<i class="fa fa-camera-retro fa-2"></i>
										</div><!--feat-gallery-->
										<?php } ?>
									</a>
								</div><!--feat-main-top-->
							<?php endwhile; wp_reset_postdata(); ?>
						</div><!--feat-main-top-wrap-->
						<div class="feat-sub-out">
							<div class="feat-sub-in">
								<?php if(get_option('mvp_featured_ad')) { ?>
								<div class="feat-sub-wrap left relative">
									<?php $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '2', 'offset' => '1'  )); while($recent->have_posts()) : $recent->the_post(); ?>
									<div class="feat-main-sub left relative">
										<a href="<?php the_permalink(); ?>" rel="bookmark">
											<div class="feat-main-sub-img left relative">
												<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
												<?php the_post_thumbnail('medium-thumb', array( 'class' => 'unlazy reg-img' )); ?>
												<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy mob-img' )); ?>
												<?php } ?>
											</div><!--feat-main-sub-img-->
											<div class="feat-main-sub-text">
												<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
												<h2><?php echo get_post_meta($post->ID, "mvp_featured_headline", true); ?></h2>
											<?php else: ?>
											<h2><?php the_title(); ?></h2>
										<?php endif; ?>
									</div><!--feat-main-sub-text-->
									<?php global $numpages; if(get_post_meta($post->ID, "mvp_video_embed", true)) { ?>
									<div class="feat-video">
										<i class="fa fa-video-camera fa-2"></i>
									</div><!--feat-video-->
									<?php } else if ( $numpages > 1 ) { ?>
									<div class="feat-gallery">
										<i class="fa fa-camera-retro fa-2"></i>
									</div><!--feat-gallery-->
									<?php } ?>
								</a>
							</div><!--feat-main-sub-->
						<?php endwhile; wp_reset_postdata(); ?>
					</div><!--feat-sub-wrap-->
					<?php } else { ?>
					<div class="feat-sub-wrap left relative">
						<?php $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '3', 'offset' => '1'  )); while($recent->have_posts()) : $recent->the_post(); ?>
						<div class="feat-main-sub left relative">
							<a href="<?php the_permalink(); ?>" rel="bookmark">
								<div class="feat-main-sub-img left relative">
									<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
									<?php the_post_thumbnail('medium-thumb'); ?>
									<?php } ?>
								</div><!--feat-main-sub-img-->
								<div class="feat-main-sub-text">
									<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
									<h2><?php echo get_post_meta($post->ID, "mvp_featured_headline", true); ?></h2>
								<?php else: ?>
								<h2><?php the_title(); ?></h2>
							<?php endif; ?>
						</div><!--feat-main-sub-text-->
						<?php global $numpages; if(get_post_meta($post->ID, "mvp_video_embed", true)) { ?>
						<div class="feat-video">
							<i class="fa fa-video-camera fa-2"></i>
						</div><!--feat-video-->
						<?php } else if ( $numpages > 1 ) { ?>
						<div class="feat-gallery">
							<i class="fa fa-camera-retro fa-2"></i>
						</div><!--feat-gallery-->
						<?php } ?>
					</a>
				</div><!--feat-main-sub-->
			<?php endwhile; wp_reset_postdata(); ?>
		</div><!--feat-sub-wrap-->
		<?php } ?>
		<?php if(get_option('mvp_featured_ad')) { ?>
		<div class="feat-mobi left relative">
			<div class="sec-marg-out2 relative">
				<div class="sec-marg-in2">
					<ul class="head-latest-list left relative">
						<?php $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '2', 'offset' => '1' )); while($recent->have_posts()) : $recent->the_post(); ?>
						<li>
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark">
								<div class="head-latest-out">
									<div class="head-latest-img left relative">
										<?php the_post_thumbnail('small-thumb'); ?>
									</div><!--head-latest-img-->
									<div class="head-latest-in">
										<div class="head-latest-text left relative">
											<h2><?php the_title(); ?></h2>
											<p><?php echo excerpt(10); ?></p>
										</div><!--head-latest-text-->
									</div><!--head-latest-in-->
								</div><!--head-latest-out-->
							</a>
							<?php } else { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</a>
							<?php } ?>
						</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--sec-marg-in2-->
		</div><!--sec-marg-out2-->
	</div><!--feat-mobi-->
	<?php } else { ?>
	<div class="feat-mobi left relative">
		<div class="sec-marg-out2 relative">
			<div class="sec-marg-in2">
				<ul class="head-latest-list left relative">
					<?php $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '3', 'offset' => '1' )); while($recent->have_posts()) : $recent->the_post(); ?>
					<li>
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark">
							<div class="head-latest-out">
								<div class="head-latest-img left relative">
									<?php the_post_thumbnail('small-thumb'); ?>
								</div><!--head-latest-img-->
								<div class="head-latest-in">
									<div class="head-latest-text left relative">
										<h2><?php the_title(); ?></h2>
										<p><?php echo excerpt(10); ?></p>
									</div><!--head-latest-text-->
								</div><!--head-latest-in-->
							</div><!--head-latest-out-->
						</a>
						<?php } else { ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark">
							<div class="head-latest-text left relative">
								<h2><?php the_title(); ?></h2>
								<p><?php echo excerpt(10); ?></p>
							</div><!--head-latest-text-->
						</a>
						<?php } ?>
					</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</div><!--sec-marg-in2-->
	</div><!--sec-marg-out2-->
</div><!--feat-mobi-->
<?php } ?>
</div><!--feat-sub-in-->
<?php if(get_option('mvp_featured_ad')) { ?>
<div class="feat-ad-wrap left relative">
	<?php $featured_ad = get_option('mvp_featured_ad'); if ($featured_ad) { echo html_entity_decode($featured_ad); } ?>
</div><!--feat-ad-wrap-->
<?php } ?>
</div><!--feat-sub-out-->
</div><!--feat-main-wrap-->
</div><!--head-right-wrap-->
</div><!--head-main-in-->
</div><!--head-main-out-->
<div class="head-latest-mobi left relative">
	<div class="sec-marg-out2 relative">
		<div class="sec-marg-in2">
			<span class="head-latest-head left"><?php echo get_option('mvp_latest_head'); ?></span>
			<?php if(get_option('mvp_featured_ad')) { ?>
			<ul class="head-latest-list left relative">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '3'  )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<?php } endwhile; wp_reset_postdata(); ?>
				<?php if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<li>
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-out">
							<div class="head-latest-img left relative">
								<?php the_post_thumbnail('small-thumb'); ?>
							</div><!--head-latest-img-->
							<div class="head-latest-in">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</div><!--head-latest-in-->
						</div><!--head-latest-out-->
					</a>
					<?php } else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-text left relative">
							<h2><?php the_title(); ?></h2>
							<p><?php echo excerpt(10); ?></p>
						</div><!--head-latest-text-->
					</a>
					<?php } ?>
				</li>
				<?php } endwhile; wp_reset_postdata(); } else { ?>
				<?php $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<li>
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-out">
							<div class="head-latest-img left relative">
								<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy')); ?>
							</div><!--head-latest-img-->
							<div class="head-latest-in">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</div><!--head-latest-in-->
						</div><!--head-latest-out-->
					</a>
					<?php } else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-text left relative">
							<h2><?php the_title(); ?></h2>
							<p><?php echo excerpt(10); ?></p>
						</div><!--head-latest-text-->
					</a>
					<?php } ?>
				</li>
				<?php } endwhile; wp_reset_postdata(); } ?>
			</ul>
			<?php } else { ?>
			<ul class="head-latest-list left relative">
				<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '4'  )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<?php } endwhile; wp_reset_postdata(); ?>
				<?php if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<li>
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-out">
							<div class="head-latest-img left relative">
								<?php the_post_thumbnail('small-thumb'); ?>
							</div><!--head-latest-img-->
							<div class="head-latest-in">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</div><!--head-latest-in-->
						</div><!--head-latest-out-->
					</a>
					<?php } else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-text left relative">
							<h2><?php the_title(); ?></h2>
							<p><?php echo excerpt(10); ?></p>
						</div><!--head-latest-text-->
					</a>
					<?php } ?>
				</li>
				<?php } endwhile; wp_reset_postdata(); } else { ?>
				<?php $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<li>
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-out">
							<div class="head-latest-img left relative">
								<?php the_post_thumbnail('small-thumb', array( 'class' => 'unlazy')); ?>
							</div><!--head-latest-img-->
							<div class="head-latest-in">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</div><!--head-latest-in-->
						</div><!--head-latest-out-->
					</a>
					<?php } else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-text left relative">
							<h2><?php the_title(); ?></h2>
							<p><?php echo excerpt(10); ?></p>
						</div><!--head-latest-text-->
					</a>
					<?php } ?>
				</li>
				<?php } endwhile; wp_reset_postdata(); } ?>
			</ul>
			<?php } ?>
		</div><!--sec-marg-in2-->
	</div><!--sec-marg-out2-->
</div><!--head-latest-mobi-->
</div><!--sec-marg-in-->
</div><!--sec-marg-out-->
</div><!--feat-main1-->
<?php } ?>
</div><!--head-main-top-->
<?php } ?>
<?php } else if ( is_category() ) { ?>
<?php $mvp_featured_cat = get_option('mvp_featured_cat'); if ($mvp_featured_cat == "true") { ?>
<div id="head-main-top" class="left relative">
	<div id="feat-main1" class="left relative">
		<div class="sec-marg-out relative">
			<div class="sec-marg-in">

				<span class="cat-head-mobi"><?php single_cat_title(); ?></span>
<?php
 $post_mf = get_the_ID();
	$category_mf = get_the_category($post_mf);
       $cat_mf = $category_mf[0]->cat_name;
	$category_id_mf = get_cat_ID($cat_mf);
if($category_id_mf  == 103){ ?>
							<a class="mob-mf" href="http://bit.ly/1PIgaEC" target="_blank"><img style="margin-top: 10px;margin-bottom: 10px;width: 100%;" src="http://lifeunfold.com/wp-content/uploads/2016/02/manforce-banner-300-by-150.png"><a/>
<?php } ?>
				<div class="head-main-out">
					<div class="head-left-wrap left relative">
						<div class="head-latest-wrap left relative">
                                                      <h1 class="cat-head left"><?php single_cat_title(); ?></h1>
<?php
 $post_mf = get_the_ID();
	$category_mf = get_the_category($post_mf);
       $cat_mf = $category_mf[0]->cat_name;
	$category_id_mf = get_cat_ID($cat_mf);
if($category_id_mf  == 103){ ?>
							<a href="http://bit.ly/1PIgaEC" target="_blank"><img style="margin-top: 10px;margin-bottom: 10px;width: 100%;" src="http://lifeunfold.com/wp-content/uploads/2016/02/manforce-banner-300-by-150.png"><a/>
<?php } ?>
							<?php if(get_option('mvp_featured_ad')) { ?>
							<ul class="head-latest-list left relative">
								<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '3' )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
								<?php } endwhile; wp_reset_postdata(); ?>
								<?php if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
								<li>
									<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
									<a href="<?php the_permalink(); ?>" rel="bookmark">
										<div class="head-latest-out">
											<div class="head-latest-img left relative">
												<?php the_post_thumbnail('small-thumb'); ?>
											</div><!--head-latest-img-->
											<div class="head-latest-in">
												<div class="head-latest-text left relative">
													<h2><?php the_title(); ?></h2>
													<p><?php echo excerpt(10); ?></p>
												</div><!--head-latest-text-->
											</div><!--head-latest-in-->
										</div><!--head-latest-out-->
									</a>
									<?php } else { ?>
									<a href="<?php the_permalink(); ?>" rel="bookmark">
										<div class="head-latest-text left relative">
											<h2><?php the_title(); ?></h2>
											<p><?php echo excerpt(10); ?></p>
										</div><!--head-latest-text-->
									</a>
									<?php } ?>
								</li>
							<?php endwhile; wp_reset_postdata(); } else { ?>
							<?php $latest_num = esc_html(get_option('mvp_latest_num')); $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => $latest_num )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
							<li>
								<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
								<a href="<?php the_permalink(); ?>" rel="bookmark">
									<div class="head-latest-out">
										<div class="head-latest-img left relative">
											<?php the_post_thumbnail('small-thumb'); ?>
										</div><!--head-latest-img-->
										<div class="head-latest-in">
											<div class="head-latest-text left relative">
												<h2><?php the_title(); ?></h2>
												<p><?php echo excerpt(10); ?></p>
											</div><!--head-latest-text-->
										</div><!--head-latest-in-->
									</div><!--head-latest-out-->
								</a>
								<?php } else { ?>
								<a href="<?php the_permalink(); ?>" rel="bookmark">
									<div class="head-latest-text left relative">
										<h2><?php the_title(); ?></h2>
										<p><?php echo excerpt(10); ?></p>
									</div><!--head-latest-text-->
								</a>
								<?php } ?>
							</li>
						<?php endwhile; wp_reset_postdata(); } ?>
					</ul>
					<?php } else { ?>
					<ul class="head-latest-list left relative">
						<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '4' )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
						<?php } endwhile; wp_reset_postdata(); ?>
						<?php if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
						<li>
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark">
								<div class="head-latest-out">
									<div class="head-latest-img left relative">
										<?php the_post_thumbnail('small-thumb'); ?>
									</div><!--head-latest-img-->
									<div class="head-latest-in">
										<div class="head-latest-text left relative">
											<h2><?php the_title(); ?></h2>
											<p><?php echo excerpt(10); ?></p>
										</div><!--head-latest-text-->
									</div><!--head-latest-in-->
								</div><!--head-latest-out-->
							</a>
							<?php } else { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</a>
							<?php } ?>
						</li>
					<?php endwhile; wp_reset_postdata(); } else { ?>
					<?php $latest_num = esc_html(get_option('mvp_latest_num')); $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => $latest_num )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
					<li>
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark">
							<div class="head-latest-out">
								<div class="head-latest-img left relative">
									<?php the_post_thumbnail('small-thumb'); ?>
								</div><!--head-latest-img-->
								<div class="head-latest-in">
									<div class="head-latest-text left relative">
										<h2><?php the_title(); ?></h2>
										<p><?php echo excerpt(10); ?></p>
									</div><!--head-latest-text-->
								</div><!--head-latest-in-->
							</div><!--head-latest-out-->
						</a>
						<?php } else { ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark">
							<div class="head-latest-text left relative">
								<h2><?php the_title(); ?></h2>
								<p><?php echo excerpt(10); ?></p>
							</div><!--head-latest-text-->
						</a>
						<?php } ?>
					</li>
				<?php endwhile; wp_reset_postdata(); } ?>
			</ul>
			<?php } ?>
		</div><!--head-latest-wrap-->
		<div class="head-latest-scroll">
			<span><?php _e( 'Scroll for more', 'mvp-text' ); ?></span><i class="fa fa-caret-down"></i>
		</div><!--head-latest-scroll-->
	</div><!--head-left-wrap-->
	<div class="head-main-in">
		<div class="head-right-wrap left relative">
			<div id="feat-main-wrap" class="left relative">
				<?php $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
				<div class="feat-main-top left relative">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="feat-main-top-img left relative">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
							<?php the_post_thumbnail('post-thumb'); ?>
							<?php } ?>
						</div><!--feat-main-top-img-->
						<div class="feat-main-top-text">
							<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
							<h2><?php echo get_post_meta($post->ID, "mvp_featured_headline", true); ?></h2>
						<?php else: ?>
						<h2 class="standard-headline"><?php the_title(); ?></h2>
					<?php endif; ?>
					<p><?php echo excerpt(11); ?></p>
				</div><!--feat-main-top-text-->
				<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
				<div class="feat-video">
					<i class="fa fa-video-camera fa-2"></i>
				</div><!--feat-video-->
			<?php endif; ?>
			<?php if(get_post_meta($post->ID, "mvp_gallery_embed", true)): ?>
			<div class="feat-gallery">
				<i class="fa fa-camera-retro fa-2"></i>
			</div><!--feat-gallery-->
		<?php endif; ?>
	</a>
</div><!--feat-main-top-->
<?php endwhile; wp_reset_postdata(); ?>
<div class="feat-sub-out">
	<div class="feat-sub-in">
		<?php if(get_option('mvp_featured_ad')) { ?>
		<div class="feat-sub-wrap left relative">
			<?php $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '2', 'offset' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
			<div class="feat-main-sub left relative">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<div class="feat-main-sub-img left relative">
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
						<?php the_post_thumbnail('medium-thumb'); ?>
						<?php } ?>
					</div><!--feat-main-sub-img-->
					<div class="feat-main-sub-text">
						<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
						<h2><?php echo get_post_meta($post->ID, "mvp_featured_headline", true); ?></h2>
					<?php else: ?>
					<h2><?php the_title(); ?></h2>
				<?php endif; ?>
			</div><!--feat-main-sub-text-->
			<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
			<div class="feat-video">
				<i class="fa fa-video-camera fa-2"></i>
			</div><!--feat-video-->
		<?php endif; ?>
		<?php if(get_post_meta($post->ID, "mvp_gallery_embed", true)): ?>
		<div class="feat-gallery">
			<i class="fa fa-camera-retro fa-2"></i>
		</div><!--feat-gallery-->
	<?php endif; ?>
</a>
</div><!--feat-main-sub-->
<?php endwhile; wp_reset_postdata(); ?>
</div><!--feat-sub-wrap-->
<?php } else { ?>
<div class="feat-sub-wrap left relative">
	<?php $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '3', 'offset' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
	<div class="feat-main-sub left relative">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<div class="feat-main-sub-img left relative">
				<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
				<?php the_post_thumbnail('medium-thumb'); ?>
				<?php } ?>
			</div><!--feat-main-sub-img-->
			<div class="feat-main-sub-text">
				<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
				<h2><?php echo get_post_meta($post->ID, "mvp_featured_headline", true); ?></h2>
			<?php else: ?>
			<h2><?php the_title(); ?></h2>
		<?php endif; ?>
	</div><!--feat-main-sub-text-->
	<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
	<div class="feat-video">
		<i class="fa fa-video-camera fa-2"></i>
	</div><!--feat-video-->
<?php endif; ?>
<?php if(get_post_meta($post->ID, "mvp_gallery_embed", true)): ?>
	<div class="feat-gallery">
		<i class="fa fa-camera-retro fa-2"></i>
	</div><!--feat-gallery-->
<?php endif; ?>
</a>
</div><!--feat-main-sub-->
<?php endwhile; wp_reset_postdata(); ?>
</div><!--feat-sub-wrap-->
<?php } ?>
<div class="feat-mobi left relative">
	<div class="sec-marg-out2 relative">
		<div class="sec-marg-in2">
			<?php if(get_option('mvp_featured_ad')) { ?>
			<ul class="head-latest-list left relative">
				<?php $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '2', 'offset' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
				<li>
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-out">
							<div class="head-latest-img left relative">
								<?php the_post_thumbnail('small-thumb'); ?>
							</div><!--head-latest-img-->
							<div class="head-latest-in">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</div><!--head-latest-in-->
						</div><!--head-latest-out-->
					</a>
					<?php } else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-text left relative">
							<h2><?php the_title(); ?></h2>
							<p><?php echo excerpt(10); ?></p>
						</div><!--head-latest-text-->
					</a>
					<?php } ?>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
		<?php } else { ?>
		<ul class="head-latest-list left relative">
			<?php $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '3', 'offset' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); ?>
			<li>
				<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<div class="head-latest-out">
						<div class="head-latest-img left relative">
							<?php the_post_thumbnail('small-thumb'); ?>
						</div><!--head-latest-img-->
						<div class="head-latest-in">
							<div class="head-latest-text left relative">
								<h2><?php the_title(); ?></h2>
								<p><?php echo excerpt(10); ?></p>
							</div><!--head-latest-text-->
						</div><!--head-latest-in-->
					</div><!--head-latest-out-->
				</a>
				<?php } else { ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<div class="head-latest-text left relative">
						<h2><?php the_title(); ?></h2>
						<p><?php echo excerpt(10); ?></p>
					</div><!--head-latest-text-->
				</a>
				<?php } ?>
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
	<?php } ?>
</div><!--sec-marg-in2-->
</div><!--sec-marg-out2-->
</div><!--feat-mobi-->
</div><!--feat-sub-in-->
<?php if(get_option('mvp_featured_ad')) { ?>
<div class="feat-ad-wrap left relative">
	<?php $featured_ad = get_option('mvp_featured_ad'); if ($featured_ad) { echo html_entity_decode($featured_ad); } ?>
</div><!--feat-ad-wrap-->
<?php } ?>
</div><!--feat-sub-out-->
</div><!--feat-main-wrap-->
</div><!--head-right-wrap-->
</div><!--head-main-in-->
</div><!--head-main-out-->
<div class="head-latest-mobi left relative">
	<div class="sec-marg-out2 relative">
		<div class="sec-marg-in2">
			<span class="head-latest-head left"><?php echo get_option('mvp_latest_head'); ?></span>
			<ul class="head-latest-list left relative">
				<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '3' )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<?php } endwhile; wp_reset_postdata(); ?>
				<?php if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<li>
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-out">
							<div class="head-latest-img left relative">
								<?php the_post_thumbnail('small-thumb'); ?>
							</div><!--head-latest-img-->
							<div class="head-latest-in">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</div><!--head-latest-in-->
						</div><!--head-latest-out-->
					</a>
					<?php } else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-text left relative">
							<h2><?php the_title(); ?></h2>
							<p><?php echo excerpt(10); ?></p>
						</div><!--head-latest-text-->
					</a>
					<?php } ?>
				</li>
				<?php } endwhile; wp_reset_postdata(); } else { ?>
				<?php $latest_num = esc_html(get_option('mvp_latest_num')); $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => $latest_num )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<li>
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-out">
							<div class="head-latest-img left relative">
								<?php the_post_thumbnail('small-thumb'); ?>
							</div><!--head-latest-img-->
							<div class="head-latest-in">
								<div class="head-latest-text left relative">
									<h2><?php the_title(); ?></h2>
									<p><?php echo excerpt(10); ?></p>
								</div><!--head-latest-text-->
							</div><!--head-latest-in-->
						</div><!--head-latest-out-->
					</a>
					<?php } else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="head-latest-text left relative">
							<h2><?php the_title(); ?></h2>
							<p><?php echo excerpt(10); ?></p>
						</div><!--head-latest-text-->
					</a>
					<?php } ?>
				</li>
				<?php } endwhile; wp_reset_postdata(); } ?>
			</ul>
		</div><!--sec-marg-in2-->
	</div><!--sec-marg-out2-->
</div><!--head-latest-mobi-->
</div><!--sec-marg-in-->
</div><!--sec-marg-out-->


</div><!--feat-main1-->
</div><!--head-main-top-->
<?php } ?>
<?php } ?>
<?php if ( is_single() ) { ?>
<?php $mvp_post_temp = get_post_meta($post->ID, "mvp_post_template", true); if ( $mvp_post_temp == "wide" || $mvp_post_temp == "wide-full" ) { ?>
<div id="feat-img-wide" class="left relative">
	<?php $mvp_featured_img = get_option('mvp_featured_img'); if ($mvp_featured_img == "true") { ?>
	<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
	<div id="video-embed" class="left relative">
		<?php echo get_post_meta($post->ID, "mvp_video_embed", true); ?>
	</div><!--video-embed-->
<?php else: ?>
	<?php $mvp_show_hide = get_post_meta($post->ID, "mvp_featured_image", true); if ($mvp_show_hide == "hide") { ?>
	<?php } else { ?>
	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
	<div id="featured-image" class="left relative">
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
		<img itemprop="image" src="<?php echo $thumb['0']; ?>" />
		<?php if(get_post_meta($post->ID, "mvp_photo_credit", true)): ?>
		<div id="featured-caption">
			<?php echo get_post_meta($post->ID, "mvp_photo_credit", true); ?>
		</div><!--featured-caption-->
	<?php endif; ?>
</div><!--featured-image-->
<?php } ?>
<?php } ?>
<?php endif; ?>
<?php } ?>
</div><!--feat-img-wide-->
<?php } else { ?>
<div class="sec-marg-out relative">
	<div class="sec-marg-in">
		<div id="top-posts-wrap" class="left relative">
			<div class="horz-list-wrap left relative">
				<ul class="horz-list left relative">
					<?php global $post; $tmp_post = $post; $feat_query = get_posts(array( 'tag' => get_option('mvp_feat_posts_tags'), 'posts_per_page' => '5', 'post__not_in' => array( $post->ID )  )); foreach( $feat_query as $post ) : setup_postdata($post); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
							<div class="horz-list-img left relative">
								<?php the_post_thumbnail('medium-thumb'); ?>
							</div><!--horz-list-img-->
							<?php } ?>
							<div class="horz-list-text left relative">
								<h2><?php the_title(); ?></h2>
							</div><!--horz-list-text-->
						</a>
					</li>
				<?php endforeach; $post = $tmp_post; ?>
			</ul>
		</div><!--horz-list-wrap-->
	</div><!--top-posts-wrap-->
</div><!--sec-marg-in-->
</div><!--sec-marg-out-->
<?php } ?>
<?php } ?>
<div id="main-content-wrap" class="left relative">
	<?php if(get_option('mvp_header_leader')) { ?>
	<div class="sec-marg-out relative">
		<div class="sec-marg-in">
			<div id="leader-wrap" class="left relative">
				<?php $ad970 = get_option('mvp_header_leader'); if ($ad970) { echo html_entity_decode($ad970); } ?>
			</div><!--leader-wrap-->
		</div><!--sec-marg-in-->
	</div><!--sec-marg-out-->
	<?php } ?>