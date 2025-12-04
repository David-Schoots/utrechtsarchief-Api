<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panorama;

class PanoramaController extends Controller
{
    /**
     * Display a listing of the panoramas.
     */
    public function index()
    {
        $panoramas = Panorama::with('additionalinformations')->get()->map(function($panorama) {
            $panoramaArray = $panorama->toArray();
            $panoramaArray['image_url'] = $panorama->image_url;
            return $panoramaArray;
        });

        return response()->json([
            'status' => true,
            'message' => 'Files found',
            'pages' => $panoramas,
        ], 200);
    }

    /**
     * Display the specified panorama.
     */
    public function show($id)
    {
        $panorama = Panorama::with('additionalinformations')->find($id);

        if (! $panorama) {
            return response()->json([
                'status' => false,
                'message' => 'Panorama not found',
            ], 404);
        }

        $panoramaData = $panorama->toArray();
        $panoramaData['image_url'] = $panorama->image_url;

        return response()->json([
            'status' => true,
            'data' => $panoramaData,
        ], 200);
    }

    /**
     * Display the specified panorama with its additional information.
     */
    public function showWithAdditional($id)
    {
        $panorama = Panorama::with('additionalinformations')->find($id);

        if (! $panorama) {
            return response()->json([
                'status' => false,
                'message' => 'Panorama not found',
            ], 404);
        }

        $panoramaData = $panorama->toArray();
        $panoramaData['image_url'] = $panorama->image_url;

        return response()->json([
            'status' => true,
            'data' => $panoramaData,
        ], 200);
    }

public function destroy($id)
{
$panoramas = Panorama::findOrFail($id);

if(! $panoramas){
return response()->json([
'status' => false,
'message' => 'Panorama not found with that id',
], 404);
}
$panoramas->delete();

return response()->json([
'status' => true,
'message' => 'panorama deleted successfully'
], 204);
}

public function update(Request $request, $id)
{
    $panoramas = Panorama::findOrFail($id);

    if(! $panoramas){
        return response()->json([
            'status' => false,
            'message' => 'Panorama not found with that id',
        ], 404);
    }
    $panoramas->update($request->all());

    return response()->json([
        'status' => true,
        'message' => 'panorama updated successfully'
    ], 200);
}

public function store(Request $request)
{
    $panoramas = Panorama::create($request->all());

    return response()->json([
        'status' => true,
        'message' => 'panorama created successfully'
    ], 201);
}
}