<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use App\Models\Delivery;

class CoffeeController extends Controller
{
    public function index(){
        $coffees = Coffee::all();
        return view('coffees.index',['coffees'=>$coffees]);
    }

    public function delivered(){
        $deliveries = Delivery::all();
        return view('coffees.delivered',['coffees'=>$deliveries]);
    }

    public function show($id){

        $coffee = Coffee::findorfail($id);
        return view('coffees.show',['coffee'=>$coffee]);
    }

    public function create(){
        return view('coffees.create');
    }

    public function home(){
        return view('home');
    }

    public function viewDel($id){

        $coffee = Delivery::findorfail($id);
        return view('coffees.showDelivered',['coffee'=>$coffee]);
    }

    public function store(){


        $coffee = new Coffee;
        error_log(request('name'));
        error_log(request('branch'));
        error_log(request('type'));
        error_log(request('sugar'));
        error_log(request('sugarquantity'));
        error_log(request('addons'));
        error_log(request('other'));
        error_log(request('quantity'));
        error_log(request('address'));
        $coffee->name = request('name');
        $coffee->branch = request('branch');
        $coffee->type = request('type');
        $coffee->sugar = request('sugar');
        $coffee->sugarquantity = request('sugarquantity');
        $coffee->addons = request('addons');
        $coffee->other = request('other');
        $coffee->quantity = request('quantity');
        $coffee->address = request('address');
        
        $coffee->save();

        return view('confirmations.ordered');
    }

    public function update(){
        $coffees = Coffee::all();
        return view('coffees.update',['coffees'=>$coffees]);
    }

    public function destroy($id){

        $delivery = new Delivery;
        $coffee = Coffee::findorfail($id);
        $delivery->name = $coffee->name;
        $delivery->branch = $coffee->branch;
        $delivery->type = $coffee->type;
        $delivery->sugar = $coffee->sugar;
        $delivery->sugarquantity = $coffee->sugarquantity;
        $delivery->addons = $coffee->addons;
        $delivery->other = $coffee->other;
        $delivery->quantity = $coffee->quantity;
        $delivery->address = $coffee->address;

        $delivery->save();

        $coffee->delete();

        return view('confirmations.delivered');
    }

    public function updateForm($id){

        $coffee = Coffee::findorfail($id);

        return view('coffees.updateForm',['coffee'=>$coffee]);

    }

    public function updateData($id){

        $coffee = Coffee::find($id);
        if($coffee){
            $coffee->name = request('name');
            $coffee->branch = request('branch');
            $coffee->type = request('type');
            $coffee->sugar = request('sugar');
            $coffee->sugarquantity = request('sugarquantity');
            $coffee->addons = request('addons');
            $coffee->other = request('other');
            $coffee->quantity = request('quantity');
            $coffee->address = request('address');

            $coffee->save();
        }

        return view('confirmations.updated');
    }

    public function delete($id){
        $coffee = Coffee::findorfail($id);
        $coffee->delete();
        return view('confirmations.deleted');
    }
}
