# APICity Conference

This is the website for https://2019.apicity.io/, a conference founded and operated by Tessa Mero, a developer advocate and long time Open Source contributor and memeber of the PHP Comunity.

## Version

The current project version is 0.5.0, and uses semantic versioning.

### PHP Version

Keeping your PHP version up-to-date is important. This website requires PHP 7.2 to make the most of PHP's capabailities, while realizing that many webhosts are not running the latest version of PHP. 


## Installation

1. Clone this repo to your development machine. 
1. Create a MySQL database
1. Copy the wp-config.php.sample to wp-config.php
1. Point your web server (e.g. Apache) at the public/ directory


## Developing for APICity.io

This project runs on WordPress. Like other WordPress projects, **don't hack core**. Instead you add functionality to the website through plugins and themes. The WordPress plugin repository has a wealth of plugins you may find useful. 

Accessibility is a core value of APICity, and must be part of all development and user experience. 

This project uses the WordPress Coding Standards for all plugins and themes. Whena topic is not defined by WordPress coding standard, use the PHP community's PSR-2 standard.


### Plugin Development

In the wp-content directory you'll find a plugin named "Site". The Site plugin represents this website, and should be used to add functionality to the website, and for anything that is meant to be independent of the theme. Put another way, if you switched your theme, would your desired feature still work? If you want it to still work, put it in the Site theme. 


### Theme Development

For 2019, we are using "THEMENAME" developed by DEVELOPER_NAME. It looks nice, but we need it to work differently. We're developing a child theme to extend it's functionality and modify it's appearance.




