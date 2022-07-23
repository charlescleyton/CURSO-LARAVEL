<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = [
        'description',
        'value',
        'address_id',
        'user_id'
    ];

    //ocultar dados
    protected $hidden = [
        'address_id',
        'user_id'
    ];

    public function address(){
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function user(){
        return $this->hasOne(Address::class, 'id', 'user_id');
    }
}
