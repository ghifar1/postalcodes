<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index(Request $request)
    {
        $data = Village::where('district_id', $request->district_id)->get();
        if(count($data) == 0)
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

    public function spesific(Request $request)
    {
        $data = Village::find($request->village_id);
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
