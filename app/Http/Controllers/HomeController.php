<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;

class HomeController extends Controller
{
    //

    public function index(Request $request){
        $user = "Victor Lopes";
        $list = Carro::all();
        return view('home', ['user'=>$user, 'carros'=>$list]);
    }
    public function newCarro(Request $request){
        $name = $request->post('name');
        $model = $request->post('model');
        $year = $request->post('year');

        $carro = Carro::create([
            'name'=>$name,
            'model'=>$model,
            'year'=>$year
        ]);
        return redirect()->back();
    }
    public function delete(Request $request, $id){
        $carro = Carro::find($id);
        $carro->delete();
        return redirect()->back();
    }
    public function getJson(Request $request){
        return Carro::all();
    }
    public function putJson(Request $request){
        $carro = Carro::create($request->all());
        return $carro;
    }
}
