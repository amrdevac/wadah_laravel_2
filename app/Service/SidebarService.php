<?php

namespace App\Service;

use App\Models\Sidebar;

class SidebarService
{
    public function EloquentDataAktif()
    {
        return Sidebar::where("status_sidebar", true)->orderBy('urutan', "ASC");
    }

    public function EloquentDataNonaktif()
    {
        return Sidebar::where("status_sidebar", false)->orderBy('urutan', "ASC");
    }

    public function mendapatkanSeluruhDataSidebar()
    {
        return $this->EloquentDataAktif()->get();
    }

    public function mendapatkanDataSeluruhSidebarPaginate($paginate)
    {
        return $this->EloquentDataAktif()->paginate($paginate);
    }

    public function mencariDataSidebarBerdasarkanNama($nama_kolom, $request, $paginate)
    {
        return $this->EloquentDataAktif()->where($nama_kolom, $request->nama)->paginate($paginate);
    }

    public function menyimpanDataSidebar($request)
    {
        $model = new Sidebar();
        return $this->mengelolaDataSidebar($model, $request);
    }

    public function memperbaruiDataSidebar($id, $request)
    {
        $model = Sidebar::findOrFail($id);
        return $this->mengelolaDataSidebar($model, $request);
    }

    private function mengelolaDataSidebar($model, $request)
    {
        if ($request->nama_sidebar) {
            $model->nama_sidebar = $request->nama_sidebar;
        }
        if ($request->status_sidebar) {
            $model->status_sidebar = $request->status_sidebar;
        }
        if ($request->urutan_sidebar) {
            $model->urutan_sidebar = $request->urutan_sidebar;
        }
        if ($request->icon_sidebar) {
            $model->icon_sidebar = $request->icon_sidebar;
        }

        $model->save();

        return $model;
    }

    public function menghapusDataSidebar($id)
    {
        Sidebar::findOrFike($id)->delete();
        return 
    }
}
