<?php

namespace App\Http\Controllers\MadenFlorist;

use Illuminate\Http\Request;
use App\Models\MadenFlorist\Color;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::get();
        return view('madenflorist.colors.index')->with(['colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('madenflorist.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'hex_color' => 'required',
        ]);

        //save
        $color_store = new Color();
        $color_store->name_en = $request->name_en;
        $color_store->name_ar = $request->name_ar;
        $color_store->hex_code = $request->hex_color;
        $color_store->save();

        //redirect
        return redirect()->route('colors.index')->with('message_success', 'Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colors = Color::findOrFail($id);
        return view('madenflorist.colors.edit')->with(['colors' => $colors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_en' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'hex_color' => 'required',
        ]);

        //save
        $color_update = Color::find($id);
        $color_update->name_en = $request->name_en;
        $color_update->name_ar = $request->name_ar;
        $color_update->hex_code = $request->hex_color;
        $color_update->save();

        //redirect
        return redirect()->route('colors.index')->with('message_success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
