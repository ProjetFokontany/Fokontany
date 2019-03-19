<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190314211251 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fokontany (id INT AUTO_INCREMENT NOT NULL, id_commune_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, chef_fokontany VARCHAR(255) NOT NULL, secretaire VARCHAR(255) NOT NULL, nombre_travailleur INT NOT NULL, nombre_quartier INT NOT NULL, INDEX IDX_E9452B46B690CFA5 (id_commune_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D64935C246D5 (password), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE individu (id INT AUTO_INCREMENT NOT NULL, id_niveau_etude_id INT DEFAULT NULL, id_situation_matrimoniale_id INT DEFAULT NULL, id_foyer_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naiss DATE NOT NULL, fonction VARCHAR(255) NOT NULL, numero_cin VARCHAR(15) NOT NULL, INDEX IDX_5EE42FCE17F3D059 (id_niveau_etude_id), INDEX IDX_5EE42FCEED3AB26C (id_situation_matrimoniale_id), INDEX IDX_5EE42FCE7B4A76CD (id_foyer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, maire VARCHAR(255) NOT NULL, secretaire VARCHAR(255) NOT NULL, nombre_travailleur INT NOT NULL, nombre_fokontany INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE foyer (id INT AUTO_INCREMENT NOT NULL, id_appartement_id INT DEFAULT NULL, id_quartier_id INT DEFAULT NULL, pere VARCHAR(255) NOT NULL, mere VARCHAR(255) NOT NULL, nombre INT NOT NULL, revenu_pere DOUBLE PRECISION NOT NULL, revenu_mere DOUBLE PRECISION NOT NULL, INDEX IDX_4EB44E88DC1426BC (id_appartement_id), INDEX IDX_4EB44E88C70C9A5C (id_quartier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quartiers (id INT AUTO_INCREMENT NOT NULL, id_fokontany_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, nombre_foyer INT NOT NULL, nombre_appartement INT NOT NULL, INDEX IDX_5E2F7BE8415109AF (id_fokontany_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE situation_matrimoniale (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau_etude (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secteur_activite (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE appartements (id INT AUTO_INCREMENT NOT NULL, id_quartier_id INT DEFAULT NULL, adresse VARCHAR(255) NOT NULL, latitude VARCHAR(255) NOT NULL, longitude VARCHAR(255) NOT NULL, nombre_foyer INT NOT NULL, INDEX IDX_8876962BC70C9A5C (id_quartier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE travailler (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE travailler_individu (travailler_id INT NOT NULL, individu_id INT NOT NULL, INDEX IDX_DAEB6151693DB813 (travailler_id), INDEX IDX_DAEB6151480B6028 (individu_id), PRIMARY KEY(travailler_id, individu_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE travailler_secteur_activite (travailler_id INT NOT NULL, secteur_activite_id INT NOT NULL, INDEX IDX_B7DB31F693DB813 (travailler_id), INDEX IDX_B7DB31F5233A7FC (secteur_activite_id), PRIMARY KEY(travailler_id, secteur_activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depense (id INT AUTO_INCREMENT NOT NULL, id_foyer_id INT DEFAULT NULL, frais_scolarite DOUBLE PRECISION NOT NULL, electricite DOUBLE PRECISION NOT NULL, eau DOUBLE PRECISION NOT NULL, internet DOUBLE PRECISION NOT NULL, autre DOUBLE PRECISION NOT NULL, INDEX IDX_340597577B4A76CD (id_foyer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fokontany ADD CONSTRAINT FK_E9452B46B690CFA5 FOREIGN KEY (id_commune_id) REFERENCES commune (id)');
        $this->addSql('ALTER TABLE individu ADD CONSTRAINT FK_5EE42FCE17F3D059 FOREIGN KEY (id_niveau_etude_id) REFERENCES niveau_etude (id)');
        $this->addSql('ALTER TABLE individu ADD CONSTRAINT FK_5EE42FCEED3AB26C FOREIGN KEY (id_situation_matrimoniale_id) REFERENCES situation_matrimoniale (id)');
        $this->addSql('ALTER TABLE individu ADD CONSTRAINT FK_5EE42FCE7B4A76CD FOREIGN KEY (id_foyer_id) REFERENCES foyer (id)');
        $this->addSql('ALTER TABLE foyer ADD CONSTRAINT FK_4EB44E88DC1426BC FOREIGN KEY (id_appartement_id) REFERENCES appartements (id)');
        $this->addSql('ALTER TABLE foyer ADD CONSTRAINT FK_4EB44E88C70C9A5C FOREIGN KEY (id_quartier_id) REFERENCES quartiers (id)');
        $this->addSql('ALTER TABLE quartiers ADD CONSTRAINT FK_5E2F7BE8415109AF FOREIGN KEY (id_fokontany_id) REFERENCES fokontany (id)');
        $this->addSql('ALTER TABLE appartements ADD CONSTRAINT FK_8876962BC70C9A5C FOREIGN KEY (id_quartier_id) REFERENCES quartiers (id)');
        $this->addSql('ALTER TABLE travailler_individu ADD CONSTRAINT FK_DAEB6151693DB813 FOREIGN KEY (travailler_id) REFERENCES travailler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE travailler_individu ADD CONSTRAINT FK_DAEB6151480B6028 FOREIGN KEY (individu_id) REFERENCES individu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE travailler_secteur_activite ADD CONSTRAINT FK_B7DB31F693DB813 FOREIGN KEY (travailler_id) REFERENCES travailler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE travailler_secteur_activite ADD CONSTRAINT FK_B7DB31F5233A7FC FOREIGN KEY (secteur_activite_id) REFERENCES secteur_activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_340597577B4A76CD FOREIGN KEY (id_foyer_id) REFERENCES foyer (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE quartiers DROP FOREIGN KEY FK_5E2F7BE8415109AF');
        $this->addSql('ALTER TABLE travailler_individu DROP FOREIGN KEY FK_DAEB6151480B6028');
        $this->addSql('ALTER TABLE fokontany DROP FOREIGN KEY FK_E9452B46B690CFA5');
        $this->addSql('ALTER TABLE individu DROP FOREIGN KEY FK_5EE42FCE7B4A76CD');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_340597577B4A76CD');
        $this->addSql('ALTER TABLE foyer DROP FOREIGN KEY FK_4EB44E88C70C9A5C');
        $this->addSql('ALTER TABLE appartements DROP FOREIGN KEY FK_8876962BC70C9A5C');
        $this->addSql('ALTER TABLE individu DROP FOREIGN KEY FK_5EE42FCEED3AB26C');
        $this->addSql('ALTER TABLE individu DROP FOREIGN KEY FK_5EE42FCE17F3D059');
        $this->addSql('ALTER TABLE travailler_secteur_activite DROP FOREIGN KEY FK_B7DB31F5233A7FC');
        $this->addSql('ALTER TABLE foyer DROP FOREIGN KEY FK_4EB44E88DC1426BC');
        $this->addSql('ALTER TABLE travailler_individu DROP FOREIGN KEY FK_DAEB6151693DB813');
        $this->addSql('ALTER TABLE travailler_secteur_activite DROP FOREIGN KEY FK_B7DB31F693DB813');
        $this->addSql('DROP TABLE fokontany');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE individu');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE foyer');
        $this->addSql('DROP TABLE quartiers');
        $this->addSql('DROP TABLE situation_matrimoniale');
        $this->addSql('DROP TABLE niveau_etude');
        $this->addSql('DROP TABLE secteur_activite');
        $this->addSql('DROP TABLE appartements');
        $this->addSql('DROP TABLE travailler');
        $this->addSql('DROP TABLE travailler_individu');
        $this->addSql('DROP TABLE travailler_secteur_activite');
        $this->addSql('DROP TABLE depense');
    }
}
