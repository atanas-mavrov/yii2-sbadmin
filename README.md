SB admin extention for Yii2
========
Implementation of [SB Admin2 theme](http://startbootstrap.com/template-overviews/sb-admin-2/).
This is very initial verson.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist simple-projects/yii2-sbadmin "*"
```

or add

```
"simple-projects/yii2-sbadmin": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you have two ways to use it  :

Good Way
---------
Put in section components in your main config file Path Map configuration

```php
'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views/layouts' => '@vendor/simple-projects/yii2-sbadmin/views/layouts'
                ],
            ],
        ],
```
So your new layout is done. For customizing top and left menu in your layout folder, you should create the files:
***_left_navigation.php***

***_top_navigation.php***

You can get the structure of the menus from /vendor/simple-projects/yii2-sbadmin/views/layouts directory.


Antoher Way
-----------
You can copy files from /vendor/simple-projects/yii2-sbadmin/views/layouts to your layouts directory.
Note: they wouldn't be updated if there is new version.
