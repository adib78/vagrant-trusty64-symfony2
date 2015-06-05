<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140620143952 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("INSERT INTO groups (id, name, roles) VALUES
						(1, 'Administrator', 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
						(2, 'Manager', 'a:1:{i:0;s:12:\"ROLE_MANAGER\";}'),
						(3, 'Players', 'a:1:{i:0;s:9:\"ROLE_USER\";}')");

    //$this->addSql("SELECT setval('groups_id_seq', 5);");        
        
    }

    public function down(Schema $schema)
    {
	    $this->addSql("delete from groups where id=1");
	    $this->addSql("delete from groups where id=2");
	    $this->addSql("delete from groups where id=3");

    //$this->addSql("SELECT setval('groups_id_seq', 1);");   
    }
}
