<?php

namespace Vaterno\Installmentplan\Application\Core;

use OxidEsales\Eshop\Core\DbMetaDataHandler;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;
use Doctrine\DBAL\Query\QueryBuilder;

class InstallEvents
{
    public static function onActivate()
    {
        static::installTableFields();
    }

    public static function installTableFields()
    {
        $tableFields = [
            [
                'tableName' => 'oxarticles',
                'tableField' => 'OXNUMBERINSTALLMENTMONTHS',
                'installSql' => 'ALTER TABLE `oxarticles` ADD COLUMN `OXNUMBERINSTALLMENTMONTHS` INT',
            ],
            [
                'tableName' => 'oxarticles',
                'tableField' => 'OXPREPAYMENTAMOUNT',
                'installSql' => 'ALTER TABLE `oxarticles` ADD COLUMN `OXPREPAYMENTAMOUNT` DOUBLE(10, 2)',
            ],
        ];

        $dbMetaDataHandler = oxNew(DbMetaDataHandler::class);

        foreach ($tableFields as $tableField) {
            if (!$dbMetaDataHandler->fieldExists($tableField['tableField'], $tableField['tableName'])) {
                $dbMetaDataHandler->executeSql([$tableField['installSql']]);
            }
        }

        $dbMetaDataHandler->updateViews();
    }
}
