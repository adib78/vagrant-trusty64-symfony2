<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140620145722 extends AbstractMigration
  {

  public function up(Schema $schema)
    {
    $this->addSql("INSERT INTO users (id, username, username_canonical, email, email_canonical, enabled, salt, password, last_login, locked, expired, expires_at, confirmation_token, password_requested_at, roles, credentials_expired, credentials_expire_at, first_name, last_name) VALUES
		  		 (2, 'manager', 'manager',  'manager@typingmatches.pl', 'manager@typingmatches.pl', '1', '86qgtocjuvocgcggcoo8g0cw0k0sg0w', 'ixQjk0f+YLVEjRAHFIAvOD1/rOYm7wFUn7Tl7BcUBd3JqXFBYAlVVZJrxShnBzTuR0dBW6mbI6JjO4S4tz41jw==', NULL, '0', '0', NULL, NULL, NULL, 'a:0:{}', '0', NULL, 'Joachim', 'Loew'),
					 (3, 'player1', 'player1', 'player1@typingmatches.pl', 'player1@typingmatches.pl', '1', '71r0szizjmskk4c4gwwowgkg8k4oks4', 'CnCiDQ8xbljAk8yO6Oaww+pKrbI9ncrm2wd11a/8UCPttIdNuWGqmoyhhqGk9OFB8rMnP3G1v5ArTQNIGi7WTg==', NULL, '0', '0', NULL, NULL, NULL, 'a:0:{}', '0', NULL, 'Lionel', 'Messi'),
					 (4, 'player2', 'player2', 'player2@typingmatches.pl', 'player2@typingmatches.pl', '1', '71r0szizjmskk4c4gwwowgkg8k4oks4', 'CnCiDQ8xbljAk8yO6Oaww+pKrbI9ncrm2wd11a/8UCPttIdNuWGqmoyhhqGk9OFB8rMnP3G1v5ArTQNIGi7WTg==', NULL, '0', '0', NULL, NULL, NULL, 'a:0:{}', '0', NULL, 'Andres', 'Iniesta')
           ;
					 ");

    //$this->addSql("SELECT setval('users_id_seq', 11);");           
    
    $this->addSql("INSERT INTO user_group (user_id, group_id) VALUES ('1', '1');");
    $this->addSql("INSERT INTO user_group (user_id, group_id) VALUES ('2', '2');");
    $this->addSql("INSERT INTO user_group (user_id, group_id) VALUES ('3', '3');");
    $this->addSql("INSERT INTO user_group (user_id, group_id) VALUES ('4', '3');");
    }

  public function down(Schema $schema)
    {
    $this->addSql('delete from user_group where user_id=1 and group_id=1');
    $this->addSql('delete from user_group where user_id=2 and group_id=2');
    $this->addSql('delete from user_group where user_id=3 and group_id=3');
    $this->addSql('delete from user_group where user_id=4 and group_id=3');


    //$this->addSql('delete from users where id=2');

    //$this->addSql("SELECT setval('users_id_seq', 2);");  
    }

  }
