<?php

$sMetadataVersion = '1.0';

$aModule = [
    'id'            => 'installmentplan',
    'title'         => 'Installment plan',
    'description'   => [
        'en' => 'Installment plan',
        'de' => 'Installment plan',
    ],
    'thumbnail'     => 'logo.png',
    'version'       => $sMetadataVersion,
    'author'        => 'Vaterno',
    'blocks' => [
        [
            'template' => 'layout/base.tpl',
            'block' => 'installmentplan_banner',
            'file' => 'src/views/blocks/installmentplan_banner.tpl'
        ]
    ]
];
