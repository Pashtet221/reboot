<?php
/**
 * Branded fallback artwork for plugin cards without a featured image.
 *
 * @package reboot
 */

defined('ABSPATH') || exit;

$plugin_title = trim(get_the_title());
$initial      = function_exists('mb_substr') ? mb_substr($plugin_title, 0, 1) : substr($plugin_title, 0, 1);
$initial      = $initial ?: 'P';
$initial      = function_exists('mb_strtoupper') ? mb_strtoupper($initial) : strtoupper($initial);
?>

<div class="ps-plugin-card__image ps-plugin-card__image--placeholder" aria-hidden="true">
	<span class="ps-plugin-card__placeholder-orb ps-plugin-card__placeholder-orb--one"></span>
	<span class="ps-plugin-card__placeholder-orb ps-plugin-card__placeholder-orb--two"></span>
	<span class="ps-plugin-card__placeholder-grid"></span>
	<span class="ps-plugin-card__placeholder-brand">
		<span class="ps-plugin-card__placeholder-logo">
			<svg viewBox="0 0 48 48" role="img" focusable="false">
				<path d="M15 9h14.5a5.5 5.5 0 0 1 0 11H15V9Z" />
				<path d="M15 20h18a5.5 5.5 0 0 1 0 11H15V20Z" />
				<path d="M15 31h11.5a5.5 5.5 0 0 1 0 11H15V31Z" />
			</svg>
		</span>
		<span class="ps-plugin-card__placeholder-copy">
			<strong><?php echo esc_html($initial); ?></strong>
			<small>WordPress plugin</small>
		</span>
	</span>
	<span class="ps-plugin-card__placeholder-badge">Готовое решение</span>
</div>
