<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190209190005 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE lot (id INT AUTO_INCREMENT NOT NULL, numero INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE observation (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passeport2 (id INT AUTO_INCREMENT NOT NULL, observation_id INT NOT NULL, lot_id INT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) DEFAULT NULL, nin VARCHAR(10) DEFAULT NULL, dossier_expedie VARCHAR(30) DEFAULT NULL, date_expedie DATE DEFAULT NULL, passeport_livre VARCHAR(30) DEFAULT NULL, date_livraison DATE DEFAULT NULL, passeport_arrive VARCHAR(30) DEFAULT NULL, date_arrive DATE DEFAULT NULL, montant INT NOT NULL, date_export DATE DEFAULT NULL, INDEX IDX_B7DBECF31409DD88 (observation_id), INDEX IDX_B7DBECF3A8CBA5F7 (lot_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE passeport2 ADD CONSTRAINT FK_B7DBECF31409DD88 FOREIGN KEY (observation_id) REFERENCES observation (id)');
        $this->addSql('ALTER TABLE passeport2 ADD CONSTRAINT FK_B7DBECF3A8CBA5F7 FOREIGN KEY (lot_id) REFERENCES lot (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE passeport2 DROP FOREIGN KEY FK_B7DBECF3A8CBA5F7');
        $this->addSql('ALTER TABLE passeport2 DROP FOREIGN KEY FK_B7DBECF31409DD88');
        $this->addSql('DROP TABLE lot');
        $this->addSql('DROP TABLE observation');
        $this->addSql('DROP TABLE passeport2');
    }
}
