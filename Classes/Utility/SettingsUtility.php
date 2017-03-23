<?php
/**
 * @copyright Copyright (c) 2017 Code-Source
 */
namespace CDSRC\CdsrcTtAddressL18n\Utility;

use CDSRC\CdsrcTtAddressL18n\Domain\Model\Dto\Settings;
use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * Class SettingsUtility
 */
class SettingsUtility
{
    /**
     * @var Settings
     */
    protected static $settings;

    /**
     * @return Settings
     */
    public static function getSettings()
    {
        if (!isset(self::$settings)) {
            self::$settings = self::parseSettings();
        }
        return self::$settings;
    }

    /**
     * @return Settings
     */
    protected static function parseSettings()
    {
        $settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['cdsrc_ttaddress_l18n']);

        if (!is_array($settings)) {
            $settings = array();
        }

        return GeneralUtility::makeInstance(Settings::class, $settings);
    }
}