<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220705154339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Slug to Events';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE event ADD slug VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE event DROP slug');
    }
}
