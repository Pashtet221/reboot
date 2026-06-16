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

$logotype_image = $wpshop_core->get_option( 'logotype_image' );

if ( ! empty( $logotype_image ) ) {
    $logotype_attachment_id = attachment_url_to_postid( $logotype_image );
    if ( ! empty( $logotype_attachment_id ) ) {
        $logotype_metadata = wp_get_attachment_metadata( $logotype_attachment_id );

        if ( ! empty( $logotype_metadata['width'] ) ) {
            $logotype_attributes[] = 'width="' . $logotype_metadata['width'] . '"';
        }
        if ( ! empty( $logotype_metadata['height'] ) ) {
            $logotype_attributes[] = 'height="' . $logotype_metadata['height'] . '"';
        }
    }
}

$logotype_attributes[] = 'alt="' . esc_attr( apply_filters( THEME_SLUG . '_logotype_alt', get_bloginfo( 'name' ) ) ) . '"';
$logotype_html = '<img src="' . $logotype_image . '" ' . implode( ' ', $logotype_attributes ) . '>';

?>

<div class="site-branding">

    <?php if ( has_custom_logo() ) : ?>
        <div class="site-logotype">
            <?php
            if ( is_front_page() && ! is_paged() ) {
                the_custom_logo();
            } else {
                echo '<a href="' . esc_url( home_url('/') ) . '">';
                the_custom_logo();
                echo '</a>';
            }
            ?>
        </div>
    <?php endif; ?>

</div><!-- .site-branding -->


<style>
	/* =========================
   Site branding / logo
   ========================= */

.site-branding {
    display: flex;
    align-items: center;
    min-height: 64px;
}

.site-logotype {
    display: flex;
    align-items: center;
    line-height: 1;
}

/* Сам логотип */
.site-logotype img {
    display: block;
    max-height: 44px;      /* оптимально для Reboot */
    width: auto;
    height: auto;
}

/* Если логотип кликабельный */
.site-logotype a {
    display: inline-flex;
    align-items: center;
}

/* Убираем лишние отступы у WP */
.custom-logo-link {
    display: inline-flex;
    align-items: center;
}

/* Убираем баги с инлайн-картинками */
.custom-logo {
    vertical-align: middle;
}

</style>