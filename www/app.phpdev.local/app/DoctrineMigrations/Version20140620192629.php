<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140620192629 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("insert into languages(id, name, locale_name) values(1, 'Polski', 'pl')");
	    $this->addSql("insert into languages(id, name, locale_name) values(2, 'English', 'en')");
   
    //$this->addSql("SELECT setval('languages_id_seq', 3);");       
    }

    public function down(Schema $schema)
    {
        $this->addSql("delete from languages where id=1");
	    $this->addSql("delete from languages where id=2");

    //$this->addSql("SELECT setval('languages_id_seq', 1);");        
    }
}
