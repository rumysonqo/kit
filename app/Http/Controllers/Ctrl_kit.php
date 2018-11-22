<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ctrl_kit extends Controller
{
    //
    function index()
    {
        return view('view_busqueda');
    }


    function buscar_texto($txt)
    {
        $bus=DB::table('kit')
        ->join('meta','kit.cod_reg','=','meta.cod_reg')
        ->where('kit.insumo','like','%'.$txt.'%')
        ->select('kit.insumo', 'meta.cod_meta')
        ->get();
        return $bus;
    }
}
