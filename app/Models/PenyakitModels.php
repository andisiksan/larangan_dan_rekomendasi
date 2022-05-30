<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModels extends Model
{
    protected $table = 'penyakit_anda';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id_penyakit';
    protected $allowedFields = ['id_penyakit', 'nama_penyakit', 'tentang_penyakit', 'larangan', 'anjuran'];

    public function getPenyakit($id_penyakit = false)
    {
        if ($id_penyakit === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_penyakit' => $id_penyakit]);
        }
    }


    public function selectpenyakit($penyakit = false)
    {
        if ($penyakit == false) {
            return $this
                ->findAll();
        }

        // //
        // return $this
        // ->like('nama_penyakit', $penyakit)
        //     ->findAll();
    }
    public function selected($penyakit)
    {

        foreach ($penyakit as $p) {

            $hasil[] = $this
                ->like('nama_penyakit', $p)
                ->first();
        }
        return $hasil;
    }
}
