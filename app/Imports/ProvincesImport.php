<?php

namespace App\Imports;

use App\Models\Province;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProvincesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $row)
    {
        foreach ($row as $index=>$col) {
            if($index > 0 )
            {
                Province::create([
                    'id' => $col[0],
                    'name' => $col[2],
                    'latitude' => $col[3],
                    'longitude' => $col[4],
                    'postal' => $col[5],
                ]);
            }
        }
    }
}
