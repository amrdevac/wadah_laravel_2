<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function __invoke()
    {
        $in_permission = [];
        return view("layouts.app", compact("in_permission"));
    }
}
