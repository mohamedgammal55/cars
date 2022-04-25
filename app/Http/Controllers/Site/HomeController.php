<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Brands;
use App\Models\AboutUs;
use App\Models\Car;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders  = Slider::latest()->get();
        $teams    = Team::all()->random(4);
        $latestCar = Car::with('data','category','sub_category')->latest()->take(6)->get();
        return view('site.index',compact('sliders','teams','latestCar'));
    }

    public function about(){
        $abouts = AboutUs::all();
        $brands = Brands::all();
        return view('site.about',compact('abouts','brands'));
    }

    public function posts(){
        return view('site.posts');
    }

    public function postDetails(){
        return view('site.post_details');
    }

    public function allTeam(){
        $teams = Team::latest()->get();
        return view('site.team',compact('teams'));
    }
}
