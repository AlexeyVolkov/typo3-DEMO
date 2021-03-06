<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'User>Open Documents',
    'description' => 'Shows opened documents by the user.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '8.7.12',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.2.99',
            'typo3' => '8.7.12',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
