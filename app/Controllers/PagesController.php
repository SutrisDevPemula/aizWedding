<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | AzizaWedding',
            'active' => 'active'
        ];
        return view('users/home', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang Kami | AzizaWedding',
            'active' => 'active'
        ];
        return view('users/tentang', $data);
        // echo "Hello word";
    }
}
