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
            'programstudi' => $row[1],
            'offering' => $row[2],
            'nim' => $row[3],
            'kelompok' => $row[4],
            'peran' => $row[5]
        ]);
    }
}
