<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Resources\Customer as CustomerResource;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Customers
        $customers = Customer::paginate(15);
        
        // Return collection of Customers as resource
        return CustomerResource::collection($customers);  // docs say if returning a list or resources need to use a collection
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $customer = $request->isMethod('put') ? Customer::findOrFail
        ($request->customer_id) : new Customer;

        $customer->id = $request->input('customer_id');
        $customer->Name = $request->input('Name');
        $customer->Address = $request->input('Address');
        $customer->Phone_Number = $request->input('Phone_Number');
        $customer->Email_Address = $request->input('Email_Address');
        $customer->Start_Date = $request->input('Start_Date');
        $customer->Contract_Start_Date = $request->input('Contract_Start_Date');
        $customer->Contract_Length = $request->input('Contract_Length');

        if($customer->save()) {
            return new CustomerResource($customer);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get single customer
        $customer = Customer::findOrFail($id);

        // Return single customer as resource
        return new CustomerResource($customer);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Get single customer
         $customer = Customer::findOrFail($id);

         if($customer->delete()){
            return new CustomerResource($customer);
         }
    }
}
