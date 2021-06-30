<?php
/*
Template Name: complete
*/
?>
<?php get_header(2) ?>
<main id="<?php echo esc_attr( $post->post_name ); ?>-page" class="<?php echo esc_attr( $post->post_name ); ?>-page layer-page">
	<!-- =====pageheader===== -->
	<section class="sec-pegeheader">
		<div class="sec-inner">
			<div class="sec-header">
				<h1 class="sec-tit bold en">CONTACT</h1>
				<p class="sec-tit_bg bold en">CONTACT</p>
				<h2 class="sec-tit_sub">お問い合わせ</h2>
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
	<section class="sec-complete">
		<div class="sec-inner">
			<?php while(have_posts()): the_post(); ?>
			<?php remove_filter('the_content', 'wpautop'); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<div class="link-btn text-center"><a href="/">トップページに戻る</a></div>
	</section>
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
	</div>
</main>
<?php get_footer(2);