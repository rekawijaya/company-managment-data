<?php

namespace App\Models;



class dashboard
{
    private static $dashboard_data = [
        [
            "name" => "reka wijaya",
            "email" => "wijaya12@mail.com",
            "nik" => "65342671",
            "division" => "staf It",
            "contact" => "089651660708",
            "photo" => "reka.jpg"

        ],
        [
            "name" => "ivankov",
            "email" => "ivank17@mail.com",
            "nik" => "6578645",
            "division" => "digital marketing",
            "contact" => "089651660708",
            "photo" => "company1.jpg"
        ],
        [
            "name" => "ivankov",
            "email" => "ivank17@mail.com",
            "nik" => "6578645",
            "division" => "digital marketing",
            "contact" => "089651660708",
            "photo" => "reka.jpg"
        ],
        [
            "name" => "ivankov",
            "email" => "ivank17@mail.com",
            "nik" => "6578645",
            "division" => "digital marketing",
            "contact" => "089651660708",
            "photo" => "reka.jpg"
        ]
    ];

    public static function all()
    {
        return self::$dashboard_data;
    }
}
