[![Build Status](https://travis-ci.org/newfishdev/indrukwekkend.svg?branch=master)](https://travis-ci.org/newfishdev/indrukwekkend)
[![devDependencies Status](https://david-dm.org/newfishdev/indrukwekkend/dev-status.svg)](https://david-dm.org/newfishdev/indrukwekkend?type=dev)

# Indrukwekkend Theme

This is the repository of the Indrukwekkend theme.

### Setting up

Make sure AMPPS has a domain running on `indrukwekkend.dev` 
Make sure the database prefix is `ndrkwkknd_` this is neccesery for migrating data from the Live location.

1. Unpack the zip in the theme directory
2. Open a Terminal and go to the theme directory
3. Run `npm install` to install the required NPM packages
4. Run `bower install` to install the Bower packages
5. Run `gulp && gulp watch` to setup the project
6. Go to `indrukwekkend.dev/wp-admin`
7. Install the required plugins
8. Run a Pull in WP Migrate DB from `indrukwekkend.nl`

At this point you can continue developing.

When ready to publish on `behoorlijk.indrukwekkend.nl`, **update project version**

### Requirements

#### System
 * AMPPS running WordPress 4.8 or higher on `indrukwekkend.dev`
 * PHP 7 or higher
 * phpMyAdmin 5.6 or higher

#### Plugins
* [Advanced Custom Fields / ACF](https://www.advancedcustomfields.com/)
* [Instagram Feed](https://wordpress.org/plugins/instagram-feed/)
* [WP Migrate DB Pro](http://deliciousbrains.com/wp-migrate-db-pro/) + Media Files Addon
* [Gravity Forms](http://gravityforms.com/)
* [Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/)