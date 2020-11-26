<?php
/**
 * Collections plugin for Craft CMS 3.x
 *
 * Use Laravel Collections in Craft
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\collections\assetbundles\collections;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Superbig
 * @package   Collections
 * @since     2.0.0
 */
class CollectionsAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@superbig/collections/assetbundles/collections/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Collections.js',
        ];

        $this->css = [
            'css/Collections.css',
        ];

        parent::init();
    }
}
