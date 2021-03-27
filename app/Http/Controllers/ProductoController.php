<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $producto=Producto::all();
        //$producto=Producto::where('state','1')->paginate(1);
        //return view('admin/index')->with('producto', $producto);
        return view('admin/index');
 }
}
