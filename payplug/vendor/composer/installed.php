<?php return array(
    'root' => array(
        'name' => 'payplug/payplug-woocommerce',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'fc61d3f89d217a069d29277002f37cfac0183724',
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
            'pretty_version' => '3.5.4',
            'version' => '3.5.4.0',
            'reference' => '9fe3787e8ad98500141168447bb2b84c47c43be2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../payplug/payplug-php',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'payplug/payplug-woocommerce' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'fc61d3f89d217a069d29277002f37cfac0183724',
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
