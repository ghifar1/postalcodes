<?php

namespace App\Http\Controllers;

use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $data = City::where('province_id', $request->province_id)->get();
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
