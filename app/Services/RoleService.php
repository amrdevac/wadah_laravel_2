<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleService extends Controller
{
    private function EloquentData()
    {
        return Role::orderBy('created_at', "ASC");
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

    public function menampilkanSatuData($id)
    {
        return $this->EloquentData()->first($id);
    }

    public function menyimpanData($request)
    {
        $model = new Role();
        $model->created_by =  1; #$this->authGetKdUser();
        return $this->mengelolaData($model, $request);
    }

    public function memperbaruiData($request, $id)
    {
        $model = Role::findOrFail($id);
        $this->mengelolaData($model, $request);
    }

    private  function mengelolaData($model, $request)
    {
        if ($request->nama_role) {
            $model->nama_role = $request->nama_role;
        }

        $model->save();
        return $model;
    }

    public function menghapusData($id)
    {
        $data = Role::findOrFail($id)->delete();
        return $data;
    }
}
