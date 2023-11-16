<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116141901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE galerie ADD user_id INT NOT NULL, DROP user');
        $this->addSql('ALTER TABLE galerie ADD CONSTRAINT FK_9E7D1590A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_9E7D1590A76ED395 ON galerie (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE galerie DROP FOREIGN KEY FK_9E7D1590A76ED395');
        $this->addSql('DROP INDEX IDX_9E7D1590A76ED395 ON galerie');
        $this->addSql('ALTER TABLE galerie ADD user VARCHAR(255) NOT NULL, DROP user_id');
    }
}
