<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220706220827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add isStatus to Event';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE event ADD is_active TINYINT(1) NOT NULL, DROP status');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE event ADD status VARCHAR(255) NOT NULL, DROP is_active');
    }
}
