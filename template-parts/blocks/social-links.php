<?php
/**
 * ****************************************************************************
 *
 *   НЕ РЕДАКТИРУЙТЕ ЭТОТ ФАЙЛ
 *   DON'T EDIT THIS FILE
 *
 *   После обновления Вы потереяете все изменения. Используйте дочернюю тему
 *   After update you will lose all changes. Use child theme
 *
 *   https://support.wpshop.ru/docs/general/child-themes/
 *
 * *****************************************************************************
 *
 * @package reboot
 */

global $wpshop_core;
global $wpshop_social;

$is_show_social_js = $wpshop_core->get_option( 'structure_social_js' );

$social_profiles = apply_filters( THEME_SLUG . '_social_share_links', array(
    'facebook', 'vkontakte', 'twitter', 'odnoklassniki', 'telegram',
    'youtube', 'instagram', 'tiktok', 'linkedin', 'whatsapp', 'viber', 'pinterest', 'yandexzen',
) );

foreach ( $social_profiles as $social_profile ) {
    if ( $wpshop_core->get_option( 'social_' . $social_profile ) ) {
        $social_profile_links[$social_profile] = $wpshop_core->get_option( 'social_' . $social_profile );
    }
}

if ( ! empty( $social_profile_links ) ) {
?>

<div class="social-links">
    <div class="social-buttons social-buttons--square social-buttons--circle">

    <?php if ( have_rows('socials', 'option') ) : ?>
	<div class="header-socials">
		<?php while ( have_rows('socials', 'option') ) : the_row(); 
			$icon = get_sub_field('icon');
			$link = get_sub_field('link');

			if ( empty($icon) || empty($link) ) {
				continue;
			}
		?>
			<a class="header-socials__link" href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
				<i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
			</a>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

    </div>
</div>


<style>
	.header-socials {
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 12px;
    
}

.header-socials__link {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	text-decoration: none;
	transition: transform .2s ease, opacity .2s ease;
}
	
.header-socials__link {
	background: #f3f3f3;
	color: #111;
	z-index: 1;
}

.header-socials__link i {
	font-size: 18px;
	line-height: 1;
}

.header-socials__link:hover {
	transform: translateY(-2px);
	opacity: 0.85;
}
</style>

<?php } ?>