<?php
ob_start();
include plugin_dir_path(__FILE__) . 'views/plugin_compare_table.php';
$plugin_compare_table = ob_get_contents();
ob_end_clean();
$cminds_plugin_config = array(
	'plugin-is-pro'					 => false,
	'plugin-version'				 => '1.1.8',
	'plugin-abbrev'					 => 'cmcrpr',
	'plugin-short-slug'				 => 'product-recommendations',
	'plugin-parent-short-slug'		 => '',
	'plugin-affiliate'				 => '',
	'plugin-campign'				 => '?utm_source=productrecomendfree&utm_campaign=freeupgrade',
	'plugin-redirect-after-install'	 => admin_url( 'admin.php?page=cm_product_recommend&page=cmcrpr_settings' ),
	'plugin-show-guide'				 => TRUE,
	'plugin-guide-text'				 => '<div style="display:block">
        <ol>
            <li>Go to <strong>"Add new Product"</strong>.</li>
            <li>Product Title should be the <strong>term you would like to search</strong> in the content of your post or pages when displaying the Product Recommendation .</li>
            <li><strong>URL</strong> allows you choose where the Product Recommendation points to.</li>
            <li>Last thing you can set is the <strong>Featured Image</strong> which will be displayed in the Product Recommendation box.</li>
            <li>Save the new product you have added</li>
            <li>Now the Product Recommendation will be displayed on the bottom of posts/pages when the product "Title" is found in the content of the page.</li>
            <li>In the plugin settings  you can modify the behavior of the plugin</li>
            <li>If you have problems try disabling the option "Enable Caching Mechanisms"</li>
          </ol>
    </div>',
	'plugin-guide-video-height'		 => 240,
	'plugin-guide-videos'			 => array(
		array( 'title' => 'Installation tutorial', 'video_id' => '159221614' ),
	),
	'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Introduction to Product recommendations ', 'video_time' => '0:00' ),
        array( 'title' => 'Multiple product for each term', 'video_time' => 'More' ),
        array( 'title' => 'Synonyms Support ', 'video_time' => 'More' ),
        array( 'title' => 'Categories Support', 'video_time' => 'More' ),
        array( 'title' => 'Product Weight', 'video_time' => 'More' ),
        array( 'title' => 'Support Custom Post Types', 'video_time' => 'More' ),
        array( 'title' => 'Reports and Statistics', 'video_time' => 'More' ),
        array( 'title' => 'Configure Product Title and Description', 'video_time' => 'More' ),
        array( 'title' => 'Import and Export', 'video_time' => 'More' ),
    ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Product recommendations Premium Features', 'video_id' => '141020931' ),
    ),
	'plugin-file'					 => CMCRPR_PLUGIN_FILE,
	'plugin-dir-path'				 => plugin_dir_path( CMCRPR_PLUGIN_FILE ),
	'plugin-dir-url'				 => plugin_dir_url( CMCRPR_PLUGIN_FILE ),
	'plugin-basename'				 => plugin_basename( CMCRPR_PLUGIN_FILE ),
	'plugin-icon'					 => '',
	'plugin-name'					 => CMCRPR_NAME,
	'plugin-license-name'			 => CMCRPR_CANONICAL_NAME,
	'plugin-slug'					 => '',
	'plugin-menu-item'				 => 'edit.php?post_type=' . CMCRPR_Base::POST_TYPE,
	'plugin-textdomain'				 => CMCRPR_SLUG_NAME,
	'plugin-userguide-key'			 => '2728-cm-contextual-product-recommendations-cmcpr-free-version-tutorial',
	'plugin-video-tutorials-url'			 => 'https://www.videolessonsplugin.com/video-lesson/lesson/wp-contextual-product-recommendations/',
	'plugin-store-url'				 => 'https://www.cminds.com/wordpress-plugins-library/cm-product-recommendations-for-wordpress?utm_source=productrecomend&utm_campaign=freeupgrade&upgrade=1',
	'plugin-support-url'			 => 'https://www.cminds.com/contact/',
	'plugin-review-url'				 => 'https://www.cminds.com/wordpress-plugins-library/custom-product-recommendations-for-wordpress#reviews',
	'plugin-changelog-url'			 => CMCRPR_RELEASE_NOTES,
	'plugin-licensing-aliases'		 => array( CMCRPR_LICENSE_NAME ),
	'plugin-compare-table'			 => $plugin_compare_table,
);