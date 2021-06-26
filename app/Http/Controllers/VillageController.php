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
                'time' => Carbon::now('Asia/Jakarta'),
            ]);
        }
        return response()->json([
            'status' => 'success',
            'time' => Carbon::now('Asia/Jakarta'),
            'data' => $data,
        ], 200);
    }
}
