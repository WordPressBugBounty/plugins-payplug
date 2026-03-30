<?php return array(
    'root' => array(
        'name' => 'payplug/payplug-woocommerce',
        'pretty_version' => '2.17.0',
        'version' => '2.17.0.0',
        'reference' => null,
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
            'pretty_version' => '4.0.0',
            'version' => '4.0.0.0',
            'reference' => 'ad19dee72100668e14c8c4974a6791ca2d1c8482',
            'type' => 'library',
            'install_path' => __DIR__ . '/../payplug/payplug-php',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'payplug/payplug-woocommerce' => array(
            'pretty_version' => '2.17.0',
            'version' => '2.17.0.0',
            'reference' => null,
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
