<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20141207234150 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '1', 'group winners before', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
      
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '2', 'top4 before', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       

     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '3', 'group game', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '4', 'group winners', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '5', 'top4 after group game', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
     
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '6', 'best striker', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
      
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '7', '1/8 finale', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       

     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '8', '1/4 finale', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '9', '1/2 finale', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
     $this->addSql(" insert into point_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '10', 'finale', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
          
     
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    $this->addSql("delete from point_category where id=1");      
    $this->addSql("delete from point_category where id=2");      
    $this->addSql("delete from point_category where id=3");      
    $this->addSql("delete from point_category where id=4");      
    $this->addSql("delete from point_category where id=5");            
      
    }
}
