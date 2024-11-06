<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // send data using array
        // $data['nama'] = 'Mahasiswa';
        // $data['kelas'] = 'IF B 22';
        // $data['prodi'] = '<strong>Informatika</strong>';

        // return view('student.index', $data);  
        
        // send data using compact method
        $nama = 'Mahasiswa';
        $kelas = 'IF B 2022';
        $prodi = '<strong>Informatika</strong>';

        $alphabets = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

        return view('student.index', compact('nama', 'kelas', 'prodi', 'alphabets'));  
    }
}
