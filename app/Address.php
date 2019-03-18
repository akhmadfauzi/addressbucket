<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    protected $guarded = [];

    public function addAddress($validated){
        $this->create($validated);
    }

    public function updateAddress($validated){
        $update = $this->where('id',$validated->id)->update([
            "name" => $validated->name,
            "phone" => $validated->phone,
            "zip" => $validated->zip,
            "address" => $validated->address
        ]);
        return $update ? true : false;
    }

    public function getAddresses($query = ""){
        if($query !== ""){
            return $this->where('name','like','%' . $query . '%')->paginate(10);
        }
        return $this->paginate(10);
    }


}
