<?php return array(
    'root' => array(
        'name' => 'payplug/payplug-woocommerce',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => '7628f86ab11638af81506917512125c9331a2a15',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'payplug/payplug-php' => array(
            'pretty_version' => '3.7.1',
            'version' => '3.7.1.0',
            'reference' => 'd5e75b2d0545c63eec06c454d5fe9907c2733fd7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../payplug/payplug-php',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'payplug/payplug-woocommerce' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '7628f86ab11638af81506917512125c9331a2a15',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
