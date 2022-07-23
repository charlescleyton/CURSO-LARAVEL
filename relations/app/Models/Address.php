<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

public $table = 'addresses';
protected $fillable = [
    'address',    
];

//populando o usuário na relação belongTo
public function user(){
    return $this->belongsTo(User::class);
}

//ocultar dados
protected $hidden = [
    'user_id'
];

}
