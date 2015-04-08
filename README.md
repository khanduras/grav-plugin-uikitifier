# Grav UIKitifier Plugin

UIKitifier is a [Grav](http://github.com/getgrav/grav) plugin that can be used as a dependency for other themes and plugins to load the [UIKit framework](http://getuikit.com).  The main purpose of this plugin is to allow the UIKit-Library theme to depend on UIKit's CSS/JS and to allow the plugin to be updated independently of the theme itself.

# Installation

## GPM Installation (Not Available)

## Manual Installation

At this time you will have to manually install this plugin. To do so is not difficult. Download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `uikitifier`.

You should now have all the plugin files under:

	/your/site/grav/user/plugins/uikitifier

# Usage

To best understand what the UIKitifier plugin provides, you should read through the original [UIKit framework documentation](http://getuikit.com/docs/documentation_get-started.html).

## Configuration

UIKitifier is **enabled** but **not always loaded** by default.  You can change this behavior by setting `always_load: true` in the plugin's configuration.  Simply copy the `user/plugins/materializer/uikitifier.yaml` into `user/config/plugins/uikitifier.yaml` and make your modifications.

```
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

