<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use PhpOption\None;
use Validator;

class ApiController extends Controller
{
    public function getData($id = null){
        return $id?Customer::findorfail($id):Customer::all();
    }

    public function addData(Request $req){
        $customer = new Customer;
        $customer->avatar = $req->avatar;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $customer->address = $req->address;
        $result = $customer->save();
        if($result){
            return ["Result" => "Data has been saved!!"];
        }else{
            return ["Result" => "Data updation failed "];
        }  
    }

    public function updateData(Request $req){
        $customer = Customer::find($req->id);
        $customer->avatar = $req->avatar;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $customer->address = $req->address;
        $result = $customer->save();
        if($result){
            return ["result"=>"Data Has been updated"];
        }else{
            return ["result"=>"Data updation unsuccessful"];
        }
    }

    public function searchData($name){
        $result =  Customer::where("name", "like" , '%'.$name.'%')
            -> orwhere("email", "like", '%' . $name . '%')
            ->orwhere("address", "like", '%' . $name . '%')
            ->get();

        if($result->count()){
            return $result;
        }else{
            return ["result" => "No Data Found"];
        }
    }

    public function deleteData($id){
        $customer = Customer::find($id);
        $result = $customer->delete();
        if($result){
            return ["result"=>"Result has been deleted"];
        }else{
            return ["result" => "Result deletion unsuccessful"];
        }
    }

    public function testData(Request $req){
        $rules=array(
            "name"=>"required|min:2|max:10"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }else{
            $customer = new Customer;
            $customer->avatar = $req->avatar;
            $customer->name = $req->name;
            $customer->email = $req->email;
            $customer->password = $req->password;
            $customer->address = $req->address;
            $result = $customer->save();
            if($result){
                return ["result" => "Saved Successful"];
            }else{
                return ["result" => "Save Operation Unsuccessful"];
            }
            
        }
    }
}
