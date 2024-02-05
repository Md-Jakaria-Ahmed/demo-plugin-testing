<?php
  private const DEMO_DEPENEDENCIES = [
    'plugins' => [
        'woocommerce/woocommerce.php',
        'dokan-lite/dokan.php',
        'dokan-pro/dokan-pro.php'
    ],
    'classes' => [
        'Woocommerce',
        'WeDevs_Dokan',
        'Dokan_Pro'
    ],
    'functions' => [
        // 'dokan_admin_menu_position'
    ],
];

    /**
     * Admin error notice for missing dependency plugins
     *
     * @return void
     */
    public function admin_error_notice_for_dependency_missing() {
        $class = 'notice notice-error';
		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $this->get_dependency_message() ) );
    }