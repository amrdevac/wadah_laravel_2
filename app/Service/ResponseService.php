<?php


namespace App\Service;

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
}
