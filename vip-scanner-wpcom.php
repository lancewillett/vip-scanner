<?php
/**
 * Plugin Name: VIP Scanner WordPress.com Rules
 * Description: Custom rules for the VIP Scanner specific to WordPress.com
 * Author: Automattic
 *
 * License: GPLv2
 */

add_action( 'vip_scanner_loaded', 'vip_scanner_custom_load_rules' );

function vip_scanner_custom_load_rules() {
	VIP_Scanner::get_instance()->register_review( 'VIP Theme Review', array(
		'VIPWhitelistCheck' => __DIR__ . '/vip-scanner-wpcom/checks/VIPWhitelistCheck.php',
		'VIPRestrictedPatternsCheck' => __DIR__ . '/vip-scanner-wpcom/checks/VIPRestrictedPatternsCheck.php',
		'VIPRestrictedCommandsCheck' => __DIR__ . '/vip-scanner-wpcom/checks/VIPRestrictedCommandsCheck.php',
	) );
}
