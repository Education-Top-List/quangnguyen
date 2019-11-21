<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div id="content">
		<div class="g_content">
			<div class="content_left">
				<div class="content_post_admin">
					<?php 
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					echo $content;
					?>
					<div class="list_post_news">
						<div class="container">
							<h2>Bài viết mới nhất</h2> 
							<div class="row">
								<?php 
								$arg_cmt_post_q = array(
									'posts_per_page' => 3,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish'
								);
								$cmt_post_q = new WP_Query();
								$cmt_post_q->query($arg_cmt_post_q);
								?>
								<?php if(have_posts()) : ?>
									<ul class="most-commented">
										<?php
										while ($cmt_post_q->have_posts()) : $cmt_post_q->the_post(); ?>
											<li class="col-sm-4">
												<div class="post_cmt_wrapper pw">
													<div class="wrap_thumb">
														<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
														<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
															<a href="<?php the_permalink();?>"></a>
														</figure>	
													</div>
													<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>
													<div class="excerpt">
														<p><?php echo excerpt(15); ?></p>
													</div>
													<div class="read_more">
														<a href="<?php the_permalink(); ?>"><?php if(get_locale() == 'en_US'){echo 'Read more >';} else { echo 'Xem thêm >';}  ?></a>
													</div>
												</div>
											</li>
										<?php endwhile; ?>
									<?php endif; ?> 
								</ul>
							</div>
						</div>
					</div>
					<div class="feeling_cus">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<h3 class="title_widget">Cảm nhận của khách hàng</h3>
									<div class="wrap_feeling cus_slide">
										<ul>
											<li>
												<figure><img src="<?php echo BASE_URL; ?>/images/kh1.png"></figure>
												<div class="textwidget">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ...</p>
													<span>Phí Thanh Hương</span>
												</div>
											</li>
											<li>
												<figure><img src="<?php echo BASE_URL; ?>/images/kh1.png"></figure>
												<div class="textwidget">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ...</p>
													<span>Phí Thanh Hương</span>
												</div>
											</li>
											<li>
												<figure><img src="<?php echo BASE_URL; ?>/images/kh1.png"></figure>
												<div class="textwidget">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ...</p>
													<span>Phí Thanh Hương</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6">
									<h3 class="title_widget">Hỏi đáp</h3>
									<div class="wrap_feeling">
										<ul>
											<li>
												<a href="#">Tăng axit uric máu ăn uống như thế nào?</a>
											</li>
											<li>
												<a href="#">Tăng axit uric máu ăn uống như thế nào?</a>
											</li>
											<li>
												<a href="#">Tăng axit uric máu ăn uống như thế nào?</a>
											</li>
											<li>
												<a href="#">Tăng axit uric máu ăn uống như thế nào?</a>
											</li>
											<li>
												<a href="#">Tăng axit uric máu ăn uống như thế nào?</a>
											</li>
										</ul>
										<div class="read_more">
											<a href="#">Xem thêm >></a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div><!-- content_left -->
		</div>

	</div>
</div>
<?php get_footer(); ?>
