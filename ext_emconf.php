<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cdsrc_ttaddress_l18n".
 *
 * Auto generated 10-01-2017 23:56
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Address List Multilang',
    'description' => 'Append multilingual to tt_address',
    'category' => 'be',
    'shy' => false,
    'version' => '1.1.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => null,
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => false,
    'lockType' => '',
    'author' => 'Matthias Toscanelli',
    'author_email' => 'm.toscanelli@code-source.ch',
    'author_company' => 'Code-Source',
    'CGLcompliance' => null,
    'CGLcompliance_note' => null,
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'tt_address' => '3.0.0+',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

?>