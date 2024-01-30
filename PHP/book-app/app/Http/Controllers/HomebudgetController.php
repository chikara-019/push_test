<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\HomeBudget;

class HomebudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('homebudget.index', ['categorys'=> $categories]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'date'=>'required|date',
            'category'=>'required|numeric',
            'price'=>'required|numeric',
        ]);


        $result = HomeBudget::create([

            'date' => $request->date,
            'category_id' => $request->category,
            'price' => $request->price
        ]);

        if (!empty($result)) {

            session()->flash('flash_message', '支出を登録しました。');
        } else{
            seesion()->flash('flash_error_message', '支出を登録できませんでした。');
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
