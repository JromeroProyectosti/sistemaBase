<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211123022245 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE accion (id INT AUTO_INCREMENT NOT NULL, empresa_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, accion VARCHAR(255) NOT NULL, INDEX IDX_8A02E3B4521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ciudad (id INT AUTO_INCREMENT NOT NULL, region_id INT NOT NULL, nombre VARCHAR(50) NOT NULL, codigo VARCHAR(10) NOT NULL, INDEX IDX_8E86059E98260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comuna (id INT AUTO_INCREMENT NOT NULL, ciudad_id INT NOT NULL, nombre VARCHAR(50) NOT NULL, codigo VARCHAR(10) NOT NULL, INDEX IDX_7E7DAE49E8608214 (ciudad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE configuracion (id INT AUTO_INCREMENT NOT NULL, dia_fondo_fijo INT NOT NULL, host VARCHAR(255) DEFAULT NULL, access_token LONGTEXT DEFAULT NULL, verify_token LONGTEXT DEFAULT NULL, lotes INT DEFAULT NULL, valor_multa INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cuenta (id INT AUTO_INCREMENT NOT NULL, empresa_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_ultimamodificacion DATETIME DEFAULT NULL, INDEX IDX_31C7BFCF521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE empresa (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, rol VARCHAR(255) DEFAULT NULL, rut VARCHAR(20) NOT NULL, logo VARCHAR(255) DEFAULT NULL, fecha_ingreso DATETIME NOT NULL, fecha_ultimamodificacion DATETIME DEFAULT NULL, fecha_vigencia DATETIME NOT NULL, logo_alt VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE importacion (id INT AUTO_INCREMENT NOT NULL, cuenta_id INT DEFAULT NULL, usuario_carga_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, fecha_carga DATETIME NOT NULL, url LONGTEXT NOT NULL, INDEX IDX_F483A40E9AEFF118 (cuenta_id), INDEX IDX_F483A40E8924462A (usuario_carga_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, empresa_id INT NOT NULL, depende_de_id INT DEFAULT NULL, menu_cabezera_id INT DEFAULT NULL, modulo_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, icono VARCHAR(255) DEFAULT NULL, orden INT DEFAULT NULL, INDEX IDX_7D053A93521E1991 (empresa_id), INDEX IDX_7D053A93A53F971C (depende_de_id), INDEX IDX_7D053A93975F194D (menu_cabezera_id), INDEX IDX_7D053A93C07F55F5 (modulo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu_cabezera (id INT AUTO_INCREMENT NOT NULL, empresa_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, INDEX IDX_431A2F13521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulo (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, ruta VARCHAR(255) NOT NULL, nombre_alt VARCHAR(255) DEFAULT NULL, descripcion VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulo_per (id INT AUTO_INCREMENT NOT NULL, empresa_id INT NOT NULL, modulo_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, INDEX IDX_ABF22FE5521E1991 (empresa_id), INDEX IDX_ABF22FE5C07F55F5 (modulo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pais (id INT AUTO_INCREMENT NOT NULL, empresa_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, orden INT DEFAULT NULL, INDEX IDX_7E5D2EFF521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE privilegio (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, accion_id INT NOT NULL, modulo_per_id INT DEFAULT NULL, INDEX IDX_D0E1EA51DB38439E (usuario_id), INDEX IDX_D0E1EA513F4B5275 (accion_id), INDEX IDX_D0E1EA5188C77C8D (modulo_per_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE privilegio_tipousuario (id INT AUTO_INCREMENT NOT NULL, accion_id INT NOT NULL, tipousuario_id INT NOT NULL, modulo_per_id INT DEFAULT NULL, INDEX IDX_BE31D90E3F4B5275 (accion_id), INDEX IDX_BE31D90E74CA5DCD (tipousuario_id), INDEX IDX_BE31D90E88C77C8D (modulo_per_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(50) NOT NULL, codigo VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sucursal (id INT AUTO_INCREMENT NOT NULL, cuenta_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, INDEX IDX_E99C6D569AEFF118 (cuenta_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, usuario_tipo_id INT NOT NULL, categoria_id INT DEFAULT NULL, status_id INT DEFAULT NULL, tipo_documento_id INT DEFAULT NULL, username VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, nombre VARCHAR(100) NOT NULL, estado TINYINT(1) NOT NULL, fecha_activacion DATETIME NOT NULL, correo VARCHAR(255) NOT NULL, token LONGTEXT DEFAULT NULL, empresa_actual INT DEFAULT NULL, fecha_no_disponible DATETIME DEFAULT NULL, whatsapp VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, rut VARCHAR(255) DEFAULT NULL, direccion VARCHAR(255) DEFAULT NULL, sexo VARCHAR(255) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, password_ant VARCHAR(255) DEFAULT NULL, lunes TINYINT(1) DEFAULT NULL, lunes_start TIME DEFAULT NULL, lunes_end TIME DEFAULT NULL, martes TINYINT(1) DEFAULT NULL, martes_start TIME DEFAULT NULL, martes_end TIME DEFAULT NULL, miercoles TINYINT(1) DEFAULT NULL, miercoles_start TIME DEFAULT NULL, miercoles_end TIME DEFAULT NULL, jueves TINYINT(1) DEFAULT NULL, jueves_start TIME DEFAULT NULL, jueves_end TIME DEFAULT NULL, viernes TINYINT(1) DEFAULT NULL, viernes_start TIME DEFAULT NULL, viernes_end TIME DEFAULT NULL, sabado TINYINT(1) DEFAULT NULL, sabado_start TIME DEFAULT NULL, sabado_end TIME DEFAULT NULL, domingo TINYINT(1) DEFAULT NULL, domingo_start TIME DEFAULT NULL, domingo_end TIME DEFAULT NULL, sobrecupo INT DEFAULT NULL, lotes JSON DEFAULT NULL, UNIQUE INDEX UNIQ_2265B05DF85E0677 (username), INDEX IDX_2265B05DD001C42B (usuario_tipo_id), INDEX IDX_2265B05D3397707A (categoria_id), INDEX IDX_2265B05D6BF700BD (status_id), INDEX IDX_2265B05DF6939175 (tipo_documento_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_categoria (id INT AUTO_INCREMENT NOT NULL, empresa_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, n_leads INT NOT NULL, INDEX IDX_C72BF83F521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_cuenta (id INT AUTO_INCREMENT NOT NULL, cuenta_id INT DEFAULT NULL, usuario_id INT DEFAULT NULL, INDEX IDX_CBD55CC69AEFF118 (cuenta_id), INDEX IDX_CBD55CC6DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_no_disponible (id INT AUTO_INCREMENT NOT NULL, usuario_id INT DEFAULT NULL, fecha DATE NOT NULL, hora_inicio TIME NOT NULL, hora_fin TIME NOT NULL, fecha_inicio DATE DEFAULT NULL, fecha_fin DATE DEFAULT NULL, anio INT DEFAULT NULL, mes INT DEFAULT NULL, dia INT DEFAULT NULL, concepto VARCHAR(255) NOT NULL, INDEX IDX_7C64E39CDB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_status (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_tipo (id INT AUTO_INCREMENT NOT NULL, menu_cabezera_id INT DEFAULT NULL, empresa_id INT DEFAULT NULL, nombre VARCHAR(100) NOT NULL, orden INT DEFAULT NULL, fijar TINYINT(1) NOT NULL, nombre_interno VARCHAR(255) NOT NULL, statues LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', INDEX IDX_19576757975F194D (menu_cabezera_id), INDEX IDX_19576757521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_tipo_documento (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_usuariocategoria (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, cuenta_id INT DEFAULT NULL, INDEX IDX_892F60F1DB38439E (usuario_id), INDEX IDX_892F60F19AEFF118 (cuenta_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE webhook (id INT AUTO_INCREMENT NOT NULL, verify_token VARCHAR(255) DEFAULT NULL, token VARCHAR(255) NOT NULL, user_token LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accion ADD CONSTRAINT FK_8A02E3B4521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE ciudad ADD CONSTRAINT FK_8E86059E98260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE comuna ADD CONSTRAINT FK_7E7DAE49E8608214 FOREIGN KEY (ciudad_id) REFERENCES ciudad (id)');
        $this->addSql('ALTER TABLE cuenta ADD CONSTRAINT FK_31C7BFCF521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE importacion ADD CONSTRAINT FK_F483A40E9AEFF118 FOREIGN KEY (cuenta_id) REFERENCES cuenta (id)');
        $this->addSql('ALTER TABLE importacion ADD CONSTRAINT FK_F483A40E8924462A FOREIGN KEY (usuario_carga_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93A53F971C FOREIGN KEY (depende_de_id) REFERENCES menu (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93975F194D FOREIGN KEY (menu_cabezera_id) REFERENCES menu_cabezera (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93C07F55F5 FOREIGN KEY (modulo_id) REFERENCES modulo (id)');
        $this->addSql('ALTER TABLE menu_cabezera ADD CONSTRAINT FK_431A2F13521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE modulo_per ADD CONSTRAINT FK_ABF22FE5521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE modulo_per ADD CONSTRAINT FK_ABF22FE5C07F55F5 FOREIGN KEY (modulo_id) REFERENCES modulo (id)');
        $this->addSql('ALTER TABLE pais ADD CONSTRAINT FK_7E5D2EFF521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE privilegio ADD CONSTRAINT FK_D0E1EA51DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE privilegio ADD CONSTRAINT FK_D0E1EA513F4B5275 FOREIGN KEY (accion_id) REFERENCES accion (id)');
        $this->addSql('ALTER TABLE privilegio ADD CONSTRAINT FK_D0E1EA5188C77C8D FOREIGN KEY (modulo_per_id) REFERENCES modulo_per (id)');
        $this->addSql('ALTER TABLE privilegio_tipousuario ADD CONSTRAINT FK_BE31D90E3F4B5275 FOREIGN KEY (accion_id) REFERENCES accion (id)');
        $this->addSql('ALTER TABLE privilegio_tipousuario ADD CONSTRAINT FK_BE31D90E74CA5DCD FOREIGN KEY (tipousuario_id) REFERENCES usuario_tipo (id)');
        $this->addSql('ALTER TABLE privilegio_tipousuario ADD CONSTRAINT FK_BE31D90E88C77C8D FOREIGN KEY (modulo_per_id) REFERENCES modulo_per (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE sucursal ADD CONSTRAINT FK_E99C6D569AEFF118 FOREIGN KEY (cuenta_id) REFERENCES cuenta (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05DD001C42B FOREIGN KEY (usuario_tipo_id) REFERENCES usuario_tipo (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D3397707A FOREIGN KEY (categoria_id) REFERENCES usuario_categoria (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D6BF700BD FOREIGN KEY (status_id) REFERENCES usuario_status (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05DF6939175 FOREIGN KEY (tipo_documento_id) REFERENCES usuario_tipo_documento (id)');
        $this->addSql('ALTER TABLE usuario_categoria ADD CONSTRAINT FK_C72BF83F521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE usuario_cuenta ADD CONSTRAINT FK_CBD55CC69AEFF118 FOREIGN KEY (cuenta_id) REFERENCES cuenta (id)');
        $this->addSql('ALTER TABLE usuario_cuenta ADD CONSTRAINT FK_CBD55CC6DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE usuario_no_disponible ADD CONSTRAINT FK_7C64E39CDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE usuario_tipo ADD CONSTRAINT FK_19576757975F194D FOREIGN KEY (menu_cabezera_id) REFERENCES menu_cabezera (id)');
        $this->addSql('ALTER TABLE usuario_tipo ADD CONSTRAINT FK_19576757521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE usuario_usuariocategoria ADD CONSTRAINT FK_892F60F1DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE usuario_usuariocategoria ADD CONSTRAINT FK_892F60F19AEFF118 FOREIGN KEY (cuenta_id) REFERENCES cuenta (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE privilegio DROP FOREIGN KEY FK_D0E1EA513F4B5275');
        $this->addSql('ALTER TABLE privilegio_tipousuario DROP FOREIGN KEY FK_BE31D90E3F4B5275');
        $this->addSql('ALTER TABLE comuna DROP FOREIGN KEY FK_7E7DAE49E8608214');
        $this->addSql('ALTER TABLE importacion DROP FOREIGN KEY FK_F483A40E9AEFF118');
        $this->addSql('ALTER TABLE sucursal DROP FOREIGN KEY FK_E99C6D569AEFF118');
        $this->addSql('ALTER TABLE usuario_cuenta DROP FOREIGN KEY FK_CBD55CC69AEFF118');
        $this->addSql('ALTER TABLE usuario_usuariocategoria DROP FOREIGN KEY FK_892F60F19AEFF118');
        $this->addSql('ALTER TABLE accion DROP FOREIGN KEY FK_8A02E3B4521E1991');
        $this->addSql('ALTER TABLE cuenta DROP FOREIGN KEY FK_31C7BFCF521E1991');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93521E1991');
        $this->addSql('ALTER TABLE menu_cabezera DROP FOREIGN KEY FK_431A2F13521E1991');
        $this->addSql('ALTER TABLE modulo_per DROP FOREIGN KEY FK_ABF22FE5521E1991');
        $this->addSql('ALTER TABLE pais DROP FOREIGN KEY FK_7E5D2EFF521E1991');
        $this->addSql('ALTER TABLE usuario_categoria DROP FOREIGN KEY FK_C72BF83F521E1991');
        $this->addSql('ALTER TABLE usuario_tipo DROP FOREIGN KEY FK_19576757521E1991');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93A53F971C');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93975F194D');
        $this->addSql('ALTER TABLE usuario_tipo DROP FOREIGN KEY FK_19576757975F194D');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93C07F55F5');
        $this->addSql('ALTER TABLE modulo_per DROP FOREIGN KEY FK_ABF22FE5C07F55F5');
        $this->addSql('ALTER TABLE privilegio DROP FOREIGN KEY FK_D0E1EA5188C77C8D');
        $this->addSql('ALTER TABLE privilegio_tipousuario DROP FOREIGN KEY FK_BE31D90E88C77C8D');
        $this->addSql('ALTER TABLE ciudad DROP FOREIGN KEY FK_8E86059E98260155');
        $this->addSql('ALTER TABLE importacion DROP FOREIGN KEY FK_F483A40E8924462A');
        $this->addSql('ALTER TABLE privilegio DROP FOREIGN KEY FK_D0E1EA51DB38439E');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE usuario_cuenta DROP FOREIGN KEY FK_CBD55CC6DB38439E');
        $this->addSql('ALTER TABLE usuario_no_disponible DROP FOREIGN KEY FK_7C64E39CDB38439E');
        $this->addSql('ALTER TABLE usuario_usuariocategoria DROP FOREIGN KEY FK_892F60F1DB38439E');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D3397707A');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D6BF700BD');
        $this->addSql('ALTER TABLE privilegio_tipousuario DROP FOREIGN KEY FK_BE31D90E74CA5DCD');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05DD001C42B');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05DF6939175');
        $this->addSql('DROP TABLE accion');
        $this->addSql('DROP TABLE ciudad');
        $this->addSql('DROP TABLE comuna');
        $this->addSql('DROP TABLE configuracion');
        $this->addSql('DROP TABLE cuenta');
        $this->addSql('DROP TABLE empresa');
        $this->addSql('DROP TABLE importacion');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE menu_cabezera');
        $this->addSql('DROP TABLE modulo');
        $this->addSql('DROP TABLE modulo_per');
        $this->addSql('DROP TABLE pais');
        $this->addSql('DROP TABLE privilegio');
        $this->addSql('DROP TABLE privilegio_tipousuario');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE sucursal');
        $this->addSql('DROP TABLE usuario');
        $this->addSql('DROP TABLE usuario_categoria');
        $this->addSql('DROP TABLE usuario_cuenta');
        $this->addSql('DROP TABLE usuario_no_disponible');
        $this->addSql('DROP TABLE usuario_status');
        $this->addSql('DROP TABLE usuario_tipo');
        $this->addSql('DROP TABLE usuario_tipo_documento');
        $this->addSql('DROP TABLE usuario_usuariocategoria');
        $this->addSql('DROP TABLE webhook');
    }
}
