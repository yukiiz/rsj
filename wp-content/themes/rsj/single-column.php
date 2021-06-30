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
						<?php if (have_posts()) : //条件分岐：投稿があるなら
    ?>
						<?php while (have_posts()) : the_post(); //繰り返し処理開始
        ?>
						<div class="sec-headline headline">
							<h1 class="headline-tit bold"><span class="headline-tit_1"><?php the_title(); ?></span></h1>
						</div>

						<div class="news-detail">
							<div class="news-img">
								<?php
						$img = get_post_meta($post->ID, 'news-img', true);
			$size = 'full';
			$img_src = wp_get_attachment_image_src( $img, $size);?>
								<img src="<?php echo $img_src[0]; ?>">
							</div>
							<!--
					<p class="news-date en color"><?php the_time('Y.m.d');?></p>
					-->
							<div class="news-body">
								<?php remove_filter('the_content', 'wpautop'); ?>
								<?php the_content();?>
							</div>

						</div>
					</div>
				</section>
				<section class="sec-paging paging">
					<div class="sec-inner">
						<?php // 現在の投稿に隣接している前後の投稿を取得する
                    $prev_post = get_previous_post(); // 前の投稿を取得
                    $next_post = get_next_post(); // 次の投稿を取得
                    if ($prev_post || $next_post) : // どちらか一方があれば表示
                    ?>
						<ul class="paging-list">
							<li class="paging-item paging-item_prev text-center">
								<?php if ($prev_post) : // 前の投稿があれば表示
                            ?>
								<a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
									<span>前の記事を見る</span>
								</a>
								<?php endif; ?>
							</li>
							<li class="paging-item paging-item_next text-center">
								<?php if ($next_post) : // 次の投稿があれば表示
                            ?>
								<a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
									<span>次の記事を見る</span>
								</a>
								<?php endif; ?>
							</li>
						</ul>
						<div class="paging-item_archive"><a href="/column/">一覧に戻る</a></div>
					</div>
				</section>
				<?php endif; ?>
				<?php endwhile; // 繰り返し終了
        ?>
				<?php else : //条件分岐：投稿が無い場合は
    ?>
				<h2>投稿がみつかりません。</h2>
				<p><a href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></p>
				<?php endif; //条件分岐終了
    ?>
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