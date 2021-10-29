<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\ResponseService;
use App\Services\SidebarService;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    private SidebarService $sidebarService;
    private ResponseService $response;

    public function __construct(SidebarService $sidebarService, ResponseService $response)
    {
        $this->sidebarService = $sidebarService;
        $this->response = $response;
    }

    public function index()
    {
        $in_sidebar = $this->sidebarService->mendapatkanSeluruhDataPaginate($this->paginate);
        return compact("in_sidebar");
    }

    public function show($id)
    {
        $in_sidebar = $this->sidebarService->mendapatkanSatuData($id);
        return compact("in_sidebar");
    }

    public function store(Request $request)
    {
        return $this->response->menyimpanData($this->sidebarService->menyimpanData($request));
    }

    public function update(Request $request, $id)
    {
        $this->sidebarService->memperbaruiData($request, $id);
        return $this->response->updateData($request->all());
    }

    public function destroy($id)
    {
        $this->sidebarService->menghapusData($id);
        return $this->response->menghapusData($id);
    }
}
