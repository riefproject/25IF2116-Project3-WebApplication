<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new \App\Models\MahasiswaModel();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        if($keyword){
            $mahasiswa = $this->mahasiswaModel->like('nama', $keyword)->orLike('nim', $keyword);
        } else {
            $mahasiswa = $this->mahasiswaModel;
        }
        $data['mahasiswa'] = $mahasiswa->findAll();
        $data['keyword'] = $keyword;
        return view('mahasiswa_view', $data);
    }

    public function detail($nim)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->getMahasiswa($nim);

        if (empty($data['mahasiswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mahasiswa dengan NIM ' . $nim . ' tidak ditemukan.');
        }

        return view('detail_mahasiswa_view', $data);
    }

    public function create()
    {
        return view('create_mahasiswa_view');
    }

    public function store()
    {
        // Set validation rules
        $rules = [
            'nim' => [
                'rules' => 'required|is_unique[mahasiswa.nim]',
                'errors' => [
                    'required' => 'NIM harus diisi.',
                    'is_unique' => 'NIM sudah terdaftar.'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus diisi.'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus diisi.'
                ]
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->mahasiswaModel->save([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
        ]);

        return redirect()->to('/mahasiswa')->with('message', 'Data berhasil ditambahkan.');
    }

    public function edit($nim)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->getMahasiswa($nim);
        if (empty($data['mahasiswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mahasiswa dengan NIM ' . $nim . ' tidak ditemukan.');
        }
        return view('edit_mahasiswa_view', $data);
    }

    public function update($nim)
    {
        $this->mahasiswaModel->save([
            'nim' => $nim,
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    public function delete($nim)
    {
        $this->mahasiswaModel->delete($nim);
        return redirect()->to('/mahasiswa');
    }
}
