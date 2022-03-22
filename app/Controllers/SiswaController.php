<?php

namespace App\Controllers;
use App\Models\siswaModel;

class SiswaController extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new siswaModel();
    }

    public function index()
    {
        $siswa = $this ->siswaModel->findAll();

        // session();
        $data = [
            'siswa' => $siswa ,
            'validation' =>  \Config\Services::validation()
        ];

        return view('siswa/index', $data);
    }

    public function save()
    {
        $siswaModel = new siswaModel();

        $validation =  \Config\Services::validation();
        if (! $this->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required'
        ])){
            session() -> setFlashdata('pesanGagal','Data gagal di Tambahkan!');  

            return redirect() -> to('/') -> withInput() -> with('validation', $validation);    
        };

        $siswaModel -> save([
            'nama' => $this -> request -> getVar('nama'),
            'kelas' => $this -> request -> getVar('kelas'),
            'tgl_lahir' => $this -> request -> getVar('tgl_lahir')
        ]);

        session() -> setFlashdata('pesanBerhasil','Data berhasil di Tambahkan!');  

        return redirect() -> to('/');

    }
    public function delete($id)
    {
        $siswaModel = new siswaModel();
        $siswaModel->delete($id);

        session() -> setFlashdata('pesanDelete','Data berhasil di Hapus!');  
        return redirect() -> to('/');
    }

    public function edit($id)
    {
        $siswaModel = new siswaModel();

        $data = [
            'siswa' => $siswaModel -> where(['id' => $id]) -> first(),
            'validation' =>  \Config\Services::validation()

        ];

        return view('siswa/edit',$data );
    }

    public function update($id)
    {
        $siswaModel = new siswaModel();

        $validation =  \Config\Services::validation();
        if (! $this->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required'
        ])){
            return redirect() -> to('/') -> withInput() -> with('validation', $validation);    
            session() -> setFlashdata('pesanGagalUpdate','Data gagal di Ubah!'); 
        };

        $siswaModel -> save([
            'id' => $id,
            'nama' => $this -> request -> getVar('nama'),
            'kelas' => $this -> request -> getVar('kelas'),
            'tgl_lahir' => $this -> request -> getVar('tgl_lahir')
        ]);

        session() -> setFlashdata('pesanUpdate','Data berhasil di Ubah!');  
        return redirect() -> to('/');
    }
}
