<?php
defined('ABSPATH') || exit;

get_header();

$paged = max(1, get_query_var('paged'), get_query_var('page'));

$query = new WP_Query([
	'post_type'      => 'plugin',
	'post_status'    => 'publish',
	'paged'          => $paged,
	'posts_per_page' => 12,
]);

$post_type_obj = get_post_type_object('plugin');
$archive_title = $post_type_obj && !empty($post_type_obj->labels->name) ? $post_type_obj->labels->name : 'Плагины';
$archive_description = 'Бесплатные плагины для WordPress и WooCommerce, которые можно скачать без регистрации. Для каждого решения есть описание, документация и понятные инструкции по запуску.';
$development_url = 'https://plugins-store.ru/razrabotka-plagina-pod-klyuch/';
$contacts_url    = home_url('/contacts/');
?>

<main class="ps-plugin-archive">
	<section class="ps-plugin-archive__hero">
		<div class="container">
			<div class="ps-plugin-archive__hero-inner">
				<p class="ps-plugin-archive__eyebrow">Открытая библиотека плагинов</p>
				<h1 class="ps-plugin-archive__title">Готовые плагины.<br><span>Бесплатно для всех.</span></h1>
				<div class="ps-plugin-archive__description">
					<p><?php echo esc_html($archive_description); ?></p>
				</div>
				<div class="ps-plugin-archive__actions">
					<a class="ps-plugin-archive__button ps-plugin-archive__button--primary" href="#plugin-catalog">Выбрать плагин</a>
					<a class="ps-plugin-archive__button ps-plugin-archive__button--secondary" href="<?php echo esc_url($development_url); ?>">Заказать разработку</a>
				</div>
				<ul class="ps-plugin-archive__trust" aria-label="Преимущества библиотеки">
					<li>Без регистрации</li>
					<li>Документация внутри</li>
					<li>Можно доработать под проект</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="ps-plugin-archive__how" aria-labelledby="how-it-works-title">
		<div class="container">
			<div class="ps-plugin-archive__section-heading">
				<p>Всё просто</p>
				<h2 id="how-it-works-title">От готового решения к нужному результату</h2>
			</div>
			<div class="ps-plugin-archive__steps">
				<div class="ps-plugin-archive__step"><span>01</span><div><h3>Выберите плагин</h3><p>Посмотрите возможности, совместимость и сценарии использования.</p></div></div>
				<div class="ps-plugin-archive__step"><span>02</span><div><h3>Скачайте бесплатно</h3><p>Получите архив без оплаты, подписки и скрытых условий.</p></div></div>
				<div class="ps-plugin-archive__step"><span>03</span><div><h3>Расширьте при необходимости</h3><p>Если базового функционала мало — закажите доработку под свой процесс.</p></div></div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-archive__content" id="plugin-catalog">
		<div class="container">
			<div class="ps-plugin-archive__catalog-heading">
				<div><p>Каталог</p><h2><?php echo esc_html($archive_title); ?></h2></div>
				<span>Все решения доступны бесплатно</span>
			</div>
			<?php if ($query->have_posts()) : ?>
				<div class="ps-plugin-grid">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<?php $plugin_archive = function_exists('ps_get_plugin_file') ? ps_get_plugin_file('ps_plugin_archive', get_the_ID()) : null; ?>
						<article <?php post_class('ps-plugin-card'); ?>>
							<a class="ps-plugin-card__image-link" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
								<span class="ps-plugin-card__free">Бесплатно</span>
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('large', ['class' => 'ps-plugin-card__image']); ?>
								<?php else : ?>
									<?php get_template_part('template-parts/plugin/card-placeholder'); ?>
								<?php endif; ?>
							</a>

							<div class="ps-plugin-card__content">
								<?php
								$terms = get_the_terms(get_the_ID(), 'plugin_category');
								if (!empty($terms) && !is_wp_error($terms)) :
								?>
									<div class="ps-plugin-card__terms">
										<?php foreach ($terms as $term) : ?>
											<a class="ps-plugin-card__term" href="<?php echo esc_url(get_term_link($term)); ?>">
												<?php echo esc_html($term->name); ?>
											</a>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>

								<h2 class="ps-plugin-card__title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>

								<div class="ps-plugin-card__excerpt">
									<?php
									if (has_excerpt()) {
										the_excerpt();
									} else {
										echo '<p>' . esc_html(wp_trim_words(wp_strip_all_tags(get_the_content()), 24)) . '</p>';
									}
									?>
								</div>

								<div class="ps-plugin-card__footer">
									<a class="ps-plugin-card__details" href="<?php the_permalink(); ?>">Документация →</a>
									<?php if (!empty($plugin_archive['url'])) : ?>
										<a class="ps-plugin-card__button" href="<?php echo esc_url($plugin_archive['url']); ?>" download>Скачать</a>
									<?php else : ?>
										<a class="ps-plugin-card__button" href="<?php the_permalink(); ?>#ps-plugin-downloads-title">Скачать</a>
									<?php endif; ?>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				</div>

				<?php
				$pagination = paginate_links([
					'total'      => $query->max_num_pages,
					'current'    => $paged,
					'type'       => 'list',
					'prev_text'  => '←',
					'next_text'  => '→',
				]);

				if ($pagination) :
					?>
					<div class="ps-plugin-archive__pagination">
						<?php echo wp_kses_post($pagination); ?>
					</div>
				<?php endif; ?>

			<?php else : ?>
				<div class="ps-plugin-archive__empty">
					<h2>Плагины пока не добавлены</h2>
					<p>Когда здесь появятся записи, они будут автоматически показаны в каталоге.</p>
				</div>
			<?php endif; ?>

			<?php wp_reset_postdata(); ?>
		</div>
	</section>

	<section class="ps-plugin-archive__cta">
		<div class="container">
			<div class="ps-plugin-archive__cta-inner">
				<div><p>Не нашли нужного?</p><h2>Сделаю плагин под вашу задачу</h2><div>Расскажите, какого функционала не хватает. Я разберусь в задаче, предложу архитектуру и разработаю решение без лишних модулей.</div></div>
				<a href="<?php echo esc_url($contacts_url); ?>">Обсудить задачу <span>→</span></a>
			</div>
		</div>
	</section>
</main>

<style>
	.ps-plugin-archive {
	padding: 0 0 72px;
	background: #f8fafc;
}

.ps-plugin-archive__hero {
	padding: 76px 0 64px;
	background: #fff;
	border-bottom: 1px solid rgba(15, 23, 42, 0.06);
}

.ps-plugin-archive__hero-inner {
	max-width: 920px;
}

.ps-plugin-archive__eyebrow {
	display: inline-flex;
	align-items: center;
	min-height: 32px;
	padding: 0 14px;
	border-radius: 999px;
	background: rgba(37, 99, 235, 0.08);
	color: #2563eb;
	font-size: 13px;
	font-weight: 600;
	letter-spacing: 0.02em;
	margin: 0 0 18px;
}

.ps-plugin-archive__title {
	margin: 0 0 16px;
	font-size: clamp(32px, 4vw, 48px);
	line-height: 1.08;
	color: #0f172a;
}
.ps-plugin-archive__title span { color: #4d3bfe; }

.ps-plugin-archive__description {
	font-size: 17px;
	line-height: 1.7;
	color: #475569;
}

.ps-plugin-archive__description p:last-child {
	margin-bottom: 0;
}
.ps-plugin-archive__actions { display:flex; flex-wrap:wrap; gap:12px; margin-top:28px; }
.ps-plugin-archive__button { display:inline-flex; align-items:center; justify-content:center; min-height:50px; padding:0 22px; border-radius:12px; font-weight:700; text-decoration:none; }
.ps-plugin-archive__button--primary { background:#4d3bfe; color:#fff; }
.ps-plugin-archive__button--primary:hover { background:#3927db; color:#fff; }
.ps-plugin-archive__button--secondary { border:1px solid #cbd5e1; color:#0f172a; background:#fff; }
.ps-plugin-archive__trust { display:flex; flex-wrap:wrap; gap:24px; margin:28px 0 0; padding:0; list-style:none; color:#475569; font-size:14px; font-weight:600; }
.ps-plugin-archive__trust li { position:relative; padding-left:22px; }
.ps-plugin-archive__trust li::before { content:'✓'; position:absolute; left:0; color:#16a34a; font-weight:900; }
.ps-plugin-archive__how { padding:72px 0; background:#0f172a; color:#fff; }
.ps-plugin-archive__how>.container { width:min(calc(100% - 40px),1240px); margin-inline:auto; }
.ps-plugin-archive__section-heading { max-width:860px; }
.ps-plugin-archive__section-heading p,.ps-plugin-archive__catalog-heading p,.ps-plugin-archive__cta-inner>div>p { margin:0 0 8px; color:#8b7fff; font-size:13px; font-weight:800; letter-spacing:.1em; text-transform:uppercase; }
.ps-plugin-archive__section-heading h2,.ps-plugin-archive__catalog-heading h2 { margin:0; font-size:clamp(28px,3vw,38px); line-height:1.15; }
.ps-plugin-archive__steps { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:20px; margin-top:40px; }
.ps-plugin-archive__step { display:flex; align-items:flex-start; gap:16px; min-height:176px; padding:28px; border:1px solid rgba(255,255,255,.1); border-radius:18px; background:rgba(255,255,255,.04); }
.ps-plugin-archive__step>span { flex:0 0 auto; color:#8b7fff; font-weight:800; }
.ps-plugin-archive__step h3 { margin:0 0 8px; color:#fff; font-size:18px; }
.ps-plugin-archive__step p { margin:0; color:#94a3b8; line-height:1.6; font-size:14px; }

.ps-plugin-archive__content {
	padding-top: 64px;
}
.ps-plugin-archive__catalog-heading { display:flex; justify-content:space-between; align-items:end; gap:20px; margin-bottom:28px; }
.ps-plugin-archive__catalog-heading>span { color:#64748b; font-size:14px; }

.ps-plugin-grid {
	display: grid;
	grid-template-columns: repeat(3, minmax(0, 1fr));
	gap: 24px;
}

.ps-plugin-card {
	display: flex;
	flex-direction: column;
	min-height: 100%;
	background: #fff;
	border: 1px solid rgba(15, 23, 42, 0.08);
	border-radius: 24px;
	overflow: hidden;
	box-shadow: 0 12px 34px rgba(15, 23, 42, 0.05);
	transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.ps-plugin-card:hover {
	transform: translateY(-4px);
	box-shadow: 0 18px 44px rgba(15, 23, 42, 0.08);
	border-color: rgba(37, 99, 235, 0.18);
}

.ps-plugin-card__image-link {
	position: relative;
	display: block;
	aspect-ratio: 16 / 10;
	background: #e2e8f0;
	overflow: hidden;
}
.ps-plugin-card__free { position:absolute; z-index:2; top:14px; right:14px; padding:7px 11px; border-radius:999px; background:#dcfce7; color:#15803d; font-size:12px; font-weight:800; box-shadow:0 4px 14px rgba(15,23,42,.12); }

.ps-plugin-card__image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.ps-plugin-card__image--placeholder {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 100%;
	padding: 24px;
	background: linear-gradient(145deg, #111c46 0%, #293a86 52%, #4d3bfe 100%);
	color: #fff;
	isolation: isolate;
}

.ps-plugin-card__placeholder-grid {
	position: absolute;
	inset: 0;
	background-image: linear-gradient(rgba(255,255,255,.055) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.055) 1px, transparent 1px);
	background-size: 30px 30px;
	-webkit-mask-image: linear-gradient(to bottom right, #000, transparent 80%);
	mask-image: linear-gradient(to bottom right, #000, transparent 80%);
	z-index: -1;
}

.ps-plugin-card__placeholder-orb {
	position: absolute;
	border-radius: 50%;
	filter: blur(2px);
	z-index: -1;
}

.ps-plugin-card__placeholder-orb--one {
	top: -38%;
	right: -10%;
	width: 190px;
	height: 190px;
	background: rgba(104, 225, 255, .24);
}

.ps-plugin-card__placeholder-orb--two {
	bottom: -45%;
	left: -6%;
	width: 180px;
	height: 180px;
	background: rgba(162, 112, 255, .34);
}

.ps-plugin-card__placeholder-brand {
	display: flex;
	align-items: center;
	gap: 14px;
}

.ps-plugin-card__placeholder-logo {
	display: grid;
	place-items: center;
	width: 64px;
	height: 64px;
	border: 1px solid rgba(255,255,255,.3);
	border-radius: 18px;
	background: rgba(255,255,255,.13);
	box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 16px 32px rgba(5,10,35,.18);
	backdrop-filter: blur(8px);
}

.ps-plugin-card__placeholder-logo svg {
	width: 40px;
	height: 40px;
	fill: none;
	stroke: #fff;
	stroke-width: 4;
	stroke-linecap: round;
	stroke-linejoin: round;
}

.ps-plugin-card__placeholder-copy {
	display: flex;
	flex-direction: column;
	line-height: 1;
}

.ps-plugin-card__placeholder-copy strong {
	font-size: 38px;
	font-weight: 750;
}

.ps-plugin-card__placeholder-copy small {
	margin-top: 7px;
	color: rgba(255,255,255,.72);
	font-size: 11px;
	font-weight: 600;
	letter-spacing: .1em;
	text-transform: uppercase;
}

.ps-plugin-card__placeholder-badge {
	position: absolute;
	right: 18px;
	bottom: 16px;
	padding: 6px 10px;
	border: 1px solid rgba(255,255,255,.18);
	border-radius: 999px;
	background: rgba(8,15,46,.25);
	color: rgba(255,255,255,.82);
	font-size: 10px;
	font-weight: 600;
	letter-spacing: .04em;
}

.ps-plugin-card__content {
	display: flex;
	flex-direction: column;
	flex: 1;
	padding: 22px;
}

.ps-plugin-card__terms {
	display: flex;
	flex-wrap: wrap;
	gap: 8px;
	margin-bottom: 14px;
}

.ps-plugin-card__term {
	display: inline-flex;
	align-items: center;
	min-height: 28px;
	padding: 0 10px;
	border-radius: 999px;
	background: #eff6ff;
	color: #2563eb;
	font-size: 13px;
	font-weight: 600;
	text-decoration: none;
}

.ps-plugin-card__term:hover {
	background: #dbeafe;
}

.ps-plugin-card__title {
	margin: 0 0 12px;
	font-size: 22px;
	line-height: 1.3;
	color: #0f172a;
}

.ps-plugin-card__title a {
	color: inherit;
	text-decoration: none;
}

.ps-plugin-card__title a:hover {
	color: #2563eb;
}

.ps-plugin-card__excerpt {
	margin-bottom: 20px;
	font-size: 15px;
	line-height: 1.7;
	color: #475569;
}

.ps-plugin-card__excerpt p:last-child {
	margin-bottom: 0;
}

.ps-plugin-card__button {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	margin-top: auto;
	min-height: 46px;
	padding: 0 18px;
	border-radius: 12px;
	background: #4d3bfe;
	color: #fff;
	font-size: 15px;
	font-weight: 600;
	text-decoration: none;
	transition: background 0.25s ease, transform 0.25s ease;
}
.ps-plugin-card__footer { display:flex; align-items:center; justify-content:space-between; gap:12px; margin-top:auto; }
.ps-plugin-card__details { color:#475569; font-size:14px; font-weight:700; text-decoration:none; }
.ps-plugin-card__details:hover { color:#4d3bfe; }
.ps-plugin-card__footer .ps-plugin-card__button { margin-top:0; min-height:42px; }
.ps-plugin-archive__cta { padding:72px 0; background:#f8fafc; }
.ps-plugin-archive__cta-inner { display:flex; align-items:center; justify-content:space-between; gap:36px; padding:42px; border-radius:28px; background:linear-gradient(135deg,#4d3bfe,#312e81); color:#fff; }
.ps-plugin-archive__cta-inner h2 { margin:0 0 12px; color:#fff; font-size:clamp(28px,3vw,40px); }
.ps-plugin-archive__cta-inner>div>div { max-width:720px; color:#dddafa; line-height:1.7; }
.ps-plugin-archive__cta-inner>a { flex:0 0 auto; display:inline-flex; align-items:center; gap:18px; min-height:54px; padding:0 22px; border-radius:14px; background:#fff; color:#312e81; font-weight:800; text-decoration:none; }
.ps-plugin-archive__cta-inner>a span { font-size:22px; }

.ps-plugin-card__button:hover,
.ps-plugin-card__button:focus-visible {
	background: #3927db;
	color: #fff;
	transform: translateY(-1px);
}

.ps-plugin-archive__pagination {
	margin-top: 32px;
}

.ps-plugin-archive__pagination .page-numbers {
	display: flex;
	flex-wrap: wrap;
	gap: 8px;
	padding: 0;
	margin: 0;
	list-style: none;
}

.ps-plugin-archive__pagination .page-numbers li {
	margin: 0;
}

.ps-plugin-archive__pagination .page-numbers a,
.ps-plugin-archive__pagination .page-numbers span {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 42px;
	height: 42px;
	padding: 0 14px;
	border-radius: 10px;
	border: 1px solid rgba(15, 23, 42, 0.08);
	background: #fff;
	color: #0f172a;
	text-decoration: none;
	font-weight: 600;
}

.ps-plugin-archive__pagination .page-numbers .current {
	background: #2563eb;
	border-color: #2563eb;
	color: #fff;
}

.ps-plugin-archive__empty {
	padding: 48px 32px;
	border-radius: 24px;
	background: #fff;
	border: 1px solid rgba(15, 23, 42, 0.08);
	text-align: center;
}

@media (max-width: 1024px) {
	.ps-plugin-grid {
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}
	.ps-plugin-archive__steps { grid-template-columns:1fr; }
}

@media (max-width: 767px) {
	.ps-plugin-archive__hero {
		padding: 40px 0 24px;
	}
	.ps-plugin-archive__trust { display:grid; gap:10px; }
	.ps-plugin-archive__how { padding:44px 0; }
	.ps-plugin-archive__how>.container { width:min(calc(100% - 32px),1240px); }
	.ps-plugin-archive__steps { margin-top:28px; }
	.ps-plugin-archive__step { min-height:0; padding:22px; }
	.ps-plugin-archive__catalog-heading { display:block; }
	.ps-plugin-archive__catalog-heading>span { display:block; margin-top:10px; }
	.ps-plugin-card__footer { align-items:stretch; flex-direction:column; }
	.ps-plugin-archive__cta-inner { display:block; padding:28px 22px; }
	.ps-plugin-archive__cta-inner>a { margin-top:24px; justify-content:center; }
	.ps-plugin-archive__cta { padding:48px 0; }

	.ps-plugin-archive__content {
		padding-top: 24px;
	}

	.ps-plugin-grid {
		grid-template-columns: 1fr;
		gap: 18px;
	}

	.ps-plugin-card__content {
		padding: 18px;
	}

	.ps-plugin-card__title {
		font-size: 20px;
	}
}
</style>

<?php get_footer(); ?>
