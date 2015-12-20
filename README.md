# Grav Materializer Plugin

Materializer is a [Grav](http://github.com/getgrav/grav) plugin that can be used as a dependency for other themes and plugins to load the [Materialize framework](http://materializecss.com).  The main purpose of this plugin is to allow the Materialize theme to depend on the Materializer's CSS/JS and to allow the plugin to be updated independently of the theme itself.

Rather than using the icon font that comes with the Materialize Framework, Materializer uses a newer, expanded icon font: [Material Design Icons](http://materialdesignicons.com).

# Installation

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm).  From the root of your Grav install type:

    bin/gpm install materializer

## Manual Installation

If for some reason you can't use GPM you can manually install this plugin. Download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `materializer`.

You should now have all the plugin files under:

	/your/site/grav/user/plugins/materializer

# Usage

To best understand what the Materializer plugin provides, you should read through the original [Materialize framework documentation](http://materializecss.com).

## Configuration

<<<<<<< HEAD
Materializer is **enabled** but **not always loaded** by default.  You can change this behavior by setting `always_load: true` in the plugin's configuration.  Simply copy the `user/plugins/materializer/materializer.yaml` into `user/config/plugins/materializer.yaml` and make your modifications.

```
enabled: true                   # Enable / Disable this plugin
always_load: false              # If set to `false` the Theme must have `public $load_materializer_plugin = true;` to add the CSS/JS
load_core_css: true             # Load the core `materializer.css` CSS file
load_core_js: true              # Load the core `materializer.js` JS file
=======
UIKitifier is **enabled** but **not always loaded** by default.  You can change this behavior by setting `always_load: true` in the plugin's configuration.  Simply copy the `user/plugins/materializer/uikitifier.yaml` into `user/config/plugins/uikitifier.yaml` and make your modifications.
<<<<<<< HEAD
=======

```
enabled: true
always_load: true
mode: staging   # production / staging
load_uikit: true
style: gradient   # flat / almost-flat / gradient
customizer: off      # specifiy customizer .css file
load_all: false
```
>>>>>>> 9a548d1b255ce630f1ef2c2d3a05a8e3e4da7c26

Individual components can be enabled or disabled accordingly

```
load_component_accordion: false
load_component_autocomplete: true
load_component_cover: true
load_component_datepicker: false
load_component_dotnov: false	
load_component_form_advanced: false
load_component_form_file: false
load_component_form_password: false
load_component_form_select: false
load_component_grid: true
load_component_htmleditor: false
load_component_lightbox: false
load_component_nestable: false
load_component_notify: false
load_component_pagination: false
load_component_placeholder: false
load_component_progress: false
load_component_search: true
load_component_slideshow: false
load_component_slideshow-fx: false
load_component_slidenav: false
load_component_sortable: false
load_component_sticky: true
load_component_timepicker: false
load_component_tooltip: true
load_component_upload: false
```
<<<<<<< HEAD
enabled: true
always_load: true
mode: staging   # production / staging
load_uikit: true
style: gradient   # flat / almost-flat / gradient
customizer: off      # specifiy customizer .css file
load_all: false
```

Individual components can be enabled or disabled accordingly

```
load_component_accordion: false
load_component_autocomplete: true
load_component_cover: true
load_component_datepicker: false
load_component_dotnov: false	
load_component_form_advanced: false
load_component_form_file: false
load_component_form_password: false
load_component_form_select: false
load_component_grid: true
load_component_htmleditor: false
load_component_lightbox: false
load_component_nestable: false
load_component_notify: false
load_component_pagination: false
load_component_placeholder: false
load_component_progress: false
load_component_search: true
load_component_slideshow: false
load_component_slideshow-fx: false
load_component_slidenav: false
load_component_sortable: false
load_component_sticky: true
load_component_timepicker: false
load_component_tooltip: true
load_component_upload: false
```

=======
>>>>>>> 9a548d1b255ce630f1ef2c2d3a05a8e3e4da7c26
>>>>>>> parent of b3583e9... Update Readme
