<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $arr = [
            '<p>1 Новости Капчо</p>',
            '<p>2 Новости Капчо</p>',
            '<p>3 Новости Капчо</p>',
            '<p>4 Новости Капчо</p>',
            '<p>5 Новости Капчо</p>',
            '<p>6 Новости Капчо</p>',
            '<p>7 Новости Капчо</p>',
            '<p>8 Новости Капчо</p>',
            '<p>9 Новости Капчо</p>',
            '<p>10 Новости Капчо</p>',
            '<p>11 Новости Капчо</p>',
        ];

        return view('layout', compact('arr'));
    }
}
