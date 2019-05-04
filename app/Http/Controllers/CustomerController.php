<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function create_post(Request $request)
    {
        $customer = new Customer;

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->occupation = $request['occupation'];
        $customer->save();

        return view('create_customer');
    }

    public function get_data()
    {
        $all_customer = Customer::all();

        return view('view_customer', ['all_customer'=>$all_customer]);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);

        $customer->delete();

        return "berhasil delete";
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        
        return view('edit_customer', ['customer'=>$customer] );
    }

    public function save_edit(Request $request)
    {
        $customer = Customer::find($request['id']);

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->occupation = $request['occupation'];
        $customer->save();

        return view('create_customer');
    }
}
