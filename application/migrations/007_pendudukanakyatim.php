<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_pendudukanakyatim extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `pendudukanakyatim` (
        `penduduk` varchar(36) NOT NULL,
        `uuid` varchar(36) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `nama` varchar(255) NOT NULL,
        `nama_ayah` varchar(255) NOT NULL,
        `tahun_meninggal` varchar(255) NOT NULL,
        `tempat_meninggal` varchar(255) NOT NULL,
        `sebab_meninggal` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `pendudukanakyatim`");
  }

}