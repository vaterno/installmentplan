<?php

use OxidEsales\Eshop\Core\ViewConfig;
use Vaterno\Installmentplan\Core\ViewConfig as InstallmentplanViewConfig;

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
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_productlinks',
            'file' => 'src/views/blocks/page/details/installmentplan_banner.tpl',
        ],
        [
            'template' => 'article_main.tpl',
            'block' => 'admin_article_main_form',
            'file' => 'src/views/admin/blocks/installmentplan_fields.tpl',
        ],
    ],
    'extend' => [
        ViewConfig::class => InstallmentplanViewConfig::class,
    ],
];
