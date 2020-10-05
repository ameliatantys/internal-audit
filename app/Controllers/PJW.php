<?php

namespace App\Controllers;

class PJW extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Sistem Internal Audit'
    ];

    return view('pjw/judul_audit', $data);
  }

  public function tambah_data()
  {
    $data = [
      'title' => 'Tambah Data Audit'
    ];

    return view('pjw/tambah_data_audit', $data);
  }

  public function data_audit()
  {
    $data = [
      'title' => 'Data Audit | Sistem internal Audit Yayasan Kesehatan Telkom'
    ];

    return view('pjw/data_audit', $data);
  }


  public function tambah_detail_audit()
  {
    $data = [
      'title' => 'Detail Data Audit'
    ];

    return view('pjw/detail_audit', $data);
  }

  public function notifikasi()
  {
    $data = [
      'title' => 'Notifikasi'
    ];

    return view('pjw/notifikasi', $data);
  }

  public function profil()
  {
    $data = [
      'title' => 'Notifikasi'
    ];

    return view('pjw/notifikasi', $data);
  }

  //--------------------------------------------------------------------

}
