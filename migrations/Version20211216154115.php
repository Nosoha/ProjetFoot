<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211216154115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE composition (id INT AUTO_INCREMENT NOT NULL, poste_id INT DEFAULT NULL, footballeur_id INT DEFAULT NULL, formation_id INT DEFAULT NULL, INDEX IDX_C7F4347A0905086 (poste_id), INDEX IDX_C7F4347FC7F3797 (footballeur_id), INDEX IDX_C7F43475200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE composition ADD CONSTRAINT FK_C7F4347A0905086 FOREIGN KEY (poste_id) REFERENCES poste (id)');
        $this->addSql('ALTER TABLE composition ADD CONSTRAINT FK_C7F4347FC7F3797 FOREIGN KEY (footballeur_id) REFERENCES footballeur (id)');
        $this->addSql('ALTER TABLE composition ADD CONSTRAINT FK_C7F43475200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE commentaire ADD user_id INT NOT NULL, ADD formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC5200282E ON commentaire (formation_id)');
        $this->addSql('ALTER TABLE formation ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_404021BFA76ED395 ON formation (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE composition');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5200282E');
        $this->addSql('DROP INDEX IDX_67F068BCA76ED395 ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BC5200282E ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP user_id, DROP formation_id');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFA76ED395');
        $this->addSql('DROP INDEX IDX_404021BFA76ED395 ON formation');
        $this->addSql('ALTER TABLE formation DROP user_id');
    }
}
