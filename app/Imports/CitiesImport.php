<?php

namespace App\Imports;

use App\Models\City;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CitiesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $row)
    {
        foreach ($row as $index=>$col) {
            if($index > 0 )
            {
                City::create([
                    'id' => $col[0],
                    'name' => $col[2],
                    'latitude' => $col[3],
                    'longitude' => $col[4],
                    'postal' => $col[5],
                    'province_id' => $col[1],
                ]);
            }
        }
    }
}
