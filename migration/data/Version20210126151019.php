<?php declare(strict_types=1);

namespace OxidEsales\PayPalModule\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210126151019 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `oxarticles` ADD COLUMN `OXNUMBERINSTALLMENTMONTHS` DOUBLE(10, 2)');
        $this->addSql('ALTER TABLE `oxarticles` ADD COLUMN `OXPREPAYMENTAMOUNT` DOUBLE(10, 2)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `oxarticles` DROP COLUMN `OXNUMBERINSTALLMENTMONTHS`');
        $this->addSql('ALTER TABLE `oxarticles` DROP COLUMN `OXPREPAYMENTAMOUNT`');
    }
}
