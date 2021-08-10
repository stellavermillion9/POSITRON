<?php

namespace App\Imports;

use App\Models\Maba;
use Maatwebsite\Excel\Concerns\ToModel;

class MabaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Maba([
            'nama' => $row[0], 
            'nim' => $row[1], 
            'offering'=> $row[2],
            'peran' => $row[3]
        ]);
    }
}
