<?php

namespace App\Controllers;

class PIC extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Sistem Internal Audit'
    ];

    return view('pic/judul_audit_tpk', $data);
  }


  public function data_audit()
  {
    $data = [
      'title' => 'Data Audit | Sistem internal Audit Yayasan Kesehatan Telkom'
    ];

    return view('pic/data_audit', $data);
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
