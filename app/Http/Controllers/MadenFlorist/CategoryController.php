<?php

namespace App\Http\Controllers\MadenFlorist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\CategoryDataTable;
use App\Models\MadenFlorist\Category;
use App\Models\MadenFlorist\Dropdowns\YesNo;
use App\Models\MadenFlorist\Dropdowns\AllowedBanned;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $datatable)
    {
        return $datatable->render('madenflorist.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $yes_no = YesNo::All();
        $allowed_banned = AllowedBanned::All();
        
        return view('madenflorist.categories.create')->with([
            'yes_no'=>$yes_no,
            'allowed_banned'=>$allowed_banned
        ]);
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
            'seperate' => 'required',
            'status' => 'required',
        ]);

        //save
        $categorie_store = new Category();
        $categorie_store->name_en = $request->name_en;
        $categorie_store->name_ar = $request->name_ar;
        $categorie_store->consider_as_separate = $request->seperate;
        $categorie_store->status = $request->status;
        $categorie_store->save();

        //redirect
        return redirect()->route('categories.index')->with('message_success', 'Record created successfully');
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
        $yes_no = YesNo::All();
        $allowed_banned = AllowedBanned::All();
        $categories = Category::findOrFail($id);
        return view('madenflorist.categories.edit')->with([
            'yes_no'=>$yes_no,
            'allowed_banned'=>$allowed_banned,
            'categories'=>$categories
        ]);
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
            'seperate' => 'required',
            'status' => 'required',
        ]);

        $categorie_update = Category::find($id);
        $categorie_update->name_en = $request->name_en;
        $categorie_update->name_ar = $request->name_ar;
        $categorie_update->consider_as_separate = $request->seperate;
        $categorie_update->status = $request->status;
        $categorie_update->save();

        //redirect
        return redirect()->route('categories.index')->with('message_success', 'Record updated successfully');
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
