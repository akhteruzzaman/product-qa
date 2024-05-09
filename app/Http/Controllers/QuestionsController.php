<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;

class QuestionsController extends Controller
{
    // show questions
    public function showQuestions(){
        $questions = DB::table('questions')->get();
        return view('questions', compact('questions'));
    }

    // about
    public function about(){        
        return view('about');
    }

    // add questions
    public function addQuestions(){        
        return view('add-questions');
    }

    // save questions
    public function saveQuestions(Request $request){        
        $questions = new Questions();

        $questions->question = $request->question;
        $questions->answer = $request->answer;
       
        $questions->save();

        return Redirect::tokenRedirect('questions');
        //$redirectUrl = getRedirectRoute('questions');
        //return redirect($redirectUrl);
    }
}
