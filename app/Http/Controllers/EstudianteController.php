<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['estudiantes'] = Estudiante::all();
        return view('estudiante.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion
        request()->validate(Estudiante::$rules);

        $estudianteData = request()->except('_token');
        Estudiante::insert($estudianteData);
        //return response()->json($estudianteData);
        return redirect()->route('estudiante.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $estudiante = Estudiante::find($id);
        return view('estudiante.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        request()->validate(Estudiante::$rules);
        $estudianteData=request()->except(['_token', '_method']);
        Estudiante::where('id', '=', $id)->update($estudianteData);
        return redirect('estudiante');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Estudiante::destroy($id);
        redirect('estudiante');
    }
}
