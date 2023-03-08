<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\feedbackrequest;
use App\Models\feedback;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class feedbackController extends Controller
{
    public function index() {
        $data = feedback::all();
        return view('feedback.feedback', ['data' => $data]);
    }

    public function feedbackCreate() {
        return view('feedback.feedbackCreate');
    }

/*
    public function feedbackCreateSubmit(Request $req) {
        // return "Страница обработки отправленных данных из формы";
        //dd($req);
        $valid = [
            'textname' => 'Required|min:2|max:20',
            'feedbackText' => 'Required|min:5|max:100'
        ];
        $req-> validate($valid);
        // return $req->input('textname');
    }
*/

    public function feedbackCreateSubmit(feedbackrequest $req) { 
        $feedback = new feedback();
        $feedback->name = $req->input('textname');
        $feedback->feedback = $req->input('feedbackText');
        $feedback->id_user = Auth::id();

        $feedback->save();

        return redirect()->route('feedback');
    }
}
