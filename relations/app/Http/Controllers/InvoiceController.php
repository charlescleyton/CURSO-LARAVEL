<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $r)
    {
        $invoices = Invoice::all();
        return $invoices;
    }

    public function findOne(Request $r)
    {
        $invoice = Invoice::find($r->id);
        //Tratando o return
        if ($invoice) {
            //retornando as informações de invoice com user vinculado
            $invoice['user']=$invoice->user;
            //retornando as informações de invoice com address vinculado
            $invoice['address']=$invoice->address;
            
            return $invoice;
            }

            return "Não há dados";
    }
       

    public function new_invoice(Request $r)
    {

        $data = $r->only([
            'description',
            'value',
            'address_id',
            'user_id'
        ]);

        $invoice = Invoice::create($data);
        
        return $invoice;
    }

}
