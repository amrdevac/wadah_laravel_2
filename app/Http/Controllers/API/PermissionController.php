<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\PermissionService;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private PermissionService $permissionService;

    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }

    public function index()
    {
        $in_permission = $this->permissionService->mendapatkanSeluruhData();
        return compact("in_permission");
    }

    public function search(Request $request)
    {
        $in_permission = $this->permissionService->mencariDataBerdasarkanKostum("nama_route", $request->cari);
        return compact("in_permission");
    }
}
