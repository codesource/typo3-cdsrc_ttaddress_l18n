<?php
/**
 * @copyright Copyright (c) 2017 Code-Source
 */
namespace CDSRC\CdsrcTtAddressL18n\Domain\Model\Dto;

use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * Class Settings
 */
class Settings
{
    /**
     * @var string
     */
    protected $translatableFields = [
        'title',
        'address',
        'building',
        'room',
        'www',
        'city',
        'region',
        'country',
        'description',
    ];

    /**
     * @param array $settings extension manager settings
     */
    public function __construct(array $settings)
    {

        if (isset($settings['translatableFields']) && is_string($settings['translatableFields'])) {
            $this->translatableFields = GeneralUtility::trimExplode(',', $settings['translatableFields'], true);
        }
    }

    /**
     * @return array
     */
    public function getTranslatableFields()
    {
        return $this->translatableFields;
    }
}
