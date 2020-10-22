<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    public function index(){
        $coffees = Coffee::all();
        return view('coffees.index',['coffees'=>$coffees]);
    }

    public function show($id){

        $coffee = Coffee::findorfail($id);
        return view('coffees.show',['coffee'=>$coffee]);
    }

    public function create(){
        return view('coffees.create');
    }

    public function store(){


        $coffee = new Coffee;

        $coffee->name = request('name');
        $coffee->type = request('type');
        $coffee->sugar = request('sugar');
        $coffee->sugarquantity = request('sugarquantity');
        $coffee->addons = request('addons');
        $coffee->other = request('other');
        $coffee->quantity = request('quantity');
        $coffee->address = request('address');
        
        $coffee->save();

        return redirect('/');
    }

    public function destroy($id){
        $coffee = Coffee::findorfail($id);
        $coffee->delete();

        return redirect('/');
    }
}
