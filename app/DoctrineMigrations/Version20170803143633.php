<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170803143633 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql("INSERT INTO book_properties (name, releaseDate, length, genres, userReadable, adminReadable) VALUES ('Colleagues And Demons', '06.04.2015', 30, 'Drama', 'Yes', 'Yes')");
    
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO book_properties (name, releaseDate, length, genres, userReadable, adminReadable) VALUES ('Humans In The Library', '15.06.1982', 600, 'Non-fiction', 'No', 'Yes')");
        $this->addSql("INSERT INTO book_properties (name, releaseDate, length, genres, userReadable, adminReadable) VALUES ('Founders Of Evil', '30.08.1530', 900, 'Drama', 'Yes', 'Yes')");
        $this->addSql("INSERT INTO book_properties (name, releaseDate, length, genres, userReadable, adminReadable) VALUES ('Ancestor With Horns', '10.10.2019', 1000, 'Drama', 'Yes', 'Yes')");
        $this->addSql("INSERT INTO book_properties (name, releaseDate, length, genres, userReadable, adminReadable) VALUES ('Age Of The Light', '06.12.1923', 234, 'Tragedy', 'Yes', 'Yes')");
        $this->addSql("INSERT INTO book_properties (name, releaseDate, length, genres, userReadable, adminReadable) VALUES ('Learning With The River', '02.02.1965', 200, 'Children', 'Yes', 'Yes')");
        $this->addSql("INSERT INTO book_properties (name, releaseDate, length, genres, userReadable, adminReadable) VALUES ('Lord And Buffoon', '09.07.2001', 240, 'Horror', 'Yes', 'Yes')");
    
    }
}
