<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505075002 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etat_projet (id INT AUTO_INCREMENT NOT NULL, valeur VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE diplome ADD but_id INT NOT NULL, ADD intitule_id INT NOT NULL, ADD universite_id INT NOT NULL');
        $this->addSql('ALTER TABLE diplome ADD CONSTRAINT FK_EB4C4D4EB8914BA4 FOREIGN KEY (but_id) REFERENCES but (id)');
        $this->addSql('ALTER TABLE diplome ADD CONSTRAINT FK_EB4C4D4E6729EDCE FOREIGN KEY (intitule_id) REFERENCES intitule (id)');
        $this->addSql('ALTER TABLE diplome ADD CONSTRAINT FK_EB4C4D4E2A52F05F FOREIGN KEY (universite_id) REFERENCES universite (id)');
        $this->addSql('CREATE INDEX IDX_EB4C4D4EB8914BA4 ON diplome (but_id)');
        $this->addSql('CREATE INDEX IDX_EB4C4D4E6729EDCE ON diplome (intitule_id)');
        $this->addSql('CREATE INDEX IDX_EB4C4D4E2A52F05F ON diplome (universite_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE etat_projet');
        $this->addSql('ALTER TABLE diplome DROP FOREIGN KEY FK_EB4C4D4EB8914BA4');
        $this->addSql('ALTER TABLE diplome DROP FOREIGN KEY FK_EB4C4D4E6729EDCE');
        $this->addSql('ALTER TABLE diplome DROP FOREIGN KEY FK_EB4C4D4E2A52F05F');
        $this->addSql('DROP INDEX IDX_EB4C4D4EB8914BA4 ON diplome');
        $this->addSql('DROP INDEX IDX_EB4C4D4E6729EDCE ON diplome');
        $this->addSql('DROP INDEX IDX_EB4C4D4E2A52F05F ON diplome');
        $this->addSql('ALTER TABLE diplome DROP but_id, DROP intitule_id, DROP universite_id');
    }
}
