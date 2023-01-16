<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\Migrations\ResetCommand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SurveyController extends Controller
{
    public function showSurveyPage() {
        if(auth()->check() == false) {
            abort(403, "NOT AUTHORIZED LOL");
        }

        return view('SurveyPage');

    }

    public function submitSurvey(Request $req) {
        $formFields = $req->validate([
            "xxx" => ["required"],
            "email" => ['required','email', Rule::unique('users', 'email')],
            'password'=> 'required|confirmed|min:6'
        ]);
    }
}
