<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data = array(
      'nama' => 'M Naufal Badruttamam',
      'usia' => 20,
      'lokasi' => 'Surabaya',
      'profesi' => 'Software Developer',
      'minat' => 'Machine Learning, Data Science, and Web Development'
    );

    return view('welcome_message', $data);
  }
}
