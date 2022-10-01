<?php

namespace App\Http\Controllers;

use App\Models\TipoSangre;
use Illuminate\Http\Request;

/**
 * Class TipoSangreController
 * @package App\Http\Controllers
 */
class TipoSangreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoSangres = TipoSangre::paginate();

        return view('tipo-sangre.index', compact('tipoSangres'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoSangres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoSangre = new TipoSangre();
        return view('tipo-sangre.create', compact('tipoSangre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoSangre::$rules);

        $tipoSangre = TipoSangre::create($request->all());

        return redirect()->route('tipo-sangres.index')
            ->with('success', 'TipoSangre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoSangre = TipoSangre::find($id);

        return view('tipo-sangre.show', compact('tipoSangre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoSangre = TipoSangre::find($id);

        return view('tipo-sangre.edit', compact('tipoSangre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoSangre $tipoSangre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoSangre $tipoSangre)
    {
        request()->validate(TipoSangre::$rules);

        $tipoSangre->update($request->all());

        return redirect()->route('tipo-sangres.index')
            ->with('success', 'TipoSangre updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoSangre = TipoSangre::find($id)->delete();

        return redirect()->route('tipo-sangres.index')
            ->with('success', 'TipoSangre deleted successfully');
    }
}
