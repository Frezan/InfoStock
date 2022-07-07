<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220705085850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cart (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, creation_date DATETIME NOT NULL, status VARCHAR(255) NOT NULL, products LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', price DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_BA388B79D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE command (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, creation_date DATETIME NOT NULL, status VARCHAR(255) NOT NULL, products LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', price DOUBLE PRECISION NOT NULL, INDEX IDX_8ECAEAD49D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, sub_cat_id INT NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, promotion TINYINT(1) DEFAULT NULL, promotion_percentage DOUBLE PRECISION DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, brand VARCHAR(255) NOT NULL, INDEX IDX_D34A04AD54FCE60F (sub_cat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_category (id INT AUTO_INCREMENT NOT NULL, cat_id_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_BCE3F798C33F2EBA (cat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, address VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, zip_code VARCHAR(255) DEFAULT NULL, creation_date DATETIME NOT NULL, last_update DATETIME NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B79D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE command ADD CONSTRAINT FK_8ECAEAD49D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD54FCE60F FOREIGN KEY (sub_cat_id) REFERENCES sub_category (id)');
        $this->addSql('ALTER TABLE sub_category ADD CONSTRAINT FK_BCE3F798C33F2EBA FOREIGN KEY (cat_id_id) REFERENCES category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sub_category DROP FOREIGN KEY FK_BCE3F798C33F2EBA');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD54FCE60F');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B79D86650F');
        $this->addSql('ALTER TABLE command DROP FOREIGN KEY FK_8ECAEAD49D86650F');
        $this->addSql('DROP TABLE cart');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE command');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE sub_category');
        $this->addSql('DROP TABLE user');
    }
}
