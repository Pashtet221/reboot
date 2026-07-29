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
$archive_description = 'Каталог кастомных решений и интеграций для WordPress и WooCommerce: checkout, CDEK, DaData, HivePress и другие плагины под проект.';
?>

<main class="ps-plugin-archive">
	<section class="ps-plugin-archive__hero">
		<div class="container">
			<div class="ps-plugin-archive__hero-inner">
				<p class="ps-plugin-archive__eyebrow">Каталог решений</p>
				<h1 class="ps-plugin-archive__title"><?php echo esc_html($archive_title); ?></h1>
				<div class="ps-plugin-archive__description">
					<p><?php echo esc_html($archive_description); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-archive__content">
		<div class="container">
			<?php if ($query->have_posts()) : ?>
				<div class="ps-plugin-grid">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<article <?php post_class('ps-plugin-card'); ?>>
							<a class="ps-plugin-card__image-link" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
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

								<a class="ps-plugin-card__button" href="<?php the_permalink(); ?>">
									Подробнее
								</a>
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
</main>

<style>
	.ps-plugin-archive {
	padding: 0 0 72px;
	background: #f8fafc;
}

.ps-plugin-archive__hero {
	padding: 56px 0 32px;
	background: #fff;
	border-bottom: 1px solid rgba(15, 23, 42, 0.06);
}

.ps-plugin-archive__hero-inner {
	max-width: 860px;
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

.ps-plugin-archive__description {
	font-size: 17px;
	line-height: 1.7;
	color: #475569;
}

.ps-plugin-archive__description p:last-child {
	margin-bottom: 0;
}

.ps-plugin-archive__content {
	padding-top: 36px;
}

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
	display: block;
	aspect-ratio: 16 / 10;
	background: #e2e8f0;
	overflow: hidden;
}

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
}

@media (max-width: 767px) {
	.ps-plugin-archive__hero {
		padding: 40px 0 24px;
	}

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
