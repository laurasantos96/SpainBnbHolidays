<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;

class CasaController extends Controller
{
    //

    public function index () {
        $casas = Casa::orderByDesc('id')->get();
        return view('casaindex', compact('casas'));
        ;
    }
    public function show() {}
    public function create () {}
    public function store () {}
    public function edit () {}
    public function update () {}
    public function destroy () {}

}
