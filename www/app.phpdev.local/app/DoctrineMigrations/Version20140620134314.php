<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140620134314 extends AbstractMigration
{
    public function up(Schema $schema)
    {
		$this->addSql("INSERT INTO users (id, username, username_canonical, email, email_canonical, enabled, salt, password, last_login, locked, expired, expires_at, confirmation_token, password_requested_at, roles, credentials_expired, credentials_expire_at, first_name, last_name) VALUES
					   (1, 'admin', 'admin', 'adib78@o2.pl', 'adib78@o2.pl', '1', '78ciav75p3oc0ggw804k448wwwwg4o0', 'XImktJPMJ/x1s3XIwGy2Tn/W7y8ilvGLrU6LWqe2kDpvLiDRIqfl4q0VvYv8t0A7oYuAMhh2pyFSTUva/IFt7g==', NULL, '0', '0', NULL, NULL, NULL, 'a:0:{}', '0', NULL, 'Adrian', 'Bartkowiak')");
    
    //$this->addSql("SELECT setval('users_id_seq', 2);");
    }

    public function down(Schema $schema)
    {
		$this->addSql("delete from users where id=1");
    
    //$this->addSql("SELECT setval('users_id_seq', 1);");
    }
}
