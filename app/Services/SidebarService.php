<?php

namespace App\Services;

use App\Actions\UrutanAction;
use App\Models\Sidebar;

class SidebarService
{

    private UrutanAction $urutanAction;

    public function __construct(UrutanAction $urutanAction)
    {
        $this->urutanAction = $urutanAction;
    }

    private function EloquentDataAktif()
    {
        return Sidebar::where("status_sidebar", true)->orderBy('urutan_sidebar', "ASC");
    }

    private function EloquentDataNonaktif()
    {
        return Sidebar::where("status_sidebar", false)->orderBy('urutan_sidebar', "ASC");
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

    public function menampilkanSatuDataSidebar($id)
    {
        return Sidebar::findOrFail($id);
    }

    public function menyimpanDataSidebar($request)
    {
        $model = new Sidebar();
        $model->urutan_sidebar = $this->urutanAction->getUrutanSidebar('sidebars', "urutan_sidebar");
        $this->mengelolaDataSidebar($model, $request);
    }

    public function memperbaruiDataSidebar($request, $id)
    {
        $model = Sidebar::findOrFail($id);
        $this->mengelolaDataSidebar($model, $request);
    }

    public function resufleDataUrutan($request, $id)
    {
        $model = Sidebar::findOrFail($id);
        $old = $model->urutan_sidebar;
        $new =  $request->urutan_sidebar;
        $this->urutanAction->resufleUrutanIfExist("sidebars", "urutan_sidebar", $old, $new);
        $model->urutan_sidebar = $request->urutan_sidebar;
        $model->save();
    }

    private function mengelolaDataSidebar($model, $request)
    {
        if ($request->nama_sidebar) {
            $model->nama_sidebar = $request->nama_sidebar;
        }
        if ($request->status_sidebar) {
            $model->status_sidebar = $request->status_sidebar;
        }
        if ($request->icon_sidebar) {
            $model->icon_sidebar = $request->icon_sidebar;
        }


        $model->save();
    }

    public function menghapusDataSidebar($id)
    {
        $data = Sidebar::findOrFail($id)->delete();
        return $data;
    }
}
