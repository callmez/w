<?php
/**
 * Plugin Name: w
 * Plugin URI: https://github.com/callmez/w
 * Description: w
 * Version: 0.0.1
 * Author: callmez
 * Author URI: https://github.com/callmez
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
*/
define('W_DIR', plugin_dir_path(__FILE__));
W::init();

class W
{
    private static $isInit = false;
    public static $admin;
    public static function init()
    {
        if (static::$isInit) return;

        if (is_admin()) {
            static::initAdmin();
        }

        static::$isInit = true;
    }

    protected static function initAdmin()
    {
        require_once(W_DIR . 'core/Admin.php');
        static::$admin = new Admin();
    }
}
?>