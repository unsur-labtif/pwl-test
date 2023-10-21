<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data['mahasiswa'] = [
            [
                'nama' => 'Mahasiswa 1',
                'npm' => '552012001'
            ],
            [
                'nama' => 'Mahasiswa 2',
                'npm' => '552012002'
            ]
        ];

        return view('mahasiswa.index',)->with($data);
    }

    public function edit($npm) {
        $data = [
            [
                'nama' => 'Mahasisawa 1',
                'npm' => '552012001'
            ],
            [
                'nama' => 'Mahasisawa 2',
                'npm' => '552012002'
            ]
        ];
        $dataMhs = null;
        foreach($data as $key => $mhs){
            if($mhs['npm'] == $npm){
                $dataMhs = $data[$key];
            }
        }

        if($dataMhs == null){
            return redirect()->route('mahasiswa.index');
        }
        return view('mahasiswa.edit', compact('dataMhs'));
    }

    function update(Request $request)  {
        dd($request);
    }
}
