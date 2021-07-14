<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_seeds extends CI_Migration {

  function up () {
  	$this->load->model(array('Users', 'Roles', 'Permissions', 'Menus'));
    $fas = array ('database', 'desktop', 'download', 'ethernet', 'hdd', 'hdd', 'headphones', 'keyboard', 'keyboard', 'laptop', 'memory', 'microchip', 'mobile', 'mobile-alt', 'plug', 'power-off', 'print', 'satellite', 'satellite-dish', 'save', 'save', 'sd-card', 'server', 'sim-card', 'stream', 'tablet', 'tablet-alt', 'tv', 'upload');
  	$admin = $this->Roles->create(array('name' => 'admin'));
    foreach (array('User', 'Role', 'Permission', 'Menu', 'Penduduk', 'PendudukKeluarga', 'PendudukAnakYatim', 'PendudukUsaha', 'PendudukTernak', 'PendudukKendaraan', 'PendudukCacat'/*additionalEntity*/) as $entity)
    {
      foreach (array('index', 'create', 'read', 'update', 'delete') as $action)
      {
        $this->Permissions->create(array(
          'role' => $admin,
          'action' => $action,
          'entity' => $entity
        ));
      }
    }

    $this->Menus->create(array(
      'role' => $admin,
      'name' => 'Manajemen<br> User',
      'url' => 'User',
      'icon' => 'user'
    ));

    $this->Menus->create(array(
      'role' => $admin,
      'name' => 'Data<br> Penduduk',
      'url' => 'Penduduk',
      'icon' => 'users'
    ));

    $this->Users->create(array(
  		'username' => 'admin',
  		'password' => md5('admin'),
  		'role' => $admin
  	));
  }

  function down () {

  }

}