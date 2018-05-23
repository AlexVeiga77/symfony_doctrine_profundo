<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180424174930 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partida ADD campeonatos_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partida ADD CONSTRAINT FK_A9C1580C8D522779 FOREIGN KEY (campeonatos_id) REFERENCES campeonato (id)');
        $this->addSql('CREATE INDEX IDX_A9C1580C8D522779 ON partida (campeonatos_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partida DROP FOREIGN KEY FK_A9C1580C8D522779');
        $this->addSql('DROP INDEX IDX_A9C1580C8D522779 ON partida');
        $this->addSql('ALTER TABLE partida DROP campeonatos_id');
    }
}
