<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{

    protected $with = ['customer'];
    
    protected $fillable = [
        'id',
        'due',
        'description',
        'value',
        'done',
        'customer_id'
    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}