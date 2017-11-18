<?php
/**
 * Collections plugin for Craft CMS 3.x
 *
 * Use Laravel Collections in Craft
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\collections\variables;

use Illuminate\Support\Collection;
use superbig\collections\Collections;

use Craft;

/**
 * @author    Superbig
 * @package   Collections
 * @since     2.0.0
 */
class CollectionsVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null|array $collection
     *
     * @return Collection
     */
    public function collect ($collection = [])
    {
        return Collections::$plugin->collectionsService->collect($collection);
    }
}
