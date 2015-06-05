<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20141207232525 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
     $this->addSql(" insert into point_type ( id , name, created_by, updated_by, created_at, updated_at )
     values ( '1', 'real result', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  "); 
      
     $this->addSql(" insert into point_type ( id , name, created_by, updated_by, created_at, updated_at )
     values ( '2', 'perfect result', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
      
     $this->addSql(" insert into point_type ( id , name, created_by, updated_by, created_at, updated_at )
     values ( '3', 'good diff', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       

     $this->addSql(" insert into point_type ( id , name, created_by, updated_by, created_at, updated_at )
     values ( '4', 'good point', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
     $this->addSql(" insert into point_type ( id , name, created_by, updated_by, created_at, updated_at )
     values ( '5', 'only win', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
     $this->addSql(" insert into point_type ( id , name, created_by, updated_by, created_at, updated_at )
     values ( '6', 'bad result', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
        
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    $this->addSql("delete from point_type where id=1");      
    $this->addSql("delete from point_type where id=2");      
    $this->addSql("delete from point_type where id=3");      
    $this->addSql("delete from point_type where id=4");      
    $this->addSql("delete from point_type where id=5");      
      
      
    }
}
