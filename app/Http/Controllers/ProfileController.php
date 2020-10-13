<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.profiles');
    }

    public function show() {
        $profile = Auth::user()->profile;

        return view('user.profile', [
            'profile' => $profile
        ]);
    }
}
