<?php
/**
 * Template Name: Plugin Landing — AI PO Translator
 Template Post Type: plugin
 */

defined('ABSPATH') || exit;

get_header();

$title       = get_the_title() ?: 'AI перевод .po файлов для WordPress и Woodmart';
$subtitle    = 'Кастомное решение для автоматического перевода .po и .pot файлов для WordPress, WooCommerce, Loco Translate и Woodmart.';
$price_text  = 'По запросу';
$cta_primary = '#contact';
$cta_second  = '#features';

?>

<style>
	.ps-plugin-page {
		--ps-bg: #f6f8fb;
		--ps-surface: #ffffff;
		--ps-text: #1f2937;
		--ps-heading: #111827;
		--ps-muted: #6b7280;
		--ps-line: #e5e7eb;
		--ps-accent: #16a34a;
		--ps-accent-hover: #15803d;
		--ps-accent-soft: rgba(22, 163, 74, 0.08);
		--ps-shadow: 0 20px 60px rgba(15, 23, 42, 0.08);
		--ps-radius-lg: 28px;
		--ps-radius-md: 22px;
		--ps-radius-sm: 16px;
		--ps-container: 1240px;
		background: #ffff;
		color: var(--ps-text);
	}

	.ps-plugin-page * {
		box-sizing: border-box;
	}
	
	.ps-plugin-hero {
		padding: 72px 0 44px;
	}

	.ps-plugin-hero__grid {
		display: grid;
		grid-template-columns: minmax(0, 1.15fr) minmax(320px, 0.85fr);
		gap: 28px;
		align-items: stretch;
	}

	.ps-plugin-badge {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		min-height: 38px;
		padding: 8px 16px;
		border-radius: 999px;
		background: var(--ps-accent-soft);
		color: var(--ps-accent);
		font-size: 14px;
		font-weight: 700;
		line-height: 1.2;
		letter-spacing: 0.01em;
		margin-bottom: 18px;
	}

	.ps-plugin-hero__content,
	.ps-plugin-hero__card,
	.ps-plugin-card,
	.ps-plugin-step,
	.ps-plugin-highlight,
	.ps-plugin-note,
	.ps-plugin-cta {
		background: var(--ps-surface);
		border: 1px solid rgba(229, 231, 235, 0.95);
		box-shadow: var(--ps-shadow);
	}

	.ps-plugin-hero__content {
		padding: 40px;
		border-radius: var(--ps-radius-lg);
	}

	.ps-plugin-hero__title {
		margin: 0 0 18px;
		font-size: clamp(34px, 5vw, 56px);
		line-height: 1.02;
		font-weight: 800;
		color: var(--ps-heading);
		letter-spacing: -0.03em;
	}

	.ps-plugin-hero__text {
		margin: 0;
		font-size: 18px;
		line-height: 1.75;
		color: var(--ps-muted);
		max-width: 740px;
	}

	.ps-plugin-actions {
		display: flex;
		flex-wrap: wrap;
		gap: 14px;
		margin-top: 28px;
	}

	.ps-plugin-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		min-height: 54px;
		padding: 14px 24px;
		border-radius: 999px;
		font-size: 16px;
		font-weight: 700;
		line-height: 1.2;
		text-decoration: none;
		transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease, border-color .2s ease;
	}

	.ps-plugin-btn:hover {
		transform: translateY(-2px);
	}

	.ps-plugin-btn--primary {
		background: var(--ps-accent);
		color: #fff;
		box-shadow: 0 18px 34px rgba(22, 163, 74, 0.24);
	}

	.ps-plugin-btn--primary:hover {
		background: var(--ps-accent-hover);
		color: #fff;
	}

	.ps-plugin-btn--secondary {
		background: #fff;
		color: var(--ps-heading);
		border: 1px solid var(--ps-line);
	}

	.ps-plugin-btn--secondary:hover {
		border-color: #cbd5e1;
		color: var(--ps-heading);
	}

	.ps-plugin-hero__meta {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		gap: 12px;
		margin-top: 26px;
	}

	.ps-plugin-meta-item {
		padding: 16px 18px;
		border-radius: 18px;
		background: #f8fafc;
		border: 1px solid #e5e7eb;
	}

	.ps-plugin-meta-label {
		display: block;
		margin-bottom: 6px;
		font-size: 12px;
		font-weight: 700;
		line-height: 1.2;
		letter-spacing: 0.08em;
		text-transform: uppercase;
		color: #94a3b8;
	}

	.ps-plugin-meta-value {
		display: block;
		font-size: 16px;
		font-weight: 700;
		line-height: 1.45;
		color: var(--ps-heading);
	}

	.ps-plugin-hero__card {
		padding: 34px;
		border-radius: var(--ps-radius-lg);
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		gap: 24px;
	}

	.ps-plugin-hero__card-title {
		margin: 0 0 12px;
		font-size: 28px;
		line-height: 1.15;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-hero__card-text {
		margin: 0;
		font-size: 16px;
		line-height: 1.75;
		color: var(--ps-muted);
	}

	.ps-plugin-checklist {
		margin: 0;
		padding: 0;
		list-style: none;
		display: grid;
		gap: 12px;
	}

	.ps-plugin-checklist li {
		position: relative;
		padding-left: 28px;
		font-size: 15px;
		line-height: 1.65;
		color: var(--ps-text);
	}

	.ps-plugin-checklist li::before {
		content: "";
		position: absolute;
		left: 0;
		top: 8px;
		width: 12px;
		height: 12px;
		border-radius: 50%;
		background: var(--ps-accent);
		box-shadow: 0 0 0 6px rgba(22, 163, 74, 0.12);
	}

	.ps-plugin-head {
		max-width: 780px;
		margin: 0 auto 34px;
		text-align: center;
	}

	.ps-plugin-eyebrow {
		display: inline-flex;
		margin-bottom: 12px;
		padding: 6px 14px;
		border-radius: 999px;
		background: #fff;
		border: 1px solid var(--ps-line);
		font-size: 13px;
		font-weight: 700;
		line-height: 1.2;
		color: #64748b;
	}

	.ps-plugin-heading {
		margin: 0 0 14px;
		font-size: clamp(28px, 4vw, 42px);
		line-height: 1.1;
		font-weight: 800;
		letter-spacing: -0.03em;
		color: var(--ps-heading);
	}

	.ps-plugin-lead {
		margin: 0;
		font-size: 17px;
		line-height: 1.8;
		color: var(--ps-muted);
	}

	.ps-plugin-grid {
		display: grid;
		gap: 20px;
	}

	.ps-plugin-grid--2 {
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}

	.ps-plugin-grid--3 {
		grid-template-columns: repeat(3, minmax(0, 1fr));
	}

	.ps-plugin-card {
		padding: 30px;
		border-radius: var(--ps-radius-md);
		height: 100%;
	}

	.ps-plugin-card h3 {
		margin: 0 0 12px;
		font-size: 22px;
		line-height: 1.2;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-card p,
	.ps-plugin-card li {
		margin: 0;
		font-size: 15px;
		line-height: 1.75;
		color: var(--ps-muted);
	}

	.ps-plugin-card ul {
		margin: 14px 0 0;
		padding-left: 20px;
	}

	.ps-plugin-highlight {
		padding: 34px;
		border-radius: var(--ps-radius-lg);
	}

	.ps-plugin-highlight__title {
		margin: 0 0 14px;
		font-size: 30px;
		line-height: 1.15;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-highlight__text {
		margin: 0;
		font-size: 17px;
		line-height: 1.8;
		color: var(--ps-muted);
	}

	.ps-plugin-steps {
		display: grid;
		grid-template-columns: repeat(4, minmax(0, 1fr));
		gap: 18px;
	}

	.ps-plugin-step {
		padding: 28px;
		border-radius: var(--ps-radius-md);
	}

	.ps-plugin-step__num {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 44px;
		height: 44px;
		margin-bottom: 16px;
		border-radius: 50%;
		background: var(--ps-accent-soft);
		color: var(--ps-accent);
		font-size: 18px;
		font-weight: 800;
	}

	.ps-plugin-step h3 {
		margin: 0 0 10px;
		font-size: 20px;
		line-height: 1.2;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-step p {
		margin: 0;
		font-size: 15px;
		line-height: 1.7;
		color: var(--ps-muted);
	}

	.ps-plugin-note {
		padding: 34px;
		border-radius: var(--ps-radius-lg);
	}

	.ps-plugin-note p:last-child,
	.ps-plugin-card p:last-child,
	.ps-plugin-highlight__text:last-child {
		margin-bottom: 0;
	}

	.ps-plugin-cta {
		padding: 42px;
		border-radius: 32px;
		text-align: center;
	}

	.ps-plugin-cta h2 {
		margin: 0 0 14px;
		font-size: clamp(30px, 4vw, 46px);
		line-height: 1.08;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-cta p {
		max-width: 760px;
		margin: 0 auto;
		font-size: 17px;
		line-height: 1.8;
		color: var(--ps-muted);
	}

	.ps-plugin-cta .ps-plugin-actions {
		justify-content: center;
	}

	.ps-plugin-anchor {
		position: relative;
		top: -110px;
	}

	@media (max-width: 1100px) {
		.ps-plugin-hero__grid,
		.ps-plugin-grid--3,
		.ps-plugin-steps {
			grid-template-columns: 1fr 1fr;
		}
	}

	@media (max-width: 860px) {
		.ps-plugin-section {
			padding: 70px 0;
		}

		.ps-plugin-hero {
			padding: 52px 0 24px;
		}

		.ps-plugin-hero__grid,
		.ps-plugin-grid--2,
		.ps-plugin-grid--3,
		.ps-plugin-steps {
			grid-template-columns: 1fr;
		}

		.ps-plugin-hero__content,
		.ps-plugin-hero__card,
		.ps-plugin-card,
		.ps-plugin-step,
		.ps-plugin-highlight,
		.ps-plugin-note,
		.ps-plugin-cta {
			padding: 24px;
			border-radius: 22px;
		}

		.ps-plugin-hero__meta {
			grid-template-columns: 1fr;
		}

		.ps-plugin-hero__title {
			font-size: 34px;
		}

		.ps-plugin-hero__text,
		.ps-plugin-lead,
		.ps-plugin-highlight__text,
		.ps-plugin-cta p {
			font-size: 16px;
			line-height: 1.7;
		}
	}
</style>

<div class="ps-plugin-page">
	<section class="ps-plugin-hero">
		<div class="ps-plugin-container">
			<div class="ps-plugin-hero__grid">
				<div class="ps-plugin-hero__content">
					<span class="ps-plugin-badge">WordPress / Loco Translate / Woodmart</span>
					<h1 class="ps-plugin-hero__title"><?php echo esc_html($title); ?></h1>
					<p class="ps-plugin-hero__text"><?php echo esc_html($subtitle); ?></p>

					<div class="ps-plugin-actions">
						<a class="ps-plugin-btn ps-plugin-btn--primary" href="<?php echo esc_url($cta_primary); ?>">Заказать установку</a>
						<a class="ps-plugin-btn ps-plugin-btn--secondary" href="<?php echo esc_url($cta_second); ?>">Посмотреть возможности</a>
					</div>

					<div class="ps-plugin-hero__meta">
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">Совместимость</span>
							<span class="ps-plugin-meta-value">WordPress, WooCommerce, Woodmart, .po/.pot</span>
						</div>
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">Формат работы</span>
							<span class="ps-plugin-meta-value">Автоматический AI перевод файлов локализации</span>
						</div>
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">Для кого</span>
							<span class="ps-plugin-meta-value">Разработчики, магазины, проекты на Woodmart</span>
						</div>
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">Стоимость</span>
							<span class="ps-plugin-meta-value"><?php echo esc_html($price_text); ?></span>
						</div>
					</div>
				</div>

				<aside class="ps-plugin-hero__card">
					<div>
						<h2 class="ps-plugin-hero__card-title">Что это за решение</h2>
						<p class="ps-plugin-hero__card-text">Это кастомный инструмент для перевода файлов локализации WordPress, который помогает перевести тему, плагин или магазин, когда стандартный сценарий через Loco Translate неудобен или не закрывает задачу проекта.</p>
					</div>

					<ul class="ps-plugin-checklist">
						<li>перевод .po и .pot файлов</li>
						<li>подходит для тем и плагинов WordPress</li>
						<li>удобен для Woodmart и WooCommerce</li>
						<li>ускоряет локализацию больших проектов</li>
					</ul>
				</aside>
			</div>
		</div>
	</section>

	<span id="features" class="ps-plugin-anchor"></span>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">Проблема</span>
				<h2 class="ps-plugin-heading">Почему стандартный перевод через Loco Translate подходит не всем</h2>
				<p class="ps-plugin-lead">На реальных WordPress-проектах перевод интерфейса часто превращается в рутину. Особенно если речь идет о крупных темах вроде Woodmart, магазинах на WooCommerce или плагинах с большим количеством строк. Ручной перевод занимает слишком много времени, а стандартные инструменты не всегда удобны для такой работы.</p>
			</div>

			<div class="ps-plugin-highlight">
				<h3 class="ps-plugin-highlight__title">Решение под практическую задачу WordPress</h3>
				<p class="ps-plugin-highlight__text">Этот шаблон страницы подает ваш продукт не как абстрактный AI-сервис, а как понятный рабочий инструмент для перевода файлов локализации. Пользователь загружает .po или .pot файл, запускает обработку и получает готовую основу перевода для темы, плагина или магазина.</p>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">Возможности</span>
				<h2 class="ps-plugin-heading">Что делает этот плагин</h2>
				<p class="ps-plugin-lead">Инструмент помогает автоматизировать перевод файлов локализации WordPress и ускоряет подготовку проекта к запуску для русскоязычной аудитории.</p>
			</div>

			<div class="ps-plugin-grid ps-plugin-grid--3">
				<div class="ps-plugin-card">
					<h3>Переводит .po и .pot</h3>
					<p>Подходит для локализации тем WordPress, WooCommerce и кастомных плагинов без ручной обработки каждой строки.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Ускоряет перевод Woodmart</h3>
					<p>Удобен для проектов на Woodmart, где строк много и ручной перевод становится слишком долгим и дорогим.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Подходит для рабочих проектов</h3>
					<p>Это решение можно использовать как основу перевода, а затем при необходимости быстро доработать отдельные формулировки вручную.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">Кому подойдет</span>
				<h2 class="ps-plugin-heading">Для кого это решение</h2>
				<p class="ps-plugin-lead">Этот продукт лучше всего работает там, где нужно быстро перевести WordPress-проект и не тратить время на сотни строк вручную.</p>
			</div>

			<div class="ps-plugin-grid ps-plugin-grid--2">
				<div class="ps-plugin-card">
					<h3>Разработчикам WordPress</h3>
					<p>Когда нужно быстро подготовить перевод темы, плагина или клиентского сайта.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Владельцам WooCommerce-магазинов</h3>
					<p>Когда нужно перевести интерфейс магазина, системные строки и шаблон без долгой ручной работы.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Тем, кто работает с Woodmart</h3>
					<p>Когда нужно локализовать тему и быстро привести магазин к рабочему русскоязычному виду.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Тем, кто запускает новый проект</h3>
					<p>Когда нужно получить базовый перевод быстро, а затем уже точечно доработать формулировки под проект.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">Как это работает</span>
				<h2 class="ps-plugin-heading">Простой процесс без лишней рутины</h2>
				<p class="ps-plugin-lead">Страница сразу объясняет клиенту, как выглядит работа с решением. Это снижает количество лишних вопросов и делает продукт понятнее.</p>
			</div>

			<div class="ps-plugin-steps">
				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">1</span>
					<h3>Загрузка файла</h3>
					<p>Берется .po или .pot файл локализации WordPress-темы или плагина.</p>
				</div>

				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">2</span>
					<h3>Запуск перевода</h3>
					<p>Пользователь запускает автоматическую обработку и получает базовый перевод.</p>
				</div>

				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">3</span>
					<h3>Проверка результата</h3>
					<p>При необходимости можно точечно поправить отдельные строки под стиль проекта.</p>
				</div>

				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">4</span>
					<h3>Использование в проекте</h3>
					<p>Готовый перевод подключается к теме, плагину или WooCommerce-магазину.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-grid ps-plugin-grid--2">
				<div class="ps-plugin-note">
					<h2 class="ps-plugin-heading" style="font-size:32px; margin-bottom:14px;">Отдельно про Woodmart</h2>
					<p class="ps-plugin-lead">Woodmart — удобная, но достаточно большая тема. В ней много интерфейсных строк, кнопок, состояний магазина, элементов каталога и WooCommerce-шаблонов. Этот инструмент помогает сократить время на локализацию и быстрее довести магазин до рабочего состояния.</p>
				</div>

				<div class="ps-plugin-note">
					<h2 class="ps-plugin-heading" style="font-size:32px; margin-bottom:14px;">Что вы продаете по сути</h2>
					<p class="ps-plugin-lead">Не просто плагин, а решение для ускорения локализации WordPress. Это сильнее воспринимается на продающей странице и лучше подходит под ваш сайт с кастомными плагинами и доработками.</p>
				</div>
			</div>
		</div>
	</section>

	<span id="contact" class="ps-plugin-anchor"></span>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-cta">
				<h2>Нужен перевод WordPress-темы или плагина под ваш проект</h2>
				<p>Могу дать сам плагин, установить его на сайт, адаптировать под Woodmart, WooCommerce или другую WordPress-тему, а также помочь с переводом конкретного проекта.</p>
				<div class="ps-plugin-actions">
					<a class="ps-plugin-btn ps-plugin-btn--primary" href="#">Купить плагин</a>
					<a class="ps-plugin-btn ps-plugin-btn--secondary" href="#">Связаться по проекту</a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
ps_render_plugin_related_content(get_the_ID());
get_footer();
