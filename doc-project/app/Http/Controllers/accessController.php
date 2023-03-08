<?php

namespace App\Http\Controllers;


use App\Models\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;

class accessController extends Controller
{
    public function accessGate()
    {
        $reply = "";
        if (Gate::allows('update-post')) 
        {
            $reply .= "update-post пройдена! <br>";
        }
        else 
        {
            $reply .= "update-post Не пройдена! <br>";
        }

        if (Gate::denies('delete-post')) 
        {
            $reply .= "delete-post пройдена! <br>";
        }
        else 
        {
            $reply .= "delete-post Не пройдена! <br>";
        }

        return $reply;
    }

    public function accessPolicies(Request $request)
    {
        if ($request->user()->can('viewAny', feedback::class)) 
        {
            return "Проверка через политики пройдена <br>";
        }
        else 
        {
            return "Проверка через политики не пройдена <br>";
        }
    }

    public function accessMiddleware()
    {
        return "Доступ к странице предоставлен";
    }

    public function idUserAuth() {
        return Auth::id();
    }
}
