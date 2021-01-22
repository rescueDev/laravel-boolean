<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function holaTodos()
    {
        return view('hola');
    }
    public function holaTu()
    {
        $nombre = 'Juan';
        return view('holaTu', compact('nombre'));
    }
    public function holaTu2()
    {
        $nombre = 'Marcelo';
        return view('holaTu', compact('nombre'));
    }
}
