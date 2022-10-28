<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb94da8783d57b303480f23a00e57df49
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/..' . '/automattic/jetpack-assets/actions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WCPay\\MultiCurrency\\' => 20,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WCPay\\MultiCurrency\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/multi-currency',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\A8c_Mc_Stats' => __DIR__ . '/..' . '/automattic/jetpack-a8c-mc-stats/src/class-a8c-mc-stats.php',
        'Automattic\\Jetpack\\Admin_UI\\Admin_Menu' => __DIR__ . '/..' . '/automattic/jetpack-admin-ui/src/class-admin-menu.php',
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/..' . '/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Logo' => __DIR__ . '/..' . '/automattic/jetpack-logo/src/class-logo.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/..' . '/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Automattic\\Jetpack\\Config' => __DIR__ . '/..' . '/automattic/jetpack-config/src/class-config.php',
        'Automattic\\Jetpack\\Connection\\Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-client.php',
        'Automattic\\Jetpack\\Connection\\Error_Handler' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-error-handler.php',
        'Automattic\\Jetpack\\Connection\\Initial_State' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-initial-state.php',
        'Automattic\\Jetpack\\Connection\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-manager.php',
        'Automattic\\Jetpack\\Connection\\Manager_Interface' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/interface-manager.php',
        'Automattic\\Jetpack\\Connection\\Nonce_Handler' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-nonce-handler.php',
        'Automattic\\Jetpack\\Connection\\Package_Version' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-package-version.php',
        'Automattic\\Jetpack\\Connection\\Package_Version_Tracker' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-package-version-tracker.php',
        'Automattic\\Jetpack\\Connection\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-plugin.php',
        'Automattic\\Jetpack\\Connection\\Plugin_Storage' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-plugin-storage.php',
        'Automattic\\Jetpack\\Connection\\REST_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-rest-connector.php',
        'Automattic\\Jetpack\\Connection\\Rest_Authentication' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-rest-authentication.php',
        'Automattic\\Jetpack\\Connection\\Secrets' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-secrets.php',
        'Automattic\\Jetpack\\Connection\\Server_Sandbox' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-server-sandbox.php',
        'Automattic\\Jetpack\\Connection\\Tokens' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-tokens.php',
        'Automattic\\Jetpack\\Connection\\Urls' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-urls.php',
        'Automattic\\Jetpack\\Connection\\Utils' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-utils.php',
        'Automattic\\Jetpack\\Connection\\Webhooks' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-webhooks.php',
        'Automattic\\Jetpack\\Connection\\Webhooks\\Authorize_Redirect' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/webhooks/class-authorize-redirect.php',
        'Automattic\\Jetpack\\Connection\\XMLRPC_Async_Call' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-xmlrpc-async-call.php',
        'Automattic\\Jetpack\\Connection\\XMLRPC_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-xmlrpc-connector.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/..' . '/automattic/jetpack-constants/src/class-constants.php',
        'Automattic\\Jetpack\\Heartbeat' => __DIR__ . '/..' . '/automattic/jetpack-heartbeat/src/class-heartbeat.php',
        'Automattic\\Jetpack\\IdentityCrisis\\REST_Endpoints' => __DIR__ . '/..' . '/automattic/jetpack-identity-crisis/src/class-rest-endpoints.php',
        'Automattic\\Jetpack\\IdentityCrisis\\UI' => __DIR__ . '/..' . '/automattic/jetpack-identity-crisis/src/class-ui.php',
        'Automattic\\Jetpack\\Identity_Crisis' => __DIR__ . '/..' . '/automattic/jetpack-identity-crisis/src/class-identity-crisis.php',
        'Automattic\\Jetpack\\Password_Checker' => __DIR__ . '/..' . '/automattic/jetpack-password-checker/src/class-password-checker.php',
        'Automattic\\Jetpack\\Redirect' => __DIR__ . '/..' . '/automattic/jetpack-redirect/src/class-redirect.php',
        'Automattic\\Jetpack\\Roles' => __DIR__ . '/..' . '/automattic/jetpack-roles/src/class-roles.php',
        'Automattic\\Jetpack\\Status' => __DIR__ . '/..' . '/automattic/jetpack-status/src/class-status.php',
        'Automattic\\Jetpack\\Status\\Cache' => __DIR__ . '/..' . '/automattic/jetpack-status/src/class-cache.php',
        'Automattic\\Jetpack\\Status\\Host' => __DIR__ . '/..' . '/automattic/jetpack-status/src/class-host.php',
        'Automattic\\Jetpack\\Status\\Visitor' => __DIR__ . '/..' . '/automattic/jetpack-status/src/class-visitor.php',
        'Automattic\\Jetpack\\Sync\\Actions' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-actions.php',
        'Automattic\\Jetpack\\Sync\\Codec_Interface' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/interface-codec.php',
        'Automattic\\Jetpack\\Sync\\Data_Settings' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-data-settings.php',
        'Automattic\\Jetpack\\Sync\\Dedicated_Sender' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-dedicated-sender.php',
        'Automattic\\Jetpack\\Sync\\Default_Filter_Settings' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-default-filter-settings.php',
        'Automattic\\Jetpack\\Sync\\Defaults' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-defaults.php',
        'Automattic\\Jetpack\\Sync\\Functions' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-functions.php',
        'Automattic\\Jetpack\\Sync\\Health' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-health.php',
        'Automattic\\Jetpack\\Sync\\JSON_Deflate_Array_Codec' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-json-deflate-array-codec.php',
        'Automattic\\Jetpack\\Sync\\Listener' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-listener.php',
        'Automattic\\Jetpack\\Sync\\Lock' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-lock.php',
        'Automattic\\Jetpack\\Sync\\Main' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-main.php',
        'Automattic\\Jetpack\\Sync\\Modules' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-modules.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Attachments' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-attachments.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Callables' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-callables.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Comments' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-comments.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Constants' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-constants.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Full_Sync' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-full-sync.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Full_Sync_Immediately' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-full-sync-immediately.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Import' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-import.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Menus' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-menus.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Meta' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-meta.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Module' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-module.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Network_Options' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-network-options.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Options' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-options.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Plugins' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-plugins.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Posts' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-posts.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Protect' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-protect.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Search' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-search.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Stats' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-stats.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Term_Relationships' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-term-relationships.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Terms' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-terms.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Themes' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-themes.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Updates' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-updates.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Users' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-users.php',
        'Automattic\\Jetpack\\Sync\\Modules\\WP_Super_Cache' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-wp-super-cache.php',
        'Automattic\\Jetpack\\Sync\\Modules\\WooCommerce' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/class-woocommerce.php',
        'Automattic\\Jetpack\\Sync\\Package_Version' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-package-version.php',
        'Automattic\\Jetpack\\Sync\\Queue' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-queue.php',
        'Automattic\\Jetpack\\Sync\\Queue_Buffer' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-queue-buffer.php',
        'Automattic\\Jetpack\\Sync\\REST_Endpoints' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-rest-endpoints.php',
        'Automattic\\Jetpack\\Sync\\REST_Sender' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-rest-sender.php',
        'Automattic\\Jetpack\\Sync\\Replicastore' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-replicastore.php',
        'Automattic\\Jetpack\\Sync\\Replicastore\\Table_Checksum' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/replicastore/class-table-checksum.php',
        'Automattic\\Jetpack\\Sync\\Replicastore\\Table_Checksum_Usermeta' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/replicastore/class-table-checksum-usermeta.php',
        'Automattic\\Jetpack\\Sync\\Replicastore\\Table_Checksum_Users' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/replicastore/class-table-checksum-users.php',
        'Automattic\\Jetpack\\Sync\\Replicastore_Interface' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/interface-replicastore.php',
        'Automattic\\Jetpack\\Sync\\Sender' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-sender.php',
        'Automattic\\Jetpack\\Sync\\Server' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-server.php',
        'Automattic\\Jetpack\\Sync\\Settings' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-settings.php',
        'Automattic\\Jetpack\\Sync\\Simple_Codec' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-simple-codec.php',
        'Automattic\\Jetpack\\Sync\\Users' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-users.php',
        'Automattic\\Jetpack\\Sync\\Utils' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/class-utils.php',
        'Automattic\\Jetpack\\Terms_Of_Service' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-terms-of-service.php',
        'Automattic\\Jetpack\\Tracking' => __DIR__ . '/..' . '/automattic/jetpack-tracking/src/class-tracking.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Composer\\Installers\\AglInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AglInstaller.php',
        'Composer\\Installers\\AimeosInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AimeosInstaller.php',
        'Composer\\Installers\\AnnotateCmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AnnotateCmsInstaller.php',
        'Composer\\Installers\\AsgardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AsgardInstaller.php',
        'Composer\\Installers\\AttogramInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AttogramInstaller.php',
        'Composer\\Installers\\BaseInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BaseInstaller.php',
        'Composer\\Installers\\BitrixInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BitrixInstaller.php',
        'Composer\\Installers\\BonefishInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BonefishInstaller.php',
        'Composer\\Installers\\CakePHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CakePHPInstaller.php',
        'Composer\\Installers\\ChefInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ChefInstaller.php',
        'Composer\\Installers\\CiviCrmInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CiviCrmInstaller.php',
        'Composer\\Installers\\ClanCatsFrameworkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ClanCatsFrameworkInstaller.php',
        'Composer\\Installers\\CockpitInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CockpitInstaller.php',
        'Composer\\Installers\\CodeIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CodeIgniterInstaller.php',
        'Composer\\Installers\\Concrete5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Concrete5Installer.php',
        'Composer\\Installers\\CraftInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CraftInstaller.php',
        'Composer\\Installers\\CroogoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CroogoInstaller.php',
        'Composer\\Installers\\DecibelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DecibelInstaller.php',
        'Composer\\Installers\\DframeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DframeInstaller.php',
        'Composer\\Installers\\DokuWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DokuWikiInstaller.php',
        'Composer\\Installers\\DolibarrInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DolibarrInstaller.php',
        'Composer\\Installers\\DrupalInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DrupalInstaller.php',
        'Composer\\Installers\\ElggInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ElggInstaller.php',
        'Composer\\Installers\\EliasisInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EliasisInstaller.php',
        'Composer\\Installers\\ExpressionEngineInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ExpressionEngineInstaller.php',
        'Composer\\Installers\\EzPlatformInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EzPlatformInstaller.php',
        'Composer\\Installers\\FuelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelInstaller.php',
        'Composer\\Installers\\FuelphpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelphpInstaller.php',
        'Composer\\Installers\\GravInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/GravInstaller.php',
        'Composer\\Installers\\HuradInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/HuradInstaller.php',
        'Composer\\Installers\\ImageCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ImageCMSInstaller.php',
        'Composer\\Installers\\Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Installer.php',
        'Composer\\Installers\\ItopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ItopInstaller.php',
        'Composer\\Installers\\JoomlaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/JoomlaInstaller.php',
        'Composer\\Installers\\KanboardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KanboardInstaller.php',
        'Composer\\Installers\\KirbyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KirbyInstaller.php',
        'Composer\\Installers\\KnownInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KnownInstaller.php',
        'Composer\\Installers\\KodiCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KodiCMSInstaller.php',
        'Composer\\Installers\\KohanaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KohanaInstaller.php',
        'Composer\\Installers\\LanManagementSystemInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LanManagementSystemInstaller.php',
        'Composer\\Installers\\LaravelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LaravelInstaller.php',
        'Composer\\Installers\\LavaLiteInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LavaLiteInstaller.php',
        'Composer\\Installers\\LithiumInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LithiumInstaller.php',
        'Composer\\Installers\\MODULEWorkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODULEWorkInstaller.php',
        'Composer\\Installers\\MODXEvoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODXEvoInstaller.php',
        'Composer\\Installers\\MagentoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MagentoInstaller.php',
        'Composer\\Installers\\MajimaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MajimaInstaller.php',
        'Composer\\Installers\\MakoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MakoInstaller.php',
        'Composer\\Installers\\MantisBTInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MantisBTInstaller.php',
        'Composer\\Installers\\MauticInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MauticInstaller.php',
        'Composer\\Installers\\MayaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MayaInstaller.php',
        'Composer\\Installers\\MediaWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MediaWikiInstaller.php',
        'Composer\\Installers\\MicroweberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MicroweberInstaller.php',
        'Composer\\Installers\\ModxInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ModxInstaller.php',
        'Composer\\Installers\\MoodleInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MoodleInstaller.php',
        'Composer\\Installers\\OctoberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OctoberInstaller.php',
        'Composer\\Installers\\OntoWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OntoWikiInstaller.php',
        'Composer\\Installers\\OsclassInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OsclassInstaller.php',
        'Composer\\Installers\\OxidInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OxidInstaller.php',
        'Composer\\Installers\\PPIInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PPIInstaller.php',
        'Composer\\Installers\\PhiftyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhiftyInstaller.php',
        'Composer\\Installers\\PhpBBInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhpBBInstaller.php',
        'Composer\\Installers\\PimcoreInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PimcoreInstaller.php',
        'Composer\\Installers\\PiwikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PiwikInstaller.php',
        'Composer\\Installers\\PlentymarketsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PlentymarketsInstaller.php',
        'Composer\\Installers\\Plugin' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Plugin.php',
        'Composer\\Installers\\PortoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PortoInstaller.php',
        'Composer\\Installers\\PrestashopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PrestashopInstaller.php',
        'Composer\\Installers\\ProcessWireInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ProcessWireInstaller.php',
        'Composer\\Installers\\PuppetInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PuppetInstaller.php',
        'Composer\\Installers\\PxcmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PxcmsInstaller.php',
        'Composer\\Installers\\RadPHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RadPHPInstaller.php',
        'Composer\\Installers\\ReIndexInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ReIndexInstaller.php',
        'Composer\\Installers\\Redaxo5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Redaxo5Installer.php',
        'Composer\\Installers\\RedaxoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RedaxoInstaller.php',
        'Composer\\Installers\\RoundcubeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RoundcubeInstaller.php',
        'Composer\\Installers\\SMFInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SMFInstaller.php',
        'Composer\\Installers\\ShopwareInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ShopwareInstaller.php',
        'Composer\\Installers\\SilverStripeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SilverStripeInstaller.php',
        'Composer\\Installers\\SiteDirectInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SiteDirectInstaller.php',
        'Composer\\Installers\\StarbugInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/StarbugInstaller.php',
        'Composer\\Installers\\SyDESInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyDESInstaller.php',
        'Composer\\Installers\\SyliusInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyliusInstaller.php',
        'Composer\\Installers\\Symfony1Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Symfony1Installer.php',
        'Composer\\Installers\\TYPO3CmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3CmsInstaller.php',
        'Composer\\Installers\\TYPO3FlowInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3FlowInstaller.php',
        'Composer\\Installers\\TaoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TaoInstaller.php',
        'Composer\\Installers\\TheliaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TheliaInstaller.php',
        'Composer\\Installers\\TuskInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TuskInstaller.php',
        'Composer\\Installers\\UserFrostingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/UserFrostingInstaller.php',
        'Composer\\Installers\\VanillaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VanillaInstaller.php',
        'Composer\\Installers\\VgmcpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VgmcpInstaller.php',
        'Composer\\Installers\\WHMCSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WHMCSInstaller.php',
        'Composer\\Installers\\WolfCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WolfCMSInstaller.php',
        'Composer\\Installers\\WordPressInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WordPressInstaller.php',
        'Composer\\Installers\\YawikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/YawikInstaller.php',
        'Composer\\Installers\\ZendInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZendInstaller.php',
        'Composer\\Installers\\ZikulaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZikulaInstaller.php',
        'Jetpack_IXR_Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-client.php',
        'Jetpack_IXR_ClientMulticall' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-clientmulticall.php',
        'Jetpack_Options' => __DIR__ . '/..' . '/automattic/jetpack-options/legacy/class-jetpack-options.php',
        'Jetpack_Signature' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-signature.php',
        'Jetpack_Tracks_Client' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-client.php',
        'Jetpack_Tracks_Event' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-event.php',
        'Jetpack_XMLRPC_Server' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-xmlrpc-server.php',
        'MyCLabs\\Enum\\Enum' => __DIR__ . '/..' . '/myclabs/php-enum/src/Enum.php',
        'MyCLabs\\Enum\\PHPUnit\\Comparator' => __DIR__ . '/..' . '/myclabs/php-enum/src/PHPUnit/Comparator.php',
        'WCPay\\MultiCurrency\\AdminNotices' => __DIR__ . '/../..' . '/includes/multi-currency/AdminNotices.php',
        'WCPay\\MultiCurrency\\Analytics' => __DIR__ . '/../..' . '/includes/multi-currency/Analytics.php',
        'WCPay\\MultiCurrency\\BackendCurrencies' => __DIR__ . '/../..' . '/includes/multi-currency/BackendCurrencies.php',
        'WCPay\\MultiCurrency\\Compatibility' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility.php',
        'WCPay\\MultiCurrency\\Compatibility\\BaseCompatibility' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/BaseCompatibility.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommerceBookings' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommerceBookings.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommerceDeposits' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommerceDeposits.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommerceFedEx' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommerceFedEx.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommerceNameYourPrice' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommerceNameYourPrice.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommercePointsAndRewards' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommercePointsAndRewards.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommercePreOrders' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommercePreOrders.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommerceProductAddOns' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommerceProductAddOns.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommerceSubscriptions' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommerceSubscriptions.php',
        'WCPay\\MultiCurrency\\Compatibility\\WooCommerceUPS' => __DIR__ . '/../..' . '/includes/multi-currency/Compatibility/WooCommerceUPS.php',
        'WCPay\\MultiCurrency\\CountryFlags' => __DIR__ . '/../..' . '/includes/multi-currency/CountryFlags.php',
        'WCPay\\MultiCurrency\\Currency' => __DIR__ . '/../..' . '/includes/multi-currency/Currency.php',
        'WCPay\\MultiCurrency\\CurrencySwitcherBlock' => __DIR__ . '/../..' . '/includes/multi-currency/CurrencySwitcherBlock.php',
        'WCPay\\MultiCurrency\\CurrencySwitcherWidget' => __DIR__ . '/../..' . '/includes/multi-currency/CurrencySwitcherWidget.php',
        'WCPay\\MultiCurrency\\FrontendCurrencies' => __DIR__ . '/../..' . '/includes/multi-currency/FrontendCurrencies.php',
        'WCPay\\MultiCurrency\\FrontendPrices' => __DIR__ . '/../..' . '/includes/multi-currency/FrontendPrices.php',
        'WCPay\\MultiCurrency\\Geolocation' => __DIR__ . '/../..' . '/includes/multi-currency/Geolocation.php',
        'WCPay\\MultiCurrency\\MultiCurrency' => __DIR__ . '/../..' . '/includes/multi-currency/MultiCurrency.php',
        'WCPay\\MultiCurrency\\Notes\\NoteMultiCurrencyAvailable' => __DIR__ . '/../..' . '/includes/multi-currency/Notes/NoteMultiCurrencyAvailable.php',
        'WCPay\\MultiCurrency\\PaymentMethodsCompatibility' => __DIR__ . '/../..' . '/includes/multi-currency/PaymentMethodsCompatibility.php',
        'WCPay\\MultiCurrency\\RestController' => __DIR__ . '/../..' . '/includes/multi-currency/RestController.php',
        'WCPay\\MultiCurrency\\Settings' => __DIR__ . '/../..' . '/includes/multi-currency/Settings.php',
        'WCPay\\MultiCurrency\\SettingsOnboardCta' => __DIR__ . '/../..' . '/includes/multi-currency/SettingsOnboardCta.php',
        'WCPay\\MultiCurrency\\StorefrontIntegration' => __DIR__ . '/../..' . '/includes/multi-currency/StorefrontIntegration.php',
        'WCPay\\MultiCurrency\\Tracking' => __DIR__ . '/../..' . '/includes/multi-currency/Tracking.php',
        'WCPay\\MultiCurrency\\UserSettings' => __DIR__ . '/../..' . '/includes/multi-currency/UserSettings.php',
        'WCPay\\MultiCurrency\\Utils' => __DIR__ . '/../..' . '/includes/multi-currency/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb94da8783d57b303480f23a00e57df49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb94da8783d57b303480f23a00e57df49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb94da8783d57b303480f23a00e57df49::$classMap;

        }, null, ClassLoader::class);
    }
}
