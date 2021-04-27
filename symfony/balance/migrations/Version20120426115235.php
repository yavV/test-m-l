<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20120426115235  extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $sql = <<<SQL
INSERT INTO balance_history (value, balance, user_id, created_at) VALUES 
    (0, 100.11, 10, '2012-04-26 11:01:01'),
    (100.11, 100.11, 10, '2012-04-26 11:01:01')
SQL;
        $this->addSql($sql);
    }

    public function down(Schema $schema): void
    {

        $sql = <<<SQL
DELETE FROM balance_history 
SQL;
        $this->addSql($sql);
    }
}
