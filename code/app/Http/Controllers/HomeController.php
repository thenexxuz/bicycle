<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
}
