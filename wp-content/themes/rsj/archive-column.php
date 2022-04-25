<?php get_header(2); //header.phpを取得
?>
<main id="<?php echo esc_attr( $post->post_name ); ?>-page" class="<?php echo esc_attr( $post->post_name ); ?>-page layer-page">
	<div class="main-inner">
		<!-- =====pageheader===== -->
		<section class="sec-pegeheader">
			<div class="sec-inner">
				<div class="sec-header">
					<h1 class="sec-tit bold en">COLUMN</h1>
					<p class="sec-tit_bg bold en">COLUMN</p>
					<h2 class="sec-tit_sub bold">コラム</h2>
					<div></div>
				</div>
			</div>
		</section>
		<!-- =====banner-btn===== -->
		<section class="sec-banner banner">
			<div class="banner-list js-link-btn">
				<a class="banner-btn banner-btn_phone" href="tel:03-5846-9220"><i class="fas fa-phone fa-flip-horizontal"></i>お電話でのお問い合わせ</a>
				<a class="banner-btn banner-btn_mail" href="/contact/"><i class="fas fa-envelope"></i>メールでのお問い合わせ</a>
			</div>
		</section>
		<!-- =====breadcrumbs===== -->
		<section class="sec-breadcrumbs">
			<div class="sec-inner_l">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
    {
			bcn_display();
    }?>
				</div>
			</div>
		</section>
		<div class="wrapper">
			<article class="news-content">
				<!-- =====news===== -->
				<section class="sec-news news">
					<div class="sec-inner">
						<ul class="three-columns">
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$year = get_query_var('year');
							$monthnum = get_query_var('monthnum');
							$my_query = new WP_Query(
							array('year' => $year, 'monthnum' => $monthnum, 'paged' => $paged, 'posts_per_page' => 9, 'post_type' => 'column')
                            );
                            ?>
							<?php if ($my_query->have_posts()) :
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<li class="three-columns-box box">
								<div class="box-img">
									<a href="<?php the_permalink(); ?>">
										<?php $img = get_post_meta($post->ID, 'news-img', true); ?>
										<?php $img = wp_get_attachment_image_src($img, 'large'); ?>
										<img src="<?php echo $img[0]; ?>"></a>
								</div>
								<p>
										<span class="box-date"><?php the_time('Y.m.d');?></span>
										<!--
										<span class="box-category
											<?php $terms = wp_get_object_terms($post->ID, 'cat_news');
											foreach ($terms as $term) {echo $term->slug . '';} ?>">
											<?php the_terms($post->ID, 'cat_news'); ?>
										</span>-->
									</p>
								<h1 class="box-tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							</li>
							<?php endwhile; ?>
						</ul>
						<?php else : //記事が1つも無い場合
                    ?>
						<p>現在表示できる記事はありません。</p><br>
						<div class="btn">
							<a href="<?php echo esc_url(home_url()); ?>/">TOPへ戻る</a>
						</div>
						<?php endif; ?>


					</div>
					<div class="page-navi">
						<?php if (function_exists('wp_pagenavi')) { //ページネーションプラグイン
                wp_pagenavi(array('query' => $my_query));
            } ?>
						<?php wp_reset_postdata();
            wp_reset_query(); ?>
					</div>
				</section>
			</article>
			<aside>
				<p class="text-center">アーカイブ</p>
				<ul class="archives-list">
					<?php
    $string = wp_get_archives(array(
      'post_type'     => 'column',
      'show_post_count' => 1,
      'echo' => 0
    ));
    echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</span></a>', $string);
?>
				</ul>
			</aside>
		</div>
	</div>
	<!-- =====link===== -->
	<section class="sec-link link">
		<div class="sec-inner">
			<ul class="two-columns">
				<li class="two-columns-box box">
					<div class="box-img">
						<img src="/asset/img/layer-img09.png" />
					</div>
					<p class="box-btn text-center"><a href="/factoring/" class="more-btn bold">ファクタリング</a></p>
				</li>
				<li class="two-columns-box box">
					<div class="box-img">
						<img src="/asset/img/layer-img08.png" />
					</div>
					<p class="box-btn text-center"><a href="/consulting/" class="more-btn bold">財務コンサルティング</a></p>
				</li>
			</ul>
		</div>
	</section>
</main>
<?php get_footer(2);