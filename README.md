# Collections plugin for Craft CMS 3.x

Use Laravel Collections in Craft

![Screenshot](resources/icon.png)

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

-Insert text here-

## Configuring Collections

Add your macros to the config file

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
{{ dump(collection.toUpper)  }}
```

## Collections Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Superbig](https://superbig.co)
