<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articleUserModel;

class UsersController extends Controller
{
    public function index() {
        $data = articleUserModel::all();
        // dd($data);
        return view('users.users', ['data' => $data]);
    }
}
