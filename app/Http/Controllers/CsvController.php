<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $users = [];

        if (($open = fopen(public_path() . "/users.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $users[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        print_r($users);
    }
}