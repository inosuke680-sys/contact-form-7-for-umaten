<?php
/**
 * Umaten Theme for Contact Form 7
 * ウマ店カスタムテーマ
 *
 * プライバシーポリシーページのデザインに合わせたスタイルシート
 */

/**
 * Registers and enqueues Umaten theme stylesheet.
 */
add_action( 'wpcf7_enqueue_styles', 'wpcf7_umaten_enqueue_styles', 10, 0 );

function wpcf7_umaten_enqueue_styles() {
	wp_register_style(
		'contact-form-7-umaten',
		wpcf7_plugin_url( 'includes/css/umaten-theme.css' ),
		array( 'contact-form-7' ),
		WPCF7_VERSION,
		'all'
	);

	wp_enqueue_style( 'contact-form-7-umaten' );
}
