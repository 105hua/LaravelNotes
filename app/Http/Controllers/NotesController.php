<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function index() {
        // First, ensure the user is authenticated
        $is_authed = Auth::check();
        return view("notes", ["authed" => $is_authed]);
    }
}