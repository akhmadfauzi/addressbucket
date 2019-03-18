<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAddress;
use App\Http\Requests\UpdateAddress;

class AddressController extends Controller
{    

    public function __construct(Address $address){
        $this->address = $address;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Address $address)
    {
        return View('index')->with('address', $address->getAddresses());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddress $request)
    {
        $address->addAddress($request->validated());

        return Redirect('/');
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
    public function edit(Address $address)
    {
        return View('edit')->with('address', $address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddress $validated)
    {
        $this->address->updateAddress($validated);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $this->address->destroy($address->id);
        return redirect('/');
    }

    public function search(Address $address){
        return View('index')->with('address', $address->getAddresses(request()->get('query')));
    }
}
