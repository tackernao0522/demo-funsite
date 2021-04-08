<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Interest;
use App\Models\Payment;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUserInfo()
    {
        $user = Auth::user();
        $defaultCard = Payment::getDefaultcard($user);

        return view('user.index', compact('user', 'defaultCard'));
    }
}
