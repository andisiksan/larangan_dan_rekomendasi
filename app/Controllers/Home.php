<?php

namespace App\Controllers;

use App\Models\PenyakitModels;

class Home extends BaseController
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
            $cari_penyakit = $this->penyakitmodels->selected($keyword);
        } else {
            $cari_penyakit = $this->penyakitmodels->selectpenyakit();
        }

        $data = [
            'cari_penyakit' => $cari_penyakit,
            'penyakit' => $this->penyakitmodels->getPenyakit(),
        ];


        return view('/home/home', $data);
    }

    public function about()
    {
        return view('/about/about');
    }
}
