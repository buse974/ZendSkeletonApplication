<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
	'dal-conf' => array(
		'adapter' => 'db-adapter',
		'cache'   => 'storage_memcached',
		'log'     => 'log-system',
		'namespace' => array(
			'demo' => array(
				'service' => 'Application\\Service',
				'mapper'  => 'Application\\Mapper',
				'model'   => 'Application\\Model',
			),
		),
	),
	'json-rpc-server' => array(
		'cache' => 'storage_memcached',
		'log' => 'log-system',
		'persistence' => true,
		'services' => array(
			'demo_service_demo',
		),
	),
);
