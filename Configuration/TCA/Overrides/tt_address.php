<?php
/**
 * @copyright Copyright (c) 2017 Code-Source
 */
defined('TYPO3_MODE') or die();

$l18nColumns = [
    'sys_language_uid' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => [
                [
                    'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                    -1,
                    'flags-multiple',
                ],
            ],
            'default' => 0,
        ],
    ],
    'l10n_parent' => [
        'displayCond' => 'FIELD:sys_language_uid:>:0',
        'exclude' => 1,
        'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', 0],
            ],
            'foreign_table' => 'tt_address',
            'foreign_table_where' => 'AND tt_address.pid=###CURRENT_PID### AND tt_address.sys_language_uid IN (-1,0)',
            'showIconTable' => false,
        ],
    ],
    'l10n_diffsource' => [
        'config' => [
            'type' => 'passthrough',
            'default' => '',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $l18nColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_address',
    'sys_language_uid,l10n_parent,l10n_diffsource',
    '',
    'before:hidden'
);

$GLOBALS['TCA']['tt_address']['ctrl']['languageField'] = 'sys_language_uid';
$GLOBALS['TCA']['tt_address']['ctrl']['transOrigPointerField'] = 'l10n_parent';
$GLOBALS['TCA']['tt_address']['ctrl']['transOrigDiffSourceField'] = 'l10n_diffsource';


$excludedFields = array_diff(
    [
        'gender',
        'title',
        'name',
        'first_name',
        'middle_name',
        'last_name',
        'birthday',
        'address',
        'building',
        'room',
        'phone',
        'fax',
        'mobile',
        'www',
        'email',
        'skype',
        'twitter',
        'facebook',
        'linkedin',
        'company',
        'position',
        'city',
        'zip',
        'region',
        'country',
        'image',
        'description',
        'categories',
        'latitude',
        'longitude',
    ],
    \CDSRC\CdsrcTtAddressL18n\Utility\SettingsUtility::getSettings()->getTranslatableFields()
);

foreach ($excludedFields as $field) {
    $GLOBALS['TCA']['tt_address']['columns'][$field]['l10n_mode'] = 'exclude';
}
