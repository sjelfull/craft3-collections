<?php
/**
 * Collections plugin for Craft CMS 3.x
 *
 * Use Laravel Collections in Craft
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\collections\models;

use superbig\collections\Collections;

use Craft;
use craft\base\Model;

/**
 * @author    Superbig
 * @package   Collections
 * @since     2.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var array
     */
    public $macros = [];

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules ()
    {
        return [];
    }
}
