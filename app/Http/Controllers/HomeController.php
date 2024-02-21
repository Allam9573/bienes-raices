<?php

namespace App\Http\Controllers;

use App\Models\PropiedadModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $propiedades = PropiedadModel::all();
        return view('home', compact(('propiedades')));
    }
    public function crear()
    {
        return view('crear');
    }
    public function registrarPropiedad(Request $request)
    {
        $nuevaPropiedad = new PropiedadModel();
        $nuevaPropiedad->color = $request->input('color');
        $nuevaPropiedad->metros = $request->input('metros');
        $nuevaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nuevaPropiedad->save();
        return redirect('/');
    }
    public function editar($id)
    {
        $propiedad = PropiedadModel::find($id);
        return view('editar', compact('propiedad'));
    }
    public function actualizar(Request $request, $id)
    {
        $propiedad = PropiedadModel::find($id);
        $propiedad->color = $request->input('color');
        $propiedad->metros = $request->input('metros');
        $propiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $propiedad->save();
        return redirect('/');
    }
}
