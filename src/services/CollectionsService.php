<?php
/**
 * Collections plugin for Craft CMS 3.x
 *
 * Use Laravel Collections in Craft
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\collections\services;

use Illuminate\Support\Collection;
use superbig\collections\Collections;

use Craft;
use craft\base\Component;

/**
 * @author    Superbig
 * @package   Collections
 * @since     2.0.0
 */
class CollectionsService extends Component
{
    // Public Methods
    // =========================================================================

    public function init ()
    {
        foreach (Collections::$plugin->getSettings()->macros as $key => $macro) {
            Collection::macro($key, $macro);
        }
    }

    /**
     * @param null|array $collection
     *
     * @return Collection
     */
    public function collect ($collection = [])
    {
        return new Collection($collection);
    }
}
