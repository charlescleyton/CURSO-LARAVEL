<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    
    
    protected $casts = [
            'email_verified_at' => 'datetime',
        ];
   
        //ocultar dados
        protected $hidden = [
            'password',
            'remember_token',
            'email_verified_at',
            // 'address_id'
        ];

            //função que exibe address na relação hasOne
                // public function address(){
                //     return $this->hasOne(Address::class, 'id', 'address_id');
                // }

                
        //função que exibe address na relação hasMany
        public function addresses (){
            return $this->hasMany(Address::class);
        }
    }
