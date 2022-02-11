<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FlashController extends Controller
{
    public function success()
    {
        Session::flush();
        Session::flash('success', 'This is a success message');
        return view("home");
    }

    public function error()
    {
        Session::flush();
        Session::flash('error', 'This is an error message');
        return view("home");
    }

    public function info()
    {
        Session::flush();
        Session::flash('info', 'This is an info message');
        return view("home");
    }

    public function warning()
    {
        Session::flush();
        Session::flash('warning', 'This is a warning message');
        return view("home");
    }
}
