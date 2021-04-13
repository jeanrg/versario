<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Versiculo;
use DataTables;


class DatatableController extends Controller
{
    public function versiculo()
    {
        $versiculos = Versiculo::select('id','title','descripcion', 'start')->get();


        // return DataTables::of($versiculos)->toJson();

    }
}
