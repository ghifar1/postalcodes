<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{

    public function index(Request $request)
    {
        $data = Province::all();
        return response()->json([
            'status' => 'success',
            'time' => Carbon::now('Asia/Jakarta'),
            'data' => $data,
        ], 200);
    }
}
