<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(2) ?>
<main class="main top-page">
	<div class="main-inner">
		<section class="sec-mv mv">
			<div class="mv-inner">
				<ul class="mv-list slick-wrp slider">
					<li class="mv-item mv-item_01 js-main-visual"></li>
					<li class="mv-item mv-item_02 js-main-visual"></li>
				</ul>
				<!--
				<div class="mv-tit text-center">
					<h1 class="bold">“今”と“未来”を繋げる支えとなる</h1>
					<p class="en">The support to connect the now and the future</p>
				</div>-->
				<div class="mv-left logo">
					<div class="logo-inner">
						<img class="center" src="/asset/img/logo_01.png" alt="" />
					</div>
				</div>
			</div>
			<div class="mv-movie">
			    <div class="mv-movie-inner">
			        <div id="js-mv-player"></div>
			    </div>
			</div>
		</section>
		<section class="sec-banner banner">
			<div class="banner-list js-link-btn">
				<a class="banner-btn banner-btn_phone" href="tel:03-5846-9220"><i class="fas fa-phone fa-flip-horizontal"></i>お電話でのお問い合わせ</a>
				<a class="banner-btn banner-btn_mail" href="/contact/"><i class="fas fa-envelope"></i>メールでのお問い合わせ</a>
			</div>
		</section>
		<!-- =====strengths===== -->
		<section class="sec-strengths strengths">
			<div class="sec-inner">
				<div class="sec-header">
					<h1 class="sec-tit bold en">STREMGTHS</h1>
					<p class="sec-tit_bg bold en">STREMGTHS</p>
					<h2 class="sec-tit_sub">ANIMOの強み</h2>
					<p class="sec-more more sp-none"><a href="/strengths/" class="more-btn">MORE</a></p>
					<div></div>
				</div>
				<ul class="three-columns">
					<li class="three-columns-box box">
						<div class="box-number">
							<p class="bold en">01</p>
						</div>
						<div class="box-img">
							<img src="/asset/img/top/img07.png" />
						</div>
						<div class="box-description">
							<h1 class="box-tit text-center"><a href="#">対応の速さ</a></h1>
							<p class="box-txt text-center">最短即日の審査体制を整えております。</p>
						</div>
					</li>
					<li class="three-columns-box box">
						<div class="box-number">
							<p class="bold en">02</p>
						</div>
						<div class="box-img">
							<img src="/asset/img/strengths/img03.png" />
						</div>
						<div class="box-description desc">
							<h1 class="box-tit text-center"><a href="#">審査の柔軟性</a></h1>
							<p class="box-txt text-center">専任スタッフによる柔軟なご案内をさせて頂きます。</p>
						</div>
					</li>
					<li class="three-columns-box box">
						<div class="box-number">
							<p class="bold en">03</p>
						</div>
						<div class="box-img">
							<img src="/asset/img/strengths/img04.png" />
						</div>
						<div class="box-description">
							<h1 class="box-tit text-center"><a href="#">お客様満足度</a></h1>
							<p class="box-txt text-center">少額30万円から資金繰り改善のサポートを行います。</p>
						</div>
					</li>
				</ul>
				<p class="sec-more more tbpc-none"><a href="/strengths/" class="more-btn">MORE</a></p>
			</div>
		</section>
		<div class="bg-warp">
			<!-- =====column===== -->
			<section class="sec-column column">
				<div class="sec-inner">
					<div class="sec-header">
						<h1 class="sec-tit color bold en">COLUMN</h1>
						<p class="sec-tit_bg bold en">COLUMN</p>
						<h3 class="sec-tit_sub">コラム</h3>
						<p class="sec-more more sp-none"><a href="/column/" class="more-btn">すべて見る</a></p>
					</div>
					<ul class="three-columns">
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$my_query = new WP_Query(
						array('paged' => $paged, 'posts_per_page' => 3, 'post_type' => 'column'));?>
						<?php if ($my_query->have_posts()) :
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<li class="three-columns-box box">
							<a href="<?php the_permalink(); ?>">
								<div class="box-img">
									<?php $img = get_post_meta($post->ID, 'news-img', true); ?>
									<?php $img = wp_get_attachment_image_src($img, 'large'); ?>
									<img src="<?php echo $img[0]; ?>">
								</div>
								<p class="box-date en"><?php the_time('Y.m.d');?></p>

								<h1 class="box-tit"><?php the_title(); ?></h1>
							</a>
							<p class="box-more"><a href="<?php the_permalink(); ?>" class="more-btn bold en">MORE</a></p>
						</li>
						<?php endwhile;
							endif;
							wp_reset_postdata();
						?>
					</ul>
					<p class="sec-more more tbpc-none"><a href="/column/" class="more-btn">すべて見る</a></p>
				</div>
			</section>
			<!-- =====about===== -->
			<section class="sec-about about">
				<div class="sec-inner">
					<div class="sec-header">
						<p class="sec-tit_bg bold en sp-none">SERVICE</p>
					</div>
					<div class="about-description desc">
						<h2 class="desc-tit en">ABOUT</h2>
						<h1 class="desc-catch bold">
										未来へのアシストを。<br />
										つながる心で<br />
										広がる未来を・・・
									</h1>
						<p class="desc-txt">
										お持ちの「入金待ちの請求書」（売掛金）をANIMOが買取し、運転資金にご活用いただけるものです。<br />
										ANIMOは手数料２％～で無料相談を承ります。<br />
										買取金額に上限も下限も設定していません。<br />
										また請求書をスマホで撮って送るだけ！<br />
										もちろんFAXでも対応しております。<br />
										さらに、ANIMOではお客様のお取引先に知られることのない2社間取引が可能のため、今後のお取引に支障をきたすこともありません。
									</p>
					</div>
					<ul class="about-img img">
						<li class="img-box">
							<img src="/asset/img/layer-img09.png" alt="" />
							<p class="btn text-center"><a href="/factoring/" class="more-btn">ファクタリング</a></p>
						</li>
						<li class="img-box">
							<img src="/asset/img/layer-img08.png" alt="" />
							<p class="btn text-center"><a href="/consulting/" class="more-btn">財務コンサルティング</a></p>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<!-- =====link===== -->
		<section class="sec-link link">
			<div class="sec-inner">
				<ul class="three-columns">
					<li class="three-columns-box box">
						<div class="box-img">
							<img src="/asset/img/top/img08.png" />
						</div>
						<p class="box-tit_en bold color text-center en">FLOW</p>
						<h1 class="box-tit text-center">お申し込みまでの流れ</h1>
						<p class="box-more more"><a href="/flow/" class="more-btn bold en">MORE</a></p>
					</li>
					<li class="three-columns-box box">
						<div class="box-img">
							<img src="/asset/img/top/img09.png" />
						</div>
						<p class="box-tit_en bold color text-center en">FAQ</p>
						<h1 class="box-tit text-center">よくある質問</h1>
						<p class="box-more more"><a href="/faq/" class="more-btn bold en">MORE</a></p>
					</li>
					<li class="three-columns-box box">
						<div class="box-img">
							<img src="/asset/img/top/img10.png" />
						</div>
						<p class="box-tit_en bold color text-center en">COMPANY</p>
						<h1 class="box-tit text-center">会社概要</h1>
						<p class="box-more more"><a href="/about/" class="more-btn bold en">MORE</a></p>
					</li>
				</ul>
			</div>
		</section>
		<!-- =====voice===== -->
		<section class="sec-voice voice">
			<div class="sec-inner">
				<div class="sec-header">
					<h1 class="sec-tit bold en">VOICE</h1>
					<p class="sec-tit_bg bold en">VOICE</p>
					<h3 class="sec-tit_sub">お客様の声</h3>
				</div>
				<div class="voice-balloons">
					<div class="voice-balloon balloon1">
						<p>ファクタリングって何？の状態でしたが <span class="color">丁寧にご説明いただき理解した</span>うえでお願いできました。ありがとうございました！</p>
					</div>
					<div class="voice-balloon balloon2">
						<p>銀行からの融資が受けられず困ってたところ<span class="color">担当の方が親身に相談にのって</span>いただき安心して申し込めました。</p>
					</div>
					<div class="voice-balloon balloon3">
						<p>急な資金調達で無理かな～と思っていたのですが対応していただき<span class="color">売り上げも回復</span>しました。ANIMOさんにお願いしてよかったです。</p>
					</div>
					<div class="voice-balloon balloon4 tb-none">
						<p>複数のファクタリング業者に話を聞き比較しましたが<span class="color">ANIMOさんがメリット・デメリットを伝えてくれた</span>のでANIMOさんにしました。</p>
					</div>
					<div class="balloon-warp">
						<div class="voice-balloon balloon5">
							<p>コロナウイルスの影響で資金繰りに困っていました。<span class="color">非対面での対応でも分かりやすかった</span>のですぐに申し込みました！</p>
						</div>
						<div class="voice-balloon balloon6 tb-none">
							<p>高い手数料に悩んでANIMOさんに相談しました。<span class="color">今までより4割ほど安い手数料で</span>買い取っていただき、非常に満足しています！</p>
						</div>
					</div>
					<div class="voice-balloon balloon7 tb-none">
						<p>ファクタリングのサポートだけでなく、銀行の信用保証協会付の<span class="color">コロナ融資のお手伝い</span>もしてくださいました。感謝しています！</p>
					</div>
				</div>
			</div>
		</section>
		<!-- =====news===== -->
		<section class="sec-news">
			<div class="sec-inner">
				<div class="sec-header">
					<h1 class="sec-tit bold color en">NEWS</h1>
					<p class="sec-tit_bg bold en">NEWS</p>
					<h3 class="sec-tit_sub">ニュース</h3>
					<p class="sec-more more sp-none"><a href="/news/" class="more-btn">MORE</a></p>
				</div>
				<ul class="news-list news">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$my_query = new WP_Query(
						array('paged' => $paged, 'posts_per_page' => 3, 'post_type' => 'news'));?>
					<?php if ($my_query->have_posts()) :
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li class="news-item">
						<p class="news-date en"><?php the_time('Y.m.d');?></p>
						<p class="news-tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					</li>
					<?php endwhile;
							endif;
							wp_reset_postdata();
						?>
				</ul>
				<p class="sec-more more tbpc-none"><a href="/news/" class="more-btn">MORE</a></p>
			</div>
		</section>
	</div>
</main>
<?php get_footer(2);