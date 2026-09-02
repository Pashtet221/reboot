<?php
/**
 * Shared product landing for the focused WooCommerce plugin pages.
 *
 * Expects $ps_plugin_page to be defined by the selected page template.
 */
defined('ABSPATH') || exit;

if (empty($ps_plugin_page) || !is_array($ps_plugin_page)) {
	return;
}

get_header();

$plugin_file = function_exists('ps_get_plugin_file') ? ps_get_plugin_file('ps_plugin_archive', get_the_ID()) : null;
$download_url = !empty($plugin_file['url']) ? $plugin_file['url'] : '';
$article = !empty($ps_plugin_page['article_slug']) ? get_page_by_path($ps_plugin_page['article_slug'], OBJECT, 'post') : null;
?>
<main id="primary" class="site-main ps-product-page">
	<section class="ps-product-hero">
		<div class="container ps-product-hero__grid">
			<div>
				<p class="ps-product-kicker"><?php echo esc_html($ps_plugin_page['kicker']); ?></p>
				<h1><?php echo esc_html($ps_plugin_page['title']); ?></h1>
				<p class="ps-product-lead"><?php echo esc_html($ps_plugin_page['lead']); ?></p>
				<div class="ps-product-actions">
					<?php if ($download_url) : ?>
						<a class="ps-product-button ps-product-button--primary" href="<?php echo esc_url($download_url); ?>" download>Скачать бесплатно</a>
					<?php else : ?>
						<a class="ps-product-button ps-product-button--primary" href="<?php echo esc_url(home_url('/contacts/')); ?>">Получить плагин</a>
					<?php endif; ?>
					<a class="ps-product-button ps-product-button--secondary" href="#how-it-works">Как это работает</a>
				</div>
			</div>
			<aside class="ps-product-summary" aria-label="Кратко о плагине">
				<strong>Результат</strong>
				<p><?php echo esc_html($ps_plugin_page['result']); ?></p>
				<ul>
					<?php foreach ($ps_plugin_page['highlights'] as $highlight) : ?>
						<li><?php echo esc_html($highlight); ?></li>
					<?php endforeach; ?>
				</ul>
			</aside>
		</div>
	</section>

	<section class="ps-product-section" aria-labelledby="problems-title">
		<div class="container">
			<div class="ps-product-heading"><p>Зачем нужен плагин</p><h2 id="problems-title">Какие проблемы он решает</h2></div>
			<div class="ps-product-cards">
				<?php foreach ($ps_plugin_page['problems'] as $item) : ?>
					<article><h3><?php echo esc_html($item[0]); ?></h3><p><?php echo esc_html($item[1]); ?></p></article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="ps-product-section ps-product-section--soft" id="how-it-works" aria-labelledby="works-title">
		<div class="container">
			<div class="ps-product-heading"><p>Принцип работы</p><h2 id="works-title">Что происходит после установки</h2></div>
			<div class="ps-product-steps">
				<?php foreach ($ps_plugin_page['steps'] as $index => $item) : ?>
					<article><span><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span><h3><?php echo esc_html($item[0]); ?></h3><p><?php echo esc_html($item[1]); ?></p></article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="ps-product-section" aria-labelledby="features-title">
		<div class="container ps-product-detail">
			<div><div class="ps-product-heading"><p>Возможности</p><h2 id="features-title">Что умеет плагин</h2></div><p class="ps-product-description"><?php echo esc_html($ps_plugin_page['description']); ?></p></div>
			<ul class="ps-product-checklist">
				<?php foreach ($ps_plugin_page['features'] as $feature) : ?><li><?php echo esc_html($feature); ?></li><?php endforeach; ?>
			</ul>
		</div>
	</section>

	<?php if ($article instanceof WP_Post) : ?>
		<section class="ps-product-article"><div class="container ps-product-article__box"><div><p>Полезный материал</p><h2><?php echo esc_html(get_the_title($article)); ?></h2><div><?php echo esc_html(wp_trim_words(wp_strip_all_tags($article->post_excerpt ?: $article->post_content), 30)); ?></div></div><a href="<?php echo esc_url(get_permalink($article)); ?>">Читать статью →</a></div></section>
	<?php endif; ?>

	<?php if (function_exists('ps_render_plugin_specs')) { ps_render_plugin_specs(array('version' => '1.0.0', 'wp_tested' => 'WordPress 6.6+', 'wc_tested' => 'WooCommerce 9.0+', 'updated' => '2 сентября 2026')); } ?>
	<section class="ps-product-cta"><div class="container"><div><h2>Нужна адаптация под ваш магазин?</h2><p>Доработаю сценарий, интерфейс и интеграции под процессы проекта — без изменений ядра WordPress и WooCommerce.</p></div><a class="ps-product-button ps-product-button--primary" href="<?php echo esc_url(home_url('/contacts/')); ?>">Обсудить задачу</a></div></section>
</main>
<style>
.ps-product-page{--accent:#6c40ff;color:#0f172a;background:#fff}.ps-product-hero{padding:76px 0;background:linear-gradient(135deg,#fff 55%,#f5f3ff)}.ps-product-hero__grid,.ps-product-detail{display:grid;grid-template-columns:minmax(0,1.2fr) minmax(300px,.8fr);gap:42px;align-items:center}.ps-product-kicker,.ps-product-heading>p,.ps-product-article__box>div>p{margin:0 0 12px;color:var(--accent);font-size:13px;font-weight:900;letter-spacing:.08em;text-transform:uppercase}.ps-product-hero h1{max-width:850px;margin:0 0 20px;font-size:clamp(36px,5vw,62px);line-height:1.05}.ps-product-lead{max-width:780px;margin:0 0 28px;color:#475569;font-size:19px;line-height:1.7}.ps-product-actions{display:flex;flex-wrap:wrap;gap:12px}.ps-product-button{display:inline-flex;align-items:center;justify-content:center;padding:14px 22px;border-radius:14px;font-weight:800;text-decoration:none}.ps-product-button--primary{background:var(--accent);color:#fff}.ps-product-button--secondary{border:1px solid #ddd6fe;background:#fff;color:var(--accent)}.ps-product-summary{padding:30px;border:1px solid #ede9fe;border-radius:28px;background:#fff;box-shadow:0 20px 60px rgba(76,29,149,.1)}.ps-product-summary strong{font-size:22px}.ps-product-summary p{color:#475569;line-height:1.65}.ps-product-summary ul,.ps-product-checklist{margin:18px 0 0;padding:0;list-style:none}.ps-product-summary li,.ps-product-checklist li{position:relative;margin:11px 0;padding-left:27px;line-height:1.55}.ps-product-summary li:before,.ps-product-checklist li:before{position:absolute;left:0;color:var(--accent);font-weight:900;content:'✓'}.ps-product-section{padding:70px 0}.ps-product-section--soft,.ps-product-article{background:#f8fafc}.ps-product-heading{max-width:820px;margin-bottom:28px}.ps-product-heading h2,.ps-product-article h2,.ps-product-cta h2{margin:0;font-size:clamp(28px,3vw,42px);line-height:1.15}.ps-product-cards,.ps-product-steps{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px}.ps-product-cards article,.ps-product-steps article{padding:25px;border:1px solid #e2e8f0;border-radius:22px;background:#fff}.ps-product-cards h3,.ps-product-steps h3{margin:0 0 10px;font-size:21px}.ps-product-cards p,.ps-product-steps p,.ps-product-description{margin:0;color:#64748b;line-height:1.65}.ps-product-steps span{display:block;margin-bottom:12px;color:var(--accent);font-weight:900}.ps-product-checklist{margin:0;padding:26px;border-radius:24px;background:#f8fafc}.ps-product-article{padding:56px 0}.ps-product-article__box,.ps-product-cta .container{display:flex;align-items:center;justify-content:space-between;gap:30px}.ps-product-article__box>div{max-width:830px}.ps-product-article__box>div>div,.ps-product-cta p{margin-top:12px;color:#64748b;line-height:1.65}.ps-product-article a{flex:0 0 auto;color:var(--accent);font-weight:900;text-decoration:none}.ps-product-cta{padding:64px 0}.ps-product-cta p{margin-bottom:0}@media(max-width:900px){.ps-product-hero__grid,.ps-product-detail{grid-template-columns:1fr}.ps-product-cards,.ps-product-steps{grid-template-columns:1fr}.ps-product-article__box,.ps-product-cta .container{display:block}.ps-product-article a,.ps-product-cta a{margin-top:20px}}@media(max-width:640px){.ps-product-hero,.ps-product-section{padding:48px 0}.ps-product-lead{font-size:17px}.ps-product-summary{padding:22px}}
</style>
<?php if (function_exists('ps_render_plugin_related_sections')) { ps_render_plugin_related_sections(); } get_footer(); ?>
