<?php

namespace App\Http\Controllers;

use App\Models\Pelajar;
use Illuminate\Http\Request;

class PelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pelajars = Pelajar::all();
        return view('pelajar/index', ['pelajars' => $pelajars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pelajar/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // $request->photo->move(public_path('photo'), 'halo.jpg');
        Pelajar::create([
            'nik' => $request->nik,
            'photo' =>$request->photo,
            'nama' => $request->nama
        ]);

        

        return redirect('/pelajar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelajar  $pelajar
     * @return \Illuminate\Http\Response
     */
    public function show(Pelajar $pelajar)
    {
        //
        return view('pelajar/show', compact('pelajar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelajar  $pelajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelajar $pelajar)
    {
        //
        return view ('pelajar/edit', compact('pelajar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelajar  $pelajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelajar $pelajar)
    {
        //
        Pelajar::where('id', $pelajar->id)
            ->update([
                'nik' => $request->nik,
            'photo' =>$request->photo,
            'nama' => $request->nama

            ]);

            return redirect('/pelajar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelajar  $pelajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelajar $pelajar)
    {
        //
        Pelajar::destroy($pelajar->id);
        return redirect('/pelajar');
    }
}