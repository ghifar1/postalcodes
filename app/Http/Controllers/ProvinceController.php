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
            'endpoint' => url(''),
            'time' => Carbon::now('Asia/Jakarta'),
            'data' => $data,
        ], 200);
    }

    public function spesific(Request $request)
    {
        $data = Province::find($request->province_id);
        if($data == null)
        {
            return response()->json([
                'status' => 'not found',
                'endpoint' => url(''),
                'time' => Carbon::now('Asia/Jakarta'),
            ]);
        }

        return response()->json([
            'status' => 'success',
            'endpoint' => url(''),
            'time' => Carbon::now('Asia/Jakarta'),
            'data' => $data,
        ], 200);
    }
}
