<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;


//   http://en.wikipedia.org/wiki/2014_FIFA_World_Cup_group_stage

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20141209233032 extends AbstractMigration
{
    public function up(Schema $schema)
    {
     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '1', 'A', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       

     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '2', 'B', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");  
     
     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '3', 'C', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");  
     
     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '4', 'D', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");  
     
     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '5', 'E', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");  
     
     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '6', 'F', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");  
     
     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '7', 'G', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");  
     
     $this->addSql(" insert into group_category ( id , name, created_by, updated_by, created_at, updated_at )
    values ( '8', 'H', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
     
      
      
      
    // Group A
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '1', 'Brazil', '1', '1', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '2', 'Croatia', '1', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '3', 'Mexico', '1', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '4', 'Cameroon', '1', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
    
    
    // Group B
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '5', 'Spain', '2', '1', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '6', 'Netherlands', '2', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '7', 'Chile', '2', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '8', 'Australia', '2', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    

    
    // Group C
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '9', 'Colombia', '3', '1', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '10', 'Greece', '3', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '11', 'Ivory Coas', '3', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '12', 'Japan', '3', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
    
    
// Group D
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '13', 'Uruguay', '4', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '14', 'Costa Rica', '4', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '15', 'England', '4', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '16', 'Italy', '4', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
  
   
// Group E
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '17', 'Switzerland', '5', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '18', 'Ecuador', '5', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '19', 'France', '5', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '20', 'Honduras', '5', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
    
   
// Group F
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '21', 'Argentina', '6', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '22', 'Bosnia-Herzegovina', '6', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '23', 'Iran', '6', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '24', 'Nigeria', '6', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
    
  
// Group G
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '25', 'Germany', '7', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '26', 'Portugal', '7', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '27', 'Ghana', '7', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '28', 'United States', '7', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
    
   
 
// Group H
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '29', 'Belgium', '8', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");       
  
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '30', 'Algieria', '8', '2', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '31', 'Russia', '8', '3', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
      
    $this->addSql(" insert into team ( id , name, group_id, group_starting_number,  created_by, updated_by, created_at, updated_at )
    values ( '32', 'South Korea', '8', '4', '1', '1', '2014-12-07 23:31:00', '2014-12-07 23:31:00' );  ");    
   
    

    }
    
    
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    $this->addSql('delete from team where id=1');      
    $this->addSql('delete from team where id=2');      
    $this->addSql('delete from team where id=3');      
    $this->addSql('delete from team where id=4');      
    $this->addSql('delete from team where id=5');      
    $this->addSql('delete from team where id=6');      
    $this->addSql('delete from team where id=7');      
    $this->addSql('delete from team where id=8');      
    $this->addSql('delete from team where id=9');      
    $this->addSql('delete from team where id=10');      
    $this->addSql('delete from team where id=11');      
    $this->addSql('delete from team where id=12');      
    $this->addSql('delete from team where id=13');      
    $this->addSql('delete from team where id=14');      
    $this->addSql('delete from team where id=15');      
    $this->addSql('delete from team where id=16');      
    $this->addSql('delete from team where id=17');      
    $this->addSql('delete from team where id=18');      
    $this->addSql('delete from team where id=19');      
    $this->addSql('delete from team where id=20');      
    $this->addSql('delete from team where id=21');      
    $this->addSql('delete from team where id=22');      
    $this->addSql('delete from team where id=23');      
    $this->addSql('delete from team where id=24');      
    $this->addSql('delete from team where id=25');      
    $this->addSql('delete from team where id=26');      
    $this->addSql('delete from team where id=27');      
    $this->addSql('delete from team where id=28');      
    $this->addSql('delete from team where id=29');      
    $this->addSql('delete from team where id=30');      
    $this->addSql('delete from team where id=31');      
    $this->addSql('delete from team where id=32');      
     
    
    
    $this->addSql('delete from group_category where id=1');      
    $this->addSql('delete from group_category where id=2');      
    $this->addSql('delete from group_category where id=3');      
    $this->addSql('delete from group_category where id=4');      
    $this->addSql('delete from group_category where id=5');      
    $this->addSql('delete from group_category where id=6');      
    $this->addSql('delete from group_category where id=7');      
    $this->addSql('delete from group_category where id=8');      
        
    }
}
