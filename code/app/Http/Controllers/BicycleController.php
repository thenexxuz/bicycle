<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBicycleRequest;
use App\Http\Requests\UpdateBicycleRequest;
use App\Models\Bicycle;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikes = Bicycle::select(
            [
                'bicycles.id',
                'bike_models.name',
                'bike_models.description',
                'bike_models.gender',
                'bike_models.price',
                'bike_models.wheel_size',
                'brands.name as brand',
                'categories.name as category',
                'users.name as owner'
            ])
            ->join('bike_models', 'bike_models.id', 'bicycles.model')
            ->join('brands', 'bike_models.brand', 'brands.id')
            ->join('categories', 'bike_models.category', 'categories.id')
            ->join('users', 'users.id', 'bicycles.owner')
            ->orderBy('users.name', 'asc')
            ->get();

        return view('home', ['bikes' => $bikes]);
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
    public function store(StoreBicycleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicycle $bicycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bicycle $bicycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBicycleRequest $request, Bicycle $bicycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicycle $bicycle)
    {
        //
    }
}
