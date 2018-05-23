<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180424160701 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE campeonato ADD organizacao_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE campeonato ADD CONSTRAINT FK_722DB8CAE30256E3 FOREIGN KEY (organizacao_id) REFERENCES organizacao (id)');
        $this->addSql('CREATE INDEX IDX_722DB8CAE30256E3 ON campeonato (organizacao_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE campeonato DROP FOREIGN KEY FK_722DB8CAE30256E3');
        $this->addSql('DROP INDEX IDX_722DB8CAE30256E3 ON campeonato');
        $this->addSql('ALTER TABLE campeonato DROP organizacao_id');
    }
}
