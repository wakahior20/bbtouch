<?php
/*
Plugin Name: bbTouch 
Plugin URI: 
Description: A plugin which formats your bbPress with a mobile theme for Mobile WebKit browsers.
Author: hara 
Version: 0.1.2
Author URI:
*/

global $bbtouch;
$bbtouch =  new BBTouch();

class BBTouch {
    private $isWebkit = false;

    function __construct() {
        add_filter('bb_get_active_theme_directory', array($this, 'getThemeDirectory'));
        add_filter('bb_get_active_theme_uri', array($this, 'getThemeUri'));
        $this->detectWebkit();
    }

    /*
     * Detect mobile WebKit Browser.
     * Thanks to WPTouch.
     */
    function detectWebkit()
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        $webkits = array(
            "iphone",           // Apple iPhone
            "ipod",             // Apple iPod touch
            "aspen",            // iPhone simulator
            "dream",            // Pre 1.5 Android
            "android",          // 1.5+ Android
            "cupcake",          // 1.5+ Android
            "blackberry9500",   // Storm
            "blackberry9530",   // Storm
            "opera mini",       // Experimental
            "webos",            // Experimental
            "incognito",        // Other iPhone browser
            "webmate"           // Other iPhone browser
        );
        $this->isWebkit = false;
        foreach ($webkits as $webkit) {
            if (eregi($webkit, $ua)) {
                $this->isWebkit = true;
            }
        }
    }

    function getThemeDirectory($path)
    {
        if ($this->isWebkit) {
            $theme_directory = bb_get_plugin_directory('user#bbtouch/bbtouch.php') . '/template/';
            return $theme_directory;
        } else {
            return $path;
        }
    }

    function getThemeUri($uri)
    {
        if ($this->isWebkit) {
            $theme_uri = bb_get_plugin_uri('user#bbtouch/bbtouch.php') . '/template/';
            return $theme_uri;
        } else {
            return $uri;
        }
    }
}
?>
