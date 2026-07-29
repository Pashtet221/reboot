<?php
/**
 * Manually selected related plugins powered by ACF.
 *
 * @package reboot
 */

add_action( 'acf/init', 'reboot_register_selected_related_posts_fields' );

/**
 * Register the plugin relationship field on regular posts.
 */
function reboot_register_selected_related_posts_fields() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key'      => 'group_reboot_selected_related_posts',
        'title'    => 'Рекомендуемые плагины',
        'fields'   => array(
            array(
                'key'           => 'field_reboot_selected_related_posts',
                'label'         => 'Плагины',
                'name'          => 'reboot_selected_related_posts',
                'type'          => 'relationship',
                'instructions'  => 'Выберите и расположите в нужном порядке плагины, которые будут показаны в конце записи.',
                'post_type'     => array( 'plugin' ),
                'post_status'   => array( 'publish' ),
                'filters'       => array( 'search', 'taxonomy' ),
                'return_format' => 'id',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'post',
                ),
            ),
        ),
    ) );
}

/**
 * Get selected plugin IDs in the order set in ACF.
 *
 * @param int $post_id Current post ID.
 * @return int[]
 */
function reboot_get_selected_related_post_ids( $post_id ) {
    if ( ! function_exists( 'get_field' ) ) {
        return array();
    }

    $selected_posts = get_field( 'reboot_selected_related_posts', $post_id );
    if ( empty( $selected_posts ) || ! is_array( $selected_posts ) ) {
        return array();
    }

    $post_ids = array_map( static function ( $selected_post ) {
        return $selected_post instanceof WP_Post ? $selected_post->ID : (int) $selected_post;
    }, $selected_posts );

    $post_ids = array_filter( array_unique( $post_ids ) );

    return array_values( array_diff( $post_ids, array( (int) $post_id ) ) );
}
