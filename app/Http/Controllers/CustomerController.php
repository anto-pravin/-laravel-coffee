<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $customer = new Customer;
        $customer->avatar = $req->avatar;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $customer->address = $req->address;
        $result = $customer->save();
        if ($result) {
            return ["Result" => "Data has been saved!!"];
        } else {
            return ["Result" => "Data updation failed "];
        }  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $customer = Customer::find($req->id);
        $customer->avatar = $req->avatar;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $customer->address = $req->address;
        $result = $customer->save();
        if ($result) {
            return ["result" => "Data Has been updated"];
        } else {
            return ["result" => "Data updation unsuccessful"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $result = $customer->delete();
        if ($result) {
            return ["result" => "Result has been deleted"];
        } else {
            return ["result" => "Result deletion unsuccessful"];
        }c
    }
}
