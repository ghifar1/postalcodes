<?php

namespace App\Http\Controllers;

use App\Models\District;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $data = District::where('city_id', $request->city_id)->get();
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
