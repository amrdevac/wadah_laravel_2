<?php

namespace App\Services;

use App\Actions\UrutanAction;
use App\Models\SubSidebar;
use Illuminate\Support\Facades\Auth;

class SubsidebarService
{
    private $secret = 'amr_apps_basic';

    private $selected_data = [
        "fk_kd_sidebar",
        "nama_sub_sidebar",
        "status_sub_sidebar",
        "urutan_sub_sidebar",
    ];

    private UrutanAction $urutanAction;

    public function __construct(UrutanAction  $urutanAction)
    {
        $this->urutanAction = $urutanAction;
    }

    private function EloquentDataAktif()
    {
        return SubSidebar::orderBy('urutan_sub_sidebar', 'DESC');
    }

    private function EloquentData()
    {
        return SubSidebar::orderBy('urutan_sub_sidebar', 'DESC');
    }

    private function EloquentDataNonaktif()
    {
        return SubSidebar::orderBy('urutan_sub_sidebar', 'DESC');
    }

    public function mendapatkanSeluruhData()
    {
        return $this->EloquentDataAktif()->get();
    }

    public function mendapatkanSeluruhDataDenganRelasiSubSidebar()
    {
        return $this->EloquentData()->get();
    }

    public function mendapatkanSeluruhDataPaginate($paginate)
    {
        return $this->EloquentDataAktif()->paginate($paginate);
    }

    public function mencariDataBerdasarkanKostum($nama_kolom, $request, $paginate)
    {
        return $this->EloquentDataAktif()->where($nama_kolom, $request->nama)->paginate($paginate);
    }

    public function mendapatkanSatuData($id)
    {
        return SubSidebar::findOrFail($id);
    }

    public function menyimpanData($request)
    {
        $model = new SubSidebar();
        $model->urutan_sub_sidebar = $this->urutanAction->getUrutanData("sub_sidebars", "urutan_sub_sidebar");
        return $this->mengelolaData($model, $request);
    }

    public function memperbaruiData($request, $id)
    {
        $model = SubSidebar::findOrFail($id);
        $this->mengelolaData($model, $request);
    }

    private function mengelolaData($model, $request)
    {

        if ($request->fk_kd_sidebar) {
            $model->fk_kd_sidebar = $request->fk_kd_sidebar;
        }
        if ($request->data_permission) {
            $url = $request->data_permission["route_url"];
            $model->fk_nama_permission = $url;
        }
        if ($request->nama_sub_sidebar) {
            $model->nama_sub_sidebar = $request->nama_sub_sidebar;
        }
        if ($request->has("status_sub_sidebar")) {
            $model->status_sub_sidebar = $request->status_sub_sidebar;
        }

        if ($request->urutan_only) {
            $old = $model->urutan_sub_sidebar;
            $new =  $request->urutan_subsidebar;
            $this->urutanAction->resufleUrutanIfExist("sub_sidebars", "urutan_sub_sidebar", $old, $new);
            $model->urutan_sub_sidebar = $request->urutan_subsidebar;
        }

        $model->save();
        return $model;
    }

    public function menghapusData($id)
    {
        $data = SubSidebar::findOrFail($id)->delete();
        return $data;
    }
}
