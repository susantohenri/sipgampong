<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_penduduk extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `penduduk` (
        `uuid` varchar(36) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `rt` varchar(255) NOT NULL,
        `jurong` varchar(255) NOT NULL,
        `no_kk` varchar(255) NOT NULL,
        `nama_kk` varchar(255) NOT NULL,
        `status_perkawian` varchar(255) NOT NULL,
        `jenis_kelamin` varchar(255) NOT NULL,
        `jumlah_tanggungan` varchar(255) NOT NULL,
        `jumlah_tanggungan_laki_laki` varchar(255) NOT NULL,
        `jumlah_tanggungan_perempuan` varchar(255) NOT NULL,
        `jumlah_tanggungan_jiwa` varchar(255) NOT NULL,
        `keadaan_rumah` varchar(255) NOT NULL,
        `kepemilikan_rumah` varchar(255) NOT NULL,
        `sejak_tahun` varchar(255) NOT NULL,
        `listrik` varchar(255) NOT NULL,
        `air` varchar(255) NOT NULL,
        `jamban` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `penduduk`");
  }

}