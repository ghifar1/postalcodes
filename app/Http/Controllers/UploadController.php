<?php

namespace App\Http\Controllers;

use App\Imports\CitiesImport;
use App\Imports\DistrictsImport;
use App\Imports\ProvincesImport;
use App\Imports\VillagesImport;
use App\Models\Province;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        Province::whereNotNull('id')->delete();
        Excel::import(new ProvincesImport(), $request->file('provinces'));
        Excel::import(new CitiesImport(), $request->file('cities'));
        Excel::import(new DistrictsImport(), $request->file('districts'));
        Excel::import(new VillagesImport(), $request->file('villages'));

        return redirect()->back();
    }
}
