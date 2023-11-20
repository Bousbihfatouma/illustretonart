<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109204255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD relation_id INT DEFAULT NULL, ADD blog_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC3256915B FOREIGN KEY (relation_id) REFERENCES illustration (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCDAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC3256915B ON commentaire (relation_id)');
        $this->addSql('CREATE INDEX IDX_67F068BCDAE07E97 ON commentaire (blog_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC3256915B');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCDAE07E97');
        $this->addSql('DROP INDEX IDX_67F068BC3256915B ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BCDAE07E97 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP relation_id, DROP blog_id');
    }
}
