<?php

namespace App\Controllers;

use App\Models\PenyakitModels;

class Penyakit extends BaseController
{
    protected $penyakitmodels;


    public function __construct()
    {
        $this->penyakitmodels = new PenyakitModels();
    }


    public function index()
    {
        $keyword = $this->request->getPost('penyakitkeyword');

        // var_dump($keyword);

        if ($keyword) {
            $cari_penyakit = $this->penyakitmodels->selectpenyakit($keyword);
        } else {
            $cari_penyakit = $this->penyakitmodels->selectpenyakit();
        }

        $data = [
            'cari_penyakit' => $cari_penyakit,
            'penyakit' => $this->penyakitmodels->getPenyakit(),
        ];

        // dd($data);

        return view('/penyakit/penyakit', $data);
    }
}
