<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function tambah()
    {
        $data = [

            'title' => 'Tambah Data Peminjam Buku'
        ];
        return view('pages/tambah', $data);
    }

    public function about()
    {
        $data = [

            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }
}
