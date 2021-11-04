<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\Aplikasi;

class AplikasiService extends Controller
{
    private function EloquentData()
    {
        return Aplikasi::with('getCreator')->orderBy('created_at', "ASC");
    }

    public function mendapatkanSeluruhData()
    {
        return $this->EloquentData()->get();
    }

    public function mendapatkanSeluruhDataPaginate($paginate)
    {
        return $this->EloquentData()->paginate($paginate);
    }

    public function mencariDataBerdasarkanKostum($nama_kolom, $request, $paginate)
    {
        return $this->EloquentData()->where($nama_kolom, $request->nama)->paginate($paginate);
    }

    public function mendapatkanSatuData($id)
    {
        return Aplikasi::findOrFail($id);
    }

    public function menyimpanData($request)
    {
        $model = new Aplikasi();
        $model->created_by =  $this->authGetKdUser();
        return $this->mengelolaData($model, $request);
    }

    public function memperbaruiData($request, $id)
    {
        $model = Aplikasi::findOrFail($id);
        return $this->mengelolaData($model, $request);
    }

    private  function mengelolaData($model, $request)
    {
        if ($request->nama_aplikasi) {
            $model->nama_aplikasi = $request->nama_aplikasi;
        }
        if ($request->img_aplikasi) {
            $model->img_aplikasi = $request->img_aplikasi;
        }
        if ($request->url_aplikasi) {
            $model->url_aplikasi = $request->url_aplikasi;
        }
        
        $model->save();
        return $model;
    }

    public function menghapusData($id)
    {
        $data = Aplikasi::findOrFail($id)->delete();
        return $data;
    }
}
