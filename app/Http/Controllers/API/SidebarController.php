<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Service\ResponseService;
use App\Service\SidebarService;
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
        $in_sidebar = $this->sidebarService->mendapatkanSeluruhDataSidebar();
        return compact("in_sidebar");
    }

    public function show($id)
    {
        $in_sidebar = $this->sidebarService->mendapatkanSeluruhDataSidebar();
        return compact("in_sidebar");
    }

    public function store(Request $request)
    {
        $this->sidebarService->menyimpanDataSidebar($request);
        return $this->response->menyimpanData($request->all());
    }

    public function update(Request $request, $id)
    {
        $this->sidebarService->memperbaruiDataSidebar($request, $id);
        return $this->response->menyimpanData($request->all());
    }

    public function delete($id)
    {
        $this->sidebarService->menghapusDataSidebar($id);
        return $this->response->menghapusData($id);
    }
}
