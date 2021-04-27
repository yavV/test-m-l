<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20120426115234  extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $sql = <<<SQL
CREATE TABLE balance_history (
    id int NOT NULL AUTO_INCREMENT,
    value float NOT NULL,
    balance float NOT NULL,
    user_id int NOT NULL,
    created_at datetime NOT NULL,
    PRIMARY KEY (id)
)
SQL;
        $this->addSql($sql);

    }

    public function down(Schema $schema): void
    {

        $sql = <<<SQL
DROP TABLE balance_history 
SQL;
        $this->addSql($sql);

    }
}
