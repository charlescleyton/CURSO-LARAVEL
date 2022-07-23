<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $r)
    {
        $address = Address::all();
        return $address;
    }


    public function new_address(Request $r)
    {

        $rawData = $r->only(['address']);

        $address = Address::create($rawData);
        $address->save();
        return $address;
    }

   

    public function findOne(Request $r)
    {
        $address = Address::find($r->id);
        //Tratamento dos dados
        if ($address) {
            //exibindo user 
          $address['user']=$address->user;  
        return $address;
        }
        return 'Não há dados a ser exibido';
        
    }
}
