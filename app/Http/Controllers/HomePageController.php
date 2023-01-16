<?php

namespace App\Http\Controllers;

use App\Models\HairSurvey;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function showHomePage() {

        /*
         *
         * if the user has completed the hair survey, its result will be sent to
         * homepage.blade.php alongside all the hair products here:
         *
        */
        $hairSurvey = "";
        if(auth()->check()) { //if logged in
            $hairSurvey = auth()->user()->hair_survey()->get();
        }


        return view('HomePage')->with(['hairSurvey' => $hairSurvey, 'products' => Product::all()]);
    }

}
