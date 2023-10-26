<?php

namespace App\Controllers;

use App\Models\perpusModel;

class Perpus extends BaseController
{
    protected $perpusModel;
    public function __construct()
    {
        $this->perpusModel = new perpusmodel();
    }
    public function index()
    {
        $perpus = $this->perpusModel->findAll();
        $data = [
            'title' => 'Data Peminjaman Buku Perpustakaan Senang Belajar',
            'perpus' => $perpus
        ];

        return view('perpus/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Form Tambah Data Peminjam'
        ];

        return view('perpus/tambah', $data);
    }
    public function save()
    {
        $this->perpusModel->save(
            [
                'nama_anggota' => $this->request->getVar('nama_anggota'),
                'kode_anggota' => $this->request->getVar('kode_anggota'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir')
            ]
        );

        session()->setFlashdata('Message', 'Create Data Successfully.');

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->perpusModel->delete($id);

        session()->setFlashdata('Message1', 'Data has been deleted!.');

        return redirect()->to('');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Peminjam',
            'perpus' => $this->perpusModel->getPerpus($id)
        ];

        return view('perpus/edit', $data);
    }
    public function update()
    {
        $this->perpusModel->save(
            [
                'id' => $this->request->getVar('id'),
                'nama_anggota' => $this->request->getVar('nama_anggota'),
                'kode_anggota' => $this->request->getVar('kode_anggota'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir')
            ]
        );

        session()->setFlashdata('Message', 'Data has Successfully Changed.');

        return redirect()->to('/');
    }
}
