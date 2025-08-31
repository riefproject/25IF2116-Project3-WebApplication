<?php

namespace App\Controllers;

class Tabel extends BaseController
{
    public function index()
    {
        $data['tableData'] = [
            ['kolom1' => 'Baris 1 Kolom 1', 'kolom2' => 'Baris 1 Kolom 2'],
            ['kolom1' => 'Baris 2 Kolom 1', 'kolom2' => 'Baris 2 Kolom 2'],
            ['kolom1' => 'Baris 3 Kolom 1', 'kolom2' => 'Baris 3 Kolom 2'],
        ];

        return view('tabel_view', $data);
    }
}
