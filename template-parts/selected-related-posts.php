<?php
/**
 * Plugins manually selected in the ACF relationship field.
 *
 * @package reboot
 */

$selected_post_ids = reboot_get_selected_related_post_ids( get_queried_object_id() );

if ( empty( $selected_post_ids ) ) {
    return;
}

$selected_posts = new WP_Query( array(
    'post_type'           => 'plugin',
    'post_status'         => 'publish',
    'post__in'            => $selected_post_ids,
    'orderby'             => 'post__in',
    'posts_per_page'      => count( $selected_post_ids ),
    'ignore_sticky_posts' => true,
) );

if ( ! $selected_posts->have_posts() ) {
    return;
}
?>

<div class="related-posts related-posts--selected fixed">
    <div class="related-posts__header">Рекомендуемые плагины</div>
    <div class="post-cards post-cards--vertical">
        <?php
        $card_number = 0;
        while ( $selected_posts->have_posts() ) :
            $selected_posts->the_post();
            $card_number++;
            get_template_part( 'template-parts/post-card/related' );
            do_action( THEME_SLUG . '_after_post_card', $card_number, 'related' );
        endwhile;
        ?>
    </div>
</div>

<?php wp_reset_postdata(); ?>
