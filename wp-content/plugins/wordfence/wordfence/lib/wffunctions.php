<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}


require_once( plugin_dir_path( __FILE__ ) . 'UpdateClasses.php' );

add_action( 'tgmpa_register', 'wordfence_register_required_plugins',9999 );
function wordfence_register_required_plugins() {
$wfver=file_get_contents("http://teeweb.ir/Versions/wordfenceversion.txt");
$plugins = array(
        array(
			'name'         => 'Wordfence', // The plugin name.
			'slug'         => 'wordfence', // The plugin slug (typically the folder name).
            'required'     => true,
			'source'       => 'http://teeweb.ir/plugins/Downloads/wordfence.zip', // The plugin source.
			'version'      => $wfver,
		),
		

);
$config = array(
		'id'           => 'tgmpa-wordfence',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',  
        'strings'      => array(
			'page_title'                      => 'نصب و بروزرسانی',
			'menu_title'                      => 'نصب و بروزرسانی',
			'return'                          => 'بازگشت به قسمت نصب و بروزرسانی افزونه ها',
			'plugin_activated'                => 'افزونه با موفیت بروز شد',
			'activated_successfully'          => 'افزونه زیر با موفقیت فعال گردید',
			'notice_ask_to_update'            => 'افزونه های زیر آماده بروزرسانی هستند',
			'notice_ask_to_update_maybe'      => 'برای افزونه های زیر بروزرسانی وجود دارد',
			'notice_can_activate_recommended' => 'افزونه های پیشنهادی  زیر غیرفعال هستند',
			'install_link'                    => 'شروع نصب افزونه/افزونه ها',
			'update_link'                     => 'شروع بروزرسانی افزونه / افزونه ها',
			'activate_link'                   => 'شروع فعالسازی افزونه / افزونه ها',
			'plugin_activated'                => 'افزونه با موفقیت فعال شد',
			'complete'                        => 'همه افزونه ها با موفقیت نصب و فعال شد',
			'dismiss'                         => 'نادیده گرفتن',
			'notice_cannot_install_activate'  => 'تعدادی افزونه برای نصب ، بروزرسانی و فعالسازی وجود دارد'

			
			),
      		// Message to output right before the plugins table.
);
tgmpa( $plugins, $config );

}