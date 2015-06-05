<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20141214212918 extends AbstractMigration
{
    public function up(Schema $schema)
    {
      
//
//  http://www.world-cup.com.pl/2014/terminarz.php
//       
      // this up() migration is auto-generated, please modify it to your needs
//GROUP GAME - FIRST ROUND      
  // GROUP A    
    // Brazil - Croatia
    $this->addSql(" INSERT INTO typingmatches.match (id , match_number,    match_date        ,team1_id,team2_id   , goal_team1, goal_team2, point_team1, point_team2, point_type_id, point_category_id, is_group_match, is_user_result, user_id,  created_by, updated_by, created_at          , updated_at ) "
    . "                         VALUES ('1'  ,            '1', '2014-06-12 22:00:00',       '1',          '2',          '3',          '1',           '3',           '0',             '1',                 '3',              '1',          '0'    ,       '1',           '1',          '1','2014-12-07 23:31:00', '2014-12-07 23:31:00' ); ");

//    // Mexico - Cameroon
    $this->addSql(" INSERT INTO typingmatches.match (id , match_number,         match_date,   team1_id, team2_id, goal_team1, goal_team2, point_team1, point_team2, point_type_id, point_category_id, is_group_match, is_user_result, user_id,  created_by, updated_by, created_at          , updated_at ) "
    . "                         VALUES (2  ,            2, '2014-06-13 18:00:00',       3,        4,          1,          0,           3,           0,             1,                 3,              1,             0,       1,           1,          1,'2014-12-07 23:31:00', '2014-12-07 23:31:00' ); ");

  // GROUP B    
  // GROUP C    
  // GROUP D    
  // GROUP E    
  // GROUP F    
  // GROUP G    
  // GROUP H    
    
    
//GROUP GAME - SECOND ROUND      
  // GROUP A    
    // Brazil - Mexico
   $this->addSql(" INSERT INTO typingmatches.match (id , match_number,            match_date,team1_id, team2_id, goal_team1, goal_team2, point_team1, point_team2, point_type_id, point_category_id, is_group_match, is_user_result, user_id,  created_by, updated_by, created_at          , updated_at ) "
    . "                        VALUES (3  ,            3, '2014-06-17 21:00:00',       1,        3,          0,          0,           1,           1,             1,                 3,              1,             0,       1,           1,          1,'2014-12-07 23:31:00', '2014-12-07 23:31:00' ); ");
//   
//    // Croatia - Cameroon
   $this->addSql(" INSERT INTO typingmatches.match (id , match_number,            match_date,team1_id, team2_id, goal_team1, goal_team2, point_team1, point_team2, point_type_id, point_category_id, is_group_match, is_user_result, user_id,  created_by, updated_by, created_at          , updated_at ) "
    . "                        VALUES (4  ,            4, '2014-06-18 24:00:00',       2,        4,          4,          0,           3,           0,             1,                 3,              1,              0,       1,           1,          1,'2014-12-07 23:31:00', '2014-12-07 23:31:00' ); ");
     
    
  // GROUP B    
  // GROUP C    
  // GROUP D    
  // GROUP E    
  // GROUP F    
  // GROUP G    
  // GROUP H      
    
    
//GROUP GAME - THIRD ROUND      
  // GROUP A    
    // Cameroon - Brazil
   $this->addSql(" INSERT INTO typingmatches.match (id , match_number,            match_date,team1_id, team2_id, goal_team1, goal_team2, point_team1, point_team2, point_type_id, point_category_id, is_group_match, is_user_result, user_id,  created_by, updated_by, created_at          , updated_at ) "
    . "                        VALUES (5  ,            5, '2014-06-23 22:00:00',       4,        1,          1,          4,           0,           3,             1,                 3,              1,             0,       1,           1,          1,'2014-12-07 23:31:00', '2014-12-07 23:31:00' ); ");
//     
//    // Croatia - Mexico
   $this->addSql(" INSERT INTO typingmatches.match (id , match_number,            match_date,team1_id, team2_id, goal_team1, goal_team2, point_team1, point_team2, point_type_id, point_category_id, is_group_match, is_user_result, user_id,  created_by, updated_by, created_at          , updated_at ) "
    . "                        VALUES (6  ,            6, '2014-06-23 22:00:00',       2,        3,          1,          3,           0,           3,             1,                 3,              1,             0,       1,           1,          1,'2014-12-07 23:31:00', '2014-12-07 23:31:00' ); ");
      
    
  // GROUP B    
  // GROUP C    
  // GROUP D    
  // GROUP E    
  // GROUP F    
  // GROUP G    
  // GROUP H      
    
    
// 1/8 FINALE

// 1/4 FINALE

// 1/2 FINALE

// FINALE & 3TH PLACE
    
    
    
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
