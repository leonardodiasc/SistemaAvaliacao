<?php

namespace App\Http\Controllers;

use App\Models\Educador;
use Illuminate\Http\Request;

class EducadorController extends Controller
{
    public function index()
    {
        return response()->json(Educador::all(), 200);
    }

    public function store(Request $request)
    {
        $educador = Educador::create($request->all());
        return response()->json($educador, 201);
    }
}
