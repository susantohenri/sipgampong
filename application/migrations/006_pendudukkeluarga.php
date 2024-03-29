<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_pendudukkeluarga extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `pendudukkeluarga` (
        `penduduk` varchar(36) NOT NULL,
        `uuid` varchar(36) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `nama` varchar(255) NOT NULL,
        `tempat_lahir` varchar(255) NOT NULL,
        `tanggal_lahir` date NOT NULL,
        `hubungan` varchar(255) NOT NULL,
        `pekerjaan` varchar(255) NOT NULL,
        `agama` varchar(255) NOT NULL,
        `pendidikan_terakhir` varchar(255) NOT NULL,
        `pendidikan_tamat` varchar(255) NOT NULL,
        `suku` varchar(255) NOT NULL,
        `masih_melanjutkan` varchar(255) NOT NULL,
        `dimana` varchar(255) NOT NULL,
        `jurusan` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `pendudukkeluarga`");
  }

}