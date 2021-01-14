<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $ar = [
            'name' => 'Rey Jhon',
            'age'  => 24
        ];

        return json_encode($ar);
    }
    //
}
