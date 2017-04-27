xacuti
======

[![Build Status](https://travis-ci.org/WordPressGoa/xacuti.svg?branch=master)](https://travis-ci.org/WordPressGoa/xacuti)

A Wordpress theme for and from Wordpress Goa.


### Test

```
npm install
composer install
npm test
composer test
```

### Deployment

The theme lives in `/home/prtksxna/xacuti` and is symlinked from `/var/www/wpgoa/wp-content/themes/xacuti`. To update the theme, go to the right directory and run `git pull origin master`, or run `npm run deploy` locally, if you have the right keys and `.ssh_config`.