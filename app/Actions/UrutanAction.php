<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class UrutanAction
{
    public function resufleUrutanIfExist($table, $nama_kolom, $old, $new)
    {
        DB::table($table)->where($nama_kolom, $new)->update(
            ["urutan_sidebar" => $old]
        );
        return $new;
    }

    public function getUrutanData($nama_table, $nama_kolom)
    {
        $urutan = DB::table($nama_table)->max($nama_kolom);
        return  $urutan + 1;
    }
}
