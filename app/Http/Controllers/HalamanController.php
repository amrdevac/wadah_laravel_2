<?php

namespace App\Http\Controllers;

use App\Actions\getRolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HalamanController extends Controller
{

    private getRolePermission $getRolePermission;

    public function __construct(getRolePermission $getRolePermission)
    {
        $this->getRolePermission = $getRolePermission;
    }

    public function __invoke()
    {
        $in_permission = [];
        $in_sidebars = [];
        if (Auth::check()) {
            $permission = $this->getRolePermission->mendapatkanAksesAplikasi();
            $in_sidebars = $permission[0];
            $in_permission = $permission[1];
        }

        return view("layouts.app", compact("in_permission", "in_sidebars"));
    }
}
