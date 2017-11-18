<?php
/**
 * Collections plugin for Craft CMS 3.x
 *
 * Use Laravel Collections in Craft
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\collections\twigextensions;

use Illuminate\Support\Collection;
use superbig\collections\Collections;

use Craft;

/**
 * @author    Superbig
 * @package   Collections
 * @since     2.0.0
 */
class CollectionsTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName ()
    {
        return 'Collections';
    }

    /**
     * @inheritdoc
     */
    public function getFilters ()
    {
        return [
            new \Twig_SimpleFilter('collect', [ $this, 'collect' ]),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions ()
    {
        return [
            new \Twig_SimpleFunction('collect', [ $this, 'collect' ]),
        ];
    }

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
