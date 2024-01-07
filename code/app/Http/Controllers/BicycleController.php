<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBicycleRequest;
use App\Http\Requests\UpdateBicycleRequest;
use App\Models\Bicycle;
use App\Models\BikeModel;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

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
            ->where('users.id', auth()->id())
            ->get();

        return view('bikes.index', ['bikes' => $bikes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'bikes.create',
            [
                'categories' => Category::all(),
                'brands' => Brand::all(),
                'bike_models' => BikeModel::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBicycleRequest $request)
    {
        $validated = $request->validated();

        $bike_model = new BikeModel([
            'name' => $validated['name'],
            'brand' => $validated['brand'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'gender' => $validated['gender'],
            'category' => $validated['category'],
            'wheel_size' => $validated['wheel_size'],
        ]);
        $bike_model->save();
        $bike = new Bicycle([
            'owner' => auth()->id(),
            'model' => $bike_model->id,
        ]);
        $bike->save();

        return to_route('bikes.index');
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
