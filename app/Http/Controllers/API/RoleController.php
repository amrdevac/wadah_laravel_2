<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $in_data = ["123", 'asdf', "sadfasdf"];
        return compact("in_data");
    }
}
