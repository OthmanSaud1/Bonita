<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function showSurveyPage() {
        if(auth()->check() == false) {
            abort(403, "NOT AUTHORIZED");
        }

        return view('SurveyPage');

    }
}
