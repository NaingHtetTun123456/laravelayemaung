<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller
{
    public function registerView(){
        return view('customer.register');
 
    }

    public function register(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=> 'required| unique:customers,email',
            'password'=> 'required | confirmed |min:6',
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();

        Auth::guard('customer')->loginUsingId('customer->id');
        return redirect('/');

    }
}

