<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231111214020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE filter (id INT AUTO_INCREMENT NOT NULL, filter_title VARCHAR(255) NOT NULL, filter_slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marker (id INT AUTO_INCREMENT NOT NULL, filters_id INT NOT NULL, user_admin_id INT NOT NULL, marker_title VARCHAR(255) NOT NULL, marker_image VARCHAR(255) DEFAULT NULL, marker_email VARCHAR(255) DEFAULT NULL, tel INT DEFAULT NULL, longitude DOUBLE PRECISION NOT NULL, latitude DOUBLE PRECISION NOT NULL, marker_slug VARCHAR(255) NOT NULL, marker_description LONGTEXT NOT NULL, street VARCHAR(255) NOT NULL, zip_code VARCHAR(255) NOT NULL, icon VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_82CF20FE6B715464 (filters_id), INDEX IDX_82CF20FE84A66610 (user_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE marker ADD CONSTRAINT FK_82CF20FE6B715464 FOREIGN KEY (filters_id) REFERENCES filter (id)');
        $this->addSql('ALTER TABLE marker ADD CONSTRAINT FK_82CF20FE84A66610 FOREIGN KEY (user_admin_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE marker DROP FOREIGN KEY FK_82CF20FE6B715464');
        $this->addSql('ALTER TABLE marker DROP FOREIGN KEY FK_82CF20FE84A66610');
        $this->addSql('DROP TABLE filter');
        $this->addSql('DROP TABLE marker');
    }
}
