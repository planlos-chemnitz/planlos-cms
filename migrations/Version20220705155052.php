<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220705155052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add verified status to user';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user DROP is_verified');
    }
}
