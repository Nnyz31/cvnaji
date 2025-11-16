<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    protected function getBaseData(): array
    {
        $db = Database::connect();

        $biodata = $db->table('biodata')
            ->where('id', 2)
            ->get()
            ->getRowArray();

        if (! $biodata) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data biodata tidak ditemukan.');
        }

        $pendidikan = $db->table('pendidikan')
            ->where('biodata_id', $biodata['id'])
            ->orderBy('tahun_mulai', 'DESC')
            ->get()->getResultArray();

        $pengalaman = $db->table('pengalaman')
            ->where('biodata_id', $biodata['id'])
            ->orderBy('tahun_mulai', 'DESC')
            ->get()->getResultArray();

        $skills = $db->table('skills')
            ->where('biodata_id', $biodata['id'])
            ->orderBy('id', 'ASC')
            ->get()->getResultArray();

        $portofolio = $db->table('portofolio')
            ->where('biodata_id', $biodata['id'])
            ->orderBy('tahun', 'DESC')
            ->get()->getResultArray();

        return compact('biodata', 'pendidikan', 'pengalaman', 'skills', 'portofolio');
    }

    public function index()
    {
        $data = $this->getBaseData();
        $data['page'] = 'home';
        return view('cv', $data); // <-- PAKAI VIEW BARU
    }

    public function pendidikan()
    {
        $data = $this->getBaseData();
        $data['page'] = 'pendidikan';
        return view('cv', $data);
    }

    public function pengalaman()
    {
        $data = $this->getBaseData();
        $data['page'] = 'pengalaman';
        return view('cv', $data);
    }

    public function skills()
    {
        $data = $this->getBaseData();
        $data['page'] = 'skills';
        return view('cv', $data);
    }

    public function portofolio()
    {
        $data = $this->getBaseData();
        $data['page'] = 'portofolio';
        return view('cv', $data);
    }
}
