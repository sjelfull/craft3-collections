<?php
/**
 * Collections plugin for Craft CMS 3.x
 *
 * Use Laravel Collections in Craft
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\collections;

use superbig\collections\services\CollectionsService as CollectionsServiceService;
use superbig\collections\variables\CollectionsVariable;
use superbig\collections\twigextensions\CollectionsTwigExtension;
use superbig\collections\models\Settings;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class Collections
 *
 * @author    Superbig
 * @package   Collections
 * @since     2.0.0
 *
 * @property  CollectionsServiceService $collectionsService
 * @method  Settings getSettings()
 */
class Collections extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Collections
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new CollectionsTwigExtension());

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('collections', CollectionsVariable::class);
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'collections',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'collections/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}
