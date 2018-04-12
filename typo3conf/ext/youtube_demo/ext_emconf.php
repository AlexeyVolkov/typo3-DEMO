<?php

/**
 * Extension Manager/Repository config file for ext "youtube_demo".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'YouTube DEMO',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Sdgs\\YoutubeDemo\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'JOhn Doe',
    'author_email' => 'asfsafg@agsd.er',
    'author_company' => 'sdgs',
    'version' => '1.0.0',
];
