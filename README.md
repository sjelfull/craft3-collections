# Collections plugin for Craft CMS 3.x

Use Laravel Collections in Craft

![Screenshot](resources/img/icon.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require superbig/craft3-collections

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Collections.

## Collections Overview

Here is some good inspiration on what you can do with Collections:

- [Collections documentation](https://laravel.com/docs/5.5/collections)
- [Laravel Collections: PHP Arrays On Steroids](https://scotch.io/tutorials/laravel-collections-php-arrays-on-steroids)
- [Laravel Collections Examples on GitHub](https://github.com/fakiolinho/laravel-collections-examples)
- [Laravel Collections “when” Method](https://laravel-news.com/laravel-collections-when-method)
- [Code Bright: Eloquent Collections](https://daylerees.com/codebright-eloquent-collections/)
- [Refactoring To Collection](https://adamwathan.me/refactoring-to-collections/)
- [10 less-known (but awesome!) Laravel Collections methods](http://laraveldaily.com/10-less-known-but-awesome-laravel-collections-methods/)

## Configuring Collections

Add your macros to the config file:

```php
<?php
return [

    /** Add your macros here
     * "macros" => [
     *     'toUpper' => function () {
     *         return $this->map(function ($value) {
     *             return strtoupper($value);
     *         });
     *     },
     * ],
     *
     */

    "macros" => [

    ],

];

```

## Using Collections

```twig
{% set collection = [ 'str', 'Sst', 'psst' ] | collect %}
{{ dump(collection.toUpper())  }}
```

Brought to you by [Superbig](https://superbig.co)
