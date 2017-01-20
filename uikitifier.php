<?php

namespace Grav\Plugin;

use Grav\Common\Plugin;

/**
 * Class UikitifierPlugin
 * @package Grav\Plugin
 */
class UikitifierPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) return;

        // Enable the main event we are interested in
        $this->enable([
            'onAssetsInitialized' => ['onAssetsInitialized', 0]
        ]);
    }


    /**
     * The assets manager has been initialized and is ready for assets to be added and managed.
     */
    public function onAssetsInitialized()
    {
        // Minified
        $minified = $this->config->get('plugins.uikitifier.minified', false) ? '.min' : '';

        // Theme
        $theme = str_replace('_', '-', $this->config->get('plugins.uikitifier.theme', 'flat'));
        $theme = ($theme == 'flat') ? '' : ".{$theme}";

        // Default JS + CSS
        $resources = [];
        $resources[] = "plugin://uikitifier/js/uikit{$minified}.js";
        $resources[] = "plugin://uikitifier/css/uikit{$theme}{$minified}.css";

        // Components
        $load_all = $this->config->get('plugins.uikitifier.load_all_components', false);
        $components = $this->config->get('plugins.uikitifier.components',[]);
        foreach ($components as $component => $enabled) {
            if ((!$enabled) && (!$load_all)) continue;

            $component = str_replace('_', '-', $component);

            // JavaScript
            $file = "js/components/{$component}{$minified}.js";
            if (file_exists(__DIR__.DIRECTORY_SEPARATOR.$file)) $resources[] = "plugin://uikitifier/{$file}";

            $file = "css/components/{$component}{$theme}{$minified}.css";
            if (file_exists(__DIR__.DIRECTORY_SEPARATOR.$file)) $resources[] = "plugin://uikitifier/{$file}";
        }

        // Register UIkit as asset collection
        $this->grav['assets']->registerCollection('uikit', $resources);
        $this->grav['assets']->add('uikit', 100);
    }
}
