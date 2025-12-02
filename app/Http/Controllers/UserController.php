<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'status' => true,
            'message' => 'Perons found',
            'users' => $users,
        ], 200);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (! $user) {
            return response()->json([
                'status' => false,
                'message' => 'User is niet gevonden'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'User found',
            'user' => $user
        ], 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if(! $user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found with that id',
            ], 404);
        }
        
        $user->delete();

    return response()->json([
    'status' => true,
    'message' => 'user deleted successfully'
    ], 204);
    }

    public function update($id)
{
    $user = User::findOrFail($id);

    if(! $user){
        return response()->json([
            'status' => false,
            'message' => 'Panorama not found with that id',
        ], 404);
    }
    $user->update($request->all());

    return response()->json([
        'status' => true,
        'message' => 'panorama updated successfully'
    ], 200);
}

public function store(Request $request)
{
    $user = User::create($request->all());

    return response()->json([
        'status' => true,
        'message' => 'panorama created successfully'
    ], 201);
}
}