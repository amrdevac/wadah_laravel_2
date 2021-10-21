<?php

namespace App\Action;

use Illuminate\Support\Facades\Route;

class getAllRoutes
{

    public function set_default_route_name_list()
    {
        $data = Route::getRoutes('attributes');
        $rename_label = [
            'index' => 'Daftar',
            'create' => 'Mengelola',
            'store' => 'Menyimpan',
            'show' => 'Detail',
            'update' => 'Update',
            'destroy' => 'Menghapus',
        ];
        foreach ($data as  $value) {
            if (explode('/', $value->uri)[0] == 'api') {
                if (empty($value->action['as'])) {
                    dd($value);
                }
                if (count(explode('.', $value->action['as'])) > 1) {
                    $cek_duplikasi_data_api = DB::table('permission')
                        ->where('route_url', $value->action['as'])
                        ->first();

                    $data_explode = explode('.', $value->action['as']);
                    if (!$cek_duplikasi_data_api) {
                        $data_nama = $rename_label[$data_explode[1]] ?? $data_explode[1];
                        DB::table('permission')->insert([
                            'nama_route' => $data_nama  . ' ' . $data_explode[0],
                            'route_url' => $value->action['as'],
                            'nama_grup' => $data_explode[0],
                        ]);
                    }
                }
            }
        }
    }
}
