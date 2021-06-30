<?php
/*
Template Name: policy
*/
?>
<?php get_header(2) ?>
<main id="<?php echo esc_attr( $post->post_name ); ?>-page" class="<?php echo esc_attr( $post->post_name ); ?>-page layer-page">
	<div class="main-inner">
		<!-- =====pageheader===== -->
		<section class="sec-pegeheader">
			<div class="sec-inner">
				<div class="sec-header">
					<h1 class="sec-tit bold en">POLICY</h1>
					<p class="sec-tit_bg bold en">POLICY</p>
					<h2 class="sec-tit_sub">プライバシーポリシー</h2>
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
			<div class="sec-inner">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
    {
			bcn_display();
    }?>
				</div>
			</div>
		</section>
		<!-- =====pagetitle===== -->
		<section class="sec-pagetitle pagetitle">
			<div class="sec-inner">
				<h1 class="pagetitle-tit bold text-center">プライバシーポリシー</h1>
			</div>
		</section>
		<section class="sec-policy">
			<div class="sec-inner">
				<p>ANIMO（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>

				<p class="tit">個人情報の管理</p>
				<p>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>

				<p class="tit">個人情報の利用目的</p>
				<p>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>

				<p class="tit">個人情報の第三者への開示・提供の禁止</p>
				<p>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません</p>。

				<ul>
					<li> お客さまの同意がある場合</li>
					<li> お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
					<li>法令に基づき開示することが必要である場合</li>
				</ul>
				<p class="tit">
			個人情報の安全対策</p>
				<p>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>

				<p class="tit">ご本人の照会</p>
				<p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>

				<p class="tit">法令、規範の遵守と見直し</p>
				<p>当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>

				<p class="tit">お問い合せ</p>
				<p>当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>

				<p class="contact">
			ANIMO<br>
			〒111-0053　東京都台東区浅草橋3-28-2　高木ビル2Ｆ<br>
			TEL.0120-888-799
		</p>
			</div>
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