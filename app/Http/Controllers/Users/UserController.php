<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');

    }// end of create

    public function store()
    {
        $formData = request()->all();
        // dd($formData);
        User::create($formData);
        //show success message
        return to_route('users.create')->with('message', 'User added successfully');
        
    }// end of store
    
}// end of class
