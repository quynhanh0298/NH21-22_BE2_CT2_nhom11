<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Protype;
use App\Http\Requests\StoreProtypeRequest;
use App\Http\Requests\UpdateProtypeRequest;

class ProtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protypes = Protype::orderByDesc('id')->paginate(10);
        return view('admin.protypes.list', compact('protypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.protypes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProtypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProtypeRequest $request)
    {
        if (Protype::create($request->all())) {
            return redirect()->route('protypes.index')
            ->with('success', 'Product created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Protype  $protype
     * @return \Illuminate\Http\Response
     */
    public function show(Protype $protype)
    {
        return view('admin.protypes.edit',compact('protype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Protype  $protype
     * @return \Illuminate\Http\Response
     */
    public function edit(Protype $protype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProtypeRequest  $request
     * @param  \App\Models\Protype  $protype
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProtypeRequest $request, Protype $protype)
    {
        $protype->update($request->all());

        return redirect()->route('protypes.index')
        ->with('success','Protype updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Protype  $protype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protype $protype)
    {
        $protype->delete();

       return redirect()->route('protypes.index')->with('success','Protype deleted successfully');
    }
}
