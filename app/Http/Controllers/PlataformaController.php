<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plataforma;

class PlataformaController extends Controller
{

    public function index()
    {
        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataforma.index', compact('plataformas'));
    }
    public function register()
    {
        return view('plataforma.register');
    }

    public function create(array $data)
    {
        return Plataforma::create([
            'name'=>$data['name'],
        ]);
    }

    public function store(Request $request)
    {
        $plataforma=Plataforma::create($request->all());
        $plataforma->save();
        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataforma.index', compact('plataformas'));

    }

    public function show($id)
    {

    }

    public function edit(Request $request)
    {
        $plataforma = Plataforma::findOrFail($request->id);
        return view('plataforma.edit', compact('plataforma'));
    }

    public function update(Request $request)
    {
        $plataforma = Plataforma::findOrFail($request->id);
        $plataforma->name = $request->name;


        $plataforma->save();

        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataforma.index', compact('plataformas'));

    }

    public function destroy(Request $request)
    {
        $plataforma = Plataforma::destroy($request->id);
        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataforma.index', compact('plataformas'));
    }
}
