<?php

namespace App\Http\Controllers\Ffxiv;

use App\Http\Controllers\Controller;
use App\Models\FfxivCharacter;
use Illuminate\Http\Request;

class FfxivCharacterController extends Controller
{

    public function getAll()
    {
        return response()->json(FfxivCharacter::all());
    }

    public function get($id)
    {
        return response()->json(FfxivCharacter::find($id));
    }

    public function create(Request $request)
    {
        $author = FfxivCharacter::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = FfxivCharacter::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        FfxivCharacter::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}