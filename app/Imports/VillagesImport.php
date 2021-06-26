<?php

namespace App\Imports;

use App\Models\Village;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class VillagesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $row)
    {
        foreach ($row as $index=>$col) {
            if($index > 0 )
            {
                Village::create([
                    'id' => $col[0],
                    'name' => $col[2],
                    'latitude' => $col[3],
                    'longitude' => $col[4],
                    'postal' => $col[5],
                    'district_id' => $col[1],
                ]);
            }
        }
    }
}
