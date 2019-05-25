<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'cnpj_cpf',
        'phone',
        'birthdate',
        'address',
        'city',
        'state'
    ];

    public function debts()
    {
        return $this->hasMany('App\Debt');
    }
}