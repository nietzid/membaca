<?php

namespace App\Controllers;

use App\Models\BelajarModel;
use App\Models\CeritaModel;

class BelajarController extends BaseController
{
    public function index()
    {
        $belajar = new BelajarModel();
        $belajarData = $belajar->join('tb_bacaan', 'tb_belajar.bacaan_id = tb_bacaan.id')->get()->getResultArray();
        if (session()->get('kelas') == 7) {
            return view('belajar_dashboard_guru', ['belajar' => $belajarData]);
        }
        return view('belajar_dashboard', ['belajar' => $belajarData]);
    }

    public function baru(): string
    {
        $belajar = new BelajarModel();
        $belajarData = $belajar->get()->getResultArray();
        $belajarData = array_column($belajarData, 'bacaan_id');
        $cerita = new CeritaModel();
        $randomCerita = $cerita->whereNotIn('id', $belajarData)->orderBy('rand()')->first();
        $data = [
            'cerita' => $randomCerita
        ];
        session()->set('bacaan_id', $randomCerita['id']);
        return view('belajar_baru', $data);
    }

    public function hikmah(): string
    {
        return view('hikmah');
    }

    public function submitHikmah()
    {
        $belajar = new BelajarModel();
        $data = [
            'uuid' => session()->get('id'),
            'bacaan_id' => session()->get('bacaan_id'),
            'hikmah' => $this->request->getVar('jawaban'),
        ];
        $belajar->insert($data);
        return redirect()->to(base_url('belajar'));
    }

    public function submitKomentar()
    {
        $belajar = new BelajarModel();
        $id = $this->request->getVar('id');
        $data = [
            'komentar' => $this->request->getVar('komentar'),
        ];
        $belajar->update($id, $data);
        return redirect()->to(base_url('belajar'));
    }
    public function submitReaction()
    {
        $belajar = new BelajarModel();
        $id = $this->request->getVar('id');
        $data = [
            'reaction' => $this->request->getVar('reaction'),
        ];
        $belajar->update($id, $data);
        return redirect()->to(base_url('belajar'));
    }
}
