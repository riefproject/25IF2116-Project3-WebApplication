<?php

namespace App\Controllers;

class TabelLooping extends BaseController
{
    public function index()
    {
        $data['tableData'] = [
            ['kolom1' => 'Baris 1 Kolom 1', 'kolom2' => 'Baris 1 Kolom 2'],
            ['kolom1' => 'Baris 2 Kolom 1', 'kolom2' => 'Baris 2 Kolom 2'],
            ['kolom1' => 'Baris 3 Kolom 1', 'kolom2' => 'Baris 3 Kolom 2'],
            ['kolom1' => 'Baris 4 Kolom 1', 'kolom2' => 'Baris 4 Kolom 2'],
            ['kolom1' => 'Baris 5 Kolom 1', 'kolom2' => 'Baris 5 Kolom 2'],
        ];

        return view('tabel_looping_view', $data);
    }
}
