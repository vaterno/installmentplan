<?php

declare(strict_types=1);

namespace Vaterno\Installmentplan\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230515161649 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` ADD COLUMN `OXNUMBERINSTALLMENTMONTHS` DOUBLE(10, 2)');
        $this->addSql('ALTER TABLE `oxarticles` ADD COLUMN `OXPREPAYMENTAMOUNT` DOUBLE(10, 2)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` DROP COLUMN `OXNUMBERINSTALLMENTMONTHS`');
        $this->addSql('ALTER TABLE `oxarticles` DROP COLUMN `OXPREPAYMENTAMOUNT`');
    }
}
