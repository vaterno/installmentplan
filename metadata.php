<?php

use OxidEsales\Eshop\Core\ViewConfig;
use Vaterno\Installmentplan\Application\Core\ViewConfig as InstallmentplanViewConf;

$sMetadataVersion = '2.0';

$aModule = [
    'id'            => 'installmentplan',
    'title'         => 'Installment plan',
    'description'   => [
        'en' => 'Installment plan',
        'de' => 'Installment plan',
    ],
    'thumbnail'     => 'logo.png',
    'version'       => '2.0.0',
    'author'        => 'Vaterno',
    'blocks' => [
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_productlinks',
            'file' => 'Application/views/blocks/page/details/installmentplan_banner.tpl',
        ],
        [
            'template' => 'article_main.tpl',
            'block' => 'admin_article_main_form',
            'file' => 'Application/views/admin/blocks/installmentplan_fields.tpl',
        ],
    ],
    'events' => [
        'onActivate' => '\Vaterno\Installmentplan\Application\Core\InstallEvents::onActivate',
    ],
    'extend' => [
        ViewConfig::class => InstallmentplanViewConf::class,
    ],
];
