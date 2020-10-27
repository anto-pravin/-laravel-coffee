<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use App\Models\Delivery;
use App\Models\Customer;

class CoffeeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    //Coffee List
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

    public function home(){
        return view('home');
    }


    //Deivered
    public function delivered()
    {
        $deliveries = Delivery::all();
        return view('coffees.delivered', ['coffees' => $deliveries]);
    }

    public function viewDel($id){

        $coffee = Delivery::findorfail($id);
        return view('coffees.showDelivered',['coffee'=>$coffee]);
    }

    public function store(){


        $coffee = new Coffee;
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

    // Update Delete

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


    //Customers Data


    public function users()
    {
        $users = Customer::all();
        return view('users.users', ['users' => $users]);
    }

    public function uploadForm(){
        return view('users.uploadForm');
    }

    public function customerData(Request $request){
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->up2;
        $customer->address = $request->address;
        $customer->avatar = $request->image->getClientOriginalName();

        $customer->save();
        return redirect('/');
    }

}
