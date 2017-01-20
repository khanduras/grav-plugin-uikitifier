# UIkitifier Plugin

**UIKitifier** is a [Grav](http://github.com/getgrav/grav) plugin that can be used as a dependency for other themes and plugins to load the [YOOtheme](http://yootheme.com) [UIkit Framework](http://getuikit.com) in the version **2.27.2**.  The main purpose of this plugin is to allow the Library theme to depend on the UIkit's CSS/JS and to allow the plugin to be updated independently of the theme itself.


## Installation

Installing the UIkitifier plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install uikitifier

This will install the UIkitifier plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/uikitifier`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `uikitifier`. You can find these files on [GitHub](https://github.com/xyz/grav-plugin-uikitifier) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/uikitifier
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/uikitifier/uikitifier.yaml` to `user/config/plugins/uikitifier.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
minified: false
theme: flat # flat | almost-flat | gradient
load_all: false

components:
  accordion: false
  autocomplete: false
  datepicker: false
  dotnav: false
  form_advanced: false
  form_file: false
  form_password: false
  form_select: false
  grid: false
  grid_parallax: false
  htmleditor: false
  lightbox: false
  nestable: false
  notify: false
  pagination: false
  parallax: false
  placeholder: false
  progress: false
  search: false
  slidenav: false
  slider: false
  slideset: false
  slideshow: false
  sortable: false
  sticky: false
  timepicker: false
  tooltip: false
  upload: false
```
* `enabled` Toggles if the UIkitifier plugin is turned on or off.
* `minified` Toggles if the compressed JavaScript and CSS ressources are included or not.
* `theme` Allows you to easily change the UIkit theme. Possible values are `flat`, `almost_flat` or `gradient`.
* `load_all` Includes all additional components.
* `components` Additional components can be enabled or disabled accordingly. Can be overwritten by `load_all`.

## Usage

The best way to understand what the UIkitifier plugin provides, you should read through the original [UI Kit framework documentation](http://getuikit.com/docs/documentation_get-started.html).

