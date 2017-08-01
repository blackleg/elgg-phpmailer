<?php
/**
 * Set default plugin settings for PHPMailer
 */

$plugin = elgg_get_plugin_from_id('phpmailer');
if ($plugin) {
   
    $defaults = array(
        'elgg_phpmailer_override' => 'false',
        'elgg_phpmailer_smtp' => 0,
        'elgg_phpmailer_host' => '',
        'elgg_phpmailer_smtp_auth' => 0,
        'elgg_phpmailer_username' => '',
        'elgg_phpmailer_password' => '',
        'elgg_phpmailer_port' => 255,
        'elgg_phpmailer_ssl' => 0,
        'elgg_phpmailer_tls' => 0,
        'elgg_nonstd_mta' => 0,
    );

	foreach ($defaults as $name => $value) {
		if (!isset($plugin->$name)) {
			$plugin->$name = $value;
		}
	}
}
