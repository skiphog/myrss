<?php

namespace App\Http\Controllers;

use App\Components\RssComponent;

class RssController extends Controller
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

    public function index($id, RssComponent $component)
    {
        return response($component->getRss($id))->header('Content-Type', 'application/xml;charset=windows-1251');
    }
}
