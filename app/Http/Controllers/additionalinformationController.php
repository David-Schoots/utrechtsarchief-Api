<?php

namespace App\Http\Controllers;

use App\Models\additionalinformations;
use Illuminate\Http\Request;

class additionalinformationController extends Controller
{
    public function index(){
        $additionalinformation = additionalinformations::all();

        return response()->json([
            'status' => true,
            'message' => 'additionalinformation found',
            'data' => $additionalinformation,
        ], 200);
    }

    public function show($id){
        $additionalinformation = additionalinformations::find($id);
         if (! $additionalinformation) {
            return response()->json([
                'status' => false,
                'message' => 'additionalinformation not found',
                
            ], 404);
        }
        return response()->json([
            'status' => true,
            'message' => 'additionalinformation found',
            'data' => $additionalinformation,
        ], 200);
    }
}