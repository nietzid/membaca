<?php

namespace App\Controllers;

use App\Models\CeritaModel;
use App\Models\TestModel;

class BacaController extends BaseController
{
    public function materi()
    {
        $current_lv = session()->get('level') ? session()->get('level') : 'A';
        $cerita = new CeritaModel();
        $ceritaData = $cerita->where('level',$current_lv)->get()->getResultArray();
        $randIndex = rand(0,(count($ceritaData)-1));
        $data = [
            'cerita' => $ceritaData[$randIndex]
        ];
        session()->set('cerita',$ceritaData[$randIndex]['kode']);
        return view('materi',$data);
    }

    public function test()
    {
        $current_cerita = session()->get('cerita');
        $cerita = new TestModel();
        $ceritaData = $cerita->where('bacaan_id',$current_cerita)->get()->getResultArray();
        $randIndex = rand(0,(count($ceritaData)-1));
        $data = [
            'test' => $ceritaData[$randIndex]
        ];
        return view('test',$data);
    }
}