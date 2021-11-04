<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Model\Aplikasi;
use App\Services\AplikasiService;
use App\Services\responseService;
use App\Http\Controllers\Controller;

class AplikasiController extends Controller
{

    private AplikasiService $aplikasisService;
    private ResponseService $responseService;

    public function __construct(
        AplikasiService $aplikasisService,
        ResponseService $responseService
    ) {
        $this->aplikasisService = $aplikasisService;
        $this->responseService = $responseService;
    }

    public function index()
    {
        $in_aplikasi = $this->aplikasisService->mendapatkanSeluruhDataPaginate($this->paginate);
        return compact("in_aplikasi");
    }

    public function create()
    {
        # code...
    }

    public function edit($id)
    {
        $in_aplikasi = $this->aplikasisService->mendapatkanSatuData($id);
        return compact("in_aplikasi");
    }

    public function store(Request $request)
    {

        return $this->responseService->menyimpanData($this->aplikasisService->menyimpanData($request));
    }

    public function show($id)
    {
        $in_aplikasi = $this->aplikasisService->mendapatkanSatuData($id);
        return compact("in_aplikasi");
    }

    public function update(Request $request, $id)
    {
        return $this->responseService->updateData($this->aplikasisService->memperbaruiData($request, $id));
    }

    public function destroy($id)
    {
        $this->aplikasisService->menghapusData($id);
        return $this->responseService->menghapusData($id);
    }
}
