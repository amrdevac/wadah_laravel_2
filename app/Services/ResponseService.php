<?php


namespace App\Services;

class ResponseService
{
    public function response($status  = 200, $pesan, $data)
    {
        return [
            "status" => $status,
            "message" => $pesan,
            "data" => $data,
        ];
    }
    public function menyimpanData($data)
    {
        return [
            "status" => 201,
            "message" => "Berhasil Menyimpan Data",
            "data" => $data,
        ];
    }

    public function menghapusData($id)
    {
        return [
            "status" => 200,
            "message" => "Berhasil Menghapus Data",
            "data" => $id,
        ];
    }
}
