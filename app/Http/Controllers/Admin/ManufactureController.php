<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacture;
use App\Http\Requests\StoreManufactureRequest;
use App\Http\Requests\UpdateManufactureRequest;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manus = Manufacture::orderByDesc('id')->paginate(10);

        return view('admin.manufactures.list', compact('manus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manufactures.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreManufactureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManufactureRequest $request)
    {
        if (Manufacture::create($request->all())) {
            return redirect()->route('manufactures.index')
            ->with('success', 'Manufacture created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacture $manufacture)
    {
        return view('admin.manufactures.edit', compact('manufacture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacture $manufacture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateManufactureRequest  $request
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManufactureRequest $request, Manufacture $manufacture)
    {
        $manufacture->update($request->all());

        return redirect()->route('manufactures.index')
        ->with('success', 'Manufacture updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacture $manufacture)
    {
        $manufacture->delete();

        return redirect()->route('manufactures.index')
        ->with('success', 'Manufacture deleted successfully');
    }
}
