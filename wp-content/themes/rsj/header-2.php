<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>株式会社 リサーチジャパン</title>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2？family = Montserrat：wght @ 900＆ display = swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="/asset/css/slick.css" />
	<link rel="stylesheet" type="text/css" href="/asset/css/slick-theme.css" />
	<?php $my_theme = wp_get_theme(); ?>
	<link type="text/css" href="/asset/css/style.css?ver<?php echo $my_theme->get( 'Version' ) ?>" rel="stylesheet" media="all">
	<script id="_bownow_ts">
	var _bownow_ts = document.createElement('script');
	_bownow_ts.charset = 'utf-8';
	_bownow_ts.src = 'https://contents.bownow.jp/js/UTC_d012fe451e1f6506abba/trace.js';
	document.getElementsByTagName('head')[0].appendChild(_bownow_ts);
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="content-wrap">

		<?php if ( is_home() || is_front_page() ) : ?>
		<header class="header top-header">
			<?php else : ?>
			<header class="header layer-header">
				<?php endif; ?>

				<!--

		<header <?php if(is_home()): ?>class="header" <?php else : ?>class="header layer-header" <?php endif; ?>>-->
				<div class="header-inner">
					<ul class="header-logo">
						<li <?php if(is_home()): ?>class="header-logo_img pc-none" <?php else : ?>class="header-logo_img" <?php endif; ?>>
							<a href="/">
								<img src="/asset/img/top/logo.svg" alt="" />
							</a>
						</li>
						<li class="header-logo_btn pc-none">
							<a href="tel:03-5846-9220"><i class="fas fa-phone fa-flip-horizontal"></i></a>
							<a href="/contact/"><i class="fas fa-envelope"></i></a>
						</li>
					</ul>
					<nav class="header-gnav gnav">
						<ul class="gnav-list_pc pcgnav">
							<li class="pcgnav-item">
								<p class="text-center about-menu">ABOUT US</p>
								<ul class="pcgnav-item_sub">
									<li><a href="/strengths/">当社の強み</a></li>
									<li><a href="/factoring/">ファクタリングについて</a></li>
									<li><a href="/consulting/">財務コンサルティング</a></li>
								</ul>
							</li>
							<li class="pcgnav-item">
								<a class="text-center" href="/flow/">
									<p>お申し込みまでの流れ</p>
								</a>
							</li>
							<li class="pcgnav-item">
								<a class="text-center" href="/faq/">
									<p>よくある質問</p>
								</a>
							</li>
							<li class="pcgnav-item">
								<a class="text-center" href="/voice/">
									<p>お客様の声</p>
								</a>
							</li>
							<li class="pcgnav-item">
								<a class="text-center" href="/column/">
									<p>コラム</p>
								</a>
							</li>
							<li class="pcgnav-item">
								<a class="text-center" href="/about/">
									<p>会社概要</p>
								</a>
							</li>
							<li class="pcgnav-item">
								<a class="text-center" href="/news/">
									<p>ニュース</p>
								</a>
							</li>
							<li class="pcgnav-item">
								<a class="text-center" href="/recruit/">
									<p>採用情報</p>
								</a>
							</li>
							<!--
						<li class="pcgnav-item_btn">
							<a href="tel:03"><i class="fas fa-phone fa-flip-horizontal"></i>お電話でのお問い合わせ</a>
						</li>
						<li class="pcgnav-item_btn">
							<a href=""><i class="fas fa-envelope"></i>メールでのお問い合わせ</a>
						</li>-->
						</ul>
						<div id="js-gnav_sp">
							<div class="gnav-sp spgnav">
								<div class="spgnav-inner">
									<ul class="spgnav-list">
										<li class="spgnav-item">
											<a href="/">
												<p>TOP</p>
											</a>
										</li>
										<li class="spgnav-item">
											<span>ABOUT US</span>
											<ul class="spgnav-item_sub">
												<li>
													<a href="/strengths/">
														<p>当社の強み</p>
													</a>
												</li>
												<li>
													<a href="/factoring/">
														<p>ファクタリングについて</p>
													</a>
												</li>
												<li>
													<a href="/consulting/">
														<p>財務コンサルティング</p>
													</a>
												</li>
											</ul>
										</li>
										<li class="spgnav-item">
											<a href="/flow/">
												<p>お申し込みまでの流れ</p>
											</a>
										</li>
										<li class="spgnav-item">
											<a href="/faq/">
												<p>よくある質問</p>
											</a>
										</li>
										<li class="spgnav-item">
											<a href="/voice/">
												<p>お客様の声</p>
											</a>
										</li>
										<li class="spgnav-item">
											<a href="/column/">
												<p>コラム</p>
											</a>
										</li>
										<li class="spgnav-item">
											<a href="/about/">
												<p>会社概要</p>
											</a>
										</li>
										<li class="spgnav-item">
											<a href="/news/">
												<p>ニュース</p>
											</a>
										</li>
										<li class="spgnav-item">
											<a href="/recruit/">
												<p>採用情報</p>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="gnav-toggle">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div id="mask" class="gnav-mask"></div>
						</div>
					</nav>
				</div>
			</header>