<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\ResponseService;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    private RoleService $roleService;
    private ResponseService $response;

    public function __construct(RoleService $roleService, ResponseService $response)
    {
        $this->roleService = $roleService;
        $this->response = $response;
    }

    public function index()
    {

        $in_role = $this->roleService->mendapatkanSeluruhData();
        return compact("in_role");
    }

    public function show($id)
    {
        $in_role = $this->roleService->mendapatkanSeluruhData();
        return compact("in_role");
    }

    public function store(Request $request)
    {
        return $this->response->menyimpanData($this->roleService->menyimpanData($request));
    }

    public function update(Request $request, $id)
    {
        $this->roleService->memperbaruiDatamendapatkanSeluruhData($request, $id);
        return $this->response->updateData($request->all());
    }

    public function destroy($id)
    {
        $this->roleService->menghapusDatamendapatkanSeluruhData($id);
        return $this->response->menghapusData($id);
    }
}
