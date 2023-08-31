<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $cars = Car::latest()->paginate(10);
        return view('cars.index');
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data = $request->validate([
        'name'  =>  'required',
        'plat'  =>  'required',
        'description'  =>  'required',
        'price'  =>  'required|integer',
        'status'  =>  'required',
        ]);
        if($request->file('image')){
        $data['image'] = $request->file('image')->store('cars');
        }
          Car::create($data);
          return redirect()->route('car.index')->with('success', 'Data mobil   berhasil ditambahkan');
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
