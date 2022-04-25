<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('site.cars');
    }

    public function details($id){
        $car = Car::with('data','category','sub_category','images')
            ->find($id);

        return view('site.car-details',compact('car'));
    }
}
