## Requirements
[node](https://nodejs.org/en/)

[npm](https://www.npmjs.com/)

[compass](http://compass-style.org/)

[MAMP](https://www.mamp.info/en/) (optional)

## Get Started
1. Point MAMP at the wordpress/ directory OR [try this](http://coolestguidesontheplanet.com/get-apache-mysql-php-phpmyadmin-working-osx-10-9-mavericks/)
2. Setup your local DB and edit wp-config.php as necessary
3. Hit localhost:8888 and install wordpress
4. Set the active theme to 'theme'


### Open the repo directory in terminal execute the following commands:
```
cd grunt
sudo npm install -d
grunt watch
```
### Your off to the races!
- Start deving in the in the grunt/theme directory and grunt will compile your changes in to the wordpress theme
- The livereload task care of browser refreshing. To disable comment out lines 53-56 in functions.php

```PHP
if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
  wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
  wp_enqueue_script('livereload');
}
```

### Loading your compiled CSS / JS into your theme
- Define your files and the order the should load in functions.php

```PHP
$css_files = [ 
  "css/bootstrap.css",
  "css/main.css"
];

$js_files = [ 
  "js/vendor/vendor.js"
];
```
